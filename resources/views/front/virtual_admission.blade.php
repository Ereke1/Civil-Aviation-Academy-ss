@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                Курсы
            </h1>
            <div class="breadcrumbs">
                <a href="http://localcaa.edu.kz:8000">Басты бет</a>
                <span> &gt; </span>
                <a href="http://localcaa.edu.kz:8000/departments">Кафедралар</a>
                <span> &gt; </span>
                <a href="http://localcaa.edu.kz:8000/departments/aviacionnaya-tekhnika-i-tekhnologiya">Авиациялық техника
                    және
                    технология</a>
                <span> &gt; </span>
                <span>
                    Курсы
                </span>
            </div>


            <div class="container overflow-hidden ourteam">
                <div class="row gy-4 gy-lg-4 gx-xxl-5">

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card h-100 border-0 border-bottom border-primary shadow overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0 row">
                                    <div class="col-lg-3 d-flex ">
                                        <img class="img-fluid" loading="lazy" src="\assets\images\2ик.png" />
                                    </div>

                                    <figcaption class="m-0 p-4 col-lg-9">
                                        <h4 class="mb-1">ПОДГОТОВКА ЭКЗАМЕНАТОРА/ОЦЕНЩИКА</h4>

                                        <h6>&nbsp;</h6>
                                        <h6>Тип подготовки:</h6>
                                        <p>Первоначальная подготовка</p>

                                        <h6>Продолжительность:</h6>
                                        <p>14 часов/3 дня</p>

                                        <h6>Цена:</h6>
                                        <p>110 000 тенге</p>

                                        <h6>Ближайшие даты:</h6>
                                        <p></p>


                                    <div class="card" style="margin-bottom: 3px;">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ccourse1">
                                            <div class="card-header"
                                                style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                                                Подробнее
                                            </div>
                                        </a>

                                        <div class="collapse show" data-parent="#accordion" id="ccourse1"
                                            style="height: 0px; overflow-x: auto;">
                                            <div class="card-body">
                                                <p>
                                                    Программа предназначена для подготовки лиц, имеющих право определять уровень квалификации авиационного персонала по следующим направлениям:
1) экзаменатор по проверке знаний первоначально профессиональной подготовки специалистов по ТО ВС и курса обучения на тип ВС;
2) экзаменатор практического элемента;
3) экзаменатор практической стажировки;
4) экзаменатор, имеющий право определять уровень квалификации специалистов по ТО ВС в легкой и сверхлегкой авиации.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card h-100 border-0 border-bottom border-primary shadow overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0 row">
                                    <div class="col-lg-3 d-flex ">
                                        <img class="img-fluid" loading="lazy" src="\assets\images\3ик.png" />
                                    </div>

                                    <figcaption class="m-0 p-4 col-lg-9">
                                        <h4 class="mb-1">НАЗЕМНОЕ ОБСЛУЖИВАНИЕ ПАССАЖИРОВ</h4>

                                        <h6>&nbsp;</h6>
                                        <h6>Тип подготовки:</h6>
                                        <p>Первоначальная подготовка</p>

                                        <h6>Продолжительность:</h6>
                                        <p>45-135 часов/7-17 дней </p>

                                        <h6>Цена:</h6>
                                        <p>от 318 000 тенге</p>

                                        <h6>Ближайшие даты:</h6>
                                        <p>по запросу</p>


                                    <div class="card" style="margin-bottom: 3px;">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ccourse2">
                                            <div class="card-header"
                                                style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                                                Подробнее
                                            </div>
                                        </a>

                                        <div class="collapse show" data-parent="#accordion" id="ccourse2"
                                            style="height: 0px; overflow-x: auto;">
                                            <div class="card-body">
                                                <p>
                                                    Целью этого курса является предоставление всем желающим стать агентом по наземному обслуживанию пассажиров базовые навыки и знания, связанные с должностью. Курс также даст знания и навыки о различных процессах и правилах, которые им необходимо соблюдать при выполнении своих обязанностей - от регистрации до посадки и взлета.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card h-100 border-0 border-bottom border-primary shadow overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0 row">
                                    <div class="col-lg-3 d-flex ">
                                        <img class="img-fluid" loading="lazy" src="\assets\images\4ик.png" />
                                    </div>

                                    <figcaption class="m-0 p-4 col-lg-9">
                                        <h4 class="mb-1">БАЗОВЫЙ (КУРСЫ ПО АВИАЦИОННОЙ БЕЗОПАСНОСТИ)</h4>

                                        <h6>&nbsp;</h6>
                                        <h6>Тип подготовки:</h6>
                                        <p>Первоначальная подготовка</p>

                                        <h6>Продолжительность:</h6>
                                        <p>70 часов/10 дней</p>

                                        <h6>Цена:</h6>
                                        <p>180 600 тенге</p>

                                        <h6>Ближайшие даты:</h6>
                                        <p></p>


                                    <div class="card" style="margin-bottom: 3px;">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ccourse3">
                                            <div class="card-header"
                                                style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                                                Подробнее
                                            </div>
                                        </a>

                                        <div class="collapse show" data-parent="#accordion" id="ccourse3"
                                            style="height: 0px; overflow-x: auto;">
                                            <div class="card-body">
                                                <p>
                                                    Контингент кандидатов для обучения на этом курсе состоит из персонала служб безопасности и сотрудников полномочных органов или организаций, начинающих работать в данной области и опытного персонала, который несет ответственность за осуществление превентивных мер, связанных с обеспечением безопасности
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card h-100 border-0 border-bottom border-primary shadow overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0 row">
                                    <div class="col-lg-3 d-flex ">
                                        <img class="img-fluid" loading="lazy" src="\assets\images\2ик.png" />
                                    </div>

                                    <figcaption class="m-0 p-4 col-lg-9">
                                        <h4 class="mb-1">ЧЕЛОВЕЧЕСКИЙ ФАКТОР</h4>

                                        <h6>&nbsp;</h6>
                                        <h6>Тип подготовки:</h6>
                                        <p>Первоначальная подготовка</p>

                                        <h6>Продолжительность:</h6>
                                        <p>12 часов/2 дня</p>

                                        <h6>Цена:</h6>
                                        <p>26 000 тенге</p>

                                        <h6>Ближайшие даты:</h6>
                                        <p></p>


                                    <div class="card" style="margin-bottom: 3px;">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ccourse4">
                                            <div class="card-header"
                                                style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                                                Подробнее
                                            </div>
                                        </a>

                                        <div class="collapse show" data-parent="#accordion" id="ccourse4"
                                            style="height: 0px; overflow-x: auto;">
                                            <div class="card-body">
                                                <p>
                                                    Обучение по программе обеспечивает подготовку специалистов, руководящего и эксплуатационного персонала операторов авиационной деятельности (поставщиков обслуживания) на аэродромах (в аэропортах) гражданской авиации, включая категории, не вошедших в перечень специалистов авиационного персонала гражданской авиации РК и другие специалисты транспортной отрасли имеющих необходимую специальную подготовку, высшее или среднее профессиональное образование.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <br>
            <br>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>

        </div>
    </section>
@endsection
