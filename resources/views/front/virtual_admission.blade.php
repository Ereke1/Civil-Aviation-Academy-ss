@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="departments">
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

            <div class="container" style="margin-bottom: 5vw">
                <div class="row">
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch mt-4 wow fadeInUp">
                        <div class="icon-box departmentSlug"
                            style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/our_team_orientation.jpg); border-radius:5px; min-height:220px; line-height:200px;">
                            <h4>
                                <a class="stretched-link" href="#">
                                    Наша команда
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch mt-4 wow fadeInUp">
                        <div class="icon-box departmentSlug"
                            style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/sthouse.png); border-radius:5px; min-height:220px; line-height:200px;">
                            <h4>
                                <a class="stretched-link" href="/dom-studentov-203">
                                    Дом студентов
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch mt-4 wow fadeInUp">
                        <div class="icon-box departmentSlug"
                            style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/medical_care.png); border-radius:5px; min-height:220px; line-height:200px;">
                            <h4>
                                <a class="stretched-link" href="#">
                                    Медицинское обслуживание
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch mt-4 wow fadeInUp">
                        <div class="icon-box departmentSlug"
                            style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/assets/images/events.png); border-radius:5px; min-height:220px; line-height:200px;">
                            <h4>
                                <a class="stretched-link" href="/meropriyatiya-173">
                                    Мероприятия
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
