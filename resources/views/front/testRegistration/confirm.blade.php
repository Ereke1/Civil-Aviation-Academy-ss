<!DOCTYPE html>
<html>
<head>
    <title>Регистрация на сайте Академии гражданской авиации</title>
</head>
<body>
<p>Здравствуйте!</p>
<h1>Подтверждение записи</h1>

    @if($have_ielts)
        <p>Вы выбрали прохождение интервью на дату <strong>{{ $interview_date }}</strong>.</p>
    @else
        <p>Вы выбрали прохождение теста на дату <strong>{{ $test_date }}</strong>.</p>
    @endif
    @if($have_ielts)
        <p>Часовой интервал: <strong>{{ $interview_time_slot }}</strong></p>
    @else
        <p>Часовой интервал: <strong>{{ $test_time_slot }}</strong></p>
    @endif

    <p>Чтобы подтвердить запись, перейдите по ссылке:</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>

    <p>Если вы не регистрировались на сайте, просто проигнорируйте это письмо.</p>
</body>
</html>
