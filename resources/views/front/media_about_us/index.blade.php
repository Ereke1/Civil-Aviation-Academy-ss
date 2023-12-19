@extends('front.layouts.app')
@section('title')
    Академия Гражданской Авиации
@endsection
@section('content')
    <section id="news">
        <div class="container">
            <h1>
                @if (Config::get('app.locale') === 'ru')
                    СМИ о нас
                @elseif(Config::get('app.locale') === 'kk')
                    Біз туралы БАҚ
                @else
                    Media about us
                @endif
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">
                    @if (Config::get('app.locale') === 'ru')
                        Главная
                    @elseif(Config::get('app.locale') === 'kk')
                        Үйге
                    @else
                        Home
                    @endif
                </a>
                <span> > </span>
                <span>
                    @if (Config::get('app.locale') === 'ru')
                        СМИ о нас
                    @elseif(Config::get('app.locale') === 'kk')
                        Біз туралы БАҚ
                    @else
                        Media about us
                    @endif
                </span>
            </div>
            <br>
            <div class="news">
                @foreach ($data as $item)
                    <div style="background: white;font-size: 15px;padding: 15px 10px;width: 100%;border-bottom: 2px solid darkblue;">
                        <p>
                            <span class="h5">
                                <b>
                                    <a href="{{ $item->link }}">
                                        @if (Config::get('app.locale') === 'ru')
                                            {{$item->media_en}}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {{$item->media_en}}
                                        @else
                                            {{$item->media_en}}
                                        @endif
                                    </a>
                                </b>
                            </span> -
                            @if (Config::get('app.locale') === 'ru')
                                {{$item->title_ru}}
                            @elseif(Config::get('app.locale') === 'kk')
                                {{$item->title_kk}}
                            @else
                                {{$item->title_en}}
                            @endif
                        </p>
                        <a href="{{ $item->link }}">
                            @if (Config::get('app.locale') === 'ru')
                                Подробнее...
                            @elseif(Config::get('app.locale') === 'kk')
                                Толығырақ...
                            @else
                                Read more...
                            @endif
                        </a>
                    </div>
                    <hr class="col-12">
                @endforeach
            </div>
        </div>
    </section>
@endsection
