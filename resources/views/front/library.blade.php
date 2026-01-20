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
                <div class="col-12 col-md-8 mx-auto" style="background: white">

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
                            {{ __('Республиканская межвузовская электронная библиотека - информационная и справочно-поисковая библиотечная система.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.iprbookshop.ru/">
                                <img src="\assets\images\library\iprSmart.png">
                            </a>
                            <h3>
                                IPR SMART
                            </h3>
                            {{ __('Содержится литература по различным группам специальностей, что дает возможность учебным заведениям разных профилей найти интересующие их издания.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://search.ebscohost.com/">
                                <img src="\assets\images\library\EBSCO.png">
                            </a>
                            <h3>
                                EBSCO
                            </h3>
                            {{ __('EBSCO Publishing - крупнейший поставщик научных ресурсов ведущих издательств мира.') }}
                        </div>

                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://www.easa.europa.eu/en">
                                <img src="/assets/images/library/EASA.jpg">
                            </a>
                            <h3>
                                EASA
                            </h3>
                            @if (Config::get('app.locale') === 'ru')
                                EASA (European Union Aviation Safety Agency) — это агентство Европейского союза, ответственное за обеспечение безопасности в авиации.
                                Основная цель EASA — содействие развитию и поддержанию высоких стандартов безопасности в авиации в странах-членах ЕС.

                            @elseif(Config::get('app.locale') === 'kk')
                                EASA (European Union Aviation Safety Agency) — авиациядағы қауіпсіздікті қамтамасыз етуге жауапты Еуропалық Одақ агенттігі.
                                EASA-ның негізгі мақсаты-ЕО-ға мүше елдерде авиацияда қауіпсіздіктің жоғары стандарттарын дамытуға және қолдауға жәрдемдесу.
                            @else
                                EASA (European Union Aviation Safety Agency) is the agency of the European Union responsible for aviation safety.
                                EASA's main goal is to promote the development and maintenance of high aviation safety standards in the EU member States.
                            @endif
                        </div>
                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://profspo.ru/">
                                <img src="/assets/images/library/prof_image.jpg">
                            </a>
                            <h3>
                                PROFобразование
                            </h3>
                            @if (Config::get('app.locale') === 'ru')
                            PROFобразование — электронный ресурс, разработанный специально для учреждений ТиПО (колледжей). Он позволяет получить качественное образование с доступом к эксклюзивным специализированным электронным учебникам, а также периодическим изданиям для разных направлений обучения.
                            @elseif(Config::get('app.locale') === 'kk')
                            PROFобразование – техникалық және кәсіптік білім беру мекемелері (колледждер) үшін арнайы әзірленген электрондық ресурс. Ол эксклюзивті мамандандырылған электронды оқулықтарға, сондай-ақ оқудың әртүрлі бағыттарына арналған мерзімді басылымдарға қол жеткізе отырып, сапалы білім алуға мүмкіндік береді.
                            @else
                            PROFобразование  is an electronic resource developed specifically for technical and vocational education institutions (colleges). It allows you to receive a quality education with access to exclusive specialized electronic textbooks, as well as periodicals for various areas of study.
                            @endif
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


                        <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://eivis.ru/">
                                <img src="\assets\images\library\IVIS300x86.png">
                            </a>
                            <h3>
                                IVIS
                            </h3>
                            @if (Config::get('app.locale') === 'ru')
                                Универсальная база данных IVIS Library содержит электронные версии ведущих российских
                                журналов, независимые научные издания, книги по технологии и инжинирингу, а также социальные
                                и гуманитарного науки.
                            @elseif(Config::get('app.locale') === 'kk')
                                IVIS Library әмбебап дерекқорында жетекші ресейлік журналдардың электронды нұсқалары,
                                тәуелсіз ғылыми басылымдар, технология және инжиниринг кітаптары, Әлеуметтік және
                                гуманитарлық ғылымдар бар.
                            @else
                                The IVIS Library universal database contains electronic versions of leading Russian
                                journals, independent scientific publications, books on technology and engineering, as well
                                as social sciences and humanities.
                            @endif
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
                            <a href="https://caa.gov.kz/ru">
                                <img src="\assets\images\library\ADofK.png">
                            </a>
                            <h3>
                                AVIATION ADMINISTRATION OF KAZAKHSTAN
                            </h3>
                            {{ __('Вы можете ознакомиться с базой данных Авиационной администрации Казахстана, которая осуществляет контроль и надзор за авиационной отраслью Казахстана в целях обеспечения безопасности полетов и авиационной безопасности.') }}
                        </div>

                        {{-- <div class="oneBook col-md-4 col-12 col-sm-6">
                            <a href="https://eivis.ru/">
                                <img src="\assets\images\library\sae.png">
                            </a>
                            <h3>
                                SAE
                            </h3>
                            @if (Config::get('app.locale') === 'ru')
                                SAE MOBILUS - это полноценная онлайн-библиотека, содержащая более 200 000 действующих и
                                исторических стандартов, технических документов, электронных книг и журналов, материалы
                                которых используются в изучении, разработке, производстве, обслуживании и управлении
                                воздушных, аэрокосмических и наземных транспортных средств.
                            @elseif(Config::get('app.locale') === 'kk')
                                SAE MOBILUS-бұл 200 000-нан астам қолданыстағы техникалық құжаттарды, электронды кітаптар
                                мен журналдарды қамтитын толыққанды онлайн кітапхана, олардың материалдары әуе, аэроғарыш
                                және жер үсті көліктерін зерттеу, әзірлеу, өндіру, техникалық қызмет көрсету және басқаруда
                                қолданылады
                            @else
                                SAE MOBILUS is a full-fledged online library containing more than 200,000 current and
                                historical standards, technical documents, e-books and journals, the materials of which are
                                used in the study, development, production, maintenance and management of air, aerospace and
                                ground vehicles.
                            @endif
                        </div> --}}

                    </div>

                </div>
                {{-- <div class="col-12 col-md-4 lib-news mt-5 mt-md-0">
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
                </div> --}}
            </div>
        </div>
    </section>

    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>{{ __('Новости') }}</h2>
                        @foreach ($library_news as $item)
                            @php
                                if (Config::get('app.locale') === 'ru') {
                                    $bg_imagess = unserialize($item->bg_images)->ru;
                                } elseif (Config::get('app.locale') === 'kk') {
                                    if (empty(unserialize($item->bg_images)->kk)) {
                                        $bg_imagess = unserialize($item->bg_images)->ru;
                                    } else {
                                        $bg_imagess = unserialize($item->bg_images)->kk;
                                    }
                                } elseif (Config::get('app.locale') === 'en') {
                                    if (empty(unserialize($item->bg_images)->en)) {
                                        $bg_imagess = unserialize($item->bg_images)->ru;
                                    } else {
                                        $bg_imagess = unserialize($item->bg_images)->en;
                                    }
                                }
                            @endphp

                            @if ($loop->first)
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img"
                                        style="background-image: url('/storage/library_news/{!! $bg_imagess !!}')">
                                        {{-- <img src="/storage/news/{!! $bg_imagess !!}" alt=""> --}}
                                        <div class="trend-top-cap">
                                            <h2><a href="{{ route('front.library_news.show', $item->slug) }}">
                                                    @if (Config::get('app.locale') === 'ru')
                                                        {!! unserialize($item->titles)->ru !!}
                                                    @elseif(Config::get('app.locale') === 'kk')
                                                        {!! unserialize($item->titles)->kk !!}
                                                    @else
                                                        {!! unserialize($item->titles)->en !!}
                                                    @endif
                                                </a></h2>
                                            <small>
                                                <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}</p>
                                            </small>
                                            {{-- <a href="{{ route('front.news.show', $item->slug) }}"
                                                class="btn btn-read">{{ __('Подробнее') }}</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="trending-bottom">
                                    <div class="row">
                                    @else
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30"
                                                    style="background-image: url('/storage/library_news/{!! $bg_imagess !!}')">
                                                    {{-- <img src="/storage/news/{!! $bg_imagess !!}" alt=""> --}}
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <h4><a href="{{ route('front.library_news.show', $item->slug) }}">
                                                            @if (Config::get('app.locale') === 'ru')
                                                                {!! unserialize($item->titles)->ru !!}
                                                            @elseif(Config::get('app.locale') === 'kk')
                                                                {!! unserialize($item->titles)->kk !!}
                                                            @else
                                                                {!! unserialize($item->titles)->en !!}
                                                            @endif
                                                        </a></h4>
                                                    <small>
                                                        <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}</p>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="portfolio_btn text-center fix m-top-100">
                    <a href="/library/library_news/" class="btn btn-read">{{ __('Посмотреть все') }}</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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
                                            Читальный зал расположен на 1 этаже, в кабинете B123, электронный зал - на 1
                                            этаже, кабинет В125, абонемент на 1 этаже, в кабинете B119.
                                        @elseif(Config::get('app.locale') === 'kk')
                                            Оқу залы 1 қабат, B123 кабинетте, электронды зал 1 қабат, В125 кабинетте,
                                            абонемент бөлімі 1 қабат, B119 кабинетте орналасқан
                                        @else
                                            The reading room is located on the 1st floor, in room B123, the electronic room
                                            is on the 1st floor, room В125, the subscription is on the 1st floor, in room
                                            B119.
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
