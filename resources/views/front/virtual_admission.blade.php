@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
<section id="services" class="services" style="background: #fff">
    <div class="container" style="margin-bottom: 5vw">
        <img src="/virtual consultations.jpeg" alt="">
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
          <div class="icon-box virtual_adm">
            <h4><a class="stretched-link" href="/priemnaya-komissiya-242">Приемная комиссия</a></h4>
            <p> График работы:<br>
                • Период работы 1 июня – 15 сентября 2022 г.<br>
                • Понедельник - суббота, с 9:00 ч. до 18:30 ч.<br>
                • Выходной - воскресенье<br>
                • С 13 по 20 июля в период приема заявлений для участия в конкурсе образовательного
                гранта рабочее время 24/7 (онлайн)<br>
                • С 10 по 28 августа в период приема оригиналов документов для зачисления на 1 курс
                Рабочее время 24/7 (онлайн)
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
          <div class="icon-box virtual_adm">
            <h4><a class="stretched-link" href="#">Офис регистратора</a></h4>
            <p></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 wow fadeInUp">
          <div class="icon-box virtual_adm">
            <h4><a class="stretched-link" href="#">Эдвайзинг</a></h4>
            <p></p>
          </div>
        </div>

      </div>

    </div>

  </section>
@endsection
