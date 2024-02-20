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


    <section id="book_collection">
        <div class="container">
            <div class="title text-center">
                <h2>{{ __('ПОДПИСНЫЕ БАЗЫ ДАННЫХ') }}</h2>
                <div class="border"></div>
            </div>
            <div class="row" id="book_collections">
                            <div class="oneBook col-md-3 col-12 col-sm-6">
                                <a href="http://rmebrk.kz/">
                                    <img
                                    src="\assets\images\library\riel.png">
                                </a>
                                <h3>
                                    РМЭБ
                                </h3>
                                Республиканская межвузовская электронная библиотека - информационная и справочно-поисковая библиотечная система
                            </div>

                            <div class="oneBook col-md-3 col-12 col-sm-6">
                                <a href="https://www.iprbookshop.ru/">
                                    <img
                                    src="\assets\images\library\iprSmart.png">
                                </a>
                                <h3>
                                    IPR SMART
                                </h3>
                                Содержится литература по различным группам специальностей, что дает возможность учебным заведениям разных профилей найти интересующие их издания
                            </div>

                            <div class="oneBook col-md-3 col-12 col-sm-6">
                                <a href="https://search.ebscohost.com/">
                                    <img
                                    src="\assets\images\library\EBSCO.png">
                                </a>
                                <h3>
                                    EBSCO
                                </h3>
                                EBSCO Publishing - крупнейший поставщик научных ресурсов ведущих издательств мира
                            </div>

                            <div class="oneBook col-md-3 col-12 col-sm-6">
                                <a href="https://www.elibrary.ru/">
                                    <img
                                    src="\assets\images\library\eLibrary.png">
                                </a>
                                <h3>
                                    eLIBRARY
                                </h3>
                                Крупнейший российский информационно-аналитический портал в области науки, технологии, медицины и образования
                            </div>
            </div>
        </div>
    </section>


    @if (count($newbooks) > 0)
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
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(unserialize($item->descriptions)->ru, 100) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(unserialize($item->descriptions)->kk, 100) !!}
                                        @else
                                            {!! Str::limit(unserialize($item->descriptions)->en, 100) !!}
                                        @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
