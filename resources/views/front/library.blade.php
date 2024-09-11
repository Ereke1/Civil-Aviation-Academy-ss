@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section class="wrapper" id="center"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) ), url(/assets/images/library/lib_wallpaper.jpg); background-size: cover;height: 500px;">
        <div class="container">

            {{-- @include('front.inc.header_library') --}}

            <div class="row">
                <div class="col text-center mb-5 text-white">
                    <h1 class="display-4" style="font-weight: bold;margin-top: 100px;">{{ __('Библиотека') }}</h1>
                    <p class="lead">{{ __('Академия гражданской авиации') }}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex align-items-stretch mt-4 wow fadeInUp animated container-fluid" style="background-color: #00249c;">
        <div class="col-12 icon-box virtual_adm row" style="padding: 10px 20px;">
            <div class="col-sm-12 col-md-3 col-lg-2">
                <p align="center"><img alt="" src="\assets\images\library\MinistryOfScience150x150.png"
                        style="width: 85px;"></p>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10" style="display: grid;align-items: center;">
                <h4 style="text-align: left;">
                    <a class="stretched-link"
                        href="{!! env('APP_URL') !!}ministerstvo-obrazovaniya-i-nauki-respubliki-kazahstan-razrabotalo-elektronnye-portaly-napravlennye-na-rasshirenie-ispolzovaniya-kazahskogo-yazyka-403"
                        style="text-decoration: none;color: white;/* vertical-align: middle; */">{{ __('Министерство науки и высшего образования Республики Казахстан разработало электронные порталы, направленные на расширение использования казахского языка.Подробнее...') }}</a>
                </h4>
            </div>
        </div>
    </div>

    <hr style="background: darkblue;margin: 50px 0 45px 0;" />

    <section id="book_collection">
        <div class="container">
            <div class="row" id="book_collections">
                <div class="col-12 col-md-8" style="background: white">

                    <div class="row" id="book_collections">
                        <div class="title text-center col-12">
                            <h3>{{ __('ПОДПИСНЫЕ БАЗЫ ДАННЫХ') }}</h3>
                            <div class="border"></div>
                        </div>
                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="http://rmebrk.kz/">
                                <img src="\assets\images\library\riel.png">
                            </a>
                            <h3>
                                РМЭБ
                            </h3>
                            {{ __('Республиканская межвузовская электронная библиотека - информационная и справочно-поисковая библиотечная система') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.iprbookshop.ru/">
                                <img src="\assets\images\library\iprSmart.png">
                            </a>
                            <h3>
                                IPR SMART
                            </h3>
                            {{ __('Содержится литература по различным группам специальностей, что дает возможность учебным заведениям разных профилей найти интересующие их издания') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://search.ebscohost.com/">
                                <img src="\assets\images\library\EBSCO.png">
                            </a>
                            <h3>
                                EBSCO
                            </h3>
                            {{ __('EBSCO Publishing - крупнейший поставщик научных ресурсов ведущих издательств мира') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.wdl.org/fr">
                                <img src="\assets\images\library\libraryOfCongress.png">
                            </a>
                            <h3>
                                Library of Congress
                            </h3>
                            {{ __('Библиотека Конгресса является крупнейшей библиотекой в мире, в ее фондах хранятся миллионы книг, фильмов и видео, аудиозаписей, фотографий, газет, карт и рукописей. Библиотека является главным исследовательским подразделением Конгресса США и штаб-квартирой Управления авторского права США.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://elibrary.icao.int/">
                                <img src="\assets\images\library\libraryICAO.png">
                            </a>
                            <h3>
                                ICAO eLibrary
                            </h3>
                            {{ __('Электронная библиотека ИКАО - это онлайн-хранилище цифровых публикаций Международной организации гражданской авиации (ИКАО), содержащее стандарты и рекомендуемую практику (SARPS) в области международной гражданской авиации, конвенции и связанные с ними акты.') }}
                        </div>


                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.scopus.com/home.uri/">
                                <img src="/assets/images/library/Scopus.png">
                            </a>
                            <h3>
                                Scopus
                            </h3>
                            {{ __('Scopus - это крупнейшая информационная база рецензируемых библиографических ссылок и рефератов: научных журналов, книг и материалов конференций.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.webofscience.com/wos//">
                                <img src="\assets\images\library\WebOfScience.png">
                            </a>
                            <h3>
                                Web of science
                            </h3>
                            {{ __('Web of science- поисковая платформа, объединяющая несколько библиографических и реферативных баз данных рецензируемой научной литературы.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://onlinelibrary.wiley.com//">
                                <img src="\assets\images\library\WileyLogo.png">
                            </a>
                            <h3>
                                Wiley
                            </h3>
                            {{ __('Онлайн-библиотека Wiley - это  портал к самой широкой и глубокой в мире междисциплинарной коллекции онлайн-ресурсов, охватывающих вопросы жизни, здравоохранения, физики, социальных и гуманитарных наук.') }}
                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4 lib-news mt-5 mt-md-0">
                    <div class="row">
                        <div class="title text-center">
                            <a href="{{ route('front.library_news') }}" style="padding: 0px;">
                                <h3 style="color: white;">{{ __('НОВОСТИ') }}</h3>
                            </a>
                            <div class="border"></div>
                        </div>
                        @foreach ($library_news as $item)
                            <div class="col-lg-12">
                                <h6>
                                    <a href="{{ route('front.library_news.show', $item->slug) }}">
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! unserialize($item->titles)->ru !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! unserialize($item->titles)->kk !!}
                                        @else
                                            {!! unserialize($item->titles)->en !!}
                                        @endif
                                    </a>
                                    <span
                                        style="color: white; text-align:left; font-size: 12px;padding: 14px 24px;">{!! date('d.m.Y', strtotime($item->publish_at)) !!}</span>
                                </h6>
                                <hr style="color: white;">
                            </div>
                        @endforeach
                    </div>
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
                                @php
                                    if (Config::get('app.locale') === 'ru') {
                                        $cover_imgg = unserialize($item->cover_imgs)->ru;
                                    } elseif (Config::get('app.locale') === 'kk') {
                                        if (empty(unserialize($item->cover_imgs)->kk)) {
                                            $cover_imgg = unserialize($item->cover_imgs)->ru;
                                        } else {
                                            $cover_imgg = unserialize($item->cover_imgs)->kk;
                                        }
                                    } elseif (Config::get('app.locale') === 'en') {
                                        if (empty(unserialize($item->cover_imgs)->en)) {
                                            $cover_imgg = unserialize($item->cover_imgs)->ru;
                                        } else {
                                            $cover_imgg = unserialize($item->cover_imgs)->en;
                                        }
                                    }
                                @endphp

                                <div class="row block wow fadeInRight">
                                    <div class="col-5">
                                        <span>
                                            <img alt="" class="img-responsive"
                                                src="/storage/books/newbooks/{!! $cover_imgg !!}">
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

    <section id="book_collection">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8" style="background: white">

                    <div class="row">
                        <div class="title text-center col-12 mb-2">
                            <h3>{{ __('Часто задаваемые вопросы') }}</h3>
                            <div class="border"></div>
                        </div>


                        <div class="col-12 text-left">
                            <details>
                                <summary>
                                    <strong>
                                        @if (Config::get('app.locale') === 'ru')
                                            На какой срок я могу взять книги домой?
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Үйге кітаптарды қанша уақытқа алып кете аламын?
                                        @else
                                            For how long can I take books home?
                                        @endif
                                    </strong>
                                </summary>
                                <div style="margin-left:15px;">
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            Учебники и методические пособия предоставляются до конца семестра, а
                                            художественная и мотивационная литература предоставляется на 2 недели.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Оқулықтар мен әдістемелік кітаптар оқу жылының соңына дейін, ал көркем әдебиет
                                            пен мотивациялық кітаптар 2 аптаға дейін беріледі.
                                        @else
                                            Textbooks and teaching aids are provided until the end of the semester, and
                                            fiction and motivational literature are provided for 2 weeks.
                                        @endif
                                    </p>
                                </div>
                            </details>
                        </div>

                        <div class="col-12 text-left">
                            <details>
                                <summary>
                                    <strong>
                                        @if (Config::get('app.locale') === 'ru')
                                            Где находится библиотека?
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Кітапхана қай жерде орналасқан?
                                        @else
                                            Where is the library?
                                        @endif
                                    </strong>
                                </summary>
                                <div style="margin-left:15px;">
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            Читальный зал расположен на 1 этаже, в кабинете 133, электронный зал - на 1
                                            этаже, кабинет 139, абонемент на 3 этаже, в кабинете 319.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Оқу залы 1 қабат, 133 кабинетте, электронды зал 1 қабат, 139 кабинетте,
                                            абонемент бөлімі 3 қабат, 319 кабинетте орналасқан
                                        @else
                                            The reading room is located on the 1st floor, in room 133, the electronic room
                                            is on the 1st floor, room 139, the subscription is on the 3rd floor, in room
                                            319.
                                        @endif
                                    </p>
                                </div>
                            </details>
                        </div>

                        <div class="col-12 text-left">
                            <details>
                                <summary>
                                    <strong>
                                        @if (Config::get('app.locale') === 'ru')
                                            Какой график работы библиотеки?
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Кітапхананың жұмыс уақыты қандай?
                                        @else
                                            What are the library's opening hours?What are the library's opening hours?
                                        @endif
                                    </strong>
                                </summary>
                                <div style="margin-left:15px;">
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            Абонемент и электронная библиотека работают с 8:30 до 17:30, читальный зал – с
                                            8:30 до 22:00.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Абонемент бөлімі мен электронды кітапхана таңғы 8:30-17.30 аралығында, ал оқу
                                            залы 8.30-22.00 аралығында жұмыс жасайды.
                                        @else
                                            The subscription and electronic library are open from 8:30 to 17:30, the reading
                                            room - from 8:30 to 22:00.
                                        @endif
                                    </p>
                                </div>
                            </details>
                        </div>

                        <div class="col-12 text-left">
                            <details>
                                <summary>
                                    <strong>
                                        @if (Config::get('app.locale') === 'ru')
                                            Какие документы нужны для получения книг?
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Кітап алу үшін қандай құжат қажет?
                                        @else
                                            What documents are needed to receive books?
                                        @endif
                                    </strong>
                                </summary>
                                <div style="margin-left:15px;">
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            Для получения книг требуется только ID карта студентов.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Кітап алу үшін студенттер мен оқытушылардың ID карталары ғана қажет.
                                        @else
                                            To receive books, only a student ID card is required.
                                        @endif
                                    </p>
                                </div>
                            </details>
                        </div>

                        <div class="col-12 text-left">
                            <details>
                                <summary>
                                    <strong>
                                        @if (Config::get('app.locale') === 'ru')
                                            Как я могу узнать, есть ли в нашей библиотеке необходимые учебники и книги, не
                                            посещая библиотеку?
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Қажетті оқулықтар мен кітаптар біздің кітапхананың қорында бар яки жоқ екенін
                                            кітапханаға бармай-ақ қалай білуге болады?
                                        @else
                                            How can I find out if our library has the necessary textbooks and books without
                                            visiting the library?
                                        @endif
                                    </strong>
                                </summary>
                                <div style="margin-left:15px;">
                                    <p>
                                        @if (Config::get('app.locale') === 'ru')
                                            Через программу «Кабис» вы можете узнать онлайн, есть ли в нашей библиотеке те
                                            книги, которые вы ищете.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Кабис бағдарламасы арқылы іздеген кітаптардың біздің кітап қорымызда бар яки жоқ
                                            екенін онлайн түрде білуге болады.
                                        @else
                                            Through the Cabis program you can find out online whether our library has the
                                            books you are looking for.
                                        @endif
                                    </p>
                                </div>
                            </details>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4 lib-news mt-5 mt-md-0">
                    <div class="row">
                        <div class="title text-center col-12 mb-2">
                            <h3 style="color: white;">
                                {{ __('Контакты') }}
                                @if (Config::get('app.locale') === 'ru')
                                Онлайн-консультация
                                @elseif(Config::get('app.locale') === 'kk')
                                Онлайн кеңес беру
                                @else
                                Online consultation
                                @endif
                            </h3>
                            <div class="border"></div>
                        </div>

                        <div class="col-12">
                            <a class="text-center" href="{!! $whatsappLink !!}" title="Chat with us on WhatsApp"
                                style="margin: 0 0 20px 0 !important;
height: 42px; min-width: 42px; padding: 10px 0px 0px 10px; background-color: #00E785; border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;">
                                <img style="height: 23px; width: auto; padding-bottom: 5px;"
                                    src="/assets/images/footer_social/whatsapp-white-icon.png"
                                    alt="Description missing for this image.">
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
