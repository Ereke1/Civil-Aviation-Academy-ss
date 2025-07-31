@extends('front.layouts.app')
@section('title')
    {{ __('Академия Гражданской Авиации') }}
@endsection
@section('content')
    <section id="pages">
        <div class="container">
            <h2 class="text-center">
                @if (Config::get('app.locale') === 'ru')
                            АО «Академия гражданской авиации» объявляет конкурс на замещение вакантных должностей профессорско-преподавательского состава на 2025-2026 учебный год
                        @elseif(Config::get('app.locale') === 'kk')
                            «Азаматтық авиация академия» АҚ 2025-2026 оқу жылына профессор-оқытушылар құрамының бос лауазымдарына орналасуға конкурс жариялайды
                        @else
                            JSC «Academy of Civil Aviation» announces a competition for vacant positions of the teaching staff for the 2025-2026 academic year
                        @endif
            </h2>

            <div class="card mb-2">
                <a class="card-link" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                    <div class="card-header"
                        style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                        @if (Config::get('app.locale') === 'ru')
                            Вакантные должности кафедры «Авиационная техника и технологии»:
                        @elseif(Config::get('app.locale') === 'kk')
                            «Авиациялық техника және технологиялар» кафедрасының бос лауазымдары
                        @else
                            Vacant positions of the Department of Aviation Engineering and Technology
                        @endif
                    </div>
                </a>

                <div class="collapse" id="collapseOne">
                    <div class="card-body">
                        @if (Config::get('app.locale') === 'ru')
                        <div class="table-responsive">
                          <table class="table table-bordered" style="margin: 0%">
                            <thead class="thead-light">
                              <tr>
                                <th>Должность</th>
                                <th>Количество ставок</th>
                                <th>Наименование дисциплины</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Профессор/Профессор АГА/Ассоциированный профессор/Ассоциированный профессор АГА/Ассистент-профессор</td>
                                <td>1</td>
                                <td>Профилирующие дисциплины по направлению: авиационная техника и технологии, радиотехника</td>
                              </tr>
                              <tr>
                                <td>Сениор-лектор</td>
                                <td>1</td>
                                <td>Профилирующие дисциплины по направлению авиационная техника и технологии</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        @elseif(Config::get('app.locale') === 'kk')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Лауазымы</th>
                                  <th>Ставка саны</th>
                                  <th>Пән атауы</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Авиациялық техника және технологиялар, радиотехника, электроника және коммуникациялар бағыты бойынша бейіндік пәндер</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Авиациялық техника және технологиялар бағыты бойынша бейіндеуші пәндер</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Position</th>
                                  <th>Number of bets</th>
                                  <th>Name of discipline</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Major disciplines in the field of aviation engineering and technology, radio engineering, electronics and communications</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Major disciplines in the field of aviation engineering and technology</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <a class="card-link" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                        @if (Config::get('app.locale') === 'ru')
                            Вакантные должности кафедры «Авиационный английский язык»
                        @elseif(Config::get('app.locale') === 'kk')
                            «Авиациялық ағылшын тілі» кафедрасының бос лауазымдары
                        @else
                            Vacant positions of the Department of Aviation English
                        @endif
                    </div>
                </a>

                <div class="collapse" id="collapseTwo">
                    <div class="card-body">
                        @if (Config::get('app.locale') === 'ru')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Должность</th>
                                  <th>Количество ставок</th>
                                  <th>Наименование дисциплины</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Заведующий кафедрой</td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Профессор/Профессор АГА/ Ассоциированный профессор/Ассоциированный профессор АГА/Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Русский язык</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Русский язык</td>
                                </tr>
                                <tr>
                                  <td>Профессор/Профессор АГА/ Ассоциированный профессор/Ассоциированный профессор АГА/Ассистент-профессор</td>
                                  <td>2</td>
                                  <td>Английский язык</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Английский язык</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @elseif(Config::get('app.locale') === 'kk')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Лауазымы</th>
                                  <th>Ставка саны</th>
                                  <th>Пән атауы</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Кафедра меңгерушісі</td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Орыс тілі</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Орыс тілі</td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>2</td>
                                  <td>Ағылшын тілі</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Ағылшын тілі</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Position</th>
                                  <th>Number of bets</th>
                                  <th>Name of discipline</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Head of Department</td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Russian language</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Russian language</td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>2</td>
                                  <td>English language</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>English language</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <a class="card-link" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                    <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                        @if (Config::get('app.locale') === 'ru')
                            Вакантные должности кафедры «Летная эксплуатация воздушных судов»
                        @elseif(Config::get('app.locale') === 'kk')
                            «Әуе кемелерін ұшуда пайдалану» кафедрасының бос лауазымдары
                        @else
                            Vacant positions of the Department of «Flight operation of aircraft»
                        @endif
                    </div>
                </a>

                <div class="collapse" id="collapseThree">
                    <div class="card-body">
                        @if (Config::get('app.locale') === 'ru')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Должность</th>
                                  <th>Количество ставок</th>
                                  <th>Наименование дисциплины</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>
                                    1. Руководство магистерскими диссертациями<br>
                                    2. Профилирующие дисциплины по ОП “Летная эксплуатация летательных аппаратов и двигателей”
                                  </td>
                                </tr>
                                <tr>
                                  <td>Инструктор-преподаватель</td>
                                  <td>5</td>
                                  <td>Пилот самолета с возможностью преподавания ATPL дисциплин</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @elseif(Config::get('app.locale') === 'kk')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Лауазымы</th>
                                  <th>Ставка саны</th>
                                  <th>Пән атауы</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>
                                    1. Магистрлік диссертацияларға жетекшілік ету<br>
                                    2. "Ұшу аппараттары мен қозғалтқыштарды ұшуды пайдалану" білім беру бағдарламасы бойынша бейіндік пәндер
                                  </td>
                                </tr>
                                <tr>
                                  <td>Нұсқаушы-оқытушы</td>
                                  <td>5</td>
                                  <td>ATPL пәндерін оқыту мүмкіндігі бар ұшақ ұшқышы</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Position</th>
                                  <th>Number of bets</th>
                                  <th>Name of discipline</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>
                                    1. Management of Master’s theses<br>
                                    2. Major subjects in the educational program “Flight operation of aircraft and engines”
                                  </td>
                                </tr>
                                <tr>
                                  <td>Instructor-teacher</td>
                                  <td>5</td>
                                  <td>An airplane pilot with the ability to teach ATPL disciplines</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <a class="card-link" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
                    <div class="card-header"
                        style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                        @if (Config::get('app.locale') === 'ru')
                            Вакантные должности кафедры «Организация авиационных перевозок и логистики»
                        @elseif(Config::get('app.locale') === 'kk')
                            «Авиациялық тасымалдауды және логистиканы ұйымдастыру» кафедрасының бос лауазымдары
                        @else
                            Vacant positions of the department «Organization of aviation transportation and Logistics»
                        @endif
                    </div>
                </a>

                <div class="collapse" id="collapseFour">
                    <div class="card-body">
                        @if (Config::get('app.locale') === 'ru')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Должность</th>
                                  <th>Количество ставок</th>
                                  <th>Наименование дисциплины</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Руководитель образовательных программ</td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Профессор/Профессор АГА/ Ассоциированный профессор/Ассоциированный профессор АГА/Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Профилирующие дисциплины по ОП “Организация авиационных перевозок”</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>0,5</td>
                                  <td>Профилирующие дисциплины по ОП “Обеспечение авиационной безопасности”</td>
                                </tr>
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>0,5</td>
                                  <td>Профилирующие дисциплины по ОП “Организация авиационных перевозок”</td>
                                </tr> --}}
                              </tbody>
                            </table>
                          </div>
                        @elseif(Config::get('app.locale') === 'kk')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Лауазымы</th>
                                  <th>Ставка саны</th>
                                  <th>Пән атауы</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Білім беру бағдарламаларының жетекшісі
                                </td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>"Авиациялық тасымалдарды ұйымдастыру" ББ бойынша бейіндік пәндер</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>0,5</td>
                                  <td>"Авиациялық тасымалдарды ұйымдастыру" ББ бойынша бейіндік пәндер</td>
                                </tr>
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>0,5</td>
                                  <td>"Авиациялық тасымалдарды ұйымдастыру" ББ бойынша бейіндік пәндер</td>
                                </tr> --}}
                              </tbody>
                            </table>
                        </div>

                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Position</th>
                                  <th>Number of bets</th>
                                  <th>Name of discipline</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Head of Department</td>
                                  <td>1</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Profile disciplines in the OP “Organization of air transportation”</td>
                                </tr>
                                {{-- <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>The core disciplines of the OP “Aviation security”</td>
                                </tr> --}}
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>0.5</td>
                                  <td>Profile disciplines in the OP “Organization of air transportation”</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <a class="card-link" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">
                    <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                        @if (Config::get('app.locale') === 'ru')
                            Вакантные должности кафедры «Общеобразовательные дисциплины»
                        @elseif(Config::get('app.locale') === 'kk')
                            «Жалпы білім беретін пәндер» кафедрасының бос лауазымдары
                        @else
                            Vacant positions of the Department of General Education Disciplines
                        @endif
                    </div>
                </a>

                <div class="collapse" id="collapseFive">
                    <div class="card-body">
                        @if (Config::get('app.locale') === 'ru')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Должность</th>
                                  <th>Количество ставок</th>
                                  <th>Наименование дисциплины</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{-- <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Инженерная компьютерная графика</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>2</td>
                                  <td>Инженерная компьютерная графика</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Информационно-коммуникационные технологии</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Информационно-коммуникационные технологии</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Математика</td>
                                </tr> --}}
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Математика</td>
                                </tr>
                                {{-- <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Физика</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Физика</td>
                                </tr>
                                <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>История Казахстана</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>История Казахстана</td>
                                </tr>
                                <tr>
                                  <td>Профессор / Профессор АГА / Ассоциированный профессор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Политология</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Психология</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Философия</td>
                                </tr> --}}
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Социология</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Физическая культура</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @elseif(Config::get('app.locale') === 'kk')
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Лауазымы</th>
                                  <th>Ставка саны</th>
                                  <th>Пән атауы</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{-- <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Инженерлік компьютерлік графика</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>2</td>
                                  <td>Инженерлік компьютерлік графика</td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Ақпараттық-коммуникациялық технологиялар</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Ақпараттық-коммуникациялық технологиялар</td>
                                </tr> --}}
                                {{-- <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Математика</td>
                                </tr> --}}
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Математика</td>
                                </tr>
                                {{-- <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Физика</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Физика</td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Қазақстан Тарихы</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Қазақстан Тарихы</td>
                                </tr>
                                <tr>
                                  <td>Профессор / ААА профессор / ассоциалды профессор / ААА ассоциалды професор / Ассистент-профессор</td>
                                  <td>1</td>
                                  <td>Саясаттану</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Психология</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Философия</td>
                                </tr> --}}
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Әлеуметтану</td>
                                </tr>
                                <tr>
                                  <td>Сениор-лектор</td>
                                  <td>1</td>
                                  <td>Дене шынықтыру</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin: 0%">
                              <thead class="thead-light">
                                <tr>
                                  <th>Position</th>
                                  <th>Number of bets</th>
                                  <th>Name of discipline</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{-- <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Engineering computer graphics</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>2</td>
                                  <td>Engineering computer graphics</td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Information and Communication Technologies</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Information and Communication Technologies</td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Mathematics</td>
                                </tr> --}}
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Mathematics</td>
                                </tr>
                                {{-- <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Physics</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Physics</td>
                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>The history of Kazakhstan</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>The history of Kazakhstan</td>

                                </tr>
                                <tr>
                                  <td>Professor/CAA Professor / Associate Professor/CAA Associate Professor /Assistant Professor</td>
                                  <td>1</td>
                                  <td>Political Science</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Psychology</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Philosophy</td>
                                </tr> --}}
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Sociology</td>
                                </tr>
                                <tr>
                                  <td>Senior Lecturer</td>
                                  <td>1</td>
                                  <td>Physical Culture</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        @endif
                    </div>
                </div>
            </div>


            @if (Config::get('app.locale') === 'ru')
                <hr>
                <div class="mb-4 fs-2" >
                    <p>Предпочтение отдается претендентам, имеющим на момент проведения конкурса:</p>
                    <ul>
                        <li>1. Сертификат уровня владения английским языком, соответствующего уровню IELTS не ниже 5,5.</li>
                        <li>2. Опыт работы в авиационной отрасли.</li>
                        <li>3. При подаче документов на должность заведующего кафедрой необходимо приложить видение (план) по развитию кафедры.</li>
                    </ul>
                </div>
                <hr>
                <div class="mb-4">
                    <p>
                        Прием документов проводится до <strong>15 августа 2025 года</strong> по адресу:
                        <br>
                        <span class="d-block">Ахметова 44, кабинет ADM 16 (Департамент HR)</span>
                        <span class="d-block">и/или по электронному адресу: <a href="mailto:hr@agakaz.kz">hr@agakaz.kz</a> не позднее 23.59 часов 15 августа 2025 года.</span>
                        <p>
                            Место проведения конкурса на замещение вакантных должностей профессорско-преподавательского состава АО «Академия гражданской авиации»:
                            <br>
                            <em>г. Алматы, ул. Ахметова, 44.</em>
                        </p>
                    </p>
                </div>
                <hr>
                <div class="card mb-2">
                    <a class="card-link" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">
                        <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Перечень требуемых документов
                        </div>
                    </a>
                    <div class="collapse" id="collapseSix">
                        <div class="card-body">
                            <ul>
                                <li>1. Заявление согласно приложению 1.</li>
                                <li>2. Резюме согласно приложению 2.
                                    <ul>
                                        <li>Участник Конкурса вправе предоставить дополнительную информацию, касающуюся его образования, профессионального уровня (рекомендации от руководства предыдущего места работы), а также документы, подтверждающие опыт работы и квалификацию. </li>
                                    </ul>
                                </li>
                                <li>3. Автобиография (в произвольной форме).</li>
                                <li>4. Копия удостоверения личности.</li>
                                <li>5. Нотариально заверенные копии дипломов о высшем образовании, академической и ученой степени, документов об ученом звании. Для дипломов на иностранном языке обязательно приложение нотариально засвидетельствованного перевода на государственный или русский язык.</li>
                                <li>6. Копии сертификатов о переподготовке и повышении квалификации (при наличии) и их подлинники для сверки (за последние 5 лет).</li>
                                <li>7. Список научных публикаций, работ и изобретений (за последние пять лет, с приложением подтверждающих документов и оттисков).</li>
                                <li>8. Информация о разработанных курсах преподаваемых дисциплин (модулей) в рамках направления подготовки кафедры (в свободной форме) (за последние пять лет).</li>
                                <li>9. Справка о научных грантах, по которым претендент являлся руководителем или исполнителем (при наличии) (за последние пять лет).</li>
                                <li>10. Справка о наличии либо отсутствии сведений по учетам, выдаваемая Комитетом правовой статистике и специальным учетам Генеральной прокуратуры Республики Казахстан о совершении лицом уголовного правонарушения.</li>
                                <li>11. Справка о наличии либо отсутствии сведений о совершении лицом коррупционного преступления.</li>
                                <li>12. Справки ЦОН о том, что участник Конкурса не состоит на учете в наркологической и психоневрологической организациях.</li>
                                <li>13. Медицинская справка по форме № 086/у.</li>
                            </ul>
                            <p>Претенденты, работающие в АО «Академия гражданской авиации», освобождаются от предоставления документов по пунктам: 5, 10, 11, 12. </p>
                            <p>После окончания приема документов формируется список претендентов по кафедрам и составляется график рассмотрения конкурсной комиссии. </p>
                            <p>Претендентом (за исключением претендентов из числа ППС Академии) проводится презентация преподаваемой им дисциплины (фрагмент лекции и/или практического занятия). </p>
                            <p>Претендент не допускается к участию в конкурсе в случае нарушения установленных сроков подачи заявления и документов.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/квт_на_сайт.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Квалификационные требования к должностям профессорско-преподавательского состава
                        </div>
                      </a>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/Шаблон_документов_на_конкурс.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Шаблон документов на конкурс
                        </div>
                      </a>
                </div>
            @elseif(Config::get('app.locale') === 'kk')
                <hr>
                <div class="mb-4 fs-2" >
                    <p>Конкурс өткізу кезінде үміткерлерге артықшылық беріледі:</p>
                    <ul>
                        <li>1. IELTS деңгейіне 5,5-тен төмен емес ағылшын тілін меңгеру деңгейінің сертификаты.</li>
                        <li>2. Авиация саласындағы жұмыс тәжірибесі.</li>
                        <li>3. Кафедра меңгерушісі лауазымына құжаттарды тапсыру кезінде кафедраны дамыту жөніндегі пайымды (жоспарды) қоса беру қажет.</li>
                    </ul>
                </div>
                <hr>
                <div class="mb-4">
                    <p>
                        Құжаттарды қабылдау Құжаттарды қабылдау <strong>2025 жылғы 15 тамызға дейін</strong> мекенжайы:
                        <br>
                        <span class="d-block">Ахметова 44, ADM 16 кабинет (HR департаменті)</span>
                        <span class="d-block">және/немесе электрондық мекенжайы бойынша жүргізіледі: hr@agakaz.kz 2025 жылғы 15 тамызда сағат 23.59-дан кешіктірмей.</span>
                        <p>
                            «Азаматтық авиация академиясы» АҚ профессор-оқытушылар құрамының бос лауазымдарына орналасуға конкурс өткізу орны:
                            <br>
                            <em>Алматы қаласы, Ахметова көшесі, 44.</em>
                        </p>
                    </p>
                </div>
                <hr>
                <div class="card mb-2">
                    <a class="card-link" data-toggle="collapse" href="#collapseKZ" role="button" aria-expanded="false" aria-controls="collapseKZ">
                        <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Талап етілетін құжаттардын тізімі
                        </div>
                    </a>
                    <div class="collapse" id="collapseKZ">
                        <div class="card-body">
                            <p>1. Өтініш 1 қосымшаға сәйкес.</p>
                            <p>2. Түйіндеме 2-қосымшаға сәйкес.</p>
                            <p>Конкурсқа қатысушы өзінің біліміне, кәсіби деңгейіне қатысты қосымша ақпаратты (алдыңғы жұмыс орнының басшылығынан ұсынымдар), сондай-ақ жұмыс тәжірибесі мен біліктілігін растайтын құжаттарды ұсынуға құқылы.</p>
                            <p>3. Өмірбаян (еркін түрде).</p>
                            <p>4. Жеке куәліктің көшірмесі.</p>
                            <p>5. Жоғары білімі, академиялық және ғылыми дәрежесі туралы дипломдардың, ғылыми атағы туралы құжаттардың нотариалды куәландырылған көшірмелері. Шет тіліндегі дипломдар үшін мемлекеттік немесе орыс тіліндегі нотариалды куәландырылған аударманың қосымшасы міндетті болып табылады.</p>
                            <p>6. Қайта даярлау және біліктілікті арттыру туралы сертификаттардың көшірмелері (бар болса) және салыстырып тексеру үшін олардың түпнұсқалары (соңғы 5 жылда).</p>
                            <p>7. Ғылыми жарияланымдардың, жұмыстар мен өнертабыстардың тізімі (соңғы бес жыл ішінде растайтын құжаттар мен бедерлер қоса берілген).</p>
                            <p>8. Кафедраны даярлау бағыты шеңберінде (еркін нысанда) оқытылатын пәндердің (модульдердің) әзірленген курстары туралы ақпарат (соңғы бес жыл ішінде).</p>
                            <p>9. Үміткер басшы немесе орындаушы (бар болса) болған ғылыми гранттар туралы анықтама (соңғы бес жылда).</p>
                            <p>10. Қазақстан Республикасы Бас прокуратурасының Құқықтық статистика және арнайы есепке алу комитеті адамның қылмыстық құқық бұзушылық жасағаны туралы беретін есепке алу жөніндегі мәліметтердің болуы не болмауы туралы анықтама.</p>
                            <p>11. Адамның сыбайлас жемқорлық қылмыс жасағаны туралы мәліметтердің болуы не болмауы туралы анықтама.</p>
                            <p>12. Конкурсқа қатысушының наркологиялық және психоневрологиялық ұйымдарда есепте тұрмағаны туралы ХҚКО анықтамасы.</p>
                            <p>13. Медициналық анықтама № 086/е нысан бойынша.</p>
                            <p>«Азаматтық авиация академиясы» АҚ-да жұмыс істейтін үміткерлер 5, 10, 11, 12-тармақтар бойынша құжаттарды ұсынудан босатылады.</p>
                            <p>Құжаттарды қабылдау аяқталғаннан кейін кафедралар бойынша үміткерлердің тізімі жасалады және конкурстық комиссияның қарау кестесі жасалады.</p>
                            <p>Үміткер (Академияның ПОҚ қатарынан үміткерлерді қоспағанда) өзі оқытатын пәннің (дәрістің және/немесе практикалық сабақтың үзіндісі) тұсаукесерін өткізеді.</p>
                            <p>Өтініш пен құжаттарды берудің белгіленген мерзімдері бұзылған жағдайда үміткер конкурсқа қатысуға жіберілмейді.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/квт_на_сайт_каз_яз.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Профессор-оқытушылар құрамының лауазымдарына қойылатын біліктілік талаптары
                        </div>
                      </a>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/Конкурсқа_арналған_құжаттар_үлгісі.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Конкурсқа арналған құжаттар үлгісі
                        </div>
                      </a>
                </div>
            @else
                <hr>
                <div class="mb-4 fs-2" >
                    <p>Preference is given to applicants who have at the time of the competition:</p>
                    <ul>
                        <li>1. Certificate of proficiency in English, corresponding to the IELTS level of at least 5.5.</li>
                        <li>2. Work experience in the aviation industry.</li>
                        <li>3. When applying for the position of head of the department, it is necessary to attach a vision (plan) for the development of the department.</li>
                    </ul>
                </div>
                <hr>
                <div class="mb-4">
                    <p>
                        Documents are accepted until <strong>until August 15, 2025</strong> at the address:
                        <span class="d-block">Akhmetov 44, office ADM 16 (HR Department)</span>
                        <span class="d-block">and/or by e-mail: <a href="mailto:hr@agakaz.kz">hr@agakaz.kz</a> no later than 23.59 hours on August 15, 2025.</span>
                        <p>
                            The venue of the competition for the vacant positions of the teaching staff of JSC "Academy of Civil Aviation":
                            <br>
                            <em>Almaty, Akhmetov str., 44.</em>
                        </p>
                    </p>
                </div>
                <hr>
                <div class="card mb-2">
                    <a class="card-link" data-toggle="collapse" href="#collapseEN" role="button" aria-expanded="false" aria-controls="collapseEN">
                        <div class="card-header" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            List of required documents
                        </div>
                    </a>
                    <div class="collapse" id="collapseEN">
                        <div class="card-body">
                            <p>1. Application according to Appendix 1.</p>
                            <p>2. Summary according to Appendix 2.</p>
                            <p>The participant of the Competition has the right to provide additional information regarding his education, professional level (recommendations from the management of the previous place of work), as well as documents confirming work experience and qualifications.</p>
                            <p>3. Autobiography (in any form).</p>
                            <p>4. A copy of the identity card.</p>
                            <p>5. Notarized copies of diplomas of higher education, academic and academic degrees, documents of academic rank. For diplomas in a foreign language, it is mandatory to attach a notarized translation into the state or Russian language.</p>
                            <p>6. Copies of certificates of retraining and advanced training (if available) and their originals for verification (for the last 5 years).</p>
                            <p>7. List of scientific publications, works and inventions (for the last five years, with supporting documents and prints attached).</p>
                            <p>8. Information on the developed courses of the taught disciplines (modules) within the framework of the department's training area (in free form) (over the past five years).</p>
                            <p>9. Certificate of scientific grants for which the applicant was the head or executor (if any) (for the last five years).</p>
                            <p>10. A certificate on the presence or absence of accounting information issued by the Committee on Legal Statistics and Special Accounts of the Prosecutor General's Office of the Republic of Kazakhstan on the commission of a criminal offense by a person.</p>
                            <p>11. Certificate of the presence or absence of information about the commission of a corruption crime by a person.</p>
                            <p>12. Certificates of the PSC that the participant of the Competition is not registered in narcological and neuropsychiatric organizations.</p>
                            <p>13. Medical certificate in form No. 086/u.</p>
                            <p>Applicants working at the Academy of Civil Aviation JSC are exempt from submitting documents according to points: 5, 10, 11, 12.</p>
                            <p>After the end of the acceptance of documents, a list of applicants for departments is formed and a schedule for consideration by the competition commission is drawn up.</p>
                            <p>The applicant (with the exception of applicants from among the faculty of the Academy) makes a presentation of the discipline he teaches (a fragment of a lecture and / or a practical lesson).</p>
                            <p>The applicant is not allowed to participate in the competition in case of violation of the established deadlines for submitting applications and documents.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/квт_на_сайт_англ.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Qualification requirements for the positions of the teaching staff
                        </div>
                      </a>
                </div>
                <div class="card" style="margin-bottom: 3px;">
                    <a href="{{ asset('/storage/hr_storage/Template_of_documents_for_the_competition.pdf') }}"
                         class="btn btn-primary"
                         target="_blank"
                         rel="noopener noreferrer">
                         <div class="card-header without-after" style="background-color:#00249c; color:white; text-align:center; font-size:1.25rem; font-weight:500;">
                            Template of documents for the competition
                        </div>
                      </a>
                </div>
            @endif










    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        </div>
    </section>
@endsection



