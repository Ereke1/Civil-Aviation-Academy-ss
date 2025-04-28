<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmRegistration;
use App\Mail\RegistrationConfirmedDateMail;
use App\Models\RegistrationForTesting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Config;

class RegForTestController extends Controller
{

    public function index()
    {
        $tree = Navigation::tree();

        $checkDatesFromDB = RegistrationForTesting::select('test_date', DB::raw('count(*) as total'))
            ->groupBy('test_date')
            ->having('total', '>', 50)
            ->pluck('test_date')
            ->toArray();


        $availableDates = [
            "2025-07-06",
            "2025-07-07",
            "2025-07-08",
            "2025-07-09",
            "2025-07-10",
            "2025-07-11",
            "2025-07-12"
        ];

        $availableDates = array_diff($availableDates, $checkDatesFromDB);

        $availableDates = array_values($availableDates);

        return view('front.testRegistration.regForTest', compact('tree', 'availableDates'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'test_date' => 'required|date',
        ]);

        // Проверка: есть ли уже запись с таким email
        $existing = RegistrationForTesting::where('email', $validated['email'])->where('is_deleted', 0)->first();

        if ($existing) {
            return redirect()->back()->with('error', 'Данная почта уже зарегистрирована! Выберите "Запись на другую дату" если хотите изменить дату записи');
        }

        return $this->createNewRegistration($validated);
    }

    private function createNewRegistration(array $validated)
    {
        $token = Str::random(64);

        $registration = RegistrationForTesting::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'patronymic' => request('patronymic'),
            'phone' => request('phone'),
            'email' => $validated['email'],
            'test_date' => $validated['test_date'],
            'confirmation_token' => $token,
            'is_confirmed' => false,
        ]);

        // Отправка email пользователю
        Mail::to($validated['email'])->send(new ConfirmRegistration($registration));

        return redirect()->back()->with('success', 'Письмо с подтверждением отправлено на почту!');
    }

    public function changeDate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'test_date' => 'required|date',
        ]);

        $token = Str::random(64);

        // Проверка: есть ли уже запись с таким email
        $existing = RegistrationForTesting::where('email', $validated['email'])->first();

        // dd($validated);
        if ($existing) {
            $existing->update([
                'pending_test_date' => $validated['test_date'],
                'confirmation_token' => $token,
                'is_confirmed' => true,
            ]);

            $registration = $existing;
        } else {
            return redirect()->back()->with('error', 'Данная почта не зарегистрирована!');
        }

        // Отправка email пользователю
        Mail::to($validated['email'])->send(new ConfirmRegistration($registration));

        return redirect()->back()->with('success', 'Письмо с подтверждением отправлено на почту!');
    }

    public function confirm($token)
    {
        $registration = RegistrationForTesting::where('confirmation_token', $token)->firstOrFail();

        if ($registration->pending_test_date) {
            $registration->update([
                'test_date' => $registration->pending_test_date,
                'pending_test_date' => null,
            ]);
        }

        $registration->update([
            'is_confirmed' => true,
            'confirmation_token' => null,
        ]);

        // Отправка email пользователю
        Mail::to($registration['email'])->send(new RegistrationConfirmedDateMail($registration));

        return view('front.testRegistration.confirmed');
    }


}
