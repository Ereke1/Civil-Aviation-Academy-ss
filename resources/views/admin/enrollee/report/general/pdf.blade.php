<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Панель администратора</title>
    <!-- Styles -->
    <link href="{{ asset('css/app-admin.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        h1 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
            width: 100%;
        }

        h1 span {
            float: right;
        }

        h2,
        h3,
        h4 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
        }

        table {
            width: 100%;
            font-size: 10px;
        }

        tr,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        .table-1 tr,
        .table-1 th,
        .table-1 td,
            {
            padding: 5px;
        }

        .table-2-3 tr,
        .table-2-3 th,
        .table-2-3 td,
            {
            padding: 10px 5px 10px 5px;
        }

        .wrapper {
            max-width: 1170px;
            margin: 0 auto;
            padding-bottom: 50px;
        }

        .bg-chair {
            background: lightgrey !important;
        }

        .bg-chair-night {
            background: darkslategray !important;
            color: white;
        }

    </style>
</head>

<body>
    @php
        $nameSs = $created_at_from ? "Всего c " . $created_at_from  . " по " . $created_at_to : "Всего на " . $today->format('d.m.Y');
    @endphp
    <div class="wrapper">
        <div class="report">
            <h1>Общий отчёт <span> {!! $nameSs !!}: {!! $countAll !!} анкет</span> <span style=" margin-right: 100px;"> Бакалавриат </span> </h1>
            <table class="report table-1">
                <tr>
                    <th colspan="2" rowspan="2">Образовательная программа</th>
                    <th rowspan="2">Гранты МОН</th>
                    <th colspan="3">11 классов</th>
                    <th colspan="3">ТиПО</th>
                    <th colspan="2">ВВ</th>
                    <th colspan="2">Итого</th>
                </tr>
                <tr>
                    <td><b>Гранты</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair"><b>Факт</b></td>
                    <td><b>Гранты</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair"><b>Факт</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair"><b>Факт</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair-night"><b>Факт</b></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Техническая эксплуатация летательных аппаратов и двигателей</td>
                    <td rowspan="9"><b>335 + 5/5</b></td>
                    <td rowspan="9">325 + 5/5</td>
                    <td>90</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса'] !!}</td>
                    <td rowspan="9">10</td>
                    <td rowspan="9">40</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td rowspan="9">20</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Высшего образования'] !!}</td>
                    <td rowspan="9">410</td>
                    <td class="bg-chair-night">{!! $summVTT_1 !!}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Техническая эксплуатация систем авионики летательных аппаратов и двигателей</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_2 !!}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Обслуживание наземного радиоэлектронного оборудования аэропортов</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_3 !!}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Обеспечение авиационной безопасности</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Обеспечение авиационной безопасности']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Обеспечение авиационной безопасности']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Обеспечение авиационной безопасности']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_4 !!}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Организация аэропортовой деятельности</td>
                    <td>30</td>
                    <td class="bg-chair">{!! $counts['Организация аэропортовой деятельности']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Организация аэропортовой деятельности']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Организация аэропортовой деятельности']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_5 !!}</td>
                </tr>
                {{-- Пэй аттеншн!!!!! --}}
                {{-- <tr>
                    <td>6</td>
                    <td>Технология транспортных процессов в авиации</td>
                    <td>20</td>
                    <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_6 !!}</td>
                </tr> --}}
                <tr>
                    <td>6</td>
                    <td>Технология авиационных перевозок</td>
                    <td>20</td>
                    <td class="bg-chair">{!! $counts['Технология авиационных перевозок']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Технология авиационных перевозок']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Технология авиационных перевозок']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_6 !!}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Техническая эксплуатация авиационного и радиоэлектронного оборудования</td>
                    <td>90</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация авиационного и радиоэлектронного оборудования']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация авиационного и радиоэлектронного оборудования']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Техническая эксплуатация авиационного и радиоэлектронного оборудования']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_7 !!}</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Беспилотные летательные аппараты и системы</td>
                    <td>30</td>
                    <td class="bg-chair">{!! $counts['Беспилотные летательные аппараты и системы']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Беспилотные летательные аппараты и системы']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Беспилотные летательные аппараты и системы']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_8 !!}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Авиационная безопасность и интеллектуальные системы</td>
                    <td>30</td>
                    <td class="bg-chair">{!! $counts['Авиационная безопасность и интеллектуальные системы']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Авиационная безопасность и интеллектуальные системы']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Авиационная безопасность и интеллектуальные системы']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summVTT_9 !!}</td>
                </tr>
                <tr class="bg-chair">
                    <td colspan="2"><b>ИТОГО по ГОП "В067 - Воздушный транспорт и технологии"</b></td>
                    <td><b>345</b></td>
                    <td><b>335</b></td>
                    <td><b>350</b></td>
                    {{-- надо изменить --}}
                    <td><b>{!! $summVTT_11kl !!}</b></td>
                    <td><b>10</b></td>
                    <td><b>40</b></td>
                    <td><b>{!! $summVTT_TiPO !!}</td>
                    <td><b>20</b></td>
                    <td><b>{!! $summVTT_VV !!}</td>
                    <td><b>410</b></td>
                    <td class="bg-chair-night"><b>{!! $summVTT !!}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Обслуживание воздушного движения и аэронавигационное обеспечение полетов</td>
                    <td rowspan="2"><b>185 + 5/5</b></td>
                    <td rowspan="2">185 + 5/5</td>
                    <td>20</td>
                    <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['11-го класса'] !!}</td>
                    <td rowspan="2">0</td>
                    <td rowspan="2">0</td>
                    <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td rowspan="2">0</td>
                    <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Высшего образования'] !!}</td>
                    <td rowspan="2">170</td>
                    <td class="bg-chair-night">{!! $summLELAD_1 !!}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Лётная эксплуатация гражданских самолетов (пилот)</td>
                    <td>140</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summLELAD_2 !!}</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Лётная эксплуатация гражданских вертолетов (пилот)</td>
                    <td><b>185 + 5/5</b></td>
                    <td>185 + 5/5</td>
                    <td>10</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['11-го класса'] !!}</td>
                    <td>0</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Высшего образования'] !!}</td>
                    <td>170</td>
                    <td class="bg-chair-night">{!! $summLELAD_3 !!}</td>
                </tr>
                <tr class="bg-chair">
                    <td colspan="2"><b>ИТОГО по ГОП "В167 - Летная эксплуатация летательных аппаратов и двигателей"</b></td>
                    <td><b>195</b></td>
                    <td><b>185</b></td>
                    <td><b>170</b></td>
                    <td><b>{!! $summLELAD_11kl !!}</b></td>
                    <td><b>0</b></td>
                    <td><b>0</b></td>
                    <td><b>{!! $summLELAD_TiPO !!}</td>
                    <td><b>0</b></td>
                    <td><b>{!! $summLELAD_VV !!}</td>
                    <td><b>170</b></td>
                    <td class="bg-chair-night"><b>{!! $summLELAD !!}</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Организация авиационных перевозок</td>
                    <td rowspan="3"><b>217</b></td>
                    <td rowspan="3">167</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['11-го класса'] !!}</td>
                    <td rowspan="3">50</td>
                    <td rowspan="3">45</td>
                    <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td rowspan="3">20</td>
                    <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['Высшего образования'] !!}</td>
                    <td rowspan="3">130</td>
                    <td class="bg-chair-night">{!! $summTU_1 !!}</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Логистика на транспорте</td>
                    <td>33</td>
                    <td class="bg-chair">{!! $counts['Логистика на транспорте']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Логистика на транспорте']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Логистика на транспорте']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summTU_2 !!}</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Системная интеграция наземного обслуживания</td>
                    <td>34</td>
                    <td class="bg-chair">{!! $counts['Системная интеграция наземного обслуживания']['11-го класса'] !!}</td>
                    <td class="bg-chair">{!! $counts['Системная интеграция наземного обслуживания']['Технического и профессионального образования (колледжа)'] !!}</td>
                    <td class="bg-chair">{!! $counts['Системная интеграция наземного обслуживания']['Высшего образования'] !!}</td>
                    <td class="bg-chair-night">{!! $summTU_3 !!}</td>
                </tr>
                <tr class="bg-chair">
                    <td colspan="2"><b>ИТОГО по ГОП "В095 - Транспортные услуги"</b></td>
                    <td><b>217</b></td>
                    <td><b>167</b></td>
                    <td><b>65</b></td>
                    <td><b>{!! $summTU_11kl !!}</b></td>
                    <td><b>50</b></td>
                    <td><b>45</b></td>
                    <td><b>{!! $summTU_TiPO !!}</td>
                    <td><b>20</b></td>
                    <td><b>{!! $summTU_VV !!}</td>
                    <td><b>130</b></td>
                    <td class="bg-chair-night"><b>{!! $summTU !!}</td>
                </tr>
                <tr>
                    <td colspan="2" class="bg-chair-night">Всего</td>
                    <td class="bg-chair-night">757</td>
                    <td class="bg-chair-night">650</td>
                    <td class="bg-chair-night">585</td>
                    <td class="bg-chair-night">{!! $sum1 !!}</td>
                    <td class="bg-chair-night">60</td>
                    <td class="bg-chair-night">85</td>
                    <td class="bg-chair-night">{!! $sum2 !!}</td>
                    <td class="bg-chair-night">40</td>
                    <td class="bg-chair-night">{!! $sum3 !!}</td>
                    <td class="bg-chair-night">710</td>
                    <td class="bg-chair-night">{!! $total !!}</td>
                </tr>
            </table>
            <h2>Магистратура</h2>
            <table class="report table-2-3">
                <tr>
                    <th colspan="2">Образовательная программа</th>
                    <th>Гранты МОН</th>
                    <th>План</th>
                    <td class="bg-chair"><b>Факт</b></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Авиационная техника и технологии (профильная магистратура)</td>
                    <td rowspan="2">12</td>
                    <td>12</td>
                    <td class="bg-chair">{!! $countMaster1 !!}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Авиационная техника и технологии (научно-педагогическая магистратура)</td>
                    <td>0</td>
                    <td class="bg-chair">{!! $countMaster2 !!}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Летная эксплуатация летательных аппаратов и двигателей (профильная магистратура)</td>
                    <td rowspan="2">5</td>
                    <td>-</td>
                    <td class="bg-chair">{!! $countMaster3 !!}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Летная эксплуатация летательных аппаратов и двигателей (научно-педагогическая магистратура)</td>
                    <td>5</td>
                    <td class="bg-chair">{!! $countMaster4 !!}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Организация перевозок, движения и эксплуатация транспорта (профильная магистратура)</td>
                    <td rowspan="2">30</td>
                    <td>-</td>
                    <td class="bg-chair">{!! $countMaster5 !!}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Организация перевозок, движения и эксплуатация транспорта (научно-педагогическая магистратура)</td>
                    <td>5</td>
                    <td class="bg-chair">{!! $countMaster6 !!}</td>
                </tr>
                <tr>
                    <td colspan="2" class="bg-chair-night">Всего</td>
                    <td class="bg-chair-night"><b>47</b></td>
                    <td class="bg-chair-night"><b>22</b></td>
                    <td class="bg-chair-night"><b>{!! $totalMaster !!}</b></td>
                </tr>
            </table>
            <h2>Докторантура</h2>
            {{-- <table class="report table-2-3">
                <tr>
                    <th colspan="2" rowspan="2">Образовательная программа</th>
                    <th colspan="3">Итого</th>
                </tr>
                <tr>
                    <td><b>Гранты МОН</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair-night">Факт</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Авиационная техника и технологии</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="bg-chair-night">{!! $countDoctoral !!}</td>
                </tr>
            </table> --}}
            <table class="report table-2-3">
                <tr>
                    <th colspan="2" rowspan="2">Образовательная программа</th>
                    <th colspan="3">Итого</th>
                </tr>
                <tr>
                    <td><b>Гранты МОН</b></td>
                    <td><b>План</b></td>
                    <td class="bg-chair-night">Факт</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Авиационная техника и технологии</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="bg-chair-night">{!! $countDoctoral1 !!}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Летная эксплуатация летательных аппаратов и двигателей</td>
                    <td>2</td>
                    <td>2</td>
                    <td class="bg-chair-night">{!! $countDoctoral2 !!}</td>
                </tr>
            </table>
        </div>
    </div>
