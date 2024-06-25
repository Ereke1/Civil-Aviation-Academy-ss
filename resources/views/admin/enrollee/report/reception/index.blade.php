@extends('admin.layouts.app')
@php $parrentCat  = 'Абитуриенты' @endphp
@php $active_menu = 'Отчёт по приёму';
@endphp
@section('content')
    <div class="report">
        <h1>Отчёт по приёму</h1>
        <h2>Бакалавриат</h2>
        <div class="filter">
            <form>
                @csrf
                <div>
                    <label for="created_at_from">Дата подачи с</label>
                    <input type="date" name="created_at_from" required
                    @if ($created_at_from != '') value="{!! $created_at_from !!}" @endif>
                </div>
                <div>
                    <label for="created_at_to">Дата подачи до</label>
                    <input type="date" name="created_at_to" required
                    @if ($created_at_to != '') value="{!! $created_at_to !!}" @endif>
                </div>
                <div>
                    <button>Применить</button>
                </div>
            </form>
        </div>
        <h3>Скачать в <a href="{{ route('admin.enrollee.rreport.pdf',['created_at_from' => $created_at_from ? $created_at_from : 0 ,'created_at_to' => $created_at_to ? $created_at_to : 0 ]) }}">PDF</a></h3>
        <table class="report">
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
                <td rowspan="6"><b>298</b></td>
                <td rowspan="6">288</td>
                <td>40</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['11-го класса'] !!}</td>
                <td rowspan="6">10</td>
                <td rowspan="6">80</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td rowspan="6">20</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация летательных аппаратов и двигателей']['Высшего образования'] !!}</td>
                <td rowspan="6">320</td>
                <td class="bg-chair-night">{!! $summVTT_1 !!}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Техническая эксплуатация систем авионики летательных аппаратов и двигателей</td>
                <td>40</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Техническая эксплуатация систем авионики летательных аппаратов и двигателей']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summVTT_2 !!}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Обслуживание наземного радиоэлектронного оборудования аэропортов</td>
                <td>30</td>
                <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Обслуживание наземного радиоэлектронного оборудования аэропортов']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summVTT_3 !!}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Обеспечение авиационной безопасности</td>
                <td>40</td>
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
            <tr>
                <td>6</td>
                <td>Технология транспортных процессов в авиации</td>
                <td>40</td>
                <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Технология транспортных процессов в авиации']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summVTT_6 !!}</td>
            </tr>
            <tr class="bg-chair">
                <td colspan="2"><b>ИТОГО по ГОП "В067 - Воздушный транспорт и технологии"</b></td>
                <td><b>298</b></td>
                <td><b>288</b></td>
                <td><b>220</b></td>
                <td><b>{!! $summVTT_11kl !!}</b></td>
                <td><b>10</b></td>
                <td><b>80</b></td>
                <td><b>{!! $summVTT_TiPO !!}</td>
                <td><b>20</b></td>
                <td><b>{!! $summVTT_VV !!}</td>
                <td><b>320</b></td>
                <td class="bg-chair-night"><b>{!! $summVTT !!}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Обслуживание воздушного движения и аэронавигационное обеспечение полетов</td>
                <td rowspan="3"><b>151</b></td>
                <td rowspan="3">151</td>
                <td>10</td>
                <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['11-го класса'] !!}</td>
                <td rowspan="3">0</td>
                <td rowspan="3">0</td>
                <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td rowspan="3">5</td>
                <td class="bg-chair">{!! $counts['Обслуживание воздушного движения и аэронавигационное обеспечение полетов']['Высшего образования'] !!}</td>
                <td rowspan="3">75</td>
                <td class="bg-chair-night">{!! $summLELAD_1 !!}</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Лётная эксплуатация гражданских самолетов (пилот)</td>
                <td>40</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских самолетов (пилот)']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summLELAD_2 !!}</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Лётная эксплуатация гражданских вертолетов (пилот)</td>
                <td>20</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Лётная эксплуатация гражданских вертолетов (пилот)']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summLELAD_3 !!}</td>
            </tr>
            <tr class="bg-chair">
                <td colspan="2"><b>ИТОГО по ГОП "В167 - Летная эксплуатация летательных аппаратов и двигателей"</b></td>
                <td><b>151</b></td>
                <td><b>151</b></td>
                <td><b>70</b></td>
                <td><b>{!! $summLELAD_11kl !!}</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>{!! $summLELAD_TiPO !!}</td>
                <td><b>5</b></td>
                <td><b>{!! $summLELAD_VV !!}</td>
                <td><b>75</b></td>
                <td class="bg-chair-night"><b>{!! $summLELAD !!}</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Организация авиационных перевозок</td>
                <td rowspan="2"><b>348</b></td>
                <td rowspan="2">298</td>
                <td>20</td>
                <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['11-го класса'] !!}</td>
                <td rowspan="2">50</td>
                <td rowspan="2">30</td>
                <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td rowspan="2">20</td>
                <td class="bg-chair">{!! $counts['Организация авиационных перевозок']['Высшего образования'] !!}</td>
                <td rowspan="2">90</td>
                <td class="bg-chair-night">{!! $summTU_1 !!}</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Логистика на транспорте</td>
                <td>20</td>
                <td class="bg-chair">{!! $counts['Логистика на транспорте']['11-го класса'] !!}</td>
                <td class="bg-chair">{!! $counts['Логистика на транспорте']['Технического и профессионального образования (колледжа)'] !!}</td>
                <td class="bg-chair">{!! $counts['Логистика на транспорте']['Высшего образования'] !!}</td>
                <td class="bg-chair-night">{!! $summTU_2 !!}</td>
            </tr>
            <tr class="bg-chair">
                <td colspan="2"><b>ИТОГО по ГОП "В095 - Транспортные услуги"</b></td>
                <td><b>348</b></td>
                <td><b>298</b></td>
                <td><b>40</b></td>
                <td><b>{!! $summTU_11kl !!}</b></td>
                <td><b>50</b></td>
                <td><b>30</b></td>
                <td><b>{!! $summTU_TiPO !!}</td>
                <td><b>20</b></td>
                <td><b>{!! $summTU_VV !!}</td>
                <td><b>90</b></td>
                <td class="bg-chair-night"><b>{!! $summTU !!}</td>
            </tr>
            <tr>
                <td colspan="2" class="bg-chair-night">Всего</td>
                <td class="bg-chair-night">797</td>
                <td class="bg-chair-night">737</td>
                <td class="bg-chair-night">330</td>
                <td class="bg-chair-night">{!! $sum1 !!}</td>
                <td class="bg-chair-night">60</td>
                <td class="bg-chair-night">110</td>
                <td class="bg-chair-night">{!! $sum2 !!}</td>
                <td class="bg-chair-night">45</td>
                <td class="bg-chair-night">{!! $sum3 !!}</td>
                <td class="bg-chair-night">485</td>
                <td class="bg-chair-night">{!! $total !!}</td>
            </tr>
        </table>
        <h2>Магистратура</h2>
        <table class="report">
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
                <td>-</td>
                <td class="bg-chair">{!! $countMaster1 !!}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Авиационная техника и технологии (научно-педагогическая магистратура)</td>
                <td>12</td>
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
                <td rowspan="2">20</td>
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
                <td class="bg-chair-night"><b>37</b></td>
                <td class="bg-chair-night"><b>22</b></td>
                <td class="bg-chair-night"><b>{!! $totalMaster !!}</b></td>
            </tr>
        </table>
        <h2>Докторантура</h2>
        <table class="report">
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
        </table>
        <h3>Итого анкет: {!! $countAll !!}</h3>
    </div>
@endsection
