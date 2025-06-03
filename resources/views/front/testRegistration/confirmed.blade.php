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
    <h2>
        @if (Config::get('app.locale') === 'ru')
            Регистрация подтверждена!
        @elseif(Config::get('app.locale') === 'kk')
            Тіркелу расталды!
        @else
            Registration has been confirmed!
        @endif
    </h2>
</body>
</html>
