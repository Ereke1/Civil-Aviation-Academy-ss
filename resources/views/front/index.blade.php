@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
<section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style=" background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/assets/images/slider/1n.jpg); width:100%; background-size: cover; background-position: center;">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>Приемная комиссия</h2> <br>

                                    <a class="btn btn-primary btn-lg" href="/enrollee">Оставить заявку</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style=" background:url(/assets/images/slider/Screenshot_7.png); width:100%; background-size: cover; background-position: center;">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                <h2></h2><br> <br><h2></h2>
                                    <a class="btn btn-primary btn-lg stretched-link" href="/vakansii" style="color:darkblue;" >Перейти страницу</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style=" background:url(/assets/images/slider/fond_qh.png); width:100%; background-size: cover; background-position: center;">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                <h2></h2><br> <br><h2></h2>
                                    <a class="btn btn-primary btn-lg stretched-link" href="/news/86" style="color:darkblue;" >Перейти страницу</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background: url(/assets/images/slider/7.png);width: 100%; background-size: cover; background-position: center;">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background: url(/assets/images/slider/2.jfif);width: 100%; background-size: cover; background-position: center;">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
     <!-- <section id="slider" class="mb-4 mt-5">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="col-md-3 col-12 pl-0 pr-0">
                    <div class="online-services d-flex align-items-center">
                        <div class="w-100 pl-4 pr-4">
                            <p>
                                <a href="/virtualnaya-priemnaya-komissiya-174" class="btn w-100">
                                    {{ __('Виртуальная приемная комиссия') }}
                                </a>
                            </p>
                            <p>
                                <a href="/enrollee" class="btn w-100">
                                    {{ __('Онлайн регистрация абитуриентов') }}
                                </a>
                            </p>
                            <p>
                                <a href="https://do.agakaz.kz" class="btn w-100">
                                    Platonus
                                </a>
                            </p>
                            <p>
                                <a href="http://bi.agakaz.kz" class="btn w-100">
                                    {{ __('Онлайн библиотека') }}
                                </a>
                            </p>
                            <p>
                                <a href="/bezkomissionnaya-onlayn-oplata-za-obuchenie"
                                    class="btn w-100">
                                    {{ __('Онлайн оплата') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-12  pl-0 pr-0">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/assets/images/slider/1.jfif" alt=""></div>
                            <div class="swiper-slide"><img src="/assets/images/slider/2.jfif" alt=""></div>
                            <div class="swiper-slide"><img src="/assets/images/slider/4.JPG" alt=""></div>
                            <div class="swiper-slide"><img src="/assets/images/slider/3.JPG" alt=""></div>
                            <div class="swiper-slide"><img src="/assets/images/slider/6.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/assets/images/slider/5.jpeg" alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
        <section id="services" class="services">
      <div class="container">

      <div class="title text-center wow animated zoomInDown">
							<h2>{{ __('Наши') }} <span class="color">{{ __('Сервисы') }}</span></h2>
							<div class="border"></div>
	  </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-university"></i></div>
              <h4><a href="https://do.agakaz.kz">Platonus</a></h4>
              <p>{{ __('Автоматизированная информационная система, позволяющая комплексно автоматизировать процессы кредитной системы и дистанционной технологии обучения.') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-user-plus"></i></div>
              <h4><a href="/enrollee">{{ __('Онлайн регистрация абитуриентов') }}</a></h4>
              <p>{{ __('Онлайн-регистрация на программы бакалавриата, магистратуры и докторантуры открыта круглый год, что является преимуществом и упрощает подачу заявления.') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-id-card"></i></div>
              <h4><a href="/virtualnaya-priemnaya-komissiya-174">{{ __('Виртуальная приемная') }}</a></h4>
              <p>{{ __('Наши сотрудники приемной комиссии помогут Вам подать заявку. График консультаций с 9:00 до 17:00 с понедельника по пятницу.') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-book"></i></div>
              <h4><a href="http://bi.agakaz.kz">{{ __('Онлайн библиотека') }}</a></h4>
              <p>{{ __('Распределенная информационная система, позволяющая надежно сохранять и эффективно использовать разнородные коллекции электронных документов.') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-credit-card"></i></div>
              <h4><a href="/bezkomissionnaya-onlayn-oplata-za-obuchenie">{{ __('Онлайн оплата') }}</a></h4>
              <p>{{ __('Безкомиссионная онлайн оплата за обучение. Инструкция для оплаты за обучение.') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-graduation-cap"></i></div>
              <h4><a href="https://moodle.agakaz.kz/">Moodle</a></h4>
              <p>{{ __('Веб-система для организации дистанционного обучения и управления им.') }}</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="paraVideo" class="parallax">

            <div class="ParallaxVideo">
                <video autoplay muted loop>
                    <source src="/assets/images/Rolik_AVIA без титров.mp4" type="video/mp4">
                </video>
                <h3 class="animated pulse infinite"  id="paraVideoText">{{ __('Полет к мечте начинается здесь!') }}</h3>
            </div>

    </section>
    <section id="blocks1" >
        <div class="container">
            <div class="page-header title text-center" style="padding-bottom: 25px;">
                <h1>{{ __('Академия гражданской авиации') }}<br></h1>
            </div>
            <div class="row active-with-click">
                {{-- <div id="blocks1_empty">
                </div> --}}

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Light-Blue">
                        <h2>
                            <span>Бакалавриат</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                11 образовательных программ
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block1.jpg">
                            </div>
                            <div class="mc-description">
                                Большое количество государственных образовательных грантов<br>
                                Гранты Ректора<br>
                                Диплом, признаваемый во всем мире<br>
                                Доступная цена за обучение и гибкие условия оплаты
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="/obrazovatelnye-programmy-na-bakalavriat">{{ __('Подробнее') }}</a>
                            </h4>

                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Cyan">
                        <h2>
                            <span>МАГИСТРАТУРА</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                5 образовательных программ
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block2.jpg">
                            </div>
                            <div class="mc-description">
                            Инновационные образовательные программы<br>
                            Актуальная тематика диссертаций, имеющая практическое значение<br>
                            Развитая научно-исследовательская база<br>
                            Зарубежная стажировка<br>
                            Гибкие условия оплаты за обучение
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="/obrazovatelnye-programmy-na-magistraturu-187">{{ __('Подробнее') }}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Teal">
                        <h2>
                            <span>ДОКТОРАНТУРА</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                1 образовательная программа
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block3.jpg">
                            </div>
                            <div class="mc-description">
                            Знания доступные лучшим из лучших<br>
                            Мощная научно-исследовательская инфраструктура<br>
                            Исследовательская деятельность<br>
                            Зарубежная стажировка<br>
                            Адекватная стоимость образовательных услуг, гибкие условия оплаты
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="/obrazovatelnye-programmy-na-doktoranturu-189">{{ __('Подробнее') }}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                {{-- <div  id="blocks1_empty">
                </div>
                <div  id="blocks1_empty">
                </div> --}}
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Deep-Purple">
                        <h2>
                            <span>КОЛЛЕДЖ</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                Авиационный колледж
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block4.jpg">
                            </div>
                            <div class="mc-description">
                                    Авиационный колледж является единственным учебным заведением технического и профессионального образования в Казахстане
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="/abiturientam-193">{{ __('Подробнее') }}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Indigo">
                        <h2>
                            <span>ДИСТАНЦИОННОЕ ОБУЧЕНИЕ</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                Диплом престижного ВУЗа
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block5.jpg">
                            </div>
                            <div class="mc-description">
                            Обучение в свободное время<br>
                            Доступность учебных материалов<br>
                            Диплом престижного ВУЗа<br>
                            Доступные цены и удобная форма оплаты<br>
                            Использование инновационных технологий обучения
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="https://moodle.agakaz.kz/">{{ __('Подробнее') }}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="material-card Blue">
                        <h2>
                            <span>АВИАЦИОННЫЙ УЧЕБНЫЙ КОМПЛЕКС</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                Профессиональная подготовка
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-responsive" src="/assets/images/block6.jpg">
                            </div>
                            <div class="mc-description">
                                Своевременное, полное и качественное удовлетворение потребностей Академии в исправных и подготовленных к полетам воздушных судов и учебного оборудования;
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                <a href="#">{{ __('Подробнее') }}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                {{-- <div id="blocks1_empty">
                </div> --}}
            </div>
        </div>
    </section>

    <section id="counter" class="parallax-section">
			<div class="container">
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>{{ __('Академия Гражданской Авиации') }}</h2>
							<h2>в цифрах</h2>
							<div class="devider"><i class="fa fa-plane fa-3x"></i></div>
						</div>
				<div class="row">
					<!-- first count item -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="6984">6984</span>
							</div>
							<i class="fa fa-graduation-cap fa-3x"></i>
							<h3>Выпускников</h3>
                            <br>
						</div>
					</div>
					<!-- end first count item -->

					<!-- second count item -->

					<!-- end second count item -->

					<!-- third count item -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="84">84</span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
				            <h3>Трудоустроенных <br> Выпускников</h3>

						</div>
					</div>
					<!-- end third count item -->

					<!-- fourth count item -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="17">17</span>
							</div>
							<i class="fa fa-book fa-3x"></i>
							<h3>Образовательных <br> программ</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="89">89</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Преподавателей</h3>
                            <br>
						</div>
					</div>
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->

		</section>


<!--    <section id="news">
        <div class="container">
            <h2>
					{{ __('Новости') }}
                <a href="/news/">
						{{ __('Все новости') }}
                </a>
            </h2>

            <div class="news">
                @foreach ($news as $item)
                    <div class="news__preview wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img class="wow fadeInUp" src="/storage/news/@if(Config::get('app.locale') === 'ru'){!! unserialize($item->bg_images)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if (empty(unserialize($item->bg_images)->kk)){!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->kk !!} @endif
@elseif(Config::get('app.locale') === 'en')@if(empty(unserialize($item->bg_images)->en)) {!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->en !!} @endif @endif" />
                        <div class="content">
                            <h4 class="heading animated fadeInDown">
                                <a href="{{ route('front.news.show', $item->slug) }}">
                                    @if (Config::get('app.locale') === 'ru')
                                        {!! Str::limit(unserialize($item->titles)->ru, 38) !!}
                                    @elseif(Config::get('app.locale') === 'kk')
                                        {!! Str::limit(unserialize($item->titles)->kk, 35) !!}
                                    @else
                                        {!! Str::limit(unserialize($item->titles)->en, 38) !!}
                                    @endif
                                </a>
                            </h4>
                            <p class="content__desc animated fadeInUp">
                                @if (Config::get('app.locale') === 'ru')
                                    {!! Str::limit(strip_tags(unserialize($item->descriptions)->ru), 160) !!}
                                @elseif(Config::get('app.locale') === 'kk')
                                    {!! Str::limit(strip_tags(unserialize($item->descriptions)->kk), 160) !!}
                                @else
                                    {!! Str::limit(strip_tags(unserialize($item->descriptions)->en), 160) !!}
                                @endif
                            </p>
                            <div class="department">
                                <i class="fas fa-users"></i>
                                <p>{!! $item->department !!}</p>
                            </div>
                            <div class="date-time">
                                <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}</p>
                                <p><i class="fas fa-clock"></i> {!! date('H:i', strtotime($item->publish_at)) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>-->
    <section id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title  wow animated rollIn">
							<h2>{{ __('Новости') }}</h2>
							<p>Flying is a beautiful dream, and the Academy is the place <br> where your dreams come true.</p>
						</div>
						<div id="blog-post" class="owl-carousel">
                        @foreach ($news as $item)
							<div>
								<div class="block wow fadeInRight">
									<img alt="" class="img-responsive" src="/storage/news/@if(Config::get('app.locale') === 'ru'){!! unserialize($item->bg_images)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if (empty(unserialize($item->bg_images)->kk)){!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->kk !!} @endif
@elseif(Config::get('app.locale') === 'en')@if(empty(unserialize($item->bg_images)->en)) {!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->en !!} @endif @endif" />
									<div class="content">
										<h4> <a href="{{ route('front.news.show', $item->slug) }}">
                                    @if (Config::get('app.locale') === 'ru')
                                        {!! Str::limit(unserialize($item->titles)->ru, 60) !!}
                                    @elseif(Config::get('app.locale') === 'kk')
                                        {!! Str::limit(unserialize($item->titles)->kk, 60) !!}
                                    @else
                                        {!! Str::limit(unserialize($item->titles)->en, 60) !!}
                                    @endif
                                             </a>
                                        </h4>
										<small>{!! $item->department !!} / <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}
                                            <i class="fas fa-clock"></i> {!! date('H:i', strtotime($item->publish_at)) !!}</p>
                                        </small>
										<p>
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! Str::limit(strip_tags(unserialize($item->descriptions)->ru), 200) !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! Str::limit(strip_tags(unserialize($item->descriptions)->kk), 200) !!}
                                        @else
                                            {!! Str::limit(strip_tags(unserialize($item->descriptions)->en), 200) !!}
                                        @endif
										</p>
										<a href="{{ route('front.news.show', $item->slug) }}" class="btn btn-read">{{ __('Подробнее') }}</a>

									</div>
								</div>
							</div>
                        @endforeach
						</div>
					</div>
                    <div class="portfolio_btn text-center fix m-top-100">
                                <a href="/news/" class="btn btn-read">{{ __('Посмотреть все') }}</a>
                    </div>
				</div>
			</div>
		</section>
    <!-- <section id="events">
        <div class="container wow fadeInUp">
            <h2>{{ __('Объявления') }}</h2>
            <div class="events">
                @foreach ($events as $event)
                    <div class="event wow fadeInUp">
                        <div class="event__date-info">
                            <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($event->publish_at)) !!}</p>
                            <p><i class="fas fa-clock"></i> {!! date('H:i', strtotime($event->publish_at)) !!}</p>
                        </div>
                        <div class="event__preview">
                            <h4>
                                <a href="{{ route('front.events.show', $event->slug) }}">
                                    @if (Config::get('app.locale') === 'ru')
                                        {!! Str::limit(unserialize($event->titles)->ru, 38) !!}
                                    @elseif(Config::get('app.locale') === 'kk')
                                        {!! Str::limit(unserialize($event->titles)->kk, 35) !!}
                                    @else
                                        {!! Str::limit(unserialize($event->titles)->en, 38) !!}
                                    @endif
                                </a>
                            </h4>
                            <p class="content__desc">
                                @if (Config::get('app.locale') === 'ru')
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->ru), 160) !!}
                                @elseif(Config::get('app.locale') === 'kk')
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->kk), 160) !!}
                                @else
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->en), 160) !!}
                                @endif
                            </p>
                            <div class="department">
                                <i class="fas fa-users"></i>
                                <p>{!! $event->department !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section> -->
    <section id="testimonial" class="parallax-section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- section title -->
						<div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
							<h3>Объявления Академии</h3>
						</div>
						<!-- /section title -->

						<!-- testimonial wrapper -->
						<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                        @foreach ($events as $event)
							<!-- testimonial single -->
							<div class="item text-center">

								<!-- client photo -->
								<div class="client-thumb">
									<img src="/assets/images/logo_agakaz_b.jpg" class="img-responsive" alt="Meghna">
								</div>
								<!-- /client photo -->

								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3><a href="{{ route('front.events.show', $event->slug) }}">
                                    @if (Config::get('app.locale') === 'ru')
                                        {!! Str::limit(unserialize($event->titles)->ru, 50) !!}
                                    @elseif(Config::get('app.locale') === 'kk')
                                        {!! Str::limit(unserialize($event->titles)->kk, 50) !!}
                                    @else
                                        {!! Str::limit(unserialize($event->titles)->en, 50) !!}
                                    @endif
                                </a></h3>
										<span>  <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($event->publish_at)) !!}        <i class="fas fa-clock"></i> {!! date('H:i', strtotime($event->publish_at)) !!}</p></span>
									</div>
									<div class="client-comment">
										<p>@if (Config::get('app.locale') === 'ru')
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->ru), 260) !!}
                                @elseif(Config::get('app.locale') === 'kk')
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->kk), 260) !!}
                                @else
                                    {!! Str::limit(strip_tags(unserialize($event->descriptions)->en), 260) !!}
                                @endif</p>
										<ul class="social-profile">
											<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
                            @endforeach
							<!-- /testimonial single -->
						</div>		<!-- end testimonial wrapper -->
					</div> 		<!-- end col lg 12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        <section id="client-logo">
			<div class="container">
            <div class="title text-center wow animated zoomInDown">
							<h2>Наши <span class="color">Партнеры</span></h2>
							<div class="border"></div>
	  </div>
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div id="Client_Logo" class="owl-carousel outer">
								<div class="inner">
									<a href="https://www.icao.int/Pages/default.aspx" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/icao.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://www.easa.europa.eu/home" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/easa.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://tsi.lv/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/tsi.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://alicanto.org/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/alicanto.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://uvauga.ru/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/uvauga.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://www.baatraining.com/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/baaTraining.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://erau.edu/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/erau.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://www.iata.org/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/iata.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://airastana.com/kaz/ru-RU" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/airAstana.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://naa.edu.az/en/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/naa.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://spbguga.ru/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/spbguga.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="http://www.scat.kz/ru/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/scat.png" alt=""></a>
								</div>
                                <div class="inner">
									<a href="https://www.f-air.cz/en" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/fair.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="https://www.ugatu.su/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/ugatu.png" alt=""></a>
								</div>
                                <div class="inner">
									<a href="https://www.eskisehir.edu.tr/en" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/eskisehir.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="http://kai.kg/ru" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/kai.png" alt=""></a>
								</div>
                                <div class="inner">
									<a href="https://www.mstuca.ru/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/mstuca.png" alt=""></a>
								</div>
                                <div class="inner">
									<a href="https://aviacenter.org/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/aviacenter.png" alt=""></a>
								</div>
								<div class="inner">
									<a href="http://www.arz405.kz/" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/arz.png" alt=""></a>
								</div>
                                <div class="inner">
									<a href="https://www.patriagroup.com/services/professional-pilot-training/pilot-training-programs" target="_blank"><img class="img-responsive" src="/assets/images/clientLogo/patria.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <section id="map">
        <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5802.496879380682!2d77.00797511018712!3d43.35091361409262!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388312ab423e0e53%3A0x28f121f26f2a84!2z0JDQutCw0LTQtdC80LjRjyDQk9GA0LDQttC00LDQvdGB0LrQvtC5INCQ0LLQuNCw0YbQuNC4!5e0!3m2!1sru!2skz!4v1656590585883!5m2!1sru!2skz" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    </section>



@endsection
