@extends('front.layouts.app')
@section('title')
    Академия Гражданской Авиации
@endsection
@section('content')
    <section id="news">
        <div class="container pt-3 pb-3">
            <div class="d-flex flex-wrap">
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-10 col-lg-8 col-12 pl-0 pr-1 pb-1">
                    <h1>
                        @if (Config::get('app.locale') === 'ru')
                            {!! $news->title_ru !!}
                        @elseif(Config::get('app.locale') === 'kk')
                            {!! $news->title_kk !!}
                        @else
                            {!! $news->title_en !!}
                        @endif
                    </h1>
                    <div class="breadcrumbs">
                        <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                        <span> > </span>
                        <a href="{!! route('front.departments.index') !!}">{{ __('Кафедры') }}</a>
                        <span> > </span>
                        <a href="{!! route('front.departments.show', $department->slug) !!}">{!! __($department->name) !!}</a>
                        <span> > </span>
                        @if (Config::get('app.locale') === 'ru')
                            Мероприятия
                        @elseif(Config::get('app.locale') === 'kk')
                            Іс-шаралар
                        @else
                            Events
                        @endif
                        <span> > </span>
                        <span>
                            @if (Config::get('app.locale') === 'ru')
                                {!! $news->title_ru !!}
                            @elseif(Config::get('app.locale') === 'kk')
                                {!! $news->title_kk !!}
                            @else
                                {!! $news->title_en !!}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
            </div>
        </div>
        <div class="container pt-3 pb-3">
            <div class="d-flex flex-wrap">
                {{-- <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-10 col-lg-8 col-12 pl-0 pr-1 pb-1">
                    <div class="main-image">
                        <a class="group main-image__link" data-fancybox="images"
                            href="/storage/news/{!! $news->bg_image !!}">
                            <div class="main-image__bg"></div>
                            <img src="/storage/newsCafedra/{!! $news->bg_image !!}" class="h-100 w-100" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div>
                <div class="col-md-10 col-lg-8 col-12 detail-news">--}}
                    @if (Config::get('app.locale') === 'ru')
                        {!! $news->description_ru !!}
                    @elseif(Config::get('app.locale') === 'kk')
                        {!! $news->description_kk !!}
                    @else
                        {!! $news->descriptions_en !!}
                    @endif
                {{-- </div> --}}
                {{-- <div class="col-md-1 col-lg-2 col-0 pl-0 pr-1 pb-1"></div> --}}
            </div>
        </div>
    </section>
@endsection
@section('fancybox')
    @include('front.fancybox')
@endsection
