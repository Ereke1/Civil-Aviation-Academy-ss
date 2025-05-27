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
        $availableDates = [
            "2025-07-07",
            "2025-07-08",
            "2025-07-10",
            "2025-07-11",
            "2025-07-15",
            "2025-07-16",
        ];
        $availableInterviewDates = [
            "2025-07-14",
            "2025-07-17",
        ];
        $timeSlots = [
            "09:00-10:00","10:30-11:30","12:00-13:00",
            "13:30-14:30",
        ];
        $timeSlotsInterview = [
            "09:00-10:00","10:30-11:30","12:00-13:00",
            "13:30-14:30","15:00-16:00",
        ];

        $checkDatesFromDB = RegistrationForTesting::select('test_date', DB::raw('count(*) as total'))
            ->groupBy('test_date')
            ->having('total', '>=', 60)
            ->pluck('test_date')
            ->toArray();
        $interviewCheckDatesFromDB = RegistrationForTesting::select('interview_date', DB::raw('count(*) as total'))
            ->groupBy('interview_date')
            ->having('total', '>=', 60)
            ->pluck('interview_date')
            ->toArray();

        $streamsInterview = [];
        foreach ($availableInterviewDates as $date) {
            foreach ($timeSlotsInterview as $slot) {
                $cnt = RegistrationForTesting::where('interview_date',$date)
                    ->where('interview_time_slot',$slot)
                    ->count();
                if ($cnt < 15) {
                    $streamsInterview[$date][] = $slot;
                }
            }
        }
        $streams = [];
        foreach ($availableDates as $date) {
            foreach ($timeSlots as $slot) {
                $cnt = RegistrationForTesting::where('test_date',$date)
                    ->where('test_time_slot',$slot)
                    ->count();
                if ($cnt < 15) {
                    $streams[$date][] = $slot;
                }
            }
        }

        $availableDates = array_diff($availableDates, $checkDatesFromDB);
        $availableDates = array_values($availableDates);

        $availableInterviewDates = array_diff($availableInterviewDates, $interviewCheckDatesFromDB);
        $availableInterviewDates = array_values($availableInterviewDates);


        return view('front.testRegistration.regForTest', compact(
            'tree',
            'availableDates',
            'streams',
            'streamsInterview',
            'availableInterviewDates',
        ));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'have_ielts'      => 'required|boolean',
            'test_date'       => 'required_if:have_ielts,0|nullable|date',
            'interview_date'  => 'required_if:have_ielts,1|nullable|date',
            'test_time_slot'       => 'nullable|required_if:have_ielts,0',
            'interview_time_slot'       => 'nullable|required_if:have_ielts,1',
            'ielts_file.*' => 'required_if:have_ielts,1|mimes:jpeg,png,pdf',
        ]);

        // Проверка: есть ли уже запись с таким email
        $existing = RegistrationForTesting::where('email', $validated['email'])->where('is_deleted', 0)->first();

        if ($existing) {
            return redirect()->back()->with('error', 'Данная почта уже зарегистрирована! Выберите "Запись на другую дату" если хотите изменить дату записи');
        }

        if ($validated['have_ielts']) {
            $ieltsFile = $request->file('ielts_file');
            $extension = $ieltsFile->getClientOriginalExtension();
            $filename = $validated['surname'] . '_' . $validated['name'] . '.' . $extension;
            $destinationPath = public_path('/storage/applications/ielts_certificates/' . $request->surname . ' ' . $request->name);


            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $ieltsFile->move($destinationPath, $filename);
            $validated['ielts_file'] = '/storage/applications/ielts_certificates/'  . $request->surname . ' ' . $request->name . '/' . $filename  ;
        }




        return $this->createNewRegistration($validated);
    }

    private function createNewRegistration(array $validated)
    {
        $token = Str::random(64);

        $registration = RegistrationForTesting::create([
            'name'          => $validated['name'],
            'surname'       => $validated['surname'],
            'patronymic'    => request('patronymic'),
            'phone'         => request('phone'),
            'email'         => $validated['email'],
            'have_ielts'    => $validated['have_ielts'],
            'test_date'     => $validated['have_ielts'] ? null : $validated['test_date'],
            'interview_date'=> $validated['have_ielts'] ? $validated['interview_date'] : null,
            'test_time_slot'     => $validated['have_ielts'] ? null : $validated['test_time_slot'],
            'interview_time_slot'     => $validated['have_ielts'] ? $validated['interview_time_slot'] : null,
            'confirmation_token' => $token,
            'is_confirmed'  => false,
            'ielts_file'  => $validated['ielts_file'] ?? null,
        ]);

        // Отправка email пользователю
        Mail::to($validated['email'])->send(new ConfirmRegistration($registration));

        return redirect()->back()->with('success', 'Письмо с подтверждением отправлено на почту!');
    }


    public function changeDate(Request $request){
        $validated = $request->validate([
            'email'                => 'required|email',
            'have_ielts_change'    => 'required|boolean',
            'test_date'            => 'required_if:have_ielts_change,0|nullable|date',
            'test_time_slot'       => 'required_if:have_ielts_change,0|nullable|string',
            'interview_date'       => 'required_if:have_ielts_change,1|nullable|date',
            'interview_time_slot'  => 'required_if:have_ielts_change,1|nullable|string',
        ]);

        $token = Str::random(64);

        $existing = RegistrationForTesting::where('email', $validated['email'])->first();
        if ($validated['have_ielts_change'] && ! $existing->have_ielts) {
            return redirect()->back()->with('error', 'У вас нет загруженного сертификата IELTS!');
        }
        // dd($existing);
        if (!$existing) {
            return redirect()->back()->with('error', 'Данная почта не зарегистрирована!');
        }


        if ($validated['have_ielts_change']) {
            $existing->update([
                'pending_interview_date'      => $validated['interview_date'],
                'pending_interview_time_slot' => $validated['interview_time_slot'],
                'confirmation_token'          => $token,
                'is_confirmed'                => false,
            ]);
        } else {
            $existing->update([
                'pending_test_date'      => $validated['test_date'],
                'pending_test_time_slot' => $validated['test_time_slot'],
                'confirmation_token'     => $token,
                'is_confirmed'           => false,
            ]);
        }
        // dd($existing);
        $registration = $existing;

        Mail::to($validated['email'])->send(new ConfirmRegistration($registration));

        return redirect()->back()->with('success', 'Письмо с подтверждением отправлено на почту!');
    }



    public function confirm($token)
    {
        $registration = RegistrationForTesting::where('confirmation_token', $token)
            ->firstOrFail();


        if ($registration->pending_test_date) {
            $registration->update([
                'test_date'             => $registration->pending_test_date,
                'test_time_slot'        => $registration->pending_test_time_slot,
                'pending_test_date'     => null,
                'pending_test_time_slot'=> null,
            ]);
        }


        if ($registration->pending_interview_date) {
            $registration->update([
                'interview_date'             => $registration->pending_interview_date,
                'interview_time_slot'        => $registration->pending_interview_time_slot,
                'pending_interview_date'     => null,
                'pending_interview_time_slot'=> null,
            ]);
        }

        $registration->update([
            'is_confirmed'       => true,
            'confirmation_token' => null,
        ]);

        Mail::to($registration->email)
            ->send(new RegistrationConfirmedDateMail($registration));

        return view('front.testRegistration.confirmed', [
            'have_ielts'          => $registration->have_ielts,
            'test_date'           => $registration->test_date,
            'test_time_slot'      => $registration->test_time_slot,
            'interview_date'      => $registration->interview_date,
            'interview_time_slot' => $registration->interview_time_slot,
        ]);
    }



}
