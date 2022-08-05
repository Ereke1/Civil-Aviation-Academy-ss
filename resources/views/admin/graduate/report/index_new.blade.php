@extends('admin.layouts.app')
@php $parrentCat  = 'Выпускники' @endphp
@php $active_menu = 'Отчёт выпускники';
@endphp
@section('content')
    <div class="report">
        <h2>Выпускники бакалавриат, магистратура  2022г.</h2>
        <table class="table-filter">
            <tr>
                <th rowspan="2">№ п/п</th>
                <th rowspan="2">Образовательная программа</th>
                <th rowspan="2">Очная форма обучения</th>
                <th rowspan="2">ДОТ</th>
                <th rowspan="2">Ожидаемый выпуск в 2022 году</th>
                <th colspan="4">Трудоустроены</th>
                <th rowspan="2">%</th>
                <th rowspan="2">примечание</th>
                <th rowspan="2">Поступающие в магистратуру</th>
            </tr>
            <tr>
                <th>грант</th>
                <th>платное</th>
                <th>ДОТ</th>
                <th>Всего</th>
            </tr>
            @foreach ($data as $item)
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
                    <td>{!! $item->graduate_status !!}</td>
                    <td>{!! $item->magister !!}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
