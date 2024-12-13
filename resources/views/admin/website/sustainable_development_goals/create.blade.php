@extends('admin.layouts.app')
@php $parrentCat  = 'Управление новостями и событиями' @endphp
@php $active_menu  = 'ЦУР' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Создание публикации ЦУР</h1>
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Создание публикации ЦУР</h2>
                </div>
            </div>
            <div id="lang-blocks" class="mt-3">
                <form action="{{ route('admin.website.sustainable_development_goals.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="ru-block">
                        <div class="mb-4">
                            <label class="font-weight-bold">Выберите цель</label>
                            <select class="form-control" aria-label="Default select example" name="goal_id" required>
                                <option selected value="" disabled>-----</option>
                                @foreach ($goals as $goal)
                                    <option value="{!! $goal->id !!}">{!! $goal->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Заголовок (рус)</label>
                            <input type="text" name="title_ru" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Тақырыбы (қаз)</label>
                            <input type="text" name="title_kk" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Title (eng)</label>
                            <input type="text" name="title_en" class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Ссылка (на новость, пост в соц.сетях итд.)</label>
                            <input type="text" name="link" class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Изображение</label>
                            <input type="file" name="image" class="form-control-file" required />
                        </div>
                    </div>
                    <div class="block">
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.languages')
@endsection

@section('scripts')
    @include('admin.ckeditor')
@endsection
