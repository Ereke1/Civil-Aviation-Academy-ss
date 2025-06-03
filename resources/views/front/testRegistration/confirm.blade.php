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
        Подтверждение записи.
    @elseif(Config::get('app.locale') === 'kk')
        Жазбаны растау.
    @else
        Confirmation of the recording.
    @endif
</h1>

    @if($have_ielts)
    <p>
        @if (Config::get('app.locale') === 'ru')
            Вы выбрали прохождение интервью на дату <strong>{{ $interview_date }}</strong>.
        @elseif(Config::get('app.locale') === 'kk')
            Сіз <strong>{{ $interview_date }}</strong> күніне сұхбат беруді таңдадыңыз.
        @else
            You have chosen to complete the interview on the date <strong>{{$interview_date }}</strong>.
        @endif
    </p>
    @else
        <p>
            @if (Config::get('app.locale') === 'ru')
                Вы выбрали прохождение теста на дату <strong>{{ $test_date }}</strong>.
            @elseif(Config::get('app.locale') === 'kk')
                Сіз <strong> {{$test_date }}</strong> күніне тест тапсыруды таңдадыңыз.
            @else
                You have chosen to take the test on the date <strong>{{$test_date }}</strong>.
            @endif
        </p>
    @endif
    @if($have_ielts)
        <p>
            @if (Config::get('app.locale') === 'ru')
                Время интервью: <strong>{{ $interview_time_slot }}</strong>.
            @elseif(Config::get('app.locale') === 'kk')
                Сұхбат уақыты: <strong>{{$interview_time_slot }} </strong>.
            @else
                Interview time: <strong>{{$interview_time_slot }}</strong>.
            @endif
        </p>
    @else
        <p>
            @if (Config::get('app.locale') === 'ru')
                Время теста: <strong>{{$test_time_slot }}</strong>.
            @elseif(Config::get('app.locale') === 'kk')
                Тест уақыты: <strong> {{$test_time_slot }} </strong>
            @else
                Test time: <strong>{{$test_time_slot }}</strong>
            @endif
        </p>
    @endif

    <p>
        @if (Config::get('app.locale') === 'ru')
            Чтобы подтвердить запись, перейдите по ссылке:
        @elseif(Config::get('app.locale') === 'kk')
            Жазбаны растау үшін мына сілтемеге өтіңіз:
        @else
            To confirm the recording, follow the link:
        @endif
    </p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>

    <p>
        @if (Config::get('app.locale') === 'ru')
            Если вы не регистрировались на сайте, просто проигнорируйте это письмо.
        @elseif(Config::get('app.locale') === 'kk')
            Егер сіз сайтқа тіркелмеген болсаңыз, бұл хатты елемеңіз.
        @else
            If you haven't registered on the site, just ignore this email.
        @endif
    </p>
</body>
</html>
