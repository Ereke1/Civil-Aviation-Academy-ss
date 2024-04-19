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

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Учебный центр по авиационной безопасности ИКАО:
                    </div>
                    <div class="col-md-12">
                        Менеджер по работе центров АБ ИКАО, IATA - Сая Сабазова
                    </div>
                    <div class="col-md-6">
                        s.sabazova@agakaz.kz
                    </div>
                    <div class="col-md-6">
                        +7 707 764 40 74
                    </div>
                    <div class="col-md-12">
                        One of three columns
                    </div>
                </div>
            </div>

            <section id="services" class="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box">
                                <h4>Учебный центр по авиационной безопасности ИКАО:</h4>
                                <h6>Менеджер по работе центров АБ ИКАО, IATA - Сая Сабазова</h6>
                                <p><a href="tel:87273469208"></i> +7 (727) 346-92-08 (вн. 245)</a></p>
                            </div>
                        </div>
                    </div>
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

@section('fancybox')
    @include('front.fancybox')
@endsection
