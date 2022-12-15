@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                e-Orientation
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
                    e-Orientation
                </span>
            </div>

            <div class="studentHouseBanner">
                Дом студентов
            </div>


            <p>Дом студентов предоставляет своим студентам проживание и среду, которая призывает студентов реализовываться и
                быть более активными.</p>

            <p>Рассчитан на 380 мест с комфортными условиями проживания, двух и трехместные комнаты, круглосуточная охрана и
                видеонаблюдение по периметру и коридорам, душевые и прачечные кабины с современными стиральными машинками,
                бесплатный Wi-Fi и многое другое. В ДС дежурит квалифицированный врач, который всегда готов оказать жильцам
                первую медицинскую помощь и проконсультировать в случае проблем со здоровьем. В корпусах также есть
                специальные комнаты-изоляторы для отселения студентов при острых заболеваниях.</p>

            <p><strong>При заселении в ДС, студенты должны предоставлять:</strong></p>

            <p>1) Заявление на имя руководителя ДВСР;</p>

            <p>2) Ордер, выписанный менеджером ДВСР;</p>

            <p>3) Договор аренды места в ДС;</p>

            <p>4) Отметку медицинского пункта Академии о прохождении медицинского осмотра и флюорографии и др.</p>

            <p>На 17.10.2022 года в Доме студентов:</p>

            <p>Проживает &ndash; 381</p>


            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-0 col-lg-3"></div>
                <div id="carouselstudents" class="col-12 col-md-12 col-lg-6 carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://caa.edu.kz/assets/images/upload/WhatsApp Image 2022-10-19 at 14.10.17_1670490193.jpeg"
                                style="width: 500px" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://caa.edu.kz/assets/images/upload/WhatsApp Image 2022-10-19 at 14.10.17 (1)_1670490156.jpeg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://caa.edu.kz/assets/images/upload/WhatsApp Image 2022-10-19 at 14.10.18_1670490117.jpeg"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://caa.edu.kz/assets/images/upload/WhatsApp Image 2022-10-19 at 14.10.18 (2)_1670490225.jpeg"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://caa.edu.kz/assets/images/upload/WhatsApp Image 2022-10-19 at 14.10.19_1670490251.jpeg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselstudents" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselstudents" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-md-0 col-lg-3"></div>
            </div>

            <section class="mindcraft-action section" id="mindcraft-action" style="text-align: center;">
                <div class="container">
                    <h2 style="margin: 0px; margin-bottom: 20px;"><a
                            href="https://caa.edu.kz/assets/images/upload/инструкция для обучающихся_1659692030.docx">Инструкция
                            для подачи заявления в дом студентов</a></h2>

                    <div><iframe allowfullscreen="" frameborder="0" mozallowfullscreen=""
                            src="/assets/images/Модуль Общежитие.mp4"
                            style="width: 80%;height: 43.75em;  border:none; padding-top: 2%; padding-bottom: 1%;"
                            webkitallowfullscreen=""></iframe></div>
                </div>
            </section>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>

        </div>
    </section>
@endsection
