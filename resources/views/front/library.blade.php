@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section class="wrapper" id="center">
        <div class="container">
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                <span> > </span>
                <span>{{ __('Библиотека') }}</span>
            </div>
            <div class="row">
                <div class="col text-center mb-5">
                    <h1 class="display-4">{{ __('Библиотека') }}</h1>
                    <p class="lead">
                    </p>
                </div>
            </div>
            <section class="services" id="services" style="background: #fff">
                <div class="container" style="margin-bottom: 5vw">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/lib.jpg)">
                                <h4>
                                    <a class="stretched-link" href="/o-biblioteke">{{ __('О библиотеке') }}</a>
                                </h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/elib.jpg);">
                                <h4><a class="stretched-link" href="http://bi.agakaz.kz/">{{ __('Электронная библиотека') }}</a></h4>

                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/for_readers.jpg);">
                                <h4><a class="stretched-link" href="/chitatelyam">{{ __('Читателям') }}</a>
                                </h4>

                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/memo.jpg);">
                                <h4><a class="stretched-link" href="/pamyatka-dlya-chitateley">{{ __('Памятка для читателей') }}</a></h4>

                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>

    @if (!empty($bookcollection))
    <section id="book_collection">
        <div class="container">
            <div class="title text-center wow animated zoomInDown">
                <h2>{{ __('ПОДБОРКА КНИГ') }}</h2>
                <div class="border"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div id="book_collections" class="owl-carousel outer">

                            @foreach ($bookcollection as $item)
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                    src="/storage/books/book_collection/@if (Config::get('app.locale') === 'ru'){!! unserialize($item->cover_imgs)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if(empty(unserialize($item->cover_imgs)->kk)){!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->kk !!}@endif @elseif(Config::get('app.locale') === 'en')@if(empty(unserialize($item->cover_imgs)->en)){!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->en !!}@endif @endif">
                                </a>
                                <h3>
                                    @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->titles)->ru, 40) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->titles)->kk, 40) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->titles)->en, 40) !!}
                                        @endif
                                </h3>
                                <p style="line-height: normal">
                                    @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->authors)->ru, 40) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->authors)->kk, 40) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->authors)->en, 40) !!}
                                        @endif
                                </p>
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->descriptions)->ru) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->descriptions)->kk) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->descriptions)->en) !!}
                                        @endif
                            </div>
                        @endforeach

                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://www.pngmart.com/files/8/Book-Cover-Transparent-Background.png"
                                        alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://www.pngmart.com/files/8/Book-Cover-Transparent-Background.png"
                                        alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://www.pngmart.com/files/8/Book-Cover-Transparent-Background.png"
                                        alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://edit.org/images/cat/book-covers-big-2019101610.jpg" alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="inner">
                                <a href="#book_collection">
                                    <img class="img-responsive"
                                        src="https://www.pngmart.com/files/8/Book-Cover-Transparent-Background.png"
                                        alt="">
                                </a>
                                <h3>Название книги</h3>
                                <p style="line-height: normal">Автор книги</p>
                                <p style="line-height: normal">Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (!empty($newbooks))
    <section id="newBooks">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>{{ __('Новые поступления') }}</h2>
                    </div>
                    <div id="newBook" class="owl-carousel">
                        @foreach ($newbooks as $item)
                            <div class="row block wow fadeInRight">
                                <div class="col-5">
                                    <span>
                                        <img alt="" class="img-responsive"
                                            src="/storage/books/newbooks/@if (Config::get('app.locale') === 'ru'){!! unserialize($item->cover_imgs)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if(empty(unserialize($item->cover_imgs)->kk)){!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->kk !!}@endif @elseif(Config::get('app.locale') === 'en')@if(empty(unserialize($item->cover_imgs)->en)){!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->en !!}@endif @endif">
                                    </span>
                                </div>
                                <div class="content col-7">
                                    <h4>
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->titles)->ru, 40) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->titles)->kk, 40) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->titles)->en, 40) !!}
                                        @endif
                                    </h4>
                                    <small>
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->authors)->ru, 40) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->authors)->kk, 40) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->authors)->en, 40) !!}
                                        @endif
                                    </small>
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->descriptions)->ru) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->descriptions)->kk) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->descriptions)->en) !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    @endif

@endsection
