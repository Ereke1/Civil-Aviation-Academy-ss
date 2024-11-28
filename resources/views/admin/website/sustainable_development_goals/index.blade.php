@extends('admin.layouts.app')
@php $parrentCat  = 'Управление новостями и событиями' @endphp
@php $active_menu  = 'ЦУР' @endphp
@section('content')
    <h1>Управление страницами ЦУР</h1>
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Публикации ЦУР</h2>
                </div>
                <div class="pages__add-page">
                    <a href="{{ route('admin.website.sustainable_development_goals.create') }}" class="btn btn-secondary">
                        Добавить публикацию
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap mb-2">
            <div class="col-md-5 pl-0">
                <b>Название</b>
            </div>
            <div class="col-md-3">
                <b>Цель УР</b>
            </div>
            <div class="col-md-2 text-center">
                <b>Ссылка</b>
            </div>
            <div class="col-md-1 text-center">
                <b>Удаление</b>
            </div>
            <div class="col-md-1 text-right">
                <b>Редактирование</b>
            </div>
        </div>
        @foreach ($goalsInfo as $goalsInfoItem)
            <div class="d-flex flex-wrap mb-2">
                <div class="col-md-5 pl-0">
                    {!! $goalsInfoItem->title !!}
                </div>
                <div class="col-md-3">
                    {!! $goalsInfoItem->goal_name !!}
                </div>
                <div class="col-md-2 text-center">
                    {!! $goalsInfoItem->link !!}
                </div>
                <div class="col-md-1 text-center">
                    <form action="{{ route('admin.website.sustainable_development_goals.destroy', $goalsInfoItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Вы уверены что хотите удалить кафедру?')">
                            Удалить
                        </button>
                    </form>
                </div>
                <div class="col-md-1 text-right">
                    <a class="btn btn-primary" href="{{ route('admin.website.sustainable_development_goals.edit', $goalsInfoItem->id) }}">
                        Редактировать
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </section>
@endsection

@section('scripts')
    @include('admin.ckeditor')
@endsection
