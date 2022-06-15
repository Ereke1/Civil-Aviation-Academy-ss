@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="slider" class="mb-4">
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
                    <!-- Slider main container -->
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
    </section>
    <section id="news">
        <div class="container">
            <h2>
					{{ __('Новости') }}
                <a href="/news/">
						{{ __('Все новости') }}
                </a>
            </h2>

            <div class="news">
                @foreach ($news as $item)
                    <div class="news__preview">
                        <img src="/storage/news/@if(Config::get('app.locale') === 'ru'){!! unserialize($item->bg_images)->ru !!}@elseif(Config::get('app.locale') === 'kk')@if (empty(unserialize($item->bg_images)->kk)){!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->kk !!} @endif
@elseif(Config::get('app.locale') === 'en')@if(empty(unserialize($item->bg_images)->en)) {!! unserialize($item->bg_images)->ru !!}@else{!! unserialize($item->bg_images)->en !!} @endif @endif" />
                        <div class="content">
                            <h4>
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
                            <p class="content__desc">
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
    </section>
    <section id="events">
        <div class="container">
            <h2>{{ __('Объявления') }}</h2>
            <div class="events">
                @foreach ($events as $event)
                    <div class="event">
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
    </section>
@endsection
