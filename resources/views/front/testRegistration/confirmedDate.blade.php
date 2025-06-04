<!DOCTYPE html>
<html>
<head>
    <title>
        @if (Config::get('app.locale') === 'ru')
            Регистрация на сайте Академии гражданской авиации
        @elseif(Config::get('app.locale') === 'kk')
            Азаматтық авиация академиясының сайтында тіркелу
        @else
            Registration on the website of the Academy of Civil Aviation
        @endif
    </title>
</head>
<body>
    <p>
        @if (Config::get('app.locale') === 'ru')
            Здравствуйте!
        @elseif(Config::get('app.locale') === 'kk')
            Сәлеметсіз бе!
        @else
            Hello!
        @endif
    </p>
    <h1>
        @if (Config::get('app.locale') === 'ru')
            Ваша регистрация подтверждена!
        @elseif(Config::get('app.locale') === 'kk')
            Сіздің тіркелуіңіз расталды!
        @else
            Your registration has been confirmed!
        @endif
    </h1>

    @if($have_ielts)
    <p>
        @if (Config::get('app.locale') === 'ru')
            Вы успешно подтвердили запись на интервью. Дата интервью: <strong>{{ $interview_date }}</strong>.
        @elseif(Config::get('app.locale') === 'kk')
            Сіз сұхбат жазбасын сәтті растадыңыз. Сұхбат күні: <strong>{{ $interview_date }}</strong>.
        @else
            You have successfully confirmed your appointment for the interview. Interview date: <strong>{{$interview_date }}</strong>.
        @endif
    </p>
    @else
    <p>
        @if (Config::get('app.locale') === 'ru')
            Вы успешно подтвердили запись на тест. Дата тест: <strong>{{ $test_date }}</strong>.
        @elseif(Config::get('app.locale') === 'kk')
            Сіз тесті сәтті растадыңыз. Тест күні: <strong>{{ $test_date }}</strong>.
        @else
            You have successfully confirmed your appointment for the test. Test date: <strong>{{$test_date }}</strong>.
        @endif
    </p>
    @endif
    @if($have_ielts)
        <p>
            @if (Config::get('app.locale') === 'ru')
                Время интервью: <strong>{{ $interview_time_slot }}</strong>.
            @elseif(Config::get('app.locale') === 'kk')
                Сұхбат уақыты: <strong> {{$interview_time_slot }} </strong>.
            @else
                Interview time: <strong>{{$interview_time_slot }}</strong>.
            @endif
        </p>
    @else
        <p>
            @if (Config::get('app.locale') === 'ru')
                Время теста: <strong>{{ $test_time_slot }}</strong>.
            @elseif(Config::get('app.locale') === 'kk')
                Тест уақыты: <strong> {{$test_time_slot }} </strong>
            @else
                Test time: <strong>{{$test_time_slot }}</strong>
            @endif
        </p>
    @endif
    <p>
        @if (Config::get('app.locale') === 'ru')
            Ждём вас в назначенный день.
        @elseif(Config::get('app.locale') === 'kk')
            Сізді белгіленген күні күтеміз.
        @else
            We are waiting for you on the appointed day.
        @endif
    </p>
</body>
</html>
