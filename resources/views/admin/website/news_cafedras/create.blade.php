@extends('admin.layouts.app')
@php $parrentCat  = 'Управление сайтом' @endphp
@php $active_menu  = 'Мероприятия кафедры' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Мероприятия кафедры</h1>
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Создание поста</h2>
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
                <form action="{{ route('admin.website.news_cafedras.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="ru-block">
                        <div class="mb-4">
                            <label class="font-weight-bold">Кафедра</label>
                            <select class="form-control" aria-label="Default select example" name="department_id"
                                required>
                                <option selected value="" disabled>-----</option>
                                @foreach ($departments as $department)
                                    <option value="{!! $department->id !!}">{!! $department->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Название</label>
                            <input type="text" name="title_ru" class="form-control"
                                required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Описание</label>
                            <textarea type="text" name="description_ru" id="editor-ru" class="form-control"></textarea>
                        </div>
                    </div>
                    <div id="kk-block" style="display: none">
                        <div class="mb-4">
                            <label class="font-weight-bold">Атауы</label>
                            <input type="text" name="title_kk" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Сипаттамасы</label>
                            <textarea type="text" name="description_kk" id="editor-kz" class="form-control"></textarea>
                        </div>
                    </div>
                    <div id="en-block" style="display: none">
                        <div class="mb-4">
                            <label class="font-weight-bold">Title</label>
                            <input type="text" name="title_en" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Description</label>
                            <textarea type="text" name="description_en" id="editor-en" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="font-weight-bold">Фоновое изображение</label>
                        <input type="file" name="bg_image" class="form-control-file"  required/>
                    </div>
                    <div>
                        <label class="font-weight-bold">Дата и время публикации</label>
                        <input type="datetime-local" name="publish_at" class="form-control" required>
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
