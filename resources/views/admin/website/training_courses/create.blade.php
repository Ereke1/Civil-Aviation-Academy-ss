@extends('admin.layouts.app')
@php $parrentCat  = 'Управление АУЦ' @endphp
@php $active_menu  = 'Курсы АУЦ' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Курсы АУЦ</h1>
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Создание курса</h2>
                </div>
            </div>
            <div class="pages__content">
                <div class="d-flex switcher" id="lang">
                    <p id="ru" class="pr-3 pl-3 pb-2 pt-2 text-center border bg-light text-black">Русский</p>
                    <p id="kk" class="pr-3 pl-3 pb-2 pt-2 text-center border bg-primary text-white">Қазақ</p>
                    <p id="en" class="pr-3 pl-3 pb-2 pt-2 text-center border bg-primary text-white">English</p>
                </div>
            </div>
            <div id="lang-blocks" class="mt-3">
                <form action="{{ route('admin.website.training_courses.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="ru-block">
                        <div class="mb-4">
                            <label class="font-weight-bold">Название</label>
                            <input type="text" name="title_ru" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Описание</label>
                            <textarea name="desc_ru" id="editor-ru" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div id="kk-block" style="display: none">
                        <div class="mb-4">
                            <label class="font-weight-bold">Атауы</label>
                            <input type="text" name="title_kk" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Сипаттамасы</label>
                            <textarea name="desc_kk" id="editor-kz" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div id="en-block" style="display: none">
                        <div class="mb-4">
                            <label class="font-weight-bold">Title</label>
                            <input type="text" name="title_en" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Description</label>
                            <textarea name="desc_en" id="editor-en" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="training_center_id" class="font-weight-bold">Центр</label>
                        <select name="training_center_id" class="form-control">
                            <option value=""></option>
                            @foreach ($training_centers as $item)
                            <option value="{!! $item->id !!}">{!! $item->name_ru !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="training_type_id" class="font-weight-bold">Тип подготовки</label>
                        <select name="training_type_id" class="form-control">
                            <option value=""></option>
                            @foreach ($training_types as $item)
                            <option value="{!! $item->id !!}">{!! $item->name_ru !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="font-weight-bold">Продолжительность - часы</label>
                        <input type="text" name="duration_hours" class="form-control" />
                    </div>
                    <div class="mb-4">
                        <label class="font-weight-bold">Продолжительность - дни</label>
                        <input type="text" name="duration_days" class="form-control" />
                    </div>
                    <div class="mb-4">
                        <label class="font-weight-bold">Цена</label>
                        <input type="text" name="price" class="form-control" />
                    </div>
                    <div class="mb-4">
                        <label class="font-weight-bold">Дата с</label>
                        <input type="datetime-local" name="start_date" class="form-control" style="width: auto;">
                    </div>
                    <div class="mb-4">
                        <label class="font-weight-bold">Дата до</label>
                        <input type="datetime-local" name="end_date" class="form-control" style="width: auto;">
                    </div>
                    <br />
                    <div class="block">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
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