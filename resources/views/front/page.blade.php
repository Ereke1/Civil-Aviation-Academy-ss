@extends('front.layouts.app')
@section('title')Академия Гражданской Авиации@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                {!! $data->title !!}
            </h1>
				<div class="breadcrumbs">
					<a href="{!! route('front.home') !!}">Главная</a>
					<span> > </span>
					<span>{!! $data->title !!}</span>
				</div>
            <div>
                {!! $data->desc !!}
            </div>
        </div>
    </section>
@endsection
