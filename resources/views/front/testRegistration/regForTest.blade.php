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
                    Sign up for testing and interview
                @endif
            </h1>

            <div class="alert alert-info" style="margin-bottom: 20px; padding: 40px; border-radius: 5px;">
                @if (Config::get('app.locale') === 'ru')
                <h4><strong>ВНИМАНИЕ!</strong></h4>
                <h4><strong>РЕГИСТРАЦИЯ НА ТЕСТИРОВАНИЕ И ИНТЕРВЬЮ</strong></h4>
                <p>Для группы образовательной программы B167- «Лётная эксплуатация летательных аппаратов и двигателей»,  образовательная программа «Пилот самолета».</p>
                <ol>
                    <li>
                        <strong>Если у вас есть действующий сертификат</strong> по английскому языку, <strong>тестирование проходить НЕ ТРЕБУЕТСЯ</strong>.
                        <ul>
                            <li>•	IELTS — от <strong>5.0</strong> и выше.</li>
                            <li>•	TOEFL iBT — от <strong>57</strong> и выше.</li>
                            <li>•	TOEFL CBT — от <strong>163</strong> и выше.</li>
                            <li>•	TOEFL PBT — от <strong>487</strong> и выше.</li>
                        </ul>
                        Загрузите на сайт PDF-формат сертификата при регистрации.
                    </li>
                    <br>
                        <strong>При отсутствии сертификата</strong>, необходимо пройти <strong>тестирование по английскому языку</strong> в Академии гражданской авиации:
                        <ul>
                            <li>•	Основной период: <strong>с 6 по 19 июля 2025 года.</strong></li>
                            <li>•	Для платного отделения: <strong>до 20 августа 2025 года.</strong></li>
                        </ul>
                    <br>
                    <li>
                        <strong>Интервью обязательно для всех</strong> поступающих и проводится <strong>с 6 июля по 20 августа 2025 года</strong>.
                    </li>
                </ol>

                @elseif(Config::get('app.locale') === 'kk')
                    <h4><strong>НАЗАР АУДАРЫҢЫЗДАР!</strong></h4>
                    <h4><strong>ТЕСТІЛЕУ ЖӘНЕ СҰХБАТТАСУҒА ТІРКЕЛУ</strong></h4>
                    <p>
                        B167 – «Ұшу аппараттары мен қозғалтқыштарды ұшуда пайдалану» білім беру бағдарламасы, Азаматтық ұшақтарды ұшуда пайдалану (ұшқыш) білім беру бағдарламасы бойынша топтары үшін:
                    </p>
                    <ol>
                        <li>
                        Егер сізде <strong>ағылшын тілі бойынша жарамды сертификат </strong>бар болса, онда тестілеуден өту <strong>ҚАЖЕТ ЕМЕС</strong>:
                            <ul>
                                <li>•	IELTS — <strong>5.0</strong> және одан жоғары.</li>
                                <li>•	TOEFL iBT — <strong>57</strong> және одан жоғары.</li>
                                <li>•	TOEFL CBT — <strong>163</strong> және одан жоғары.</li>
                                <li>•	TOEFL PBT — <strong>487</strong> және одан жоғары.</li>
                            </ul>
                            Тіркелу кезінде сертификатты PDF форматында сайтқа жүктеу қажет.
                        </li>
                        <br>
                            <strong>Сертификат болмаған жағдайда</strong>, Азаматтық Авиация Академиясында <strong>ағылшын тілі бойынша тестілеуден</strong> өту қажет:
                            <ul>
                                <li>•	Негізгі кезең: <strong>2025 жылдың 6–19 шілде аралығы</strong>.</li>
                                <li>•	Ақылы бөлім үшін: <strong>2025 жылдың 20 тамызына дейін</strong>.</li>
                            </ul>
                        <br>
                        <li>
                            Сұхбаттасудан  барлық үміткерлер <strong>МІНДЕТТІ ТҮРДЕ</strong> өтеді: <strong>2025 жылдың 6 шілдесінен 20 тамызына дейін</strong>.
                        </li>
                    </ol>
                @else
                    <h4><strong>ATTENTION!</strong></h4>
                    <h4><strong>REGISTRATION FOR TESTING AND INTERVIEW</strong></h4>
                    <p>For applicants to the educational program B167 – "Flight operation of aircraft and engines (pilot)"</p>
                    <ol>
                        <li>
                            <strong>If you have a valid English language certificate</strong> (one of the following), <strong>you are NOT required to take the English test</strong>.
                            <ul>
                                <li>•	IELTS — score of <strong>5.0</strong> or higher.</li>
                                <li>•	TOEFL iBT — score of <strong>57</strong> or higher.</li>
                                <li>•	TOEFL CBT — score of <strong>163</strong> or higher.</li>
                                <li>•	TOEFL PBT — score of <strong>487</strong> or higher.</li>
                            </ul>
                            Please upload a PDF copy of your certificate during registration on the website.
                        </li>
                        <br>
                            <strong>If you do not have a certificate</strong>, you must take <strong>the English language test</strong> at the Civil Aviation Academy:
                            <ul>
                                <li>•	Main testing period: <strong>July 6–19, 2025</strong>.</li>
                                <li>•	For fee-paying applicants: <strong>until August 20, 2025</strong>.</li>
                            </ul>
                        <br>
                        <li>
                            <strong>All applicants are required to attend an interview </strong> between <strong>July 6 and August 20, 2025.</strong>
                        </li>
                    </ol>
                @endif
            </div>

            <div class="p-5 bg-white rounded shadow mb-5">
                <!-- Rounded tabs -->
                <ul id="myTab" role="tablist"
                    class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 rounded-nav">
                    <li class="nav-item flex-sm-fill">
                        <a id="home-tab" data-toggle="tab" href="#reg1" role="tab" aria-controls="home"
                            aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">
                            @if (Config::get('app.locale') === 'ru')
                                Регистрация
                            @elseif(Config::get('app.locale') === 'kk')
                                Тіркелу
                            @else
                                Registration
                            @endif
                        </a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="profile-tab" data-toggle="tab" href="#reg2" role="tab" aria-controls="profile"
                            aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">
                            @if (Config::get('app.locale') === 'ru')
                                Запись на другую дату
                            @elseif(Config::get('app.locale') === 'kk')
                                Басқа күнге жазылу
                            @else
                                Re-register for another date
                            @endif
                        </a>
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

                                        <label for="name">
                                            @if (Config::get('app.locale') === 'ru')
                                                Имя*
                                            @elseif(Config::get('app.locale') === 'kk')
                                                Аты*
                                            @else
                                                Name*
                                            @endif
                                        </label>
                                        <input type="text" id="name" name="name" class="form-control" required>

                                        <label for="surname">
                                            @if (Config::get('app.locale') === 'ru')
                                                Фамилия*
                                            @elseif(Config::get('app.locale') === 'kk')
                                                Тегі*
                                            @else
                                                Surname*
                                            @endif
                                        </label>
                                        <input type="text" id="surname" name="surname" class="form-control" required>

                                        <label for="patronymic">
                                            @if (Config::get('app.locale') === 'ru')
                                                Отчество
                                            @elseif(Config::get('app.locale') === 'kk')
                                                Әкесінің аты
                                            @else
                                                Patronymic
                                            @endif
                                        </label>
                                        <input type="text" id="patronymic" name="patronymic" class="form-control mb-2">



                                                <div class="form-group">
                                                    <label for="ent_file">
                                                        @if (Config::get('app.locale') === 'ru')
                                                            Сертификат ЕНТ (PDF, JPG, PNG):
                                                        @elseif(Config::get('app.locale') === 'kk')
                                                            ҰБТ сертификаты (PDF, JPG, PNG):
                                                        @else
                                                            UNT Certificate (PDF, JPG, PNG):
                                                        @endif
                                                    </label>
                                                    <input type="file" name="ent_file" class="form-control-file" accept=".pdf,.jpg,.png" required>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="ent_score" >
                                                        @if (Config::get('app.locale') === 'ru')
                                                            Результат ЕНТ (85-140):
                                                        @elseif(Config::get('app.locale') === 'kk')
                                                            ҰБТ нәтижесі (85–140):
                                                        @else
                                                            UNT result (85-140):
                                                        @endif
                                                    </label>
                                                    <input type="number" id="ent_score" name="ent_score" class="form-control border " min="85" max="140" required>
                                                </div>




                                        <label for="phone">
                                            @if (Config::get('app.locale') === 'ru')
                                                Номер телефона*
                                            @elseif(Config::get('app.locale') === 'kk')
                                                Телефон номірі*
                                            @else
                                                Phone number*
                                            @endif
                                        </label>
                                        <input type="text" id="phone" name="phone" class="phone form-control" required>

                                        <label class="mt-3">
                                            @if (Config::get('app.locale') === 'ru')
                                                Сертификат IELTS/TOEFL?*
                                            @elseif(Config::get('app.locale') === 'kk')
                                                IELTS / TOEFL сертификаты?*
                                            @else
                                                IELTS/TOEFL certificate?*
                                            @endif
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="have_ielts" id="ielts_yes" value="1">
                                            <label class="form-check-label" for="ielts_yes" onchange="myFunction()">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Да
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Иә
                                                @else
                                                    Yes
                                                @endif
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="have_ielts" id="ielts_no" value="0" checked>
                                            <label class="form-check-label" for="ielts_no">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Нет
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Жоқ
                                                @else
                                                    No
                                                @endif
                                            </label>
                                        </div>

                                        <div id="testDateWrapper">
                                            <label for="test_datepicker" class="form-label">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите доступную дату теста*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Қол жетімді тест күнін таңдаңыз*
                                                @else
                                                    Select an available test date*
                                                @endif
                                            </label>
                                            <input type="text" id="test_datepicker" name="test_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="testTimeWrapper" class="mt-3">
                                            <label for="test_time_slot">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите время теста*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Тест уақытын таңдаңыз*
                                                @else
                                                    Select the test time*
                                                @endif
                                            </label>
                                            <select id="test_time_slot" name="test_time_slot" class="form-control">
                                                {{-- Опции добавим через JS --}}
                                            </select>
                                        </div>

                                        <div id="ieltsWrapper" style="display: none; margin-bottom: 20px">
                                            <label for="ielts_file">{{ __('Прикрепите сертификат IELTS/TOEFL') }}</label>
                                            <input type="file" id="ielts_file_input" name="ielts_file" accept=".pdf,.jpg,.png">
                                        </div>

                                        <div id="interviewDateWrapper" style="display: none;">
                                            <label for="interview_datepicker" class="form-label">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите дату интервью*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Сұхбат күнін таңдаңыз*
                                                @else
                                                    Choose an interview date*
                                                @endif
                                            </label>
                                            <input type="text" id="interview_datepicker" name="interview_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="interviewTimeWrapper" style="display: none;" class="mt-3">
                                            <label for="interview_time_slot">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите время интервью*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Сұхбат уақытын таңдаңыз*
                                                @else
                                                    Choose an interview time*
                                                @endif
                                            </label>
                                            <select id="interview_time_slot" name="interview_time_slot" class="form-control">
                                                {{-- Опции добавим через JS --}}
                                            </select>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Зарегистрироваться
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Тіркелу
                                                @else
                                                    Register
                                                @endif
                                            </button>
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
                                    <form id="changeDateForm" action="{{ route('front.testRegistrationChangeDate.changeDate') }}"
                                        method="POST">
                                        @csrf

                                        <label for="email_change">Email*</label>
                                        <input type="email" id="email_change" name="email" class="form-control" required>

                                        <label class="mt-3">
                                            @if (Config::get('app.locale') === 'ru')
                                                Сертификат IELTS/TOEFL?*
                                            @elseif(Config::get('app.locale') === 'kk')
                                                IELTS / TOEFL сертификаты?*
                                            @else
                                                IELTS/TOEFL certificate?*
                                            @endif
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="have_ielts_change" id="ielts_yes_change" value="1">
                                            <label class="form-check-label" for="ielts_yes_change">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Да
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Иә
                                                @else
                                                    Yes
                                                @endif
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="have_ielts_change" id="ielts_no_change" value="0" checked>
                                            <label class="form-check-label" for="ielts_no_change">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Нет
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Жоқ
                                                @else
                                                    No
                                                @endif
                                            </label>
                                        </div>

                                        <div id="testDateWrapperChange">
                                            <label for="test_datepicker_change" class="form-label">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите доступную дату теста*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Қол жетімді тест күнін таңдаңыз*
                                                @else
                                                    Select an available test date*
                                                @endif
                                            </label>
                                            <input type="text" id="test_datepicker_change" name="test_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="testTimeWrapperChange" class="mt-3">
                                            <label for="test_time_slot_change">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите время теста*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Тест уақытын таңдаңыз*
                                                @else
                                                    Select the test time*
                                                @endif
                                            </label>
                                            <select id="test_time_slot_change" name="test_time_slot" class="form-control"></select>
                                        </div>

                                        <div id="interviewDateWrapperChange" style="display: none;">
                                            <label for="interview_datepicker_change" class="form-label">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите дату интервью*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Сұхбат күнін таңдаңыз*
                                                @else
                                                    Choose an interview date*
                                                @endif
                                            </label>
                                            <input type="text" id="interview_datepicker_change" name="interview_date" class="form-control" autocomplete="off">
                                        </div>
                                        <div id="interviewTimeWrapperChange" style="display: none;" class="mt-3">
                                            <label for="interview_time_slot_change">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Выберите время интервью*
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Сұхбат уақытын таңдаңыз*
                                                @else
                                                    Choose an interview time*
                                                @endif
                                            </label>
                                            <select id="interview_time_slot_change" name="interview_time_slot" class="form-control"></select>
                                        </div>


                                        <div class="col-12 mt-3">
                                            <button style="margin:0 auto;" type="submit" class="btn btn-primary">
                                                @if (Config::get('app.locale') === 'ru')
                                                    Подтвердить
                                                @elseif(Config::get('app.locale') === 'kk')
                                                    Растау
                                                @else
                                                    Confirm
                                                @endif
                                            </button>
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
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script>

{{-- <script>
document.addEventListener("DOMContentLoaded", function() {
    // Жёстко заданные даты и слоты
    const availableDates            = ['2025-07-18', '2025-07-19'];
    const availableInterviewDates   = ['2025-07-18', '2025-07-19'];
    const streams = {
        '2025-07-18': ['12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00'],
        '2025-07-19': ['09:00-10:00', '10:00-11:00', '11:00-12:00']
    };
    const streamsInterview = streams; // те же самые слоты для интервью

    // Инициализируем все четыре календаря
    ['test_datepicker','interview_datepicker','test_datepicker_change','interview_datepicker_change']
        .forEach(id => {
            flatpickr(`#${id}`, {
                enable: id.includes('interview') ? availableInterviewDates : availableDates,
                dateFormat: "Y-m-d",
                locale: "{{ config('app.locale') }}",
                allowInput: false,
                onReady: (selectedDates, dateStr, instance) => instance.clear()
            });
        });

    // Функция отрисовки слотов
    function renderSlots(date, stream, selectId) {
        const sel = document.getElementById(selectId);
        sel.innerHTML = '<option value=""></option>';
        (stream[date] || []).forEach(slot => {
            const opt = document.createElement('option');
            opt.value       = slot;
            opt.textContent = slot.replace('-', ' – ');
            sel.appendChild(opt);
        });
    }

    // Привязываем рендер к событию onChange каждого Flatpickr-а
    [
        {picker: '#test_datepicker',        slots: streams,           select: 'test_time_slot'},
        {picker: '#interview_datepicker',   slots: streamsInterview,  select: 'interview_time_slot'},
        {picker: '#test_datepicker_change', slots: streams,           select: 'test_time_slot_change'},
        {picker: '#interview_datepicker_change', slots: streamsInterview, select: 'interview_time_slot_change'}
    ].forEach(cfg => {
        const instance = document.querySelector(cfg.picker)._flatpickr;
        instance.config.onChange.push((selectedDates, dateStr) => {
            renderSlots(dateStr, cfg.slots, cfg.select);
        });
    });

    // Переключатель полей при выборе "IELTS/TOEFL есть" для формы регистрации
    function toggleDateFields() {
        const hasIELTS = document.getElementById('ielts_yes').checked;
        document.getElementById('testDateWrapper').style.display      = hasIELTS ? 'none' : 'block';
        document.getElementById('testTimeWrapper').style.display      = hasIELTS ? 'none' : 'block';
        document.getElementById('interviewDateWrapper').style.display = hasIELTS ? 'block': 'none';
        document.getElementById('interviewTimeWrapper').style.display = hasIELTS ? 'block': 'none';
        document.getElementById('ieltsWrapper').style.display         = hasIELTS ? 'block': 'none';

        document.getElementById('test_datepicker').required           = !hasIELTS;
        document.getElementById('test_time_slot').required            = !hasIELTS;
        document.getElementById('interview_datepicker').required      = hasIELTS;
        document.getElementById('interview_time_slot').required       = hasIELTS;
        document.getElementById('ielts_file_input').required          = hasIELTS;
    }

    // Переключатель полей для формы смены даты
    function toggleDateFieldsChange() {
        const hasIELTS = document.getElementById('ielts_yes_change').checked;
        document.getElementById('testDateWrapperChange').style.display      = hasIELTS ? 'none' : 'block';
        document.getElementById('testTimeWrapperChange').style.display      = hasIELTS ? 'none' : 'block';
        document.getElementById('interviewDateWrapperChange').style.display = hasIELTS ? 'block': 'none';
        document.getElementById('interviewTimeWrapperChange').style.display = hasIELTS ? 'block': 'none';

        document.getElementById('test_datepicker_change').required           = !hasIELTS;
        document.getElementById('test_time_slot_change').required            = !hasIELTS;
        document.getElementById('interview_datepicker_change').required      = hasIELTS;
        document.getElementById('interview_time_slot_change').required       = hasIELTS;
    }

    // Вешаем слушатели
    ['ielts_yes','ielts_no'].forEach(id =>
        document.getElementById(id).addEventListener('change', toggleDateFields)
    );
    ['ielts_yes_change','ielts_no_change'].forEach(id =>
        document.getElementById(id).addEventListener('change', toggleDateFieldsChange)
    );
    // Инициализируем видимость сразу
    toggleDateFields();
    toggleDateFieldsChange();
});
</script> --}}

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
                            document.getElementById('test_datepicker').required = !hasIELTS;
                            document.getElementById('interview_datepicker').required = hasIELTS;
                            document.getElementById('test_time_slot').required      = !hasIELTS;
                            document.getElementById('interview_time_slot').required = hasIELTS;
                            document.getElementById('ielts_file_input').required = hasIELTS;
                        }

                        function toggleDateFieldsChange() {
                            const hasIELTS = document.getElementById('ielts_yes_change').checked;
                            document.getElementById('testDateWrapperChange').style.display = hasIELTS ? 'none' : 'block';
                            document.getElementById('testTimeWrapperChange').style.display = hasIELTS ? 'none' : 'block';
                            document.getElementById('interviewDateWrapperChange').style.display = hasIELTS ? 'block' : 'none';
                            document.getElementById('interviewTimeWrapperChange').style.display = hasIELTS ? 'block' : 'none';

                            document.getElementById('ielts_file_input').required = hasIELTS;
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
                        const testInput       = document.getElementById('test_datepicker');
                        const interviewInput  = document.getElementById('interview_datepicker');
                        const ieltsYes        = document.getElementById('ielts_yes');
                        const ieltsNo         = document.getElementById('ielts_no');

                        form.addEventListener('submit', function(event) {
                            [testInput, interviewInput,].forEach(el => {
                                el.classList.remove('is-invalid');
                            });

                            let isValid = true;
                            const hasIelts = ieltsYes.checked;

                            if (hasIelts) {
                                if (!interviewInput.value)   { interviewInput.classList.add('is-invalid');   isValid = false; }
                            } else {
                                if (!testInput.value)        { testInput.classList.add('is-invalid');        isValid = false; }
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
