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

            <form action="{{ route('registration.submit') }}" method="POST">
                @csrf
                <label for="email">Ваш Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="name">Ваше Имя:</label>
                <input type="text" id="name" name="name" required>

                <button type="submit">Зарегистрироваться</button>
            </form>


            <input type="text" id="datepicker" name="date" class="form-control">

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    fetch('/available-dates')
                        .then(response => response.json())
                        .then(dates => {
                            flatpickr("#datepicker", {
                                enable: dates, // Доступные даты
                                dateFormat: "Y-m-d",
                                locale: "ru"
                            });
                        });
                });
                </script>

        </div>
    </section>
@endsection
