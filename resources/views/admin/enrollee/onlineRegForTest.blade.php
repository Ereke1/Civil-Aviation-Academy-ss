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
            <div>
                <label for="test_date">Дата теста</label>
                <input type="date" name="test_date"
                 @if ($test_date != '') value="{!! $test_date !!}" @endif>
            </div>
            <div>
                <button>Применить</button>
            </div>
        </form>
    </div>

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
                    @if($item->have_ielts === 0 && $item->test_passed === "Нет")
                        <td>{!! date('d.m.Y', strtotime($item->test_date)) !!}</td>
                        <td></td>
                    @elseif ($item->test_passed === "Да")
                        <td>{!! date('d.m.Y', strtotime($item->test_date)) !!}</td>
                        <td>{!! date('d.m.Y', strtotime($item->interview_date)) !!}</td>
                    @else
                        <td></td>
                        <td>{!! date('d.m.Y', strtotime($item->interview_date)) !!}</td>
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
                                <form action="{{ route('admin.enrollee.onlineRegForTest.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="blocks">
                                        <div class="block">
                                            <h5 class="block__title">Дата подачи</h5>
                                            <p class="block__info">{!! date('d.m.Y H:i', strtotime($item->created_at)) !!}</p>
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
                                                <p class="block__info">
                                                    <a href="{!! $item->ielts_file !!}" target="_blank">IELTS/TOEFL</a>
                                                </p>
                                            </div>
                                            <div class="block">
                                                <h5 class="block__title">Дата интервью</h5>
                                                <select name="interview_date" class="block__info form-control" required>
                                                    <option value="">-----</option>
                                                    @foreach($availableInterviewDates as $date)
                                                        <option
                                                            value="{{ $date }}"
                                                            @if(old('interview_date', $item->interview_date) == $date) selected @endif
                                                        >
                                                            {{ date('d.m.Y', strtotime($date)) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Выбор времени интервью --}}
                                            <div class="block">
                                                <h5 class="block__title">Время интервью</h5>
                                                <select name="interview_time_slot" class="block__info form-control" required>
                                                    <option value="">-----</option>
                                                    @foreach(($streamsInterview[ old('interview_date', $item->interview_date) ] ?? []) as $slot)
                                                        <option
                                                            value="{{ $slot }}"
                                                            @if(old('interview_time_slot', $item->interview_time_slot) == $slot) selected @endif
                                                        >
                                                            {{ str_replace('-', ' – ', $slot) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="block">
                                                <h5 class="block__title">Статус прохождения интервью</h5>
                                                <select name="interview_passed" class="block__info">
                                                    <option value="null" @if ($item->interview_passed  === null) selected @endif>
                                                        -----</option>
                                                        <option value="Да" @if ($item->interview_passed  === 'Да') selected @endif>Да</option>
                                                        <option value="Нет" @if ($item->interview_passed  === 'Нет') selected @endif>Нет</option>
                                                </select>
                                            </div>
                                        @else
                                            {{-- <div class="block">
                                                <h5 class="block__title">Дата теста</h5>
                                                {{-- <p class="block__info">{!! date('d.m.Y', strtotime($item->test_date)) !!}</p>
                                                <select name="test_date" class="block__info">
                                                    <option value="NULL" @if ($item->test_date  === 'NULL') selected @endif>-----</option>
                                                    <option value="2025-07-07" @if ($item->test_date  === '2025-07-07') selected @endif>2025-07-07</option>
                                                    <option value="2025-07-08" @if ($item->test_date  === '2025-07-08') selected @endif>2025-07-08</option>
                                                    <option value="2025-07-10" @if ($item->test_date  === '2025-07-10') selected @endif>2025-07-10</option>
                                                    <option value="2025-07-11" @if ($item->test_date  === '2025-07-11') selected @endif>2025-07-11</option>
                                                    <option value="2025-07-15" @if ($item->test_date  === '2025-07-15') selected @endif>2025-07-15</option>
                                                    <option value="2025-07-16" @if ($item->test_date  === '2025-07-16') selected @endif>2025-07-16</option>
                                                </select>
                                            </div> --}}
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
                $select.val('Не определен')
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