<?php

namespace App\Http\Controllers\Admin\Enrollee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;
use PDF;

class RReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $created_at_from = $request->created_at_from;
        $created_at_to = $request->created_at_to;


        $counts = $this->allCounts($created_at_from, $created_at_to);


        // You can now use the $counts array to get the counts for each program and base
        // Example: $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса']

        // Return or pass the $counts array to a view

        // Преобразуем $counts в коллекцию Laravel
        $countsCollection = collect($counts);

        $summVTT_11kl = $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['11-го класса'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['11-го класса'] +
            $counts['Обеспечение авиационной безопасности']['11-го класса'] +
            $counts['Организация аэропортовой деятельности']['11-го класса'] +
            $counts['Технология транспортных процессов в авиации']['11-го класса'];

        $summVTT_TiPO = $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Технического и профессионального образования (колледжа)'] +
            $counts['Обеспечение авиационной безопасности']['Технического и профессионального образования (колледжа)'] +
            $counts['Организация аэропортовой деятельности']['Технического и профессионального образования (колледжа)'] +
            $counts['Технология транспортных процессов в авиации']['Технического и профессионального образования (колледжа)'];

        $summVTT_VV =  $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Высшего образования'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Высшего образования'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Высшего образования'] +
            $counts['Обеспечение авиационной безопасности']['Высшего образования'] +
            $counts['Организация аэропортовой деятельности']['Высшего образования'] +
            $counts['Технология транспортных процессов в авиации']['Высшего образования'];

        $summVTT = $summVTT_11kl + $summVTT_TiPO + $summVTT_VV;

        $summLELAD_11kl = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['11-го класса'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['11-го класса'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['11-го класса'];
        $summLELAD_TiPO = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Технического и профессионального образования (колледжа)'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Технического и профессионального образования (колледжа)'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Технического и профессионального образования (колледжа)'];
        $summLELAD_VV = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Высшего образования'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Высшего образования'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Высшего образования'];
        $summLELAD = $summLELAD_11kl + $summLELAD_TiPO + $summLELAD_VV;

        $summTU_11kl = $counts['Организация авиационных перевозок']['11-го класса'] +
            $counts['Логистика на транспорте']['11-го класса'];
        $summTU_TiPO = $counts['Организация авиационных перевозок']['Технического и профессионального образования (колледжа)'] +
            $counts['Логистика на транспорте']['Технического и профессионального образования (колледжа)'];
        $summTU_VV = $counts['Организация авиационных перевозок']['Высшего образования'] +
            $counts['Логистика на транспорте']['Высшего образования'];
        $summTU = $summTU_11kl + $summTU_TiPO + $summTU_VV;

        $summVTT_1 = $this->sumValuesByProgram($countsCollection, 'Техническая эксплуатация летательных аппаратов и двигателей');
        $summVTT_2 = $this->sumValuesByProgram($countsCollection, 'Техническая эксплуатация систем авионики летательных аппаратов');
        $summVTT_3 = $this->sumValuesByProgram($countsCollection, 'Обслуживание наземного радиоэлектронного оборудования аэропортов');
        $summVTT_4 = $this->sumValuesByProgram($countsCollection, 'Обеспечение авиационной безопасности');
        $summVTT_5 = $this->sumValuesByProgram($countsCollection, 'Организация аэропортовой деятельности');
        $summVTT_6 = $this->sumValuesByProgram($countsCollection, 'Технология транспортных процессов в авиации');

        $summLELAD_1 = $this->sumValuesByProgram($countsCollection, 'Обслуживание воздушного движения и аэронавигационное обеспечение полетов и аэронавигационное обеспечение полетов');
        $summLELAD_2 = $this->sumValuesByProgram($countsCollection, 'Лётная эксплуатация гражданских самолетов (пилот)');
        $summLELAD_3 = $this->sumValuesByProgram($countsCollection, 'Лётная эксплуатация гражданских вертолетов (пилот)');

        $summTU_1 = $this->sumValuesByProgram($countsCollection, 'Организация авиационных перевозок');
        $summTU_2 = $this->sumValuesByProgram($countsCollection, 'Логистика на транспорте');

        $sum1 = $summVTT_11kl + $summLELAD_11kl + $summTU_11kl;
        $sum2 = $summVTT_TiPO + $summLELAD_TiPO + $summTU_TiPO;
        $sum3 = $summVTT_VV + $summLELAD_VV + $summTU_VV;
        $total = $summVTT + $summLELAD + $summTU;

        $countMaster1 = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии (профильная магистратура)');
        $countMaster2 = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии (научно-педагогическая магистратура)');
        $countMaster3 = $this->sumValuesByProgram($countsCollection, 'Летная эксплуатация летательных аппаратов и двигателей (профильная магистратура)');
        $countMaster4 = $this->sumValuesByProgram($countsCollection, 'Летная эксплуатация летательных аппаратов и двигателей (научно-педагогическая магистратура)');
        $countMaster5 = $this->sumValuesByProgram($countsCollection, 'Организация перевозок, движения и эксплуатация транспорта (профильная магистратура)');
        $countMaster6 = $this->sumValuesByProgram($countsCollection, 'Организация перевозок, движения и эксплуатация транспорта (научно-педагогическая магистратура)');
        $totalMaster = $countMaster1 + $countMaster2 + $countMaster3 + $countMaster4 + $countMaster5 + $countMaster6;

        $countDoctoral = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии');

        $countAll = $countDoctoral + $totalMaster + $total;

        $array = [
            'created_at_from' => $created_at_from,
            'created_at_to' => $created_at_to,
            'summVTT_11kl' => $summVTT_11kl,
            'summVTT_TiPO' => $summVTT_TiPO,
            'summVTT_VV' => $summVTT_VV,
            'summVTT' => $summVTT,
            'summLELAD_11kl' => $summLELAD_11kl,
            'summLELAD_TiPO' => $summLELAD_TiPO,
            'summLELAD_VV' => $summLELAD_VV,
            'summLELAD' => $summLELAD,
            'summTU_11kl' => $summTU_11kl,
            'summTU_TiPO' => $summTU_TiPO,
            'summTU_VV' => $summTU_VV,
            'summTU' => $summTU,
            'summVTT_1' => $summVTT_1,
            'summVTT_2' => $summVTT_2,
            'summVTT_3' => $summVTT_3,
            'summVTT_4' => $summVTT_4,
            'summVTT_5' => $summVTT_5,
            'summVTT_6' => $summVTT_6,
            'summLELAD_1' => $summLELAD_1,
            'summLELAD_2' => $summLELAD_2,
            'summLELAD_3' => $summLELAD_3,
            'summTU_1' => $summTU_1,
            'summTU_2' => $summTU_2,
            'total' => $total,
            'countMaster1' => $countMaster1,
            'countMaster2' => $countMaster2,
            'countMaster3' => $countMaster3,
            'countMaster4' => $countMaster4,
            'countMaster5' => $countMaster5,
            'countMaster6' => $countMaster6,
            'countDoctoral' => $countDoctoral,
            'countAll' => $countAll,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
            'totalMaster' => $totalMaster,
            'counts' => $counts
        ];

        // echo $summVTT_1;

        return view('admin.enrollee.report.reception.index', $array);
    }


    // Функция для вычисления суммы значений по заданной $program
    function sumValuesByProgram($countsCollection, $program)
    {
        // Проверяем существование программы в коллекции
        if (!$countsCollection->has($program)) {
            return 0;
        }
        // Получаем данные по программе
        $programData = $countsCollection->get($program);
        // Суммируем значения для каждой базы в рамках программы
        $sum = 0;
        foreach ($programData as $baseCount) {
            $sum += $baseCount;
        }

        return $sum;
    }

    function allCounts($created_at_from, $created_at_to)
    {
        $counts = [];
        $programs = [
            'Техническая эксплуатация летательных аппаратов и двигателей',
            'Техническая эксплуатация систем авионики летательных аппаратов и двигателей',
            'Обслуживание наземного радиоэлектронного оборудования аэропортов',
            'Обеспечение авиационной безопасности',
            'Организация аэропортовой деятельности',
            'Технология транспортных процессов в авиации',
            'Обслуживание воздушного движения и аэронавигационное обеспечение полетов',
            'Лётная эксплуатация гражданских самолетов (пилот)',
            'Лётная эксплуатация гражданских вертолетов (пилот)',
            'Организация авиационных перевозок',
            'Логистика на транспорте',
            'Авиационная техника и технологии (профильная магистратура)',
            'Авиационная техника и технологии (научно-педагогическая магистратура)',
            'Летная эксплуатация летательных аппаратов и двигателей (профильная магистратура)',
            'Летная эксплуатация летательных аппаратов и двигателей (научно-педагогическая магистратура)',
            'Организация перевозок, движения и эксплуатация транспорта (профильная магистратура)',
            'Организация перевозок, движения и эксплуатация транспорта (научно-педагогическая магистратура)',
            'Авиационная техника и технологии',
        ];
        $bases = [
            '11-го класса',
            'Технического и профессионального образования (колледжа)',
            'Высшего образования',
        ];
        $statuses = ['Обработанный', 'Сдал документы'];

        if (!isset($created_at_from) || !isset($created_at_to) || ($created_at_from == 0 || $created_at_to == 0)) {
            foreach ($programs as $program) {
                foreach ($bases as $base) {
                    $count = 0;
                    foreach ($statuses as $status) {
                        $count += Applications::where('base', $base)
                            ->where('programms', $program)
                            ->where('process', $status)
                            ->where('status', 0)
                            ->where('case_number_date', '>=', "2024-06-01 00:00:00")
                            ->count();
                    }
                    $counts[$program][$base] = $count;
                }
            }
        } else {
            foreach ($programs as $program) {
                foreach ($bases as $base) {
                    $count = 0;
                    foreach ($statuses as $status) {
                        $count += Applications::where('base', $base)
                            ->where('programms', $program)
                            ->where('process', $status)
                            ->where('status', 0)
                            ->where('case_number_date', '>=', "2024-06-01 00:00:00")
                            ->whereDate('created_at', '>=', $created_at_from)
                            ->whereDate('created_at', '<=', $created_at_to)
                            ->count();
                    }
                    $counts[$program][$base] = $count;
                }
            }
        }

        return $counts;
    }

    public function pdf($created_at_from, $created_at_to)
    {
        $counts = $this->allCounts($created_at_from, $created_at_to);


        // You can now use the $counts array to get the counts for each program and base
        // Example: $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса']

        // Return or pass the $counts array to a view

        // Преобразуем $counts в коллекцию Laravel
        $countsCollection = collect($counts);

        $summVTT_11kl = $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['11-го класса'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['11-го класса'] +
            $counts['Обеспечение авиационной безопасности']['11-го класса'] +
            $counts['Организация аэропортовой деятельности']['11-го класса'] +
            $counts['Технология транспортных процессов в авиации']['11-го класса'];

        $summVTT_TiPO = $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Технического и профессионального образования (колледжа)'] +
            $counts['Обеспечение авиационной безопасности']['Технического и профессионального образования (колледжа)'] +
            $counts['Организация аэропортовой деятельности']['Технического и профессионального образования (колледжа)'] +
            $counts['Технология транспортных процессов в авиации']['Технического и профессионального образования (колледжа)'];

        $summVTT_VV =  $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Высшего образования'] +
            $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Высшего образования'] +
            $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Высшего образования'] +
            $counts['Обеспечение авиационной безопасности']['Высшего образования'] +
            $counts['Организация аэропортовой деятельности']['Высшего образования'] +
            $counts['Технология транспортных процессов в авиации']['Высшего образования'];

        $summVTT = $summVTT_11kl + $summVTT_TiPO + $summVTT_VV;

        $summLELAD_11kl = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['11-го класса'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['11-го класса'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['11-го класса'];
        $summLELAD_TiPO = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Технического и профессионального образования (колледжа)'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Технического и профессионального образования (колледжа)'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Технического и профессионального образования (колледжа)'];
        $summLELAD_VV = $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Высшего образования'] +
            $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Высшего образования'] +
            $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Высшего образования'];
        $summLELAD = $summLELAD_11kl + $summLELAD_TiPO + $summLELAD_VV;

        $summTU_11kl = $counts['Организация авиационных перевозок']['11-го класса'] +
            $counts['Логистика на транспорте']['11-го класса'];
        $summTU_TiPO = $counts['Организация авиационных перевозок']['Технического и профессионального образования (колледжа)'] +
            $counts['Логистика на транспорте']['Технического и профессионального образования (колледжа)'];
        $summTU_VV = $counts['Организация авиационных перевозок']['Высшего образования'] +
            $counts['Логистика на транспорте']['Высшего образования'];
        $summTU = $summTU_11kl + $summTU_TiPO + $summTU_VV;

        $summVTT_1 = $this->sumValuesByProgram($countsCollection, 'Техническая эксплуатация летательных аппаратов и двигателей');
        $summVTT_2 = $this->sumValuesByProgram($countsCollection, 'Техническая эксплуатация систем авионики летательных аппаратов');
        $summVTT_3 = $this->sumValuesByProgram($countsCollection, 'Обслуживание наземного радиоэлектронного оборудования аэропортов');
        $summVTT_4 = $this->sumValuesByProgram($countsCollection, 'Обеспечение авиационной безопасности');
        $summVTT_5 = $this->sumValuesByProgram($countsCollection, 'Организация аэропортовой деятельности');
        $summVTT_6 = $this->sumValuesByProgram($countsCollection, 'Технология транспортных процессов в авиации');

        $summLELAD_1 = $this->sumValuesByProgram($countsCollection, 'Обслуживание воздушного движения и аэронавигационное обеспечение полетов и аэронавигационное обеспечение полетов');
        $summLELAD_2 = $this->sumValuesByProgram($countsCollection, 'Лётная эксплуатация гражданских самолетов (пилот)');
        $summLELAD_3 = $this->sumValuesByProgram($countsCollection, 'Лётная эксплуатация гражданских вертолетов (пилот)');

        $summTU_1 = $this->sumValuesByProgram($countsCollection, 'Организация авиационных перевозок');
        $summTU_2 = $this->sumValuesByProgram($countsCollection, 'Логистика на транспорте');

        $sum1 = $summVTT_11kl + $summLELAD_11kl + $summTU_11kl;
        $sum2 = $summVTT_TiPO + $summLELAD_TiPO + $summTU_TiPO;
        $sum3 = $summVTT_VV + $summLELAD_VV + $summTU_VV;
        $total = $summVTT + $summLELAD + $summTU;

        $countMaster1 = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии (профильная магистратура)');
        $countMaster2 = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии (научно-педагогическая магистратура)');
        $countMaster3 = $this->sumValuesByProgram($countsCollection, 'Летная эксплуатация летательных аппаратов и двигателей (профильная магистратура)');
        $countMaster4 = $this->sumValuesByProgram($countsCollection, 'Летная эксплуатация летательных аппаратов и двигателей (научно-педагогическая магистратура)');
        $countMaster5 = $this->sumValuesByProgram($countsCollection, 'Организация перевозок, движения и эксплуатация транспорта (профильная магистратура)');
        $countMaster6 = $this->sumValuesByProgram($countsCollection, 'Организация перевозок, движения и эксплуатация транспорта (научно-педагогическая магистратура)');
        $totalMaster = $countMaster1 + $countMaster2 + $countMaster3 + $countMaster4 + $countMaster5 + $countMaster6;

        $countDoctoral = $this->sumValuesByProgram($countsCollection, 'Авиационная техника и технологии');

        $countAll = $countDoctoral + $totalMaster + $total;
        $today = now('Asia/Almaty');



        $array = [
            'created_at_from' => $created_at_from,
            'created_at_to' => $created_at_to,
            'summVTT_11kl' => $summVTT_11kl,
            'summVTT_TiPO' => $summVTT_TiPO,
            'summVTT_VV' => $summVTT_VV,
            'summVTT' => $summVTT,
            'summLELAD_11kl' => $summLELAD_11kl,
            'summLELAD_TiPO' => $summLELAD_TiPO,
            'summLELAD_VV' => $summLELAD_VV,
            'summLELAD' => $summLELAD,
            'summTU_11kl' => $summTU_11kl,
            'summTU_TiPO' => $summTU_TiPO,
            'summTU_VV' => $summTU_VV,
            'summTU' => $summTU,
            'summVTT_1' => $summVTT_1,
            'summVTT_2' => $summVTT_2,
            'summVTT_3' => $summVTT_3,
            'summVTT_4' => $summVTT_4,
            'summVTT_5' => $summVTT_5,
            'summVTT_6' => $summVTT_6,
            'summLELAD_1' => $summLELAD_1,
            'summLELAD_2' => $summLELAD_2,
            'summLELAD_3' => $summLELAD_3,
            'summTU_1' => $summTU_1,
            'summTU_2' => $summTU_2,
            'total' => $total,
            'countMaster1' => $countMaster1,
            'countMaster2' => $countMaster2,
            'countMaster3' => $countMaster3,
            'countMaster4' => $countMaster4,
            'countMaster5' => $countMaster5,
            'countMaster6' => $countMaster6,
            'countDoctoral' => $countDoctoral,
            'countAll' => $countAll,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
            'totalMaster' => $totalMaster,
            'counts' => $counts,
            'today' => $today,
            'created_at_from' => $created_at_from,
            'created_at_to' => $created_at_to
        ];
        $pdfName = 'Отчёт по приёму ' . date('d.m.Y h:i', strtotime($today)) . '.pdf';
        $pdf = PDF::loadView('admin.enrollee.report.reception.pdf', $array)->setOptions(['default-font' => 'sans-serif']);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download($pdfName);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
