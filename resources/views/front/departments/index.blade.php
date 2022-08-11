@extends('front.layouts.app')
@section('title')
    {{ __('Кафедры') }}
@endsection
@section('content')
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">руководство академии<br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/images/upload/1%20(6)_1636028594.jfif" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Сейдахметов Бекен Канелович</div>
                                <div class="portfolio-caption-subheading text-muted">Председатель Правления-ректор</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/images/upload/1%20(3)_1636028583.jfif" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ЖАКУПОВ КАЙРАТ БОЛАТОВИЧ</div>
                                <div class="portfolio-caption-subheading text-muted">Первый проректор<br> <span style='color:white'>s</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/images/upload/qqqqqqqq_1651225794.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">САРЕТБАЕВ АЛЖАПАР НУРМУХАНОВИЧ</div>
                                <div class="portfolio-caption-subheading text-muted">Проректор по авиационной деятельности<br> <span style='color:white'>s</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/images/upload/5%20(2)_1636028601.jfif" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Кошеков Кайрат Темирбаевич</div>
                                <div class="portfolio-caption-subheading text-muted">Проректор по научной деятельности и цифровизации</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/images/upload/9%20(1)_1636028614.jfif" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Елеусинов Акимжан Бауыржанович</div>
                                <div class="portfolio-caption-subheading text-muted">Проректор по развитию инфраструктуры</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Сейдахметов Бекен Канелович</h2>
                                    <h3 class="item-intro text-muted">Председатель Правления-ректор</h3>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/upload/1%20(6)_1636028594.jfif" alt="..." />
                                    <p><b>Бекен Канелович</b> окончил Рижский институт инженеров гражданской авиации по специальности «Организация и нормирование труда на воздушном транспорте» и Алматинскую школу менеджмента по специальности «Экономика и менеджмент, корпоративный менеджмент». </p>
                                    <p>Имеет степень кандидата экономических наук.</p>
                                    <p>Трудовой путь начал в 1984 году. В разные годы занимал должности:<br>
                                    -	инженера-диспетчера, экономиста, финансиста производственно-диспетчерского отдела СТО «Казаккумулятор»;<br>
                                    -	бухгалтера финансовой группы Аэропорта Алматы;<br>
                                    -	заместителя начальника отдела по финансовой работе НАК «Қазахстан әуе жолы»;<br>
                                    -	главного бухгалтера Аэропорта Алматы;<br>
                                    -	начальника отдела регулирования деятельности аэропортов Комитета по использованию воздушного пространства и деятельности гражданской авиации Министерства транспорта и коммуникаций РК;<br>
                                    -	заместителя генерального директора по экономике и финансам, первого вице-президента ЗАО «Международный аэропорт «Астана»;<br>
                                    -	главного эксперта Группы по управлению транспортными активами АО «Казахстанский холдинг по управлению государственными активами «Самрук».</p>
                                    <p>В период с 2011 по 2017 годы занимал должность председателя Комитета гражданской авиации Министерства по инвестициям и развитию Республики Казахстан, с 2017 по 2019 годы был Главой Постоянного представительства секретариата Межправительственной комиссии ТРАСЕКА в Республике Казахстан.</p>
                                    <p>С августа 2019 года является Председателем Правления – Ректором АО «Академия Гражданской Авиации».</p>
                                    <p>Имеет Орден «Құрмет», медаль «Ерен еңбегі үшін» и нагрудной знак «Кұрметтi авиатор»</p>
                                    <p>Является автором ряда публикаций и учебно-методической литературы.</p>
                                    <p>Владеет казахским, русским и английскими языками.</p>
                                        
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Блог ректора</strong>
                                        </li>
                                        <li>
                                            <strong>Телефон приемной:</strong>
                                            +7 727 3469206 (после ответа автоответчика набрать 202)
                                        </li>
                                        <li>
                                            <strong>Кабинет:</strong>
                                            215
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ЖАКУПОВ КАЙРАТ БОЛАТОВИЧ</h2>
                                    <h3 class="item-intro text-muted">Первый проректор</h3>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/upload/1%20(3)_1636028583.jfif" alt="..." />
                                    <p><b>Кайрат Болатович</b> окончил Казахскую академию транспорта и коммуникаций имени М. Тынышпаева.</p>
                                    <p>Защитил диссертацию на соискание ученой степени кандидата технических наук в Российском университете транспорта (МИИТ).</p>
                                    <p>Трудовую деятельность начал в 2003 году стажером-преподавателем в Казахской академии транспорта и коммуникаций имени М. Тынышпаева.</p>
                                    <p> В разные годы занимал должности:<br>
                                    -   заместителя декана факультета «Транспортная техника» Казахской академии транспорта и коммуникаций имени М. Тынышпаева;<br>
                                    -	директора центра науки и повышения квалификации Казахской академии транспорта и коммуникаций имени М. Тынышпаева;<br>
                                    -	начальника отдела науки Казахской академии транспорта и коммуникаций имени М. Тынышпаева;<br>
                                    -	исполнительного директора по научной работе Казахской академии транспорта и коммуникаций имени М. Тынышпаева;<br>
                                    -	проректора по науке и сотрудничеству Казахской академии транспорта и коммуникаций имени М. Тынышпаева;<br>
                                    -	заведующего кафедрой «Морской и наземный транспорт» Каспийского государственного университета технологий и инжиниринга имени Ш. Есенова;<br>
                                    -	декана факультета «Транспорт и строительство» Каспийского государственного университета технологий и инжиниринга имени Ш. Есенова;</p>
                                    <p>С 2020 года является Проректором АО «Академия Гражданской Авиации», курирующим академическую деятельность.</p>
                                    <p> Имеет Нагрудный знак Министерства образования и науки РК "За заслуги в развитии науки Республики Казахстан". Стипендиат государственной научной стипендии МОН РК для ученых и специалистов и стипендии для талантливых молодых ученых.</p>
                                    <p>Является автором более 20 научных публикаций, 11 учебно-методических указаний и 2 учебника в области надежности транспортной техники.</p>
                                    <p>В период с 2009 по 2017 годы был экспертом ККСОН МОН РК по проверке на соблюдение законодательства РК об образовании и квалификационных требований, предъявляемых к образовательной деятельности вузов.</p>
                                    <p>Владеет казахским, русским и английскими языками.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>e-mail:</strong>
                                            k.zhakupov@agakaz.kz
                                        </li>
                                        <li>
                                            <strong>Телефон:</strong>
                                            +7 727 3469206 (после ответа автоответчика набрать 203)
                                        </li>
                                        <li>
                                            <strong>Кабинет:</strong>
                                            215
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">САРЕТБАЕВ АЛЖАПАР НУРМУХАНОВИЧ</h2>
                                    <h3 class="item-intro text-muted">Проректор по авиационной деятельности</h3>
                                    <img class="img-fluid d-block mx-auto" src="/assets/images/upload/qqqqqqqq_1651225794.jpg" alt="..." />
                                    <p><b>Алжапар Нурмуханович</b> окончил Рижский Краснознаменный институт инженеров ГА со специализацией «Инженер-системотехник».</p>
                                    <p>Трудовую деятельность начал в 1986 году в качестве инженера технического отдела Алматинского объединенного авиаотряда Казахской управлении гражданской авиации </p>
                                    <p>В разные годы занимал должности:<br>
                                        -	старшего инженера-электроника группы технического обслуживания ЭВМ и периферийного оборудования "Визенформ" Алматинского объединенного авиаотряда Казахской управлении гражданской авиации<br>
                                        -	начальника отдела договоров коммерческого управления авиакомпании НААК "Казахстан ауе жолы"<br>
                                        -	заместителя директора авиакомпании "Ак-Канат"<br>
                                        -	начальника отдела обеспечения эксплуатации РТОС управления организации воздушного движения Комитета гражданской авиации Министерства транспорта и коммуникаций Республики Казахстан<br>
                                        -	вице-президента по производству АО "Тахмид-Эйр"<br>
                                        -	директора Дирекций по организации производства РГП "Казавиаспас" МЧС РК<br>
                                        -	заместителя председателя КГА МТиК РК<br>
                                        -	директора РГП «Центр по обеспечению безопасности полетов»<br>
                                        -	управляющего директора РГП «Казаэронавигация»<br>
                                        -	директора Южного регионального филиала АО «Казавиаспас» КЧС МВД РК.</p>
                                    <p>В период с 2020 по 2022 годы – директор Авиационного колледжа АО «Академия гражданской авиации».</p>
                                    <p>С 2022 года – проректор по авиационной деятельности АО «Академия гражданской авиации».</p>
                                    <p>Владеет казахским, русским и английскими языками.
                                    <ul class="list-inline">
                                        <li>
                                            <strong>e-mail:</strong>
                                            a.saretbaev@agakaz.kz
                                        </li>
                                        <li>
                                            <strong>Телефон:</strong>
                                            +7 727 3469206 (после ответа автоответчика набрать 203)
                                        </li>
                                        <li>
                                            <strong>Кабинет:</strong>
                                            215
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">КОШЕКОВ КАЙРАТ ТЕМИРБАЕВИЧ</h2>
                                    <h3 class="item-intro text-muted">Проректор по научной деятельности и цифровизации</h3>
                                    <img class="img-fluid d-block mx-auto" src="/assets/images/upload/5%20(2)_1636028601.jfif" alt="..." />
                                    <p><b>Кайрат Темирбаевич</b> окончил Томский институт автоматизированных систем управления и радиоэлектроники по специальности ««Промышленная электроника».</p>
                                    <p>Имеет степени кандидата и доктора технических наук по специальности «05.13.06 – Автоматизация и управление технологическими процессами и производствами».</p>
                                    <p>Является профессором ККСОН МОН РК по специальности «Приборостроение, метрология и информационно-измерительные приборы и системы».</p>
                                    <p>Трудовую деятельность начал в 1993 году ассистентом кафедры «Радиотехника» Петропавловского филиала Карагандинского политехнического института. </p>
                                    <p>В разные годы занимал должности:<br>
                                     -стажера-исследователя, преподавателя в Алматинском институте энергетики и связи;<br>
                                     -специалиста 1-й категории, ведущего специалиста контрольно-испытательной лаборатории Казахстанской газовой ассоциации:<br>
                                     -заведующего кафедрой и декана факультета в Северо-Казахстанском государственном университете им. М.Козыбаева. </p>
                                    <p>С 2019 года является Проректором АО «Академия Гражданской Авиации», курирующим научную и научно-техническую деятельность.</p>
                                    <p>Имеет Нагрудный знак Министерства образования и науки РК "За заслуги в развитии науки Республики Казахстан". Стипендиат государственной научной стипендии МОН РК для ученых и специалистов, стипендии для талантливых молодых ученых.</p>
                                    <p>Обладатель государственного гранта «Лучший преподаватель вуза 2010»</p>
                                    <p>Является автором 180 публикаций, включая 10 - в базе Web of Science и Scopus, учебник и учебное пособие, 7 монографий, 40 публикаций в журналах, рекомендованных ККСОН МОН РК.</p>
                                    <p>Владеет казахским, русским и английскими языками.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>e-mail:</strong>
                                            k.koshekov@agakaz.kz 
                                        </li>
                                        <li>
                                            <strong>Телефон:</strong>
                                            +7 727 3469206 (после ответа автоответчика набрать 203)
                                        </li>
                                        <li>
                                            <strong>Кабинет:</strong>
                                            215
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Елеусинов Акимжан Бауыржанович</h2>
                                    <p class="item-intro text-muted">Проректор по развитию инфраструктуры</p>
                                    <img class="img-fluid d-block mx-auto" src="/assets/images/upload/9%20(1)_1636028614.jfif" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/images/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
