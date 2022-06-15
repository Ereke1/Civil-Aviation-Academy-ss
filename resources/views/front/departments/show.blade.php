@extends('front.layouts.app')
@section('title')
    {{ __('Кафедры') }}
@endsection
@section('content')
    <section id="departments">
        <div class="container">
            <h1>
                {{ __('Кафедры') }}
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                <span> > </span>
                <a href="{!! route('front.departments.index') !!}">{{ __('Кафедры') }}</a>
                <span> > </span>
                <span>{!! __($department->name) !!}</span>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($pages as $page)
                    @php
                        $name = unserialize($page->name);
                    @endphp
                    <div class="col-md-4 col-sm-12">
                        <img src="{!! $page->image !!}" alt="">
                        <div class="title">
                            <h4>
                                <a href="{!! $department->slug !!}/{!! $page->slug !!}">
                                    @if (Config::get('app.locale') === 'ru')
                                        {!! $name['ru'] !!}
                                    @elseif(Config::get('app.locale') === 'kk')
                                        {!! $name['kk'] !!}
                                    @else
                                        {!! $name['en'] !!}
                                    @endif
                                </a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
