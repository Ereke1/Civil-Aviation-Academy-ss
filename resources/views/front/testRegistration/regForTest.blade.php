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

            <div class="alert alert-info" style="margin-bottom: 20px; padding: 40px; border-radius: 5px;">
                <h4><strong>ВНИМАНИЕ!</strong> Пожалуйста, внимательно ознакомьтесь с информацией перед регистрацией:</h4>
                <ol>
                    <li>
                        <strong>Если у вас есть действующий сертификат</strong> по английскому языку, <strong>тестирование проходить не требуется</strong>. Подходят следующие сертификаты:
                        <ul>
                            <li>IELTS — от <strong>5.0</strong> и выше</li>
                            <li>TOEFL iBT — от <strong>57</strong></li>
                            <li>TOEFL CBT — от <strong>163</strong></li>
                            <li>TOEFL PBT — от <strong>487</strong></li>
                        </ul>
                        Загрузите скан сертификата при регистрации.
                    </li>
                    <li>
                        <strong>Если сертификата нет</strong>, необходимо пройти <strong>тестирование по английскому языку</strong> в Академии гражданской авиации:
                        <ul>
                            <li>Основной период: <strong>с 6 по 12 июля 2025 года</strong></li>
                            <li>Для платного отделения: <strong>до 20 августа 2025 года</strong></li>
                        </ul>
                    </li>
                    <li>
                        <strong>Интервью обязательно для всех</strong> поступающих и проводится <strong>с 6 июля по 20 августа 2025 года</strong>.
                    </li>
                    <li>
                        Зачисление в Академию возможно только при успешном прохождении тестирования (если требуется) и интервью, а также при наборе проходного балла.
                    </li>
                </ol>
            </div>

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
                                        method="POST" enctype="multipart/form-data">
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

                                        <label class="mt-3">Есть ли IELTS?*</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="have_ielts" id="ielts_yes" value="1">
                                            <label class="form-check-label" for="ielts_yes">Да</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="have_ielts" id="ielts_no" value="0" checked>
                                            <label class="form-check-label" for="ielts_no">Нет</label>
                                        </div>

                                        <div id="testDateWrapper">
                                            <label for="test_datepicker" class="form-label">Выберите доступную дату теста*</label>
                                            <input type="text" id="test_datepicker" name="test_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="testTimeWrapper" class="mt-3">
                                            <label for="test_time_slot">Выберите часовой интервала*</label>
                                            <select id="test_time_slot" name="test_time_slot" class="form-control">
                                                {{-- Опции добавим через JS --}}
                                            </select>
                                            {{-- <select id="test_time_slot" name="test_time_slot" class="form-control">
                                                <option value=""></option>
                                                <option value="09:00-10:00">09:00 – 10:00</option>
                                                <option value="10:00-11:00">10:00 – 11:00</option>
                                                <option value="11:00-12:00">11:00 – 12:00</option>
                                                <option value="12:00-13:00">12:00 – 13:00</option>
                                                <option value="13:00-14:00">13:00 – 14:00</option>
                                                <option value="14:00-15:00">14:00 – 15:00</option>
                                            </select> --}}
                                        </div>

                                        <div id="ieltsWrapper" style="display: none; margin-bottom: 20px">
                                            <label for="ielts_file">{{ __('Прикрепите сертификат IELTS/TOEFL') }}</label>
                                            <input type="file" name="ielts_file" accept=".pdf,.jpg,.png">
                                        </div>

                                        <div id="interviewDateWrapper" style="display: none;">
                                            <label for="interview_datepicker" class="form-label">Выберите дату интервью*</label>
                                            <input type="text" id="interview_datepicker" name="interview_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="interviewTimeWrapper" style="display: none;" class="mt-3">
                                            <label for="interview_time_slot">Выберите часовой интервал интервью*</label>
                                            <select id="interview_time_slot" name="interview_time_slot" class="form-control">
                                                {{-- Опции добавим через JS --}}
                                            </select>
                                            {{-- <select id="interview_time_slot" name="interview_time_slot" class="form-control">
                                                <option value=""></option>
                                                <option value="09:00-10:00">09:00 – 10:00</option>
                                                <option value="10:00-11:00">10:00 – 11:00</option>
                                                <option value="11:00-12:00">11:00 – 12:00</option>
                                                <option value="12:00-13:00">12:00 – 13:00</option>
                                                <option value="13:00-14:00">13:00 – 14:00</option>
                                                <option value="14:00-15:00">14:00 – 15:00</option>
                                            </select> --}}
                                        </div>

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
                                    {{-- <form id="regForm" action="{{ route('front.testRegistrationChangeDate.changeDate') }}"
                                        method="POST">
                                        @csrf
                                        <label for="email">Email*</label>
                                        <input type="email" id="email" name="email" class="form-control" required>

                                        <label for="test_datepicker" class="form-label">Выберите доступную дату*</label>
                                        <input type="text" id="test_datepicker" name="test_date" class="form-control" required
                                            autocomplete="off">

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Подтвердить</button>
                                        </div>
                                    </form> --}}
                                    <form id="changeDateForm" action="{{ route('front.testRegistrationChangeDate.changeDate') }}"
                                        method="POST">
                                        @csrf

                                        <label for="email_change">Email*</label>
                                        <input type="email" id="email_change" name="email" class="form-control" required>

                                        <label class="mt-3">Есть ли IELTS?*</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="have_ielts_change" id="ielts_yes_change" value="1">
                                            <label class="form-check-label" for="ielts_yes_change">Да</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="have_ielts_change" id="ielts_no_change" value="0" checked>
                                            <label class="form-check-label" for="ielts_no_change">Нет</label>
                                        </div>

                                        <div id="testDateWrapperChange">
                                            <label for="test_datepicker_change" class="form-label">Выберите доступную дату теста*</label>
                                            <input type="text" id="test_datepicker_change" name="test_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="testTimeWrapperChange" class="mt-3">
                                            <label for="test_time_slot_change">Выберите часовой интервал*</label>
                                            <select id="test_time_slot_change" name="test_time_slot" class="form-control"></select>
                                        </div>

                                        <div id="interviewDateWrapperChange" style="display: none;">
                                            <label for="interview_datepicker_change" class="form-label">Выберите дату интервью*</label>
                                            <input type="text" id="interview_datepicker_change" name="interview_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="interviewTimeWrapperChange" style="display: none;" class="mt-3">
                                            <label for="interview_time_slot_change">Выберите часовой интервал интервью*</label>
                                            <select id="interview_time_slot_change" name="interview_time_slot" class="form-control"></select>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Подтвердить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



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
                        let availableDates = {!! json_encode($availableDates) !!};
                        let availableInterviewDates = {!! json_encode($availableInterviewDates) !!};
                        let streams = {!! json_encode($streams) !!};
                        let streamsInterview = {!! json_encode($streamsInterview) !!};


                        flatpickr("#test_datepicker", {
                            enable: availableDates,
                            dateFormat: "Y-m-d",
                            locale: "ru",
                            allowInput: false,
                            defaultDate: {!! json_encode($availableDates[0]) !!},
                            onReady: function(selectedDates, dateStr, instance) {
                                instance.clear();
                            }
                        });
                        flatpickr("#interview_datepicker", {
                            enable: availableInterviewDates,
                            dateFormat: "Y-m-d",
                            locale: "ru",
                            allowInput: false,
                            defaultDate: {!! json_encode($availableInterviewDates[0]) !!},
                            onReady: function(selectedDates, dateStr, instance) {
                                instance.clear();
                            }
                        });
                        flatpickr("#test_datepicker_change", {
                            enable: availableDates,
                            dateFormat: "Y-m-d",
                            locale: "ru",
                            allowInput: false,
                            defaultDate: {!! json_encode($availableDates[0]) !!},
                            onReady: function(selectedDates, dateStr, instance) {
                                instance.clear();
                            }
                        });
                        flatpickr("#interview_datepicker_change", {
                            enable: availableInterviewDates,
                            dateFormat: "Y-m-d",
                            locale: "ru",
                            allowInput: false,
                            defaultDate: {!! json_encode($availableInterviewDates[0]) !!},
                            onReady: function(selectedDates, dateStr, instance) {
                                instance.clear();
                            }
                        });

                        function renderSlots(date, stream, time_slot) {
                            const sel = document.getElementById(time_slot);
                            sel.innerHTML = '<option value=""></option>';
                            (stream[date] || []).forEach(slot => {
                                const opt = document.createElement('option');
                                opt.value       = slot;
                                opt.textContent = slot.replace('-', ' – ');
                                sel.appendChild(opt);
                            });
                        }

                        const fpInstance = document.querySelector("#test_datepicker")._flatpickr;
                        const fpInstanceInterview = document.querySelector("#interview_datepicker")._flatpickr;
                        const changeFpTest = document.querySelector("#test_datepicker_change")._flatpickr;
                        const changeFpInterview = document.querySelector("#interview_datepicker_change")._flatpickr;

                        fpInstance.config.onChange.push(function(selectedDates, dateStr) {
                            renderSlots(dateStr,streams,'test_time_slot');
                        });
                        fpInstanceInterview.config.onChange.push(function(selectedDates, dateStr) {
                            renderSlots(dateStr,streamsInterview, 'interview_time_slot');
                        });
                        changeFpTest.config.onChange.push(function(selectedDates, dateStr) {
                            renderSlots(dateStr, streams, 'test_time_slot_change');
                        });
                        changeFpInterview.config.onChange.push(function(selectedDates, dateStr) {
                            renderSlots(dateStr, streamsInterview, 'interview_time_slot_change');
                        });

                        function toggleDateFields() {
                            const hasIELTS = document.getElementById('ielts_yes').checked;
                            document.getElementById('testDateWrapper').style.display      = hasIELTS ? 'none'  : 'block';
                            document.getElementById('testTimeWrapper').style.display      = hasIELTS ? 'none'  : 'block';
                            document.getElementById('interviewDateWrapper').style.display = hasIELTS ? 'block' : 'none';
                            document.getElementById('interviewTimeWrapper').style.display = hasIELTS ? 'block' : 'none';
                            document.getElementById('ieltsWrapper').style.display = hasIELTS ? 'block' : 'none';

                            document.getElementById('test_datepicker').required      = !hasIELTS;
                            document.getElementById('interview_datepicker').required = hasIELTS;
                            // document.getElementById('test_time_slot').required      = !hasIELTS;
                            // document.getElementById('interview_time_slot').required = hasIELTS;

                            const has = document.getElementById('change_ielts_yes').checked;
                            document.getElementById('changeTestDateWrapper').style.display      = has ? 'none'  : 'block';
                            document.getElementById('changeTestTimeWrapper').style.display      = has ? 'none'  : 'block';
                            document.getElementById('changeInterviewDateWrapper').style.display = has ? 'block' : 'none';
                            document.getElementById('changeInterviewTimeWrapper').style.display = has ? 'block' : 'none';

                            // корректируем required
                            document.getElementById('change_test_datepicker').required      = !has;
                            document.getElementById('change_test_time_slot').required      = !has;
                            document.getElementById('change_interview_datepicker').required= has;
                            document.getElementById('change_interview_time_slot').required  = has;
                        }

                        function toggleDateFieldsChange() {
                            const hasIELTS = document.getElementById('ielts_yes_change').checked;
                            document.getElementById('testDateWrapperChange').style.display = hasIELTS ? 'none' : 'block';
                            document.getElementById('testTimeWrapperChange').style.display = hasIELTS ? 'none' : 'block';
                            document.getElementById('interviewDateWrapperChange').style.display = hasIELTS ? 'block' : 'none';
                            document.getElementById('interviewTimeWrapperChange').style.display = hasIELTS ? 'block' : 'none';

                            document.getElementById('test_datepicker_change').required = !hasIELTS;
                            document.getElementById('test_time_slot_change').required = !hasIELTS;
                            document.getElementById('interview_datepicker_change').required = hasIELTS;
                            document.getElementById('interview_time_slot_change').required = hasIELTS;
                        }

                        document.getElementById('ielts_yes_change').addEventListener('change', toggleDateFieldsChange);
                        document.getElementById('ielts_no_change').addEventListener('change', toggleDateFieldsChange);
                        toggleDateFieldsChange();

                        document.getElementById('ielts_yes').addEventListener('change', toggleDateFields);
                        document.getElementById('ielts_no').addEventListener('change',  toggleDateFields);
                        toggleDateFields();
                    });

                    (() => {
                        'use strict';
                        const form            = document.getElementById('regForm');
                        const name            = document.getElementById('name');
                        const surname         = document.getElementById('surname');
                        const email           = document.getElementById('email');
                        const phone           = document.getElementById('phone');
                        const testInput       = document.getElementById('test_datepicker');
                        const interviewInput  = document.getElementById('interview_datepicker');
                        const testTimeSelect   = document.getElementById('test_time_slot');
                        const interviewTimeSel = document.getElementById('interview_time_slot');
                        const ieltsYes        = document.getElementById('ielts_yes');
                        const ieltsNo         = document.getElementById('ielts_no');


                        form.addEventListener('submit', function(event) {
                            [name, surname, email, phone, testInput, interviewInput, testTimeSelect, interviewTimeSel].forEach(el => {
                                el.classList.remove('is-invalid');
                            });

                            let isValid = true;
                            const hasIelts = ieltsYes.checked;

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

                            if (hasIelts) {
                                if (!interviewInput.value)   { interviewInput.classList.add('is-invalid');   isValid = false; }
                                if (!interviewTimeSel.value) { interviewTimeSel.classList.add('is-invalid'); isValid = false; }
                            } else {
                                if (!testInput.value)        { testInput.classList.add('is-invalid');        isValid = false; }
                                if (!testTimeSelect.value)   { testTimeSelect.classList.add('is-invalid');   isValid = false; }
                            }

                            if (!isValid) {
                                event.preventDefault();
                            }
                        }, false);
                })();
                </script>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
    </section>
@endsection
