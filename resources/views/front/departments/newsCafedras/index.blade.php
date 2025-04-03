@extends('front.layouts.app')
@section('title')
    Академия Гражданской Авиации
@endsection
@section('content')
    <section id="news">
        <div class="container">
            <h1>
                @if (Config::get('app.locale') === 'ru')
                    Мероприятия
                @elseif(Config::get('app.locale') === 'kk')
                    Іс-шаралар
                @else
                    Events
                @endif
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                <span> > </span>
                <a href="{!! route('front.departments.index') !!}">{{ __('Кафедры') }}</a>
                <span> > </span>
                <a href="{!! route('front.departments.show', $department->slug) !!}">{!! __($department->name) !!}</a>
                <span> > </span>
                <span>
                    @if (Config::get('app.locale') === 'ru')
                        Мероприятия
                    @elseif(Config::get('app.locale') === 'kk')
                        Іс-шаралар
                    @else
                        Events
                    @endif
                </span>
            </div>
            <div class="news">
                @foreach ($news as $item)
                    <div class="news__preview">
                        <a
                            href="{{ route('front.department.newsCafedras.show', [$slug, $department_id, 'id' => $item->id]) }}">
                            <img src="/storage/newsCafedra/{!! $item->bg_image !!}" />
                        </a>
                        <div class="content">
                            <div class="content-title">
                                <h4>
                                    <a
                                        href="{{ route('front.department.newsCafedras.show', [$slug, $department_id, 'id' => $item->id]) }}">
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
                            {{-- <div class="department">
                                <i class="fas fa-users"></i>
                                <p>{!! $item->department !!}</p>
                            </div> --}}
                            <div class="date-time">
                                <p><i class="far fa-calendar-alt"></i> {!! date('d.m.Y', strtotime($item->publish_at)) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="margin-top: 20px">
                {{ $news->links('admin.pagination.default') }}
            </div>
        </div>
    </section>
@endsection
