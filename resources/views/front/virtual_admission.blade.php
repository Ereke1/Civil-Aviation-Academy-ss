@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h1>
                Студенттермен жұмыс жөніндегі менеджерлер
            </h1>
            <div class="breadcrumbs">
                <a href="http://localcaa.edu.kz:8000">Главная</a>
                <span> > </span>
                <span>Студенттермен жұмыс жөніндегі менеджерлер</span>
            </div>
            <div>

                <div id="accordion">
                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse1">
                            <div class="card-header" style="background-color: white">
                                ӘКҰП (Ұшақ, тікұшақ) білім беру бағдарламасына түсу үшін ағылшын тілінен қосымша емтихан форматы қандай?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse1"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p> Емтихан 2 кезеңде өткізіледі:<br />
                                    &nbsp;&nbsp;&nbsp;1. Тестілеу (лексика-грамматикалық тест);<br />
                                    &nbsp;&nbsp;&nbsp;2. Әңгімелесу.<br />
                                    Ағылшын тілінен қосымша емтиханнан өту балы 70 балл.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse2">
                            <div class="card-header" style="background-color: white">
                                Академияда оқу туралы анықтаманы қалай алуға болады?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse2"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>«Білім алушы» мәртебесін растайтын анықтама
                                    «Platonus» ААЖ «СҚО» модулі арқылы онлайн  беріледі.<br />
                                    Дәстүрлі форматта анықтаманы білім алушыларға  қызмет көрсету орталығына жүгіну арқылы алуға болады.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse3">
                            <div class="card-header" style="background-color: white">
                                Сабақ кестесімен қалай танысуға болады?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse3"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Сабақ кестесімен «Platonus» ААЖ-ның «Сабақ кестесі» модулінде танысуға болады.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse4">
                            <div class="card-header" style="background-color: white">
                                Оқу ақысын төлеу мерзімін кейінге қалдыруға бола ма?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse4"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Жекелеген жағдайларда білім алушы Академия ректорының атына оқу ақысын төлеуді кейінге қалдыру туралы өтінішпен жүгіне алады.
                                    Оқу ақысын төлеу мерзімін кейінге қалдыру туралы өтініш емтихан сессиясы басталғанға дейін үш күн ішінде қаралады.
                                    Аралық аттестаттау басталғаннан кейін берілген оқу ақысын төлеу мерзімін кейінге қалдыру туралы өтініштер қаралмайды.
                                    Бұл ретте емтихан бағасы дәлелсіз себептермен емтиханға қатыспағанға теңестіріледі.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse5">
                            <div class="card-header" style="background-color: white">
                                GPA қалай есептеледі?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse5"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Үлгерімнің орташа балы (GPA) пән кредиттерінің санына бағалаудың сандық эквиваленті көбейтіндісі
                                    сомасының кредиттердің жалпы санына қатынасы ретінде есептеледі.<br/>
                                    GPA есептеу үлгісі:
                                <table class="Table"
                                    style="width: 718px; margin-left: -10px; border-collapse: collapse; border-width: initial; border-style: none; border-color: initial;"
                                    width="0">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="border-bottom:2px solid black; width:160px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:2px solid black; border-right:2px solid black; border-left:2px solid black">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Пән атауы</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:152px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:2px solid black; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Кредиттер саны</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:236px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:2px solid black; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Әріптік жүйе бойынша бағалау
                                                                        </span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:170px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:2px solid black; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Сандық эквивалент</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom:2px solid black; width:160px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:none; border-right:2px solid black; border-left:2px solid black">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Математика</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:152px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">3</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:236px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">А</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:170px; padding:0cm 0cm 0cm 0cm; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">4.0</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom:2px solid black; width:160px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:2px solid black">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Информатика</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:152px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">2</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:236px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">В</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:170px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">3.0</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="border-bottom:2px solid black; width:160px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:2px solid black">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">Физика</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:152px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">6</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:236px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">F</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                            <td
                                                style="border-bottom:2px solid black; width:170px; padding:6px 6px 6px 6px; height:15px; border-top:none; border-right:2px solid black; border-left:none">
                                                <p align="center" style="text-align:center"><span
                                                        style="font-size:11pt"><span style="line-height:normal"><span
                                                                style="font-family:Calibri,sans-serif"><i><span
                                                                        style="font-size:12.0pt"><span
                                                                            style="color:black">0.0</span></span></i></span></span></span>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                Математика 4.0 х 3 = 12.0<br/>
                                Информатика 3.0 х 2 = 6.0<br/>
                                Физика 0.0 х 6 = 0.0<br/>
                                Шығ. сомасы = 12 + 6 + 0 = 18.0<br/>
                                Кредиттердің жалпы саны = 3+2+6 = 11<br/>
                                GPA = қосынды сомасы / жалпы кредиттер саны = 18,0 / 11 = 1,64.<br/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse6">
                            <div class="card-header" style="background-color: white">
                                Академиялық қарызды қалай жоюға болады?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse6"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Академиялық қарызды қосымша жазғы семестрде ақылы негізде жоюға болады.
                                    Жазғы семестрге тіркелу үшін білім алушының өтініші академиялық жұмысқа жетекшілік ететін проректордың атына,
                                    академиялық күнтізбеде көзделген кезеңде көктемгі емтихан сессиясы аяқталғаннан кейін беріледі.
                                    Өтініште пәндердің атауы, әрбір пән бойынша кредиттердің саны көрсетіледі.
                                    Өтінішке жазғы семестрде зерделеу үшін берілген кредиттер санын төлеу туралы түбіртектің көшірмесі қоса беріледі.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse7">
                            <div class="card-header" style="background-color: white">
                                Дәлелді себептермен өткізіп алған сабақтарды өтеуге бола ма?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse7"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Дәлелді себептермен өткізіп алған сабақтарды пысықтау растайтын құжаттарды қоса бере отырып,
                                    өтініш негізінде жүргізіледі. Қатыспаудың дәлелді себептері болған жағдайда білім алушы оқытушымен келісім бойынша қатыспаған әрбір
                                    сабақты (сабақтың әрбір түрі) сабаққа шыққан күннен бастап 10 күн ішінде, бірақ АБ1 немесе АБ2 шеңберінде қорытынды шығару күнінен
                                    кешіктірмей өтеуі тиіс. Табысты жұмыс істеген жағдайда оқытушы жұмыс істеген күні тиісті баға қояды.
                                    Егер сабаққа шыққан күннен бастап 10 күн өткен соң білім алушы өткізіп алған сабақты өтемеген болса,
                                    оқытушы 11 күнге өткізіп алған күндер үшін жұмыспен өтеу құқығынсыз "0" бағасын қояды.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse8">
                            <div class="card-header" style="background-color: white">
                                Оқу барысында күндізгі оқу нысанынан қашықтықтан оқу нысанына ауысу мүмкін бе?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse8"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Білім алушылардың ауысу туралы өтініштері жазғы және қысқы каникул кезеңінде кезекті академиялық кезең басталғанға дейін бес жұмыс күні ішінде қаралады.<br/>
                                    ҚОТ қатысты қолданылады:<br/>
                                    1) денсаулық мүмкіндіктерінің уақытша шектеулері бар және білім беру ұйымдарына тұрақты түрде баруға мүмкіндігі жоқ адамдарды;<br/>
                                    2) Техникалық және кәсіптік, жоғары білім базасында қысқартылған білім беру бағдарламалары бойынша білім алушылардың;<br/>
                                    3) аралас оқытуды қамтитын жоғары немесе жоғары оқу орнынан кейінгі білімнің білім беру бағдарламалары бойынша білім алушыларға қолданылмайды.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse9">
                            <div class="card-header" style="background-color: white">
                                Мемлекеттік грантқа қалай ауысуға болады (бос грант)?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse9"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Ақылы оқудан мемлекеттік грантқа ауыстыру заңнамада белгіленген тәртіппен білім беру бағдарламаларының топтары бойынша
                                    конкурстық негізде мемлекеттік грант бойынша білім алушыларды оқудан шығару нәтижесінде пайда болған тиісті білім беру
                                    бағдарламалары мен курстары бойынша бос орындарға конкурстық негізде жүзеге асырылады.
                                    Ашық конкурс туралы хабарландыру АА академиясы сайтының "гранттар" бөлімінде орналастырылады.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse10">
                            <div class="card-header" style="background-color: white">
                                Академиялық демалысты қалай алуға болады?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse10"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Академиялық демалыс мынадай жағдайларда беріледі:<br />
                                    - денсаулығына байланысты;<br />
                                    - бала туғанда, асырап алғанда;<br />
                                    - әскери қызметке шақыру.<br />
                                    Білім алушыларға академиялық демалыстар беру дәрігерлік-консультациялық комиссияның (ДКК) қорытындысы,
                                    әскери қызметке шақыру туралы шақыру қағазы, туу, бала асырап алу туралы куәлік негізінде жүзеге асырылады.
                                    Білім алушының академиялық демалысты ресімдеуге арналған өтініші алдын ала беріледі және оны
                                    Академия білім алушыны аралық аттестаттау басталғанға дейін қарайды.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse11">
                            <div class="card-header" style="background-color: white">
                                Академиялық қарызы бар білім алушы келесі оқу курсына ауыса ала ма?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse11"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Болады, бірақ бітіру курсын қоспағанда.
                                    Келесі оқу курсына ауысу жазғы семестрдің нәтижелерін ескере отырып, ағымдағы жылға белгіленген ең
                                    төменгі шекті GPA балын жинаған жағдайда
                                    оқу жылының (аралық аттестаттаудың) қорытындысы бойынша жүзеге асырылады.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse12">
                            <div class="card-header" style="background-color: white">
                                Академиялық қарызы бар білім алушы ұшу практикасынан өте ала ма?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse12"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Ұшуға рұқсат беруге қойылатын талаптар: академиялық қарыздардың болмауы.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse13">
                            <div class="card-header" style="background-color: white">
                                Басқа университеттен Академияға қалай ауысуға болады?
                            </div>
                        </a>

                        <div class="collapse show" data-parent="#accordion" id="collapse13"
                            style="height: 0px;overflow: hidden;">
                            <div class="card-body">
                                <p>Ауысу Академияда бекітілген ауыстыру және қайта қабылдау Ережелеріне сәйкес жүргізіледі (Академияның академиялық саясатының 5-бөлімі).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
