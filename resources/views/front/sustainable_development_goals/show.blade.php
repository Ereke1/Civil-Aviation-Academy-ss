@extends('front.layouts.app')
@section('title')
    Академия Гражданской Авиации
@endsection
@section('content')
    <section id="news">
        <div class="container">
            <h1>
                @if (Config::get('app.locale') === 'ru')
                    {!! $goal->name !!}
                @elseif(Config::get('app.locale') === 'kk')
                    {!! $goal->name_kk !!}
                @else
                    {!! $goal->name_en !!}
                @endif
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">
                    @if (Config::get('app.locale') === 'ru')
                        Главная
                    @elseif(Config::get('app.locale') === 'kk')
                        Уйге
                    @else
                        Home
                    @endif
                </a>
                <span> > </span>
                <a href="{!! route('front.sustainable_development_goals') !!}">
                    @if (Config::get('app.locale') === 'ru')
                        ЦУР
                    @elseif(Config::get('app.locale') === 'kk')
                        ТДМ
                    @else
                        SDG
                    @endif
                </a>
                <span> > </span>
                <span>
                    @if (Config::get('app.locale') === 'ru')
                        {!! $goal->name !!}
                    @elseif(Config::get('app.locale') === 'kk')
                        {!! $goal->name_kk !!}
                    @else
                        {!! $goal->name_en !!}
                    @endif
                </span>
            </div>
            <div class="news">
                @foreach ($goalsInfo as $item)
                    <div class="news__preview">
                        <a href="{{ $item->link }}">
                            <img
                                src="{!! $item->image !!}" />
                        </a>
                        <div class="content">
                            <div class="content-title">
                                <h4>
                                    <a href="{{ $item->link }}">
                                        @if (Config::get('app.locale') === 'ru')
                                            {!! $item->title_ru !!}
                                        @elseif(Config::get('app.locale') === 'kk')
                                            {!! $item->title_kk !!}
                                        @else
                                            {!! $item->title_en !!}
                                        @endif
                                    </a>
                                </h4>
                            </div>
                            {{-- <div class="date-time">
                                <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}</p>
                                <p>&nbsp;&nbsp;<i class="fas fa-clock"></i> {!! date('H:i', strtotime($item->publish_at)) !!}</p>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="margin-top: 20px">
                {{ $goalsInfo->links('admin.pagination.default') }}
            </div>
        </div>
    </section>
@endsection
