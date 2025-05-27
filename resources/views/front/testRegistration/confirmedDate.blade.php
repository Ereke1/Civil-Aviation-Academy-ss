<!DOCTYPE html>
<html>
<head>
    <title>Регистрация на сайте Академии гражданской авиации</title>
</head>
<body>
    <p>Здравствуйте!</p>
    <h1>Ваша регистрация подтверждена!</h1>

    @if($have_ielts)
        <p>Вы успешно подтвердили запись на интервью. Дата интервью: <strong>{{ $interview_date }}</strong>.</p>
    @else
        <p>Вы успешно подтвердили запись на тест. Дата теста: <strong>{{ $test_date }}</strong>.</p>
    @endif
    @if($have_ielts)
        <p>Часовой интервал: <strong>{{ $interview_time_slot }}</strong></p>
    @else
        <p>Часовой интервал: <strong>{{ $test_time_slot }}</strong></p>
    @endif
    <p>Ждём вас в назначенный день. Если что-то изменится — свяжитесь с нами.</p>
</body>
</html>
