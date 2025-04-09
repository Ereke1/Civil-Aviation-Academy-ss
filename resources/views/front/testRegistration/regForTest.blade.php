@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                @if (Config::get('app.locale') === 'ru')
                    Запись на тестирование и интервью
                @elseif(Config::get('app.locale') === 'kk')
                    Тестілеуге және сұхбатқа жазылу
                @else
                    Sign up for testing and interviews
                @endif
            </h1>

            <p class="mb-5 mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>

            <div class="p-5 bg-white rounded shadow mb-5">
                <!-- Rounded tabs -->
                <ul id="myTab" role="tablist"
                    class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 rounded-nav">
                    <li class="nav-item flex-sm-fill">
                        <a id="home-tab" data-toggle="tab" href="#reg1" role="tab" aria-controls="home"
                            aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">
                            Регистрация
                        </a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="profile-tab" data-toggle="tab" href="#reg2" role="tab" aria-controls="profile"
                            aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Запись на другую
                            дату</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div id="reg1" role="tabpanel" aria-labelledby="home-tab"
                        class="tab-pane fade px-4 py-5 show active">

                        <div class="container">
                            <div class="filter row justify-content-center">
                                <div class="col-md-3 col-sm-6">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form id="regForm" action="{{ route('front.testRegistration.submit') }}"
                                        method="POST">
                                        @csrf
                                        <label for="email">Email*</label>
                                        <input type="email" id="email" name="email" class="form-control" required>

                                        <label for="name">Имя*</label>
                                        <input type="text" id="name" name="name" class="form-control" required>

                                        <label for="surname">Фамилия*</label>
                                        <input type="text" id="surname" name="surname" class="form-control" required>

                                        <label for="patronymic">Отчество</label>
                                        <input type="text" id="patronymic" name="patronymic" class="form-control">

                                        <label for="phone">Телефон*</label>
                                        <input type="text" id="phone" name="phone" class="phone form-control">

                                        <label for="datepicker" class="form-label">Выберите доступную дату*</label>
                                        <input type="text" id="datepicker" name="test_date" class="form-control" required
                                            autocomplete="off">
                                        {{-- <div class="invalid-feedback">Заполните данное поле.</div> --}}


                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="reg2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">

                        <div class="container">
                            <div class="filter row justify-content-center">
                                <div class="col-md-3 col-sm-6">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form id="regForm" action="{{ route('front.testRegistrationChangeDate.changeDate') }}"
                                        method="POST">
                                        @csrf
                                        <label for="email">Email*</label>
                                        <input type="email" id="email" name="email" class="form-control" required>

                                        <label for="datepicker" class="form-label">Выберите доступную дату*</label>
                                        <input type="text" id="datepicker" name="test_date" class="form-control" required
                                            autocomplete="off">
                                        {{-- <div class="invalid-feedback">Заполните данное поле.</div> --}}


                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Подтвердить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End rounded tabs -->


                </div>




                <!-- Flatpickr JS -->
                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                </script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                </script>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        let availableDates = {!! json_encode($availableDates) !!}; // Blade-преобразование в JS

                        flatpickr("#datepicker", {
                            enable: availableDates,
                            dateFormat: "Y-m-d",
                            locale: "ru",
                            allowInput: false,
                            defaultDate: {!! json_encode($availableDates[0]) !!},
                            onReady: function(selectedDates, dateStr, instance) {
                                instance.clear(); // Убираем выбранную дату при инициализации
                            }
                        });
                    });

                    // Проверка даты перед сабмитом
                    (() => {
                        'use strict';
                        const form = document.getElementById('regForm');
                        const name = document.getElementById('name');
                        const surname = document.getElementById('surname');
                        const email = document.getElementById('email');
                        const phone = document.getElementById('phone');
                        const dateInput = document.getElementById('datepicker');

                        form.addEventListener('submit', function(event) {
                            // Очищаем предыдущие ошибки
                            form.classList.remove('was-validated');

                            name.classList.remove('is-invalid');
                            surname.classList.remove('is-invalid');
                            email.classList.remove('is-invalid');
                            phone.classList.remove('is-invalid');
                            dateInput.classList.remove('is-invalid');

                            let isValid = true;

                            // Проверка: есть ли данные в обязательных полях
                            if (!name.value) {
                                name.classList.add('is-invalid');
                                isValid = false;
                            }

                            if (!surname.value) {
                                surname.classList.add('is-invalid');
                                isValid = false;
                            }

                            if (!email.value || !email.checkValidity()) {
                                email.classList.add('is-invalid');
                                isValid = false;
                            }

                            if (!phone.value || !phone.checkValidity()) {
                                phone.classList.add('is-invalid');
                                isValid = false;
                            }

                            if (!dateInput.value) {
                                dateInput.classList.add('is-invalid');
                                isValid = false;
                            }

                            // Если форма не валидна, не отправляем ее
                            if (!isValid) {
                                event.preventDefault();
                                return;
                            }


                        }, false);
                    })();
                </script>

            </div>
    </section>
@endsection
