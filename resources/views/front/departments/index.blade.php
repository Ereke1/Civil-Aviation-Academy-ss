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
                <span>{{ __('Кафедры') }}</span>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($departments as $department)
                    <div class="col-md-4 col-sm-12">
                        <img src="{!! $department->image !!}" alt="">
                        <div class="title">
                            <h4>
                                <a href="/departments/{!! $department->slug !!}">
                                    {{ __($department->name) }}
                                </a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
