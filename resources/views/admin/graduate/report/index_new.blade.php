@extends('admin.layouts.app')
@php $parrentCat  = 'Выпускники' @endphp
@php $active_menu = 'Отчёт выпускники';
@endphp
@section('content')
    <div class="report">
        <h2>Выпускники бакалавриат, магистратура  2022г.</h2>
        <h3>Скачать в <a href="{{route('admin.graduate.report.pdf_new')}}">PDF</a></h3>
        <table class="report">
            <tr style="background: #00249c;color: #fff;">
                <th rowspan="2">№ п/п</th>
                <th rowspan="2">Образовательная программа</th>
                <th rowspan="2">Очная форма обучения</th>
                <th rowspan="2">ДОТ</th>
                <th rowspan="2">Ожидаемый выпуск в 2022 году</th>
                <th colspan="5">Трудоустроены</th>
                <th rowspan="2">Не трудоустроены</th>
                <th rowspan="2">примечание</th>
                <th rowspan="2">Поступающие в магистратуру</th>
            </tr>
            <tr style="background: #00249c;color: #fff;">
                <th>грант</th>
                <th>платное</th>
                <th>ДОТ</th>
                <th>Всего</th>
                <th>%</th>
            </tr>
            @foreach ($dataBach as $item)
                <tr>
                    <td>{!! $item->num_row !!}</td>
                    <td>{!! $item->speciality !!}</td>
                    <td>{!! $item->ochnoe !!}</td>
                    <td>{!! $item->dot !!}</td>
                    <td>{!! $item->vse !!}</td>
                    <td>{!! $item->work_grant !!}</td>
                    <td>{!! $item->work_platn !!}</td>
                    <td>{!! $item->work_dot !!}</td>
                    <td>{!! $item->work_vse !!}</td>
                    <td>{!! $item->percent !!}</td>
                    <td>{!! $item->notwork_vse !!}</td>
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach

            @foreach ($dataBachAll as $item)
                <tr class="bg-chair">
                    <td>{!! $item->num_row !!}</td>
                    <td>{!! $item->speciality !!}</td>
                    <td>{!! $item->ochnoe !!}</td>
                    <td>{!! $item->dot !!}</td>
                    <td>{!! $item->vse !!}</td>
                    <td>{!! $item->work_grant !!}</td>
                    <td>{!! $item->work_platn !!}</td>
                    <td>{!! $item->work_dot !!}</td>
                    <td>{!! $item->work_vse !!}</td>
                    <td>{!! $item->percent !!}</td>
                    <td>{!! $item->notwork_vse !!}</td>
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach

            <tr style="background: #00249c;color: #fff;">
                <th></th>
                <th>Магистратура</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($dataMag as $item)
                <tr>
                    <td>{!! $item->num_row !!}</td>
                    <td>{!! $item->op_group !!}</td>
                    <td>{!! $item->ochnoe !!}</td>
                    <td>{!! $item->dot !!}</td>
                    <td>{!! $item->vse !!}</td>
                    <td>{!! $item->work_grant !!}</td>
                    <td>{!! $item->work_platn !!}</td>
                    <td>{!! $item->work_dot !!}</td>
                    <td>{!! $item->work_vse !!}</td>
                    <td>{!! $item->percent !!}</td>
                    <td>{!! $item->notwork_vse !!}</td>
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach

            @foreach ($dataMagAll as $item)
                <tr class="bg-chair">
                    <td>{!! $item->num_row !!}</td>
                    <td>{!! $item->op_group !!}</td>
                    <td>{!! $item->ochnoe !!}</td>
                    <td>{!! $item->dot !!}</td>
                    <td>{!! $item->vse !!}</td>
                    <td>{!! $item->work_grant !!}</td>
                    <td>{!! $item->work_platn !!}</td>
                    <td>{!! $item->work_dot !!}</td>
                    <td>{!! $item->work_vse !!}</td>
                    <td>{!! $item->percent !!}</td>
                    <td>{!! $item->notwork_vse !!}</td>
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach

            @foreach ($dataAll as $item)
                <tr class="bg-chair-night">
                    <td>{!! $item->num_row !!}</td>
                    <td>{!! $item->op_group !!}</td>
                    <td>{!! $item->ochnoe !!}</td>
                    <td>{!! $item->dot !!}</td>
                    <td>{!! $item->vse !!}</td>
                    <td>{!! $item->work_grant !!}</td>
                    <td>{!! $item->work_platn !!}</td>
                    <td>{!! $item->work_dot !!}</td>
                    <td>{!! $item->work_vse !!}</td>
                    <td>{!! $item->percent !!}</td>
                    <td>{!! $item->notwork_vse !!}</td>
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
