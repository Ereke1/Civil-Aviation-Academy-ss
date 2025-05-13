@extends('admin.layouts.app')
@php $parrentCat = 'Абитуриенты' @endphp
@php $active_menu = 'Регистрация на тест и интервью' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Регистрация на тест и интервью</h1>

    <h2>Фильтр</h2>
    <div class="filter">
        <form action="{{ route('admin.enrollee.onlineRegForTest.index') }}">
            @csrf
            <div>
                <label for="test_date">Дата теста</label>
                <input type="date" name="test_date"
                 @if ($test_date != '') value="{!! $test_date !!}" @endif>
            </div>
            <div>
                <button>Применить</button>
            </div>
        </form>
    </div>

    <h3>Всего анкет: {!! $countData !!}</h3>
    <table class="table-filter">
        <tr>
            <th>Дата подачи</th>
            <th>ФИО</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Дата теста</th>
            <th style="text-align: right">Детально</th>
        </tr>
        @if (isset($data))
            @foreach ($data as $item)
                <tr>
                    <td>{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</td>
                    <td>{!! $item->surname !!} {!! $item->name !!} {!! $item->patronymic !!}</td>
                    <td>{!! $item->email !!}</td>
                    <td>{!! $item->phone !!}</td>
                    <td>{!! date('d.m.Y', strtotime($item->test_date)) !!}</td>
                    <td style="text-align: right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal{!! $item->id !!}">
                            Посмотреть
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="userModal{!! $item->id !!}" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.enrollee.onlineRegForTest.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="blocks">
                                        <div class="block">
                                            <h5 class="block__title">Дата подачи</h5>
                                            <p class="block__info">{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Дата теста</h5>
                                            <p class="block__info">{!! date('d.m.Y', strtotime($item->test_date)) !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Email</h5>
                                            <p class="block__info">{!! $item->email !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Фамилия</h5>
                                            <input type="text" value="{!! $item->surname !!}" name="surname" class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Имя</h5>
                                            <input type="text" value="{!! $item->name !!}" name="name" class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Отчество</h5>
                                            <input type="text" value="{!! $item->patronymic !!}" name="patronymic"
                                                class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Телефон</h5>
                                            <input type="text" value="{!! $item->phone !!}" name="phone" class="block__info">
                                        </div>
                                        <div class="block">
                                            <button type="submit" class="button">Сохранить изменения</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="blocks">
                                    <div class="block">
                                        <form action="{{ route('admin.enrollee.onlineRegForTest.edit', $item->id) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="button btn-danger"  style="background-color: #C42957;"
                                                onclick="return confirm('Удалить?')">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            Абитуриентов не найдено
        @endif
    </table>
    <div style="margin-top: 20px">
        {{ $data->links('admin.pagination.default') }}
    </div>
@endsection