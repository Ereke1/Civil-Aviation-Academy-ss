@extends('admin.layouts.app')
@php $parrentCat  = 'Абитуриенты' @endphp
@php $active_menu  = 'Бакалавриат' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Абитуриенты на Бакалавриат</h1>
    <h2>Фильтр и сортировка</h2>
    <div class="filter">
        <form action="{{ route('admin.enrollee.bachelor.index') }}">
            @csrf
            <div>
                <label for="base">На базе</label>
                <select name="base">
                    <option value=""></option>
                    <option value="11-го класса" @if ($base === '11-го класса') selected @endif>11 класса</option>
                    <option value="Высшего образования" @if ($base === 'Высшего образования') selected @endif>Высшего
                        образования</option>
                    <option value="Технического и профессионального образования (колледжа)"
                        @if ($base === 'Технического и профессионального образования (колледжа)') selected @endif>ТиПО</option>
                </select>
            </div>
            <div>
                <label for="haveAltyn">Имеется Алтын Белги</label>
                <select name="haveAltyn">
                    <option value=""></option>
                    <option value="Да" @if ($haveAltyn === 'Да') selected @endif>Да</option>
                    <option value="Нет" @if ($haveAltyn === 'Нет') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="quota">КВОТЫ</label>
                <select name="quota">
                    <option value=""></option>
                    <option value="Граждане с инвалидностью первой или второй группы"
                    @if ($quota === 'Граждане с инвалидностью первой или второй группы')selected @endif>Граждане с инвалидностью первой или второй группы</option>
                    <option value="Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ"
                    @if ($quota === 'Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ')
                    selected @endif>Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ</option>
                    <option value="Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села"
                    @if ($quota === 'Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села')
                    selected @endif>Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села</option>
                    <option value="Этнические казахи, не являющиеся гражданами Казахстана"
                    @if ($quota === 'Этнические казахи, не являющиеся гражданами Казахстана')
                    selected @endif>Этнические казахи, не являющиеся гражданами Казахстана</option>
                    <option value="Дети-сироты и дети, оставшиеся без попечения родителей"
                    @if ($quota === 'Дети-сироты и дети, оставшиеся без попечения родителей')
                    selected @endif>Дети-сироты и дети, оставшиеся без попечения родителей</option>
                    <option value="Сельская молодежь, переселяющаяся в регионы, определенные правительством"
                    @if ($quota === 'Сельская молодежь, переселяющаяся в регионы, определенные правительством')
                    selected @endif>Сельская молодежь, переселяющаяся в регионы, определенные правительством</option>
                    <option value="Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей"
                    @if ($quota === 'Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей')
                    selected @endif>Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей</option>
                    <option value="Дети из неполных семей, имеющих этот статус не менее трех лет"
                    @if ($quota === 'Дети из неполных семей, имеющих этот статус не менее трех лет')
                    selected @endif>Дети из неполных семей, имеющих этот статус не менее трех лет</option>
                    <option value="Дети из семей, воспитывающих детей с инвалидностью"
                    @if ($quota === 'Дети из семей, воспитывающих детей с инвалидностью')
                    selected @endif>Дети из семей, воспитывающих детей с инвалидностью</option>
                </select>
            </div>
            <div>
                <label for="haveENT">Имеется ЕНТ</label>
                <select name="haveENT">
                    <option value=""></option>
                    <option value="Да" @if ($haveENT === 'Да') selected @endif>Да</option>
                    <option value="Нет" @if ($haveENT === 'Нет') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="citizen">Гражданство</label>
                <select name="citizen">
                    <option value=""></option>
                    <option value="Резидент РК" @if ($citizen === 'Резидент РК') selected @endif>Резидент РК</option>
                    <option value="Нерезидент РК" @if ($citizen === 'Нерезидент РК') selected @endif>Нерезидент РК</option>
                </select>
            </div>
            <div>
                <label for="programms">Образовательная программа</label>
                <select name="programms">
                    <option value=""></option>
                    <option value="Лётная эксплуатация гражданских самолетов (пилот)" @if ($programms === 'Лётная эксплуатация гражданских самолетов (пилот)') selected @endif>
                        Лётная эксплуатация
                        самолётов (пилот)</option>
                    <option value="Лётная эксплуатация гражданских вертолетов (пилот)"
                        @if ($programms === 'Лётная эксплуатация гражданских вертолетов (пилот)') selected @endif>Лётная эксплуатация
                        вертолётов (пилот)</option>
                    <option value="Обслуживание воздушного движения и аэронавигационное обеспечение полетов" @if ($programms === 'Обслуживание воздушного движения и аэронавигационное обеспечение полетов') selected @endif>
                        Обслуживание воздушного
                        движения</option>
                    <option value="Техническая эксплуатация систем авионики летательных аппаратов и двигателей"
                        @if ($programms === 'Техническая эксплуатация систем авионики летательных аппаратов и двигателей') selected @endif>Техническая
                        эксплуатация систем авионики летательных аппаратов и двигателей</option>
                    <option value="Техническая эксплуатация летательных аппаратов и двигателей"
                        @if ($programms === 'Техническая эксплуатация летательных аппаратов и двигателей') selected @endif>Техническая эксплуатация
                        летательных аппаратов и двигателей</option>
                    <option value="Обеспечение авиационной безопасности"
                        @if ($programms === 'Обеспечение авиационной безопасности') selected @endif>Обеспечение
                        авиационной безопасности</option>
                    <option value="Обслуживание наземного радиоэлектронного оборудования аэропортов"
                        @if ($programms === 'Обслуживание наземного радиоэлектронного оборудования аэропортов') selected @endif>Обслуживание наземного
                        радиоэлектронного оборудования аэропортов</option>
                    <option value="Техническая эксплуатация авиационного и радиоэлектронного оборудования"
                        @if ($programms === 'Техническая эксплуатация авиационного и радиоэлектронного оборудования') selected @endif>Техническая эксплуатация авиационного и радиоэлектронного оборудования</option>
                    <option value="Беспилотные летательные аппараты и системы"
                        @if ($programms === 'Беспилотные летательные аппараты и системы') selected @endif>Беспилотные летательные аппараты и системы</option>
                    <option value="Организация аэропортовой деятельности"
                        @if ($programms === 'Организация аэропортовой деятельности') selected @endif>Организация
                        аэропортовой деятельности</option>
                    <option value="Организация авиационных перевозок" @if ($programms === 'Организация авиационных перевозок') selected @endif>
                        Организация авиационных
                        перевозок</option>
                    <option value="Логистика на транспорте" @if ($programms === 'Логистика на транспорте') selected @endif>
                        Логистика на транспорте</option>
                    <option value="Системная интеграция наземного обслуживания" @if ($programms === 'Системная интеграция наземного обслуживания') selected @endif>
                        Системная интеграция наземного обслуживания</option>
                    <option value="Авиационная безопасность и интеллектуальные системы" @if ($programms === 'Авиационная безопасность и интеллектуальные системы') selected @endif>
                        Авиационная безопасность и интеллектуальные системы</option>
                    <option value="Технология транспортных процессов в авиации" @if ($programms === 'Технология транспортных процессов в авиации') selected @endif>
                        Технология транспортных процессов в авиации</option>
                    <option value="Технология авиационных перевозок" @if ($programms === 'Технология авиационных перевозок') selected @endif>
                        Технология авиационных перевозок</option>
                </select>
            </div>
            <div>
                <label for="lang_edu">Язык обучения</label>
                <select name="lang_edu" >
                    <option value=""></option>
                    <option value="Казахский" @if ($lang_edu === 'Казахский') selected @endif>Казахский</option>
                    <option value="Русский" @if ($lang_edu === 'Русский') selected @endif>Русский</option>
                    <option value="Английский" @if ($lang_edu === 'Английский') selected @endif>Английский</option>
                </select>
            </div>
            <div>
                <label for="region">Регион</label>
                <select name="region">
                    <option value=""></option>
                    <option value="г. Алматы" @if ($region === 'г. Алматы') selected @endif>г. Алматы</option>
                    <option value="г. Астана" @if ($region === 'г. Астана') selected @endif>г. Астана</option>
                    <option value="г. Шымкент" @if ($region === 'г. Шымкент') selected @endif>г. Шымкент</option>
                    <option value="Абайская обл." @if ($region === 'Абайская обл.') selected @endif>Абайская обл.
                    </option>
                    <option value="Акмолинская обл." @if ($region === 'Акмолинская обл.') selected @endif>Акмолинская обл.
                    </option>
                    <option value="Актюбинская обл." @if ($region === 'Актюбинская обл.') selected @endif>Актюбинская обл.
                    </option>
                    <option value="Алматинская обл." @if ($region === 'Алматинская обл.') selected @endif>Алматинская обл.
                    </option>
                    <option value="Атырауская обл." @if ($region === 'Атырауская обл.') selected @endif>Атырауская обл.
                    </option>
                    <option value="Восточно-Казахстанская обл." @if ($region === 'Восточно-Казахстанская обл.') selected @endif>
                        Восточно-Казахстанская обл.</option>
                    <option value="Жамбыльская обл." @if ($region === 'Жамбыльская обл.') selected @endif>Жамбыльская обл.
                    </option>
                    <option value="Жетысуская обл." @if ($region === 'Жетысуская обл.') selected @endif>Жетысуская обл.
                    </option>
                    <option value="Западно-Казахстанская обл." @if ($region === 'Западно-Казахстанская обл.') selected @endif>
                        Западно-Казахстанская обл.</option>
                    <option value="Карагандинская обл." @if ($region === 'Карагандинская обл.') selected @endif>Карагандинская
                        обл.</option>
                    <option value="Костанайская обл." @if ($region === 'Костанайская обл.') selected @endif>Костанайская обл.
                    </option>
                    <option value="Кызылординская обл." @if ($region === 'Кызылординская обл.') selected @endif>Кызылординская
                        обл.</option>
                    <option value="Мангистауская обл." @if ($region === 'Мангистауская обл.') selected @endif>Мангистауская
                        обл.</option>
                    <option value="Павлодарская обл." @if ($region === 'Павлодарская обл.') selected @endif>Павлодарская обл.
                    </option>
                    <option value="Северо-Казахстанская обл." @if ($region === 'Северо-Казахстанская обл.') selected @endif>
                        Северо-Казахстанская обл.</option>
                    <option value="Туркестанская обл." @if ($region === 'Туркестанская обл.') selected @endif>Туркестанская
                        обл.</option>
                    <option value="Улытауская обл." @if ($region === 'Улытауская обл.') selected @endif>Улытауская обл.</option>
                </select>
            </div>
            <div>
                <label for="countENT">Пороговый балл ЕНТ</label>
                <input type="number" name="countENT"
                    @if ($countENT != '') value="{!! $countENT !!}" @endif>
            </div>
            <div>
                <label for="haveVLEK">Пройден ВЛЭК</label>
                <select name="haveVLEK">
                    <option value=""></option>
                    <option value="Да" @if ($haveVLEK === 'Да') selected @endif>Да</option>
                    <option value="Нет" @if ($haveVLEK === 'Нет') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="haveIELTS">Имеется IELTS/TOEFL</label>
                <select name="haveIELTS">
                    <option value=""></option>
                    <option value="Да" @if ($haveIELTS === 'Да') selected @endif>Да</option>
                    <option value="Нет" @if ($haveIELTS === 'Нет') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="process">Процесс</label>
                <select name="process">
                    <option value=""></option>
                    <option value="Не дозвонились" @if ($process === 'Не дозвонились') selected @endif>Не дозвонились
                    </option>
                    <option value="В обработке" @if ($process === 'В обработке') selected @endif>В обработке</option>
                    <option value="Обработанный" @if ($process === 'Обработанный') selected @endif>Обработанные</option>
                    <option value="Сдал документы" @if ($process === 'Сдал документы') selected @endif>Сдал документы
                    </option>
                    <option value="Отказ" @if ($process === 'Отказ') selected @endif>Отказ</option>
                </select>
            </div>
            <div>
                <label for="created_at_from">Дата подачи с</label>
                <input type="date" name="created_at_from"
                 @if ($created_at_from != '') value="{!! $created_at_from !!}" @endif>
            </div>
            <div>
                <label for="created_at_to">Дата подачи до</label>
                <input type="date" name="created_at_to"
                 @if ($created_at_to != '') value="{!! $created_at_to !!}" @endif>
            </div>
            <div>
                <label for="case_number_date_from">Дата № дела с</label>
                <input type="date" name="case_number_date_from"
                 @if ($case_number_date_from != '') value="{!! $case_number_date_from !!}" @endif>
            </div>
            <div>
                <label for="have_grant">Имеется Грант</label>
                <select name="have_grant">
                    <option value=""></option>
                    <option value="1" @if ($have_grant === 1) selected @endif>Да</option>
                    <option value="0" @if ($have_grant === 0) selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="sort">Сортировать</label>
                <select name="sort">
                    <option value=""></option>
                    <option value="surname" @if ($sort === 'surname') selected @endif>По фамилии</option>
                    <option value="countENT" @if ($sort === 'countENT') selected @endif>По баллам ЕНТ </option>
                </select>
            </div>
            <div>
                <button>Применить</button>
            </div>
        </form>
    </div>
    <form action="{{ route('admin.enrollee.bachelor.export') }}" method="GET" class="mb-3">
        {{-- скрытые поля фильтров --}}
        <input type="hidden" name="base" value="{{ $base }}">
        <input type="hidden" name="haveAltyn" value="{{ $haveAltyn }}">
        <input type="hidden" name="haveENT" value="{{ $haveENT }}">
        <input type="hidden" name="countENT" value="{{ $countENT }}">
        <input type="hidden" name="quota" value="{{ $quota }}">
        <input type="hidden" name="citizen" value="{{ $citizen }}">
        <input type="hidden" name="programms" value="{{ $programms }}">
        <input type="hidden" name="lang_edu" value="{{ $lang_edu }}">
        <input type="hidden" name="region" value="{{ $region }}">
        <input type="hidden" name="haveVLEK" value="{{ $haveVLEK }}">
        <input type="hidden" name="haveIELTS" value="{{ $haveIELTS }}">
        <input type="hidden" name="process" value="{{ $process }}">
        <input type="hidden" name="have_grant" value="{{ $have_grant }}">
        <input type="hidden" name="created_at_from" value="{{ $created_at_from }}">
        <input type="hidden" name="case_number_date_from" value="{{ $case_number_date_from }}">
        <input type="hidden" name="created_at_to" value="{{ $created_at_to }}">
        {{-- <input type="hidden" name="surname" value="{{ $surname }}"> --}}
        <button type="submit" class="btn btn-outline-success">
            <i class="fas fa-file-excel"></i> Выгрузить в Excel
        </button>
    </form>
    <br /><br />
    <h2>Поиск</h2>
    <div class="filter">
        <form action="{{ route('admin.enrollee.bachelor.index') }}" method="GET">
            @csrf
            <div>
                <label for="surname">Поиск по фамилии</label>
                <input type="text" name="surname">
            </div>
            <div>
                <button>Найти</button>
            </div>
            <div>
                <a href="{{ route('admin.enrollee.bachelor.index') }}"><button>Сбросить фильтры</button></a>
            </div>
            <div>
                <a href="{{ route('admin.enrollee.documents.pdf').'?type=Бакалавриат'.str_replace('?','&',str_replace(Request::url(), '', Request::fullUrl())) }}" class="button">Выгрузка PDF</a>
            </div>
        </form>
    </div>
    <h3>Всего анкет: {!! $countData !!}</h3>
    <table class="table-filter">
        <tr>
            <th>Дата</th>
            <th>ФИО</th>
            <th>ЕНТ</th>
            <th>Телефон 1</th>
            <th>Телефон 2</th>
            <th>Процесс</th>
            <th>№ дела</th>
            <th>Детально</th>
        </tr>
        @if (isset($data))
            @foreach ($data as $item)
                <tr>
                    <td>{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</td>
                    <td>{!! $item->surname !!} {!! $item->name !!} {!! $item->patronymic !!}</td>
                    <td>{!! $item->countENT !!}</td>
                    <td>{!! $item->phone_1 !!}</td>
                    <td>{!! $item->phone_2 !!}</td>
                    <td>
                        @if ($item->process === null)
                            -----
                        @else
                            {!! $item->process !!}
                        @endif
                    </td>
                    <td>{!! $item->case_number !!}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#userModal{!! $item->applid !!}">
                            Посмотреть
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="userModal{!! $item->applid !!}" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.enrollee.bachelor.update', $item->applid) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{!! $item->applid !!}">
                                    <div class="blocks">
                                        <div class="block">
                                            <h5 class="block__title">Фамилия</h5>
                                            <input type="text" value="{!! $item->surname !!}" name="surname" class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Имя</h5>
                                            <input type="text" value="{!! $item->name !!}" name="name"
                                                class="block__info">
                                        </div>
                                        @if (isset($item->patronymic))
                                            <div class="block">
                                                <h5 class="block__title">Отчество</h5>
                                                <input type="text" value="{!! $item->patronymic !!}" name="patronymic"
                                                    class="block__info">
                                            </div>
                                        @endif
                                        @if ($item->birthdate !== NULL)
                                        {{-- <div class="block">
                                            <h5 class="block__title">Дата рождения</h5>
                                            <p class="block__info">
                                                {!! date('d.m.Y', strtotime($item->birthdate)) !!}
                                            </p>
                                        </div> --}}
                                        <div class="block">
                                            <h5 class="block__title">Дата рождения</h5>
                                            <input
                                                type="date"
                                                name="birthdate"
                                                class="block__info"
                                                value="{{ old('birthdate', \Carbon\Carbon::parse($item->birthdate)->format('Y-m-d')) }}"
                                                required
                                            >
                                        </div>
                                        @endif
                                        @if ($item->gender !== NULL)
                                        <div class="block">
                                            <h5 class="block__title">Пол</h5>
                                            <p class="block__info">
                                                {!! $item->gender !!}
                                            </p>
                                        </div>
                                        @endif
                                        @if ($item->nationality_id !== NULL)
                                        <div class="block">
                                            <h5 class="block__title">Национальность</h5>
                                            <p class="block__info">
                                                {!! mb_strtolower($item->nationality_ru, 'UTF-8') !!}
                                            </p>
                                        </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">Гражданство</h5>
                                            <p class="block__info">{!! $item->citizen !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Язык обучения</h5>
                                            <select name="lang_edu" class="block__info">
                                                <option @if ($item->lang_edu === NULL or $item->lang_edu === "-") selected value="{{$item->lang_edu}}" @endif>-</option>
                                                <option value="Казахский"
                                                    @if ($item->lang_edu === 'Казахский') selected @endif>Казахский
                                                </option>
                                                <option value="Русский"
                                                    @if ($item->lang_edu === 'Русский') selected @endif>
                                                    Русский</option>
                                                <option value="Английский"
                                                    @if ($item->lang_edu === 'Английский') selected @endif>
                                                    Английский</option>
                                            </select>
                                        </div>
                                        @if (isset($item->iin))
                                            <div class="block">
                                                <h5 class="block__title">ИИН</h5>
                                                <input type="text" value="{!! $item->iin !!}" name="iin"
                                                    class="block__info">
                                            </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">Дата подачи</h5>
                                            <p class="block__info">{!! date('d.m.Y H:m', strtotime($item->created_at)) !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">На базе</h5>
                                            <select name="base" class="block__info">
                                                <option value="11-го класса"
                                                    @if ($item->base === '11-го класса') selected @endif>11-го класса
                                                </option>
                                                <option value="Технического и профессионального образования (колледжа)"
                                                    @if ($item->base === 'Технического и профессионального образования (колледжа)') selected @endif>
                                                    Технического
                                                    и профессионального образования (колледжа)</option>
                                                <option value="Высшего образования"
                                                    @if ($item->base === 'Высшего образования') selected @endif>Высшего образования
                                                </option>
                                            </select>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Образовательная программа</h5>
                                            <select name="programms" class="block__info">
                                                <option value="null">
                                                    -----
                                                </option>
                                                <!-- B167 Лётная эксплуатация летательных аппаратов и двигателей -->
                                                <option value="Лётная эксплуатация гражданских самолетов (пилот)"
                                                    @if ($item->programms === 'Лётная эксплуатация гражданских самолетов (пилот)') selected @endif>
                                                    Лётная эксплуатация гражданских самолетов (пилот)
                                                </option>
                                                <option value="Лётная эксплуатация гражданских вертолетов (пилот)"
                                                    @if ($item->programms === 'Лётная эксплуатация гражданских вертолетов (пилот)') selected @endif>
                                                    Лётная эксплуатация гражданских вертолетов (пилот)
                                                </option>
                                                <option value="Обслуживание воздушного движения и аэронавигационное обеспечение полетов"
                                                    @if ($item->programms === 'Обслуживание воздушного движения и аэронавигационное обеспечение полетов') selected @endif>
                                                    Обслуживание воздушного движения и аэронавигационное обеспечение полетов
                                                </option>
                                                <!-- B067 Воздушный транспорт и технологии -->
                                                <option
                                                    value="Техническая эксплуатация систем авионики летательных аппаратов и двигателей"
                                                    @if ($item->programms === 'Техническая эксплуатация систем авионики летательных аппаратов и двигателей') selected @endif>
                                                    Техническая эксплуатация систем авионики летательных аппаратов и
                                                    двигателей
                                                </option>
                                                <option value="Техническая эксплуатация летательных аппаратов и двигателей"
                                                    @if ($item->programms === 'Техническая эксплуатация летательных аппаратов и двигателей') selected @endif>
                                                    Техническая
                                                    эксплуатация летательных аппаратов и двигателей
                                                </option>
                                                <option value="Обеспечение авиационной безопасности"
                                                    @if ($item->programms === 'Обеспечение авиационной безопасности') selected @endif>Обеспечение
                                                    авиационной
                                                    безопасности
                                                </option>
                                                <option
                                                    value="Обслуживание наземного радиоэлектронного оборудования аэропортов"
                                                    @if ($item->programms === 'Обслуживание наземного радиоэлектронного оборудования аэропортов') selected @endif>
                                                    Обслуживание наземного радиоэлектронного оборудования аэропортов
                                                </option>
                                                <option
                                                    value="Техническая эксплуатация авиационного и радиоэлектронного оборудования"
                                                    @if ($item->programms === 'Техническая эксплуатация авиационного и радиоэлектронного оборудования') selected @endif>
                                                    Техническая эксплуатация авиационного и радиоэлектронного оборудования
                                                </option>
                                                <option value="Организация аэропортовой деятельности"
                                                    @if ($item->programms === 'Организация аэропортовой деятельности') selected @endif>Организация аэропортовой деятельности
                                                </option>
                                                <option value="Беспилотные летательные аппараты и системы"
                                                    @if ($item->programms === 'Беспилотные летательные аппараты и системы') selected @endif>
                                                    Беспилотные летательные аппараты и системы
                                                </option>
                                                <!-- B095 Транспортные услуги -->
                                                <option value="Организация авиационных перевозок"
                                                    @if ($item->programms === 'Организация авиационных перевозок') selected @endif>
                                                    Организация авиационных перевозок
                                                </option>
                                                <option value="Логистика на транспорте"
                                                    @if ($item->programms === 'Логистика на транспорте') selected @endif>Логистика на
                                                    транспорте
                                                </option>
                                                <option value="Системная интеграция наземного обслуживания"
                                                    @if ($item->programms === 'Системная интеграция наземного обслуживания') selected @endif>Системная интеграция наземного обслуживания
                                                </option>
                                                <option value="Авиационная безопасность и интеллектуальные системы"
                                                    @if ($item->programms === 'Авиационная безопасность и интеллектуальные системы') selected @endif>Авиационная безопасность и интеллектуальные системы
                                                </option>
                                                <option value="Технология транспортных процессов в авиации"
                                                    @if ($item->programms === 'Технология транспортных процессов в авиации') selected @endif>Технология транспортных процессов в авиации
                                                </option>
                                                <option value="Технология авиационных перевозок"
                                                    @if ($item->programms === 'Технология авиационных перевозок') selected @endif>Технология авиационных перевозок
                                                </option>
                                                <option value="Техническая эксплуатация систем авионики летательных аппаратов"
                                                    @if ($item->programms === 'Техническая эксплуатация систем авионики летательных аппаратов') selected @endif>Техническая эксплуатация систем авионики летательных аппаратов
                                                </option>
                                            </select>
                                        </div>
                                        @if (isset($item->quota))
                                        <div class="block">
                                            <h5 class="block__title">КВОТЫ:</h5>
                                            <select name="quota" class="block__info">
                                                <option value=""></option>
                                                <option value="Граждане с инвалидностью первой или второй группы"
                                                    @if ($item->quota === 'Граждане с инвалидностью первой или второй группы')selected @endif>Граждане с инвалидностью первой или второй группы</option>
                                                <option value="Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ"
                                                    @if ($item->quota === 'Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ')
                                                    selected @endif>Ветераны боевых действий на территории других государств, приравненных по льготам к ветеранам ВОВ</option>
                                                <option value="Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села"
                                                    @if ($item->quota === 'Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села')
                                                    selected @endif>Сельская молодежь, поступающая на обучение по программам, определяющим социально-экономическое развитие села</option>
                                                <option value="Этнические казахи, не являющиеся гражданами Казахстана"
                                                    @if ($item->quota === 'Этнические казахи, не являющиеся гражданами Казахстана')selected @endif>Этнические казахи, не являющиеся гражданами Казахстана</option>
                                                <option value="Дети-сироты и дети, оставшиеся без попечения родителей"
                                                    @if ($item->quota === 'Дети-сироты и дети, оставшиеся без попечения родителей')selected @endif>Дети-сироты и дети, оставшиеся без попечения родителей</option>
                                                <option value="Сельская молодежь, переселяющаяся в регионы, определенные правительством"
                                                    @if ($item->quota === 'Сельская молодежь, переселяющаяся в регионы, определенные правительством')selected @endif>Сельская молодежь, переселяющаяся в регионы, определенные правительством</option>
                                                <option value="Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей"
                                                    @if ($item->quota === 'Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей')selected @endif>Дети из семей, в которых воспитываются четверо и более несовершеннолетних детей</option>
                                                <option value="Дети из неполных семей, имеющих этот статус не менее трех лет"
                                                    @if ($item->quota === 'Дети из неполных семей, имеющих этот статус не менее трех лет')selected @endif>Дети из неполных семей, имеющих этот статус не менее трех лет</option>
                                                <option value="Дети из семей, воспитывающих детей с инвалидностью"
                                                    @if ($item->quota === 'Дети из семей, воспитывающих детей с инвалидностью')selected @endif>Дети из семей, воспитывающих детей с инвалидностью</option>
                                            </select>
                                        </div>
                                        @endif
                                        @if (isset($item->haveAltyn))
                                            <div class="block">
                                                <h5 class="block__title">Имеется Алтын Белги</h5>
                                                <p class="block__info">{!! $item->haveAltyn !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->haveENT))
                                            <div class="block">
                                                <h5 class="block__title">Имеется ЕНТ</h5>
                                                <p class="block__info">{!! $item->haveENT !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->quantENT))
                                            <div class="block">
                                                <h5 class="block__title">Количество предметов</h5>
                                                <p class="block__info">{!! $item->quantENT !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->mathLit))
                                            <div class="block">
                                                <h5 class="block__title">Математическая грамотность</h5>
                                                <!-- <p class="block__info">{!! $item->mathLit !!}</p> -->
                                                <input type="text" value="{!! $item->mathLit !!}" name="mathLit" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->readLit))
                                            <div class="block">
                                                <h5 class="block__title">Грамотность чтения</h5>
                                                <input type="text" value="{!! $item->readLit !!}" name="readLit" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->historyKZ))
                                            <div class="block">
                                                <h5 class="block__title">История Казахстана</h5>
                                                <input type="text" value="{!! $item->historyKZ !!}" name="historyKZ" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->math))
                                            <div class="block">
                                                <h5 class="block__title">Математика</h5>
                                                <input type="text" value="{!! $item->math !!}" name="math" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->profSub))
                                            <div class="block">
                                                <h5 class="block__title">Профильный предмет</h5>
                                                <input type="text" value="{!! $item->profSub !!}" name="profSub" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->aviaSec))
                                            <div class="block">
                                                <h5 class="block__title">Авиационная безопасность</h5>
                                                <input type="text" value="{!! $item->aviaSec !!}" name="aviaSec" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->natureSec))
                                            <div class="block">
                                                <h5 class="block__title">Охрана труда</h5>
                                                <input type="text" value="{!! $item->natureSec !!}" name="natureSec" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->geography))
                                            <div class="block">
                                                <h5 class="block__title">География</h5>
                                                <input type="text" value="{!! $item->geography !!}" name="geography" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->physics))
                                            <div class="block">
                                                <h5 class="block__title">Физика</h5>
                                                <input type="text" value="{!! $item->physics !!}" name="physics" class="block__info">
                                            </div>
                                        @endif
                                        @if (isset($item->haveVLEK))
                                            <div class="block">
                                                <h5 class="block__title">Имеется ВЛЭК</h5>
                                                <p class="block__info">{!! $item->haveVLEK !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->imgVLEK))
                                            <div class="block">
                                                <h5 class="block__title">ВЛЭК</h5>
                                                <p class="block__info">
                                                    <a href="{!! $item->imgVLEK !!}" target="_blank">ВЛЭК</a>
                                                </p>
                                            </div>
                                        @endif
                                        @if (isset($item->imgPSYCHO))
                                            <div class="block">
                                                <h5 class="block__title">Психотест</h5>
                                                <p class="block__info">
                                                    <a href="{!! $item->imgPSYCHO !!}" target="_blank">Психотест</a>
                                                </p>
                                            </div>
                                        @endif
                                        @if (isset($item->haveIELTS))
                                            <div class="block">
                                                <h5 class="block__title">Имеется IELTS/TOEFL</h5>
                                                <p class="block__info">{!! $item->haveIELTS !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->imgIELTS))
                                            <div class="block">
                                                <h5 class="block__title">IELTS/TOEFL</h5>
                                                <p class="block__info">
                                                    <a href="{!! $item->imgIELTS !!}" target="_blank">IELTS/TOEFL</a>
                                                </p>
                                            </div>
                                        @endif
                                        @if ($item->countENT !== 0)
                                            <div class="block">
                                                <h5 class="block__title">Всего баллов</h5>
                                                <p class="block__info">{!! $item->countENT !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->countries))
                                            <div class="block">
                                                <h5 class="block__title">Страна</h5>
                                                <p class="block__info">{!! $item->countries !!}</p>
                                            </div>
                                        @endif
                                        @if (isset($item->region))
                                            <div class="block">
                                                <h5 class="block__title">Регион</h5>
                                                <p class="block__info">{!! $item->region !!}</p>
                                            </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">Телефон 1</h5>
                                            <input type="text" value="{!! $item->phone_1 !!}" name="phone_1"
                                                class="block__info">
                                        </div>
                                        @if (isset($item->phone_2))
                                            <div class="block">
                                                <h5 class="block__title">Телефон 2</h5>
                                                <input type="text" value="{!! $item->phone_2 !!}" name="phone_2"
                                                    class="block__info">
                                            </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">E-mail</h5>
                                            <p class="block__info">{!! $item->email !!}</p>
                                        </div>
                                        @if (isset($item->case_number))
                                            <div class="block">
                                                <h5 class="block__title">№ дела</h5>
                                                <p class="block__info">{!! $item->case_number !!}</p>
                                            </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">Процесс</h5>
                                            <select name="process" class="block__info">
                                                <option value="-----" @if ($item->process === null) selected @endif>
                                                    -----</option>
                                                <option value="Не дозвонились"
                                                    @if ($item->process === 'Не дозвонились') selected @endif>Не дозвонились
                                                </option>
                                                <option value="В обработке"
                                                    @if ($item->process === 'В обработке') selected @endif>В обработке</option>
                                                <option value="Обработанный"
                                                    @if ($item->process === 'Обработанный') selected @endif>Обработанный
                                                </option>
                                                <option value="Сдал документы"
                                                    @if ($item->process === 'Сдал документы') selected @endif>Сдал документы
                                                </option>
                                                <option value="Отказ" @if ($item->process === 'Отказ') selected @endif>
                                                    Отказ</option>
                                            </select>
                                        </div>
                                        <div class="block">
                                            <button type="submit" class="button">Сохранить изменения</button>
                                        </div>
                                </form>
                                <div class="block">
                                    <form action="{{ route('admin.enrollee.bachelor.edit', $item->applid) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="button"
                                            onclick="return confirm('Удалить?')">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            Абитуриентов не найдено
        @endif
    </table>
    <div style="margin-top: 20px">
        {{ $data->links('admin.pagination.default') }}
    </div>
@endsection
