@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section class="wrapper" id="center"
        style="background: linear-gradient( rgb(0 0 0 / 40%), rgb(0 0 0 / 40%) ), url(/assets/images/library/library-zoom-background-1920-x-1080.jpg);">
        <div class="container">
            {{-- <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                <span> > </span>
                <span>{{ __('Библиотека') }}</span>
            </div> --}}
            <div class="row">
                <div class="col text-center mb-5 text-white">
                    <h1 class="display-4">{{ __('Библиотека') }}</h1>
                    <p class="lead">
                    </p>
                </div>
            </div>
            <section class="services" id="services" style="background: transparent">
                <div class="container" style="margin-bottom: 5vw">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library"
                                style="background-image: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(/assets/images/lib.jpg)">
                                <h4>
                                    <a class="stretched-link" href="/o-biblioteke">{{ __('О библиотеке') }}</a>
                                </h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library"
                                style="background-image: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(/assets/images/elib.jpg);">
                                <h4><a class="stretched-link"
                                        href="http://bi.agakaz.kz/">{{ __('Электронная библиотека') }}</a></h4>

                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library"
                                style="background-image: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(/assets/images/for_readers.jpg);">
                                <h4><a class="stretched-link" href="/chitatelyam">{{ __('Читателям') }}</a>
                                </h4>

                                <p></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box library"
                                style="background-image: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(/assets/images/memo.jpg);">
                                <h4><a class="stretched-link"
                                        href="/pamyatka-dlya-chitateley">{{ __('Памятка для читателей') }}</a></h4>

                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>

    <div class="col-12 d-flex align-items-stretch mt-4 wow fadeInUp animated" style="background-color: darkblue;">
        <div class="icon-box virtual_adm" style="padding: 10px 20px;">
            <h4 align="center"><img alt="" src="\assets\images\library\MinistryOfScience150x150.png"
                    style="width: 100px;" /></h4>

            <h4 align="center"><a class="stretched-link" href="https://caa.edu.kz/ministerstvo-obrazovaniya-i-nauki-respubliki-kazahstan-razrabotalo-elektronnye-portaly-napravlennye-na-rasshirenie-ispolzovaniya-kazahskogo-yazyka-403" style="text-decoration: none; color: white;">Министерство образования и науки Республики Казахстан разработало электронные порталы, направленные на расширение использования казахского языка.Подробнее...</a></h4>
        </div>
    </div>

    <hr class="col-12" style="background: darkblue;margin: 50px 0 45px 0;" />

    <section id="book_collection">
        <div class="container">
            <div class="title text-center">
                <h2>{{ __('ПОДПИСНЫЕ БАЗЫ ДАННЫХ') }}</h2>
                <div class="border"></div>
            </div>
            <div class="row" id="book_collections">
                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="http://rmebrk.kz/">
                        <img src="\assets\images\library\riel.png">
                    </a>
                    <h3>
                        РМЭБ
                    </h3>
                    Республиканская межвузовская электронная библиотека - информационная и справочно-поисковая библиотечная
                    система
                </div>

                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="https://www.iprbookshop.ru/">
                        <img src="\assets\images\library\iprSmart.png">
                    </a>
                    <h3>
                        IPR SMART
                    </h3>
                    Содержится литература по различным группам специальностей, что дает возможность учебным заведениям
                    разных профилей найти интересующие их издания
                </div>

                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="https://search.ebscohost.com/">
                        <img src="\assets\images\library\EBSCO.png">
                    </a>
                    <h3>
                        EBSCO
                    </h3>
                    EBSCO Publishing - крупнейший поставщик научных ресурсов ведущих издательств мира
                </div>

                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="https://www.elibrary.ru/">
                        <img src="\assets\images\library\libraryOfCongress.png">
                    </a>
                    <h3>
                        Library of Congress
                    </h3>
                    Библиотека Конгресса является крупнейшей библиотекой в мире, в ее фондах хранятся миллионы книг, фильмов
                    и видео, аудиозаписей, фотографий, газет, карт и рукописей. Библиотека является главным
                    исследовательским подразделением Конгресса США и штаб-квартирой Управления авторского права США.
                </div>

                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="https://www.elibrary.ru/">
                        <img src="\assets\images\library\libraryICAO.png">
                    </a>
                    <h3>
                        ICAO eLibrary
                    </h3>
                    Электронная библиотека ИКАО - это онлайн-хранилище цифровых публикаций Международной организации
                    гражданской авиации (ИКАО), содержащее стандарты и рекомендуемую практику (SARPS) в области
                    международной гражданской авиации, конвенции и связанные с ними акты.
                </div>

                <div class="oneBook col-md-4 col-12 col-sm-6">
                    <a href="https://www.elibrary.ru/">
                        <img src="\assets\images\library\eLibrary.png">
                    </a>
                    <h3>
                        eLIBRARY
                    </h3>
                    Крупнейший российский информационно-аналитический портал в области науки, технологии, медицины и
                    образования
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
                                                src="/storage/books/newbooks/@if (Config::get('app.locale') === 'ru') {!! unserialize($item->cover_imgs)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if (empty(unserialize($item->cover_imgs)->kk)){!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->kk !!} @endif
@elseif(Config::get('app.locale') === 'en')
@if (empty(unserialize($item->cover_imgs)->en)) {!! unserialize($item->cover_imgs)->ru !!}@else{!! unserialize($item->cover_imgs)->en !!} @endif @endif">
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
