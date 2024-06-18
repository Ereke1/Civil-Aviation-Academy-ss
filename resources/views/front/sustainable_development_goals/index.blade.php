@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section class="wrapper" id="pages">
        <div class="container">

            <h1>
                @if (Config::get('app.locale') === 'ru')
                    Цели устойчивого развития
                @elseif(Config::get('app.locale') === 'kk')
                    Тұрақты даму мақсаттары
                @else
                    Sustainable Development Goals
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
                    @if (Config::get('app.locale') === 'ru')
                        ЦУР
                    @elseif(Config::get('app.locale') === 'kk')
                        ТДМ
                    @else
                        SDG
                    @endif
                <span>
            </div>


            <div class="container overflow-hidden ourteam">
                <div class="row gy-4 gy-lg-4 gx-xxl-5">
                    @foreach ($goals as $goal)
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="card h-100 border-0 border-bottom border-primary shadow-sm overflow-hidden">
                                <div class="card-body p-0">
                                    <figure class="m-0 p-0">
                                        <a class="stretched-link" href="sustainable_development_goals/{!! $goal->id !!}">
                                            <img class="img-fluid" loading="lazy"
                                                @if (Config::get('app.locale') === 'ru') src="{!! $goal->image !!}"
                                                @elseif(Config::get('app.locale') === 'kk')
                                                src="{!! $goal->image_kk !!}"
                                                @else
                                                src="{!! $goal->image_en !!}"
                                                @endif
                                                style="width: 400px; height: 400px;" />
                                        </a>
                                        {{-- <figcaption class="m-0 p-4">
                                        <h4 class="mb-1"><a class="stretched-link" href="/trenazhernyy-kompleks">{{ __('Ликвидация нищеты') }}</a></h4>
                                    </figcaption> --}}
                                    </figure>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
