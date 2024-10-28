@extends('front.layouts.app')
@section('title')
    Академия Гражданской Авиации
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                {{ __('Курсы') }}
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">
                    {{ __('Главная') }}
                </a>
                <span> > </span>
                <span>
                    {{ __('Курсы') }}
                </span>
            </div>
            <br>

            <div class="container">
                <div class="filter">
                    <form action="{{ route('front.training_courses') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="filter_training_center_id" class="font-weight-bold">{{ __('Центр') }}</label>
                                <select name="filter_training_center_id" class="custom-select">
                                    <option value=""></option>
                                    @foreach ($training_centers as $training_center)
                                        <option value="{!! $training_center->id !!}"
                                            @if ($filter_training_center_id == $training_center->id) selected @endif>
                                            @if (Config::get('app.locale') === 'ru')
                                                {!! $training_center->name_ru !!}
                                            @elseif(Config::get('app.locale') === 'kk')
                                                {!! $training_center->name_kz !!}
                                            @else
                                                {!! $training_center->name_en !!}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="filter_training_type_id"
                                    class="font-weight-bold">{{ __('Тип подготовки') }}</label>
                                <select name="filter_training_type_id" class="custom-select">
                                    <option value=""></option>
                                    @foreach ($training_types as $training_type)
                                        <option value="{!! $training_type->id !!}"
                                            @if ($filter_training_type_id == $training_type->id) selected @endif>
                                            @if (Config::get('app.locale') === 'ru')
                                                {!! $training_type->name_ru !!}
                                            @elseif(Config::get('app.locale') === 'kk')
                                                {!! $training_type->name_kz !!}
                                            @else
                                                {!! $training_type->name_en !!}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <label for="filter_from_date" class="font-weight-bold">{{ __('Дата начала') }}</label>
                                <input type="date" name="filter_from_date" value="{{ $filter_from_date }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <label for="filter_to_date" class="font-weight-bold">{{ __('Дата окончания') }}</label>
                                <input type="date" name="filter_to_date" value="{{ $filter_to_date }}"
                                    class="form-control">
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">{{ __('Применить') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container mt-3 mb-4">
                <input class="form-control" id="searchInput" type="text" placeholder="{{ __('Поиск курсов.....') }}">
            </div>

            <div class="container overflow-hidden ourteam" id="coursesList">
                <div class="row gy-4 gy-lg-4 gx-xxl-5">

                    @foreach ($training_courses as $course)
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card h-100 border-0 border-bottom border-primary shadow overflow-hidden">
                                <div class="card-body p-0">
                                    <figure class="m-0 p-0 row">
                                        <div class="col-lg-3 d-flex ">
                                            <img class="img-fluid" loading="lazy"
                                                @if ($course->training_center_id === 3) {{-- EASA PART FCL --}}
                                        src="\assets\images\1ик.png"
                                        @elseif($course->training_center_id === 4) {{-- ЦПИТАП --}}
                                        src="\assets\images\2ик.png"
                                        @elseif($course->training_center_id === 5) {{-- АЦ IATA --}}
                                        src="\assets\images\3ик.png"
                                        @elseif($course->training_center_id === 6) {{-- УЦАБ ИКАО --}}
                                        src="\assets\images\4ик.png" @endif />
                                        </div>

                                        <figcaption class="m-0 p-4 col-lg-9">
                                            <h4 class="mb-1">
                                                @if (Config::get('app.locale') === 'ru')
                                                    {!! $course->title_ru !!}
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    {!! $course->title_kk !!}
                                                @else
                                                    {!! $course->title_en !!}
                                                @endif
                                            </h4>

                                            <h6>&nbsp;</h6>
                                            <h6>{{ __('Тип подготовки') }}:</h6>
                                            <p>
                                                @if (Config::get('app.locale') === 'ru')
                                                    {!! $course->training_type_name_ru !!}
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    {!! $course->training_type_name_kk !!}
                                                @else
                                                    {!! $course->training_type_name_en !!}
                                                @endif
                                            </p>

                                            <h6>{{ __('Продолжительность') }}:</h6>
                                            <p>{!! $course->duration_hours !!} {{ __('часов') }}/{!! $course->duration_days !!}
                                                {{ __('дня') }}</p>

                                            <h6>{{ __('Цена') }}:</h6>
                                            <p>{!! $course->price !!} {{ __('тенге') }}</p>

                                            <h6>{{ __('Ближайшие даты') }}:</h6>
                                            @if ($course->start_date != null && $course->end_date != null)
                                                <p>{!! date('d.m.Y', strtotime($course->start_date)) !!} - {!! date('d.m.Y', strtotime($course->end_date)) !!}</p>
                                            @endif

                                            <div class="card" style="margin-bottom: 3px;">
                                                <a class="card-link collapsed" data-toggle="collapse"
                                                    href="#course{!! $course->id !!}">
                                                    <div class="card-header"
                                                        style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                                                        {{ __('Подробнее') }}
                                                    </div>
                                                </a>

                                                <div class="collapse show" data-parent="#accordion"
                                                    id="course{!! $course->id !!}"
                                                    style="height: 0px; overflow-x: auto;">
                                                    <div class="card-body">
                                                        <p>
                                                            @if (Config::get('app.locale') === 'ru')
                                                                {!! $course->desc_ru !!}
                                                            @elseif(Config::get('app.locale') === 'kk')
                                                                {!! $course->desc_kk !!}
                                                            @else
                                                                {!! $course->desc_en !!}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>

                                    </figure>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <br>
            <br>
            <br>

        </div>
    </section>


    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".col-12.col-md-6.col-lg-6").filter(function() {
                    $(this).toggle($(this).find("figcaption h4").text().toLowerCase().indexOf(
                        value) > -1);
                });
            });
        });
    </script>
@endsection
