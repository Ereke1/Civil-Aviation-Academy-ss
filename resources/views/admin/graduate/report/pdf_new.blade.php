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
		  .table-grant{
			  margin-bottom: 20px;
		  }
        .table-grant tr,
        .table-grant th,
        .table-grant td {
            padding: 10px 0;
        }
        .table-paid tr,
        .table-paid th,
        .table-paid td {
            padding: 2px 0;
        }

        tr,
        th,
        td {
            border: 1px solid black;
            text-align: center;
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
    <div class="wrapper">
        <div class="report">
            <h1>Выпускники бакалавриат, магистратура 2022г.<span> {!! $today->format('d.m.Y') !!}</span></h1>
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
    </div>
