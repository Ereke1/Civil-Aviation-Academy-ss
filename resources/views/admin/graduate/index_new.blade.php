@extends('admin.layouts.app')
@php $parrentCat  = 'Выпускники' @endphp
@php $active_menu  = 'Все' @endphp
@section('content')
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <h1>Все выпускники</h1>
    <h2>Фильтр и сортировка</h2>
    <div class="filter">
        <form action="{{ route('admin.graduate.graduates.index_new') }}">
            @csrf
            <div>
                <label for="form_study">Форма обучения</label>
                <select name="form_study">
                    <option value=""></option>
                    <option value="грант" @if ($form_study === 'грант') selected @endif>Грант</option>
                    <option value="платное" @if ($form_study === 'платное') selected @endif>Платное</option>
                </select>
            </div>
            <div>
                <label for="region">Регион</label>
                <select name="region">
                    <option value=""></option>
                    <option value="Город Алматы" @if ($region === 'Город Алматы') selected @endif>Город Алматы</option>
                    <option value="Город Астана" @if ($region === 'Город Астана') selected @endif>Город Астана</option>
                    <option value="Город Шымкент" @if ($region === 'Город Шымкент') selected @endif>Город Шымкент</option>
                    <option value="Акмолинская область" @if ($region === 'Акмолинская область') selected @endif>Акмолинская область</option>
                    <option value="Актюбинская область" @if ($region === 'Актюбинская область') selected @endif>Актюбинская область</option>
                    <option value="Алматинская область" @if ($region === 'Алматинская область') selected @endif>Алматинская область</option>
                    <option value="Атырауская область" @if ($region === 'Атырауская область') selected @endif>Атырауская область</option>
                    <option value="Восточно-Казахстанская область" @if ($region === 'Восточно-Казахстанская область') selected @endif>
                        Восточно-Казахстанская область</option>
                    <option value="Жамбыльская область" @if ($region === 'Жамбыльская обл.') selected @endif>Жамбыльская область</option>
                    <option value="Западно-Казахстанская область" @if ($region === 'Западно-Казахстанская область') selected @endif>
                        Западно-Казахстанская область</option>
                    <option value="Карагандинская область" @if ($region === 'Карагандинская область') selected @endif>Карагандинская область</option>
                    <option value="Костанайская область" @if ($region === 'Костанайская область') selected @endif>Костанайская область</option>
                    <option value="Кызылординская область" @if ($region === 'Кызылординская область') selected @endif>Кызылординская область</option>
                    <option value="Мангистауская область" @if ($region === 'Мангистауская область') selected @endif>Мангистауская область</option>
                    <option value="Павлодарская область" @if ($region === 'Павлодарская область') selected @endif>Павлодарская область</option>
                    <option value="Северо-Казахстанская область" @if ($region === 'Северо-Казахстанская область') selected @endif>
                        Северо-Казахстанская область</option>
                    <option value="Туркестанская область" @if ($region === 'Туркестанская область') selected @endif>Туркестанская область</option>
                </select>
            </div>
            <div>
                <label for="type">Академическая степень</label>
                <select name="type">
                    <option value=""></option>
                    <option value="1" @if ($type === '1') selected @endif>
                        Бакалавриат</option>
                    <option value="2" @if ($type === '2') selected @endif>
                        Магистратура</option>
                    <option value="3" @if ($type === '3') selected @endif>
                        Докторантура</option>
                </select>
            </div>
            {{-- <div>
                <label for="reference">Справка</label>
                <select name="reference">
                    <option value=""></option>
                    <option value="1" @if ($reference === '1') selected @endif>Да</option>
                    <option value="0" @if ($reference === '0') selected @endif>Нет</option>
                </select>
            </div> --}}
            <div>
                <label for="employment_type">Вид трудоустройства</label>
                <select name="employment_type">
                    <option value=""></option>
                    <option value="Трудоустроен, по специальности" @if ($employment_type === 'Трудоустроен, по специальности') selected @endif>Трудоустроен, по специальности</option>
                    <option value="Трудоустроен, в авиации" @if ($employment_type === 'Трудоустроен, в авиации') selected @endif>Трудоустроен, в авиации</option>
                    <option value="Трудоустроен, не в авиации" @if ($employment_type === 'Трудоустроен, не в авиации') selected @endif>Трудоустроен, не в авиации</option>
                </select>
            </div>
            <div>
                <label for="have_portfolio">Портфолио</label>
                <select name="have_portfolio">
                    <option value=""></option>
                    <option value="Отсутствует" @if ($have_portfolio === 'Отсутствует') selected @endif>Нет
                    </option>
                    <option value="Имеется" @if ($have_portfolio === 'Имеется') selected @endif>
                        Да</option>
                </select>
            </div>
            {{-- <div>
                <label for="direction">Направление</label>
                <select name="direction">
                    <option value=""></option>
                    <option value="1" @if ($direction === '1') selected @endif>Да</option>
                    <option value="0" @if ($direction === '0') selected @endif>Нет</option>
                </select>
            </div> --}}
            {{-- <div>
                <label for="work">Имеется работа</label>
                <select name="work">
                    <option value=""></option>
                    <option value="1" @if ($work === '1') selected @endif>Да
                    </option>
                    <option value="0" @if ($work === '0') selected @endif>Нет
                    </option>
                </select>
            </div> --}}
            <div>
                <label for="graduate_status">Статус выпускника</label>
                <select name="graduate_status">
                    <option value=""></option>
                    <option value="Трудоустроен" @if ($graduate_status === 'Трудоустроен') selected @endif>Трудоустроен</option>
                    <option value="Призван в ряды вооруженных сил" @if ($graduate_status === 'Призван в ряды вооруженных сил') selected @endif>Призван в ряды вооруженных сил</option>
                    <option value="Отпуск по уходу за ребенком курс" @if ($graduate_status === 'Отпуск по уходу за ребенком курс') selected @endif>Отпуск по уходу за ребенком курс</option>
                    <option value="Повторный курс обучения" @if ($graduate_status === 'Повторный курс обучения') selected @endif>Повторный курс обучения</option>
                    <option value="Выдано направление" @if ($graduate_status === 'Выдано направление') selected @endif>Выдано направление</option>
                    <option value="Нет обратной связи" @if ($graduate_status === 'Нет обратной связи') selected @endif>Нет обратной связи</option>
                </select>
            </div>
            <div>
                <label for="grad_year">Год выпуска</label>
                <select name="grad_year">
                    <option value=""></option>
                    <option value="2022" @if ($grad_year === '2022') selected @endif>2022</option>
                </select>
            </div>
            <div>
                <button>Применить</button>
            </div>
        </form>
    </div>
    <br /><br />
    <h2>Поиск</h2>
    <div class="filter">
        <form action="{{ route('admin.graduate.graduates.index_new') }}" method="GET">
            @csrf
            <div>
                <label for="surname">Поиск по фамилии</label>
                <input type="text" name="surname">
            </div>
            <div>
                <label for="iin">ИИН</label>
                <input type="text" name="iin">
            </div>
            <div>
                <button>Найти</button>
            </div>
            <div>
                <a href="{{ route('admin.graduate.graduates.index_new') }}"><button>Сбросить фильтры</button></a>
            </div>
        </form>
    </div>
    <h3>Всего выпускников: {!! $countData !!}</h3>
    @include('admin.graduate.table_new')
@endsection
