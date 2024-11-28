@extends('admin.layouts.app')
@php $parrentCat  = 'Управление новостями и событиями' @endphp
@php $active_menu  = 'ЦУР' @endphp
@section('content')
    <h1>Редактирование ЦУР</h1>
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <section id="pages">
        <div class="pages">
            <div class="pages__head">
                <div class="pages__title">
                    <h2>Редактирование публикации ЦУР</h2>
                </div>
            </div>
            <div id="lang-blocks" class="mt-3">
                <form action="{{ route('admin.website.sustainable_development_goals.update', $goalsInfo->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
						  @method('PUT')
                    <div id="ru-block">


                        <div class="mb-4">
                            <label class="font-weight-bold">Выберите цель</label>
                            <select class="form-control" aria-label="Default select example" name="goal_id" required>
                                <option selected value="{!! $goalsInfo->goal_id !!}" disabled>-----</option>
                                @foreach ($goals as $goal)
                                    <option value="{!! $goal->id !!}"@if ($goalsInfo->goal_id == $goal->id) selected @endif>{!! $goal->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Заголовок (рус)</label>
                            <input type="text" name="title_ru" class="form-control" value="{!! $goalsInfo->title_ru !!}" required />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Тапқырыбы (қаз)</label>
                            <input type="text" name="title_kk" value="{!! $goalsInfo->title_kk !!}"  class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Title (eng)</label>
                            <input type="text" name="title_en" value="{!! $goalsInfo->title_en !!}"  class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Ссылка (на новость, пост в соц.сетях итд.)</label>
                            <input type="text" name="link" value="{!! $goalsInfo->link !!}"  class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="font-weight-bold">Изображение</label>
                            <img src="{!! $goalsInfo->image !!}" class="mb-2" alt="" width="200" height="150">
                        </div>
                        <div class="mb-4">
                            <label >Если хотите изменить фононовое изображения, <b>выберите новое</b></label>
                            <input type="file" name="image" class="form-control-file"  />
                        </div>
                    </div>
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
