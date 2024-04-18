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

            <div class="container pt-3 pb-3">
                <div class="d-flex flex-wrap">

                    <div class="col-md-6 col-lg-3 col-12 main-images">
                        <div class="main-image">
                            <a class="group main-image__link" data-fancybox="images"
                                href="/assets/images/upload/Сертификат АУЦ каз jpg.jpg">
                                <span class="main-image__bg">&nbsp;</span>
                                <img src="/assets/images/upload/Сертификат АУЦ каз jpg.jpg" class="h-100 w-100"
                                    alt="" />
                            </a>
                        </div>
                        <div class="portfolio-caption-heading">Сейдахметов</div>
                    </div>

                </div>
            </div>

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
