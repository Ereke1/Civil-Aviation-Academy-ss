@extends('admin.layouts.app')
@php $parrentCat  = 'Управление АУЦ' @endphp
@php $active_menu  = 'Курсы АУЦ' @endphp
@section('content')
    <h1>Курсы АУЦ</h1>
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Курсы АУЦ</h2>
                </div>
                <div class="pages__add-page">
                    <a href="{{ route('admin.website.training_courses.create') }}" class="btn btn-secondary">
                        Добавить курс
                    </a>
                </div>
            </div>
            <div class="pages__content">
                <div class="pages__page thead">
                    <p style="width: 50%">Название</p>
                    <p class="text-center" style="width: 15%">Центр</p>
                    <p class="text-center" style="width: 15%">Тип подготовки</p>
                    <p class="text-right" style="width: 20%">Редактирование</p>
                </div>
                @foreach ($training_courses as $item)
                    <div class="pages__page">
                        <p style="width: 50%">{!! $item->training_course !!}
                        </p>
                        <p class="text-center" style="width: 15%">{!! $item->training_center !!}</p>
                        <p class="text-center" style="width: 15%">{!! $item->training_type !!}</p>
                        <div class="text-right d-flex flex-row-reverse" style="width: 20%">
                            <a href="{{ route('admin.website.training_courses.edit', $item->id) }}"
                                class="btn btn-primary ml-1">Редактировать</a>
                            <form action="{{ route('admin.website.training_courses.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Вы точно хотите удалить?')">Удалить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @include('admin.ckeditor')
@endsection
