@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section class="wrapper" id="pages">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">&nbsp;</div>
            </div>

            <div class="container overflow-hidden ourteam">
                <div class="row gy-4 gy-lg-4 gx-xxl-5">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 border-0 border-bottom border-primary shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0">
                                    <a class="stretched-link" href="/trenazhernyy-kompleks">
                                        <img class="img-fluid" loading="lazy"
                                        src="/assets/images/pages/71119_5e82deef9.jpg"
                                        style="width: 400px; height: 400px;" />
                                    </a>
                                    {{-- <figcaption class="m-0 p-4">
                                        <h4 class="mb-1"><a class="stretched-link" href="/trenazhernyy-kompleks">{{ __('Ликвидация нищеты') }}</a></h4>
                                    </figcaption> --}}
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
