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

            <section id="services" class="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box">
                                <h4>Учебный центр по авиационной безопасности ИКАО</h4>
                                <h6>Менеджер по работе центров АБ ИКАО, IATA - Сая Сабазова</h6>
                                <h6><a href="mailto:s.sabazova@agakaz.kz"><i class="fa fa-envelope"></i> s.sabazova@agakaz.kz</a></h6>
                                <h6><a href="tel:+77077644074"><i class="fa fa-phone-alt"></i> +7 707 764 40 74</a></h6>
                            </div>
                        </div>


                        <div class="col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box">
                                <h4>Центр подготовки и тестирования авиационного персонала</h4>
                                <h6>Главный менеджер - Аида Нурсултанова</h6>
                                <h6><a href="mailto:a.nursultanova@agakaz.kz"><i class="fa fa-envelope"></i> a.nursultanova@agakaz.kz</a></h6>
                                <h6><a href="tel:+77016309301"><i class="fa fa-phone-alt"></i> +7 701 630 93 01</a></h6><br>
                                <h6>Менеджер по работе с инвесторами - Сабина Тулебаева-Нагайбаева</h6>
                                <h6><a href="mailto:tn.sabina@agakaz.kz"><i class="fa fa-envelope"></i> tn.sabina@agakaz.kz</a></h6>
                                <h6><a href="tel:+77054119265"><i class="fa fa-phone-alt"></i> +7 705 411 92 65</a></h6><br>
                                <h6>Администратор тестирования EALTS и ATPL, PART 147 - Руфина Сагынбек</h6>
                                <h6><a href="mailto:r.sagynbek@agakaz.kz"><i class="fa fa-envelope"></i> r.sagynbek@agakaz.kz</a></h6>
                                <h6><a href="tel:+77772209223"><i class="fa fa-phone-alt"></i> +7 777 220 92 23</a></h6>
                            </div>
                        </div>


                        <div class="col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box">
                                <h4>Авторизованный центр IATA</h4>
                                <h6>Главный менеджер (бизнес-продвижение проектов) - Маргарита Никитина</h6>
                                <h6><a href="mailto:m.nikitina@agakaz.kz"><i class="fa fa-envelope"></i> m.nikitina@agakaz.kz</a></h6>
                                <h6><a href="tel:+77007555697"><i class="fa fa-phone-alt"></i> +7 700 755 56 97</a></h6>
                            </div>
                        </div>


                        <div class="col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
                            <div class="icon-box">
                                <h4>Центр EASA PART FCL</h4>
                                <h6>Директор департамента по коммерции - Сулеймен Рахматулла</h6>
                                <h6><a href="mailto:s.rakhmatulla@agakaz.kz"><i class="fa fa-envelope"></i> s.rakhmatulla@agakaz.kz</a></h6>
                                <h6><a href="tel:+77017267452"><i class="fa fa-phone-alt"></i> +7 701 726 74 52</a></h6>
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
