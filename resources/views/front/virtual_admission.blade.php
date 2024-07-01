@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                efefe
            </h1>
            <div class="breadcrumbs">
                <a href="{!! route('front.home') !!}">{{ __('Главная') }}</a>
                <span> > </span>
                <span>efef</span>
            </div>
            <div>
                <div class="card" style="margin-bottom: 3px;">
                    <a class="card-link collapsed" data-toggle="collapse" href="#id1">
                        <div class="card-header"
                            style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            efefef
                        </div>
                    </a>

                    <div class="collapse show" data-parent="#accordion" id="id1"
                        style="height: 0px; overflow-x: auto;">
                        <div class="card-body">
                            <p>
                                dhdrgdhr
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-bottom: 3px;">
                    <div class="card-link">
                        <button class="card-header collapsed" data-toggle="collapse" data-target="#id11"
                            style="background:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500; width: 100%;">
                                Профессорско-преподавательский состав
                                    докторантуры
                        </button>
                    </div>

                    <div class="collapse show" data-parent="#accordion" id="id11"
                        style="height: 0px; overflow-x: auto;">
                        <div class="card-body">
                            <p>dhdrgdhr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
