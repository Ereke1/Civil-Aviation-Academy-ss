@extends('admin.layouts.app')
@php $parrentCat = 'Абитуриенты' @endphp
@php $active_menu = 'Регистрация на тест и интервью' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            <h3>{{ session('alert') }}</h3>
        </div>
    @endif
    <h1>Регистрация на тест и интервью</h1>

    <h2>Фильтр</h2>
    <div class="filter">
    <form action="{{ route('admin.enrollee.onlineRegForTest.index') }}">
        @csrf
            {{-- have_ielts --}}
            <div>
                <label>Есть IELTS</label>
                <select name="have_ielts" class="form-control">
                    <option value="">Все</option>
                    <option value="1" {{ $have_ielts==='1' ? 'selected' : '' }}>Да</option>
                    <option value="0" {{ $have_ielts==='0' ? 'selected' : '' }}>Нет</option>
                </select>
            </div>

            {{-- test_passed --}}
            <div>
                <label>Тест пройден</label>
                <select name="test_passed" class="form-control">
                    <option value="">Все</option>
                    <option value="Да" {{ $test_passed==='Да' ? 'selected' : '' }}>Да</option>
                    <option value="Нет" {{ $test_passed==='Нет' ? 'selected' : '' }}>Нет</option>
                </select>
            </div>

            {{-- interview_passed --}}
            <div>
                <label>Интервью пройдено</label>
                <select name="interview_passed" class="form-control">
                    <option value="">Все</option>
                    <option value="Да" {{ $interview_passed==='Да' ? 'selected' : '' }}>Да</option>
                    <option value="Нет" {{ $interview_passed==='Нет' ? 'selected' : '' }}>Нет</option>
                </select>
            </div>

            {{-- test_date --}}
            <div >
                <label>Дата теста</label>
                <input type="date" name="test_date" value="{{ $test_date }}" class="form-control">
            </div>

            {{-- interview_date --}}
            <div >
                <label>Дата интервью</label>
                <input type="date" name="interview_date" value="{{ $interview_date }}" class="form-control">
            </div>

            {{-- surname --}}
            <div>
                <label>Фамилия</label>
                <input type="text" name="surname" value="{{ $surname }}" class="form-control" placeholder="часть фамилии">
            </div>
            <div>
                <button type="submit">Применить</button>
            </div>
            <div>
                <button type="submit"><a style="color: white" href="{{ route('admin.enrollee.onlineRegForTest.index') }}" >Сбросить</a></button>
            </div>
    </form>
    </div>
    <form action="{{ route('admin.enrollee.onlineRegForTest.export') }}" method="GET" class="mb-3">
        {{-- скрытые поля фильтров --}}
        <input type="hidden" name="have_ielts" value="{{ $have_ielts }}">
        <input type="hidden" name="test_passed" value="{{ $test_passed }}">
        <input type="hidden" name="interview_passed" value="{{ $interview_passed }}">
        <input type="hidden" name="test_date" value="{{ $test_date }}">
        <input type="hidden" name="interview_date" value="{{ $interview_date }}">
        <input type="hidden" name="surname" value="{{ $surname }}">
        <button type="submit" class="btn btn-outline-success">
            <i class="fas fa-file-excel"></i> Выгрузить в Excel
        </button>
    </form>

    <h3>Всего анкет: {!! $countData !!}</h3>
    <table class="table-filter">
        <tr>
            <th>Дата подачи</th>
            <th>ФИО</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Есть IELTS</th>
            <th>Дата теста</th>
            <th>Дата интервью</th>
            <th style="text-align: right">Детально</th>
        </tr>
        @if (isset($data))
            @foreach ($data as $item)
                <tr>
                    <td>{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</td>
                    <td>{!! $item->surname !!} {!! $item->name !!} {!! $item->patronymic !!}</td>
                    <td>{!! $item->email !!}</td>
                    <td>{!! $item->phone !!}</td>
                    <td>{!! $item->have_ielts !!}</td>
                    @if ($item->test_passed === "Да")
                        <td>{!! date('d.m.Y', strtotime($item->test_date)) !!}</td>
                        <td>{!! date('d.m.Y', strtotime($item->interview_date)) !!}</td>
                    @elseif($item->have_ielts === 1)
                        <td></td>
                        <td>{!! date('d.m.Y', strtotime($item->interview_date)) !!}</td>
                    @elseif($item->have_ielts === 0 || $item->test_passed === "Нет" || $item->test_passed === NULL || $item->have_ielts === NULL )
                        <td>{!! date('d.m.Y', strtotime($item->test_date)) !!}</td>
                        <td></td>
                    @endif
                    <td style="text-align: right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal{!! $item->id !!}">
                            Посмотреть
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="userModal{!! $item->id !!}" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.enrollee.onlineRegForTest.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="blocks">
                                        <div class="block">
                                            <h5 class="block__title">Дата подачи</h5>
                                            <p class="block__info">{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</p>
                                        </div>
                                        {{-- <div class="block">
                                            <h5 class="block__title">ЕНТ</h5>
                                            <p class="block__info">
                                                <a href="{!! $item->ent_file !!}" target="_blank">ЕНТ</a>
                                                <input type="file" name="ent_file" class="form-control-file" accept=".pdf,.jpg,.png">
                                            </p>
                                        </div> --}}
                                        <div class="block">
                                            <h5 class="block__title">ЕНТ</h5>
                                            @if($item->ent_file)
                                                <a href="{{ $item->ent_file }}" target="_blank">Смотреть текущий ЕНТ</a>
                                            @endif
                                            <input type="file"
                                                   name="ent_file"
                                                   class="form-control-file"
                                                   accept=".pdf,.jpg,.png">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Балл ЕНТ</h5>
                                            <input type="text" value="{!! $item->ent_score !!}" name="ent_score" class="block__info ent_score">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Имеется IELTS/TOEFL</h5>
                                            @if ($item->have_ielts === 1)
                                                <p class="block__info">Да</p>
                                            @else
                                                <p class="block__info">Нет</p>
                                            @endif
                                        </div>
                                        @if ($item->have_ielts === 1)
                                            <div class="block">
                                                <h5 class="block__title">IELTS/TOEFL</h5>
                                                <a  href="{{ $item->ielts_file }}" target="_blank">Смотреть текущий IELTS</a>
                                                <input type="file"
                                                    name="ielts_file"
                                                    class="form-control-file"
                                                    accept=".pdf,.jpg,.png">
                                            </div>
                                            <div class="block">
                                                <h5 class="block__title">Дата интервью</h5>
                                                <select name="interview_date" class="block__info form-control" required>
                                                  <option value="">-----</option>
                                                  @foreach($availableInterviewDates as $date)
                                                    <option value="{{ $date }}"
                                                      {{ old('interview_date', $item->interview_date) === $date ? 'selected' : '' }}>
                                                      {{ \Carbon\Carbon::parse($date)->format('d.m.Y') }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                              <div class="block">
                                                <h5 class="block__title">Время интервью</h5>
                                                <select name="interview_time_slot" class="block__info form-control" required>
                                                  <option value="">-----</option>
                                                  @foreach($timeSlotsInterview as $slot)
                                                    <option value="{{ $slot }}"
                                                      {{ old('interview_time_slot', $item->interview_time_slot) === $slot ? 'selected' : '' }}>
                                                      {{ str_replace('-', ' – ', $slot) }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            <div class="block">
                                                <h5 class="block__title">Статус прохождения интервью</h5>
                                                <select name="interview_passed" class="block__info">
                                                    <option value="Не определен" @if ($item->interview_passed  === 'Не определен') selected @endif>-----</option>
                                                    <option value="Да" @if ($item->interview_passed  === 'Да') selected @endif>Да</option>
                                                    <option value="Нет" @if ($item->interview_passed  === 'Нет') selected @endif>Нет</option>
                                                </select>
                                            </div>
                                        @else
                                            <div class="block">
                                                <h5 class="block__title">Дата теста</h5>
                                                <select name="test_date" class="block__info form-control" required>
                                                  <option value="">-----</option>
                                                  @foreach($availableDates as $date)
                                                    <option value="{{ $date }}"
                                                      {{ old('test_date', $item->test_date) === $date ? 'selected' : '' }}
                                                    >
                                                      {{ \Carbon\Carbon::parse($date)->format('d.m.Y') }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                              <div class="block">
                                                <h5 class="block__title">Время теста</h5>
                                                <select name="test_time_slot" class="block__info form-control" required>
                                                  <option value="">-----</option>
                                                  @foreach($timeSlotsTest as $slot)
                                                    <option value="{{ $slot }}"
                                                      {{ old('test_time_slot', $item->test_time_slot) === $slot ? 'selected' : '' }}
                                                    >
                                                      {{ str_replace('-', ' – ', $slot) }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            <div class="block">
                                                <h5 class="block__title">Оценка за тест</h5>
                                                <input type="text" value="{!! $item->test_score !!}" name="test_score" class="block__info test_score">
                                            </div>
                                            <div class="block">
                                                <h5 class="block__title">Статус прохождения теста</h5>
                                                <select name="test_passed" class="block__info">
                                                    <option value="Не определен" @if ($item->test_passed  === 'Не определен') selected @endif>-----</option>
                                                    <option value="Да" @if ($item->test_passed  === 'Да') selected @endif>Да</option>
                                                    <option value="Нет" @if ($item->test_passed  === 'Нет') selected @endif>Нет</option>
                                                </select>
                                            </div>
                                            <div class="block">
                                                <h5 class="block__title">Дата интервью</h5>
                                                <select name="interview_date" class="block__info form-control">
                                                  <option value="">-----</option>
                                                  @foreach($availableInterviewDates as $date)
                                                    <option value="{{ $date }}"
                                                      {{ old('interview_date', $item->interview_date) === $date ? 'selected' : '' }}>
                                                      {{ \Carbon\Carbon::parse($date)->format('d.m.Y') }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                                @if (!$item->have_ielts && $item->test_passed === 'Да' && $item->interview_date && $item->interview_time_slot)
                                                    <small style="color: green;">Назначено системой</small>
                                                @endif
                                              </div>
                                              <div class="block">
                                                <h5 class="block__title">Время интервью</h5>
                                                <select name="interview_time_slot" class="block__info form-control">
                                                  <option value="">-----</option>
                                                  @foreach($timeSlotsInterview as $slot)
                                                    <option value="{{ $slot }}"
                                                      {{ old('interview_time_slot', $item->interview_time_slot) === $slot ? 'selected' : '' }}>
                                                      {{ str_replace('-', ' – ', $slot) }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                                @if (!$item->have_ielts && $item->test_passed === 'Да' && $item->interview_date && $item->interview_time_slot)
                                                    <small style="color: green;">Назначено системой</small>
                                                @endif
                                              </div>

                                            <div class="block">
                                                <h5 class="block__title">Статус прохождения интервью</h5>
                                                <select name="interview_passed" class="block__info">
                                                    <option value="Не определен" @if ($item->interview_passed  === 'Не определен') selected @endif>-----</option>
                                                    <option value="Да" @if ($item->interview_passed  === 'Да') selected @endif>Да</option>
                                                    <option value="Нет" @if ($item->interview_passed  === 'Нет') selected @endif>Нет</option>
                                                </select>
                                            </div>
                                        @endif
                                        <div class="block">
                                            <h5 class="block__title">Email</h5>
                                            <p class="block__info">{!! $item->email !!}</p>
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Фамилия</h5>
                                            <input type="text" value="{!! $item->surname !!}" name="surname" class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Имя</h5>
                                            <input type="text" value="{!! $item->name !!}" name="name" class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Отчество</h5>
                                            <input type="text" value="{!! $item->patronymic !!}" name="patronymic"
                                                class="block__info">
                                        </div>
                                        <div class="block">
                                            <h5 class="block__title">Телефон</h5>
                                            <input type="text" value="{!! $item->phone !!}" name="phone" class="block__info">
                                        </div>
                                        <div class="block">
                                            <button type="submit" class="button">Сохранить изменения</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="blocks">
                                    <div class="block">
                                        <form action="{{ route('admin.enrollee.onlineRegForTest.edit', $item->id) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="button btn-danger"  style="background-color: #C42957;"
                                                onclick="return confirm('Удалить?')">Удалить</button>
                                        </form>
                                    </div>
                                    <div class="block">
                                        <form
                                           action="{{ route('admin.enrollee.onlineRegForTest.sendMessage', $item->id) }}"
                                           method="POST"
                                           onsubmit="return confirm('Отправить письмо студенту с датой интервью?');">
                                            @csrf
                                            <button type="submit" class="button btn-success" style="background-color: #d8c244;">
                                                Отправить сообщение
                                            </button>
                                        </form>
                                    </div>
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

    <script>
        $(document).on('input', 'input[name="test_score"]', function() {
            const score = parseFloat(this.value);
            const $container = $(this).closest('.modal').length
                ? $(this).closest('.modal')
                : $(document);
            const $selectTest = $container.find('select[name="test_passed"]');
            const $selectInterview = $container.find('select[name="interview_passed"]');

            if (isNaN(score)) {
                $selectTest.val('Не определен');
                $selectInterview.val('Не определен');
            }

            // else if (0 > score || score > 60){
            //     $select.text('Не правильный балл');
            //     $select.val('Не определен');
            else if (score >= 45) {
                $selectTest.val('Да');
                $selectInterview.val('Не определен');
            }
            else {
                $selectTest.val('Нет');
                $selectInterview.val('Нет');
            }
        });


    </script>
@endsection