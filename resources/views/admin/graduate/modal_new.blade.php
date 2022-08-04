<div class="modal fade" id="userModal{!! $item->id !!}" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.graduate.graduates.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{!! $item->id !!}">
                    <input type="hidden" name="magister" value="0">
                    <input type="hidden" name="resume" value="0">
                    <div class="blocks">
                        <div class="block">
                            <h5 class="block__title">Фамилия</h5>
                            <p class="block__info">{!! $item->surname !!}</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Имя</h5>
                            <p class="block__info">{!! $item->name !!}</p>
                        </div>
                        @if (isset($item->patronymic))
                            <div class="block">
                                <h5 class="block__title">Отчество</h5>
                                <p class="block__info">{!! $item->patronymic !!}</p>
                            </div>
                        @endif
                        <div class="block">
                            <h5 class="block__title">Группа</h5>
                            <p class="block__info">{!! $item->groupe !!}</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Специальность</h5>
                            <select class="block__info" name="speciality">
                                <option value="">-----</option>
                                <option value="Техническая эксплуатация летательных аппаратов и двигателей (механик)" @if ($item->speciality === 'Техническая эксплуатация летательных аппаратов и двигателей (механик)') selected @endif>Техническая эксплуатация летательных аппаратов и двигателей (механик)
                                </option>
                                <option value="Техническая эксплуатация систем авионики летательных аппаратов (авионик)" @if ($item->speciality === 'Техническая эксплуатация систем авионики летательных аппаратов (авионик)') selected @endif>Техническая эксплуатация систем авионики летательных аппаратов (авионик)
                                </option>
                                <option value="Обеспечение авиационной безопасности" @if ($item->speciality === 'Обеспечение авиационной безопасности') selected @endif>Обеспечение авиационной безопасности
                                </option>
                                <option value="Обслуживание наземного радиоэлектронного оборудования аэропортов" @if ($item->speciality === 'Обслуживание наземного радиоэлектронного оборудования аэропортов') selected @endif>Обслуживание наземного радиоэлектронного оборудования аэропортов</option>
                                <option value="Организация аэропортовой деятельности" @if ($item->speciality === 'Организация аэропортовой деятельности') selected @endif>Организация аэропортовой деятельности</option>
                                <option value="Летная эксплуатация гражданских самолетов (пилот)" @if ($item->speciality === 'Летная эксплуатация гражданских самолетов (пилот)') selected @endif>Летная эксплуатация гражданских самолетов (пилот)</option>
                                <option value="Летная эксплуатация гражданских вертолетов (пилот)" @if ($item->speciality === 'Летная эксплуатация гражданских вертолетов (пилот)') selected @endif>Летная эксплуатация гражданских вертолетов (пилот)</option>
                                <option value="Обслуживание воздушного движения (авиадиспетчер)" @if ($item->speciality === 'Обслуживание воздушного движения (авиадиспетчер)') selected @endif>Обслуживание воздушного движения (авиадиспетчер)</option>
                                <option value="Организация авиационных перевозок" @if ($item->speciality === 'Организация авиационных перевозок') selected @endif>Организация авиационных перевозок</option>
                                <option value="Логистика на транспорте" @if ($item->speciality === 'Логистика на транспорте') selected @endif>Логистика на транспорте</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Образовательная программа</h5>
                            <p class="block__info">{!! $item->edu_program !!}</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">GPA</h5>
                            <input type="text" class="block__info" name="gpa" value="{!! $item->gpa !!}">
                        </div>
                        <div class="block">
                            <h5 class="block__title">ИИН</h5>
                            <p class="block__info">{!! $item->iin !!}</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Отделение</h5>
                            <p class="block__info">{!! $item->form_study !!}</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Международный грант</h5>
                            <select class="block__info" name="international_grant">
                                <option value="">-----</option>
                                <option value="0" @if ($item->international_grant === 0) selected @endif>Нет
                                </option>
                                <option value="1" @if ($item->international_grant === 1) selected @endif>Да
                                </option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Форма обучения</h5>
                            <select class="block__info" name="edu_form">
                                <option value="">-----</option>
                                <option value="очное" @if ($item->edu_form === 'очное') selected @endif>очное
                                </option>
                                <option value="очное с применением ДОТ" @if ($item->edu_form === 'очное с применением ДОТ') selected @endif>очное с применением ДОТ
                                </option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Адрес</h5>
                            <textarea rows="5" class="block__info" name="reg_address">{!! $item->reg_address !!}</textarea>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Регион</h5>

                            <select class="block__info" name="region">
                                <option value="">-----</option>
                                <option value="Город Алматы" @if ($item->region === 'Город Алматы') selected @endif>Город
                                    Алматы</option>
                                <option value="Город Нур-Султан" @if ($item->region === 'Город Нур-Султан') selected @endif>
                                    Город Нур-Султан (Астана)</option>
                                <option value="Город Шымкент" @if ($item->region === 'Город Шымкент') selected @endif>Город
                                    Шымкент</option>
                                <option value="Абайская область" @if ($item->region === 'Абайская область') selected @endif>
                                    Абайская область</option>
                                <option value="Акмолинская область" @if ($item->region === 'Акмолинская область') selected @endif>
                                    Акмолинская область</option>
                                <option value="Актюбинская область" @if ($item->region === 'Актюбинская область') selected @endif>
                                    Актюбинская область</option>
                                <option value="Алматинская область" @if ($item->region === 'Алматинская область') selected @endif>
                                    Алматинская область</option>
                                <option value="Атырауская область" @if ($item->region === 'Атырауская область') selected @endif>
                                    Атырауская область</option>
                                <option value="Восточно-Казахстанская область"
                                    @if ($item->region === 'Восточно-Казахстанская область') selected @endif>
                                    Восточно-Казахстанская область</option>
                                <option value="Жамбыльская область" @if ($item->region === 'Жамбыльская обл.') selected @endif>
                                    Жамбыльская область</option>
                                <option value="Жетысуская область" @if ($item->region === 'Жетысуская обл.') selected @endif>
                                    Жетысуская область</option>
                                <option value="Западно-Казахстанская область"
                                    @if ($item->region === 'Западно-Казахстанская область') selected @endif>
                                    Западно-Казахстанская область</option>
                                <option value="Карагандинская область"
                                    @if ($item->region === 'Карагандинская область') selected @endif>Карагандинская область</option>
                                <option value="Костанайская область"
                                    @if ($item->region === 'Костанайская область') selected @endif>Костанайская область</option>
                                <option value="Кызылординская область"
                                    @if ($item->region === 'Кызылординская область') selected @endif>Кызылординская область</option>
                                <option value="Мангистауская область"
                                    @if ($item->region === 'Мангистауская область') selected @endif>Мангистауская область</option>
                                <option value="Павлодарская область"
                                    @if ($item->region === 'Павлодарская область') selected @endif>Павлодарская область</option>
                                <option value="Северо-Казахстанская область"
                                    @if ($item->region === 'Северо-Казахстанская область') selected @endif>
                                    Северо-Казахстанская область</option>
                                <option value="Туркестанская область"
                                    @if ($item->region === 'Туркестанская область') selected @endif>Туркестанская область</option>
                                <option value="Улытауская область"
                                    @if ($item->region === 'Улытауская область') selected @endif>Улытауская область</option>
                                <option value="Иностранец"
                                    @if ($item->region === 'Иностранец') selected @endif>Иностранец</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Продолжение обучения</h5>
                            <select class="block__info" name="continue_education">
                                <option value="">-----</option>
                                <option value="0" @if ($item->continue_education === '0') selected @endif>Нет</option>
                                <option value="Магистратура АГА" @if ($item->continue_education === 'Магистратура АГА') selected @endif>Магистратура АГА</option>
                                <option value="Магистратура другой ВУЗ" @if ($item->continue_education === 'Магистратура другой ВУЗ') selected @endif>Магистратура другой ВУЗ</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Тип занятости</h5>
                            <select class="block__info" name="work">
                                <option value="">-----</option>
                                <option value="0" @if ($item->work === 0) selected @endif>Не трудоустроен</option>
                                <option value="1" @if ($item->work === 1) selected @endif>Трудоустроен</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Вид трудоустройства</h5>
                            <select class="block__info" name="employment_type">
                                <option value="0">-----</option>
                                <option value="Трудоустроен, по специальности" @if ($item->employment_type === "Трудоустроен, по специальности") selected @endif>Трудоустроен, по специальности</option>
                                <option value="Трудоустроен, в авиации" @if ($item->employment_type === 'Трудоустроен, в авиации') selected @endif>Трудоустроен, в авиации</option>
                                <option value="Трудоустроен, не в авиации" @if ($item->employment_type === 'Трудоустроен, не в авиации') selected @endif>Трудоустроен, не в авиации</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Место работы</h5>
                            <p class="block__info">@if ($item->work_place !== '0') {!! $item->work_place !!}  @endif</p>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Должность</h5>
                            <input type="text" class="block__info" name="position" value="{!! $item->position !!}">
                        </div>
                        <div class="block">
                            <h5 class="block__title">Статус должности</h5>
                            <select class="block__info" name="position_status">
                                <option value="0">-----</option>
                                <option value="Высший руководящий состав" @if ($item->position_status === 'Высший руководящий состав') selected @endif>Высший руководящий состав</option>
                                <option value="Средний руководящий состав" @if ($item->position_status === 'Средний руководящий состав') selected @endif>Средний руководящий состав</option>
                                <option value="Исполнитель" @if ($item->position_status === 'Исполнитель') selected @endif>Исполнитель</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Наличие справки с места работы</h5>
                            <select class="block__info" name="reference">
                                <option value="0" @if ($item->reference === 0) selected @endif>Отсутствует</option>
                                <option value="1" @if ($item->reference === 1) selected @endif>Имеется</option>
                            </select>
                        </div>
                        @if (isset($item->reference_doc))
                        <div class="block">
                            <h5 class="block__title">Справка с места работы</h5>
                            <p class="block__info">
                                <a href="{!! $item->reference_doc !!}" target="_blank">Справка</a>
                            </p>
                        </div>
                        @endif
                        <div class="block">
                            <h5 class="block__title">Наличие портфолио</h5>
                            <select class="block__info" name="have_portfolio">
                                <option value="Отсутствует" @if ($item->resume === 'Отсутствует') selected @endif>Отсутствует</option>
                                <option value="Имеется" @if ($item->resume === 'Имеется') selected @endif>Имеется</option>
                            </select>
                        </div>
                        @if (isset($item->portfolio_doc))
                        <div class="block">
                            <h5 class="block__title">Портфолио выпускника</h5>
                            <p class="block__info">
                                <a href="{!! $item->portfolio_doc !!}" target="_blank">Портфолио</a>
                            </p>
                        </div>
                        @endif
                        <div class="block">
                            <h5 class="block__title">Наличие документов для Фин центра</h5>
                            <select class="block__info" name="have_fincenter_doc">
                                <option value="Отсутствует" @if ($item->resume === 'Отсутствует') selected @endif>Отсутствует</option>
                                <option value="Имеется" @if ($item->resume === 'Имеется') selected @endif>Имеется</option>
                            </select>
                        </div>
                        <div class="block">
                            <h5 class="block__title">Вручено направление</h5>
                            <select class="block__info" name="direction" id="direction">
                                <option value="0" @if ($item->direction === 0) selected @endif>Нет</option>
                                <option value="1" @if ($item->direction === 1) selected @endif>Да</option>
                            </select>
                        </div>
                        @if ($item->direction === 1)
                            <div class="block">
                                <h5 class="block__title">Место 1</h5>
                                {{-- <input type="text" name="directionPlace1" class="block__info"
                                    value="{!! $item->direction_place1 !!}"> --}}
                                <p class="block__info">{!! $item->direction_place1 !!}</p>
                            </div>
                            <div class="block">
                                <h5 class="block__title">Место 2</h5>
                                {{-- <input type="text" name="directionPlace2" class="block__info"
                                    value="{!! $item->direction_place2 !!}"> --}}
                                <p class="block__info">{!! $item->direction_place2 !!}</p>
                            </div>
                            <div class="block">
                                <h5 class="block__title">Место 3</h5>
                                {{-- <input type="text" name="directionPlace3" class="block__info"
                                    value="{!! $item->direction_place3 !!}"> --}}
                                <p class="block__info">{!! $item->direction_place3 !!}</p>
                            </div>
                        @endif
                        <div class="block">
                            <h5 class="block__title">Телефон</h5>
                            <input type="text" name="phone" class="block__info"
                                value="{!! $item->phone !!}">
                        </div>
                        <div class="block">
                            <h5 class="block__title">Год и месяц окончания обучения</h5>
                            <input type="month" name="grad_year" class="block__info" value="{!! substr($item->grad_year, 0, 7) !!}">
                        </div>
                        <div class="block">
                            <h5 class="block__title">Статус выпускника</h5>
                            <select name="graduate_status" class="block__info">
                                <option value="">-----</option>
                                <option value="Трудоустроен" @if ($item->graduate_status === 'Трудоустроен') selected @endif>Трудоустроен
                                </option>
                                <option value="Призван в ряды вооруженных сил" @if ($item->graduate_status === 'Призван в ряды вооруженных сил') selected @endif>Призван в ряды вооруженных сил
                                </option>
                                <option value="Отпуск по уходу за ребенком" @if ($item->graduate_status === 'Отпуск по уходу за ребенком') selected @endif>
                                    Отпуск по уходу за ребенком</option>
                                <option value="Повторный курс обучения"
                                    @if ($item->graduate_status === 'Повторный курс обучения') selected @endif>Повторный курс обучения</option>
                                <option value="Выдано направление" @if ($item->graduate_status === 'Выдано направление') selected @endif>
                                    Выдано направление</option>
                                <option value="Нет обратной связи" @if ($item->graduate_status === 'Нет обратной связи') selected @endif>
                                    Нет обратной связи</option>
                            </select>
                        </div>
                        <div class="block">
                            <button type="submit" class="button">Сохранить изменения</button>
                        </div>
                </form>
                <div class="block">
                    <form action="{{ route('admin.graduate.graduates.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button" onclick="return confirm('Удалить?')">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
