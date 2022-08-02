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
                    <option value="Город Нур-Султан" @if ($region === 'Город Нур-Султан') selected @endif>Город Нур-Султан (Астана)</option>
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
                <label for="magister">Магистратура</label>
                <select name="magister">
                    <option value=""></option>
                    <option value="1" @if ($magister === '1') selected @endif>
                        Да</option>
                    <option value="0" @if ($magister === '0') selected @endif>
                        Нет</option>
                </select>
            </div>
            <div>
                <label for="reference">Справка</label>
                <select name="reference">
                    <option value=""></option>
                    <option value="1" @if ($reference === '1') selected @endif>Да</option>
                    <option value="0" @if ($reference === '0') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="resume">Резюме</label>
                <select name="resume">
                    <option value=""></option>
                    <option value="1" @if ($resume === '1') selected @endif>Да
                    </option>
                    <option value="0" @if ($resume === '0') selected @endif>
                        Нет</option>
                </select>
            </div>
            <div>
                <label for="direction">Направление</label>
                <select name="direction">
                    <option value=""></option>
                    <option value="1" @if ($direction === '1') selected @endif>Да</option>
                    <option value="0" @if ($direction === '0') selected @endif>Нет</option>
                </select>
            </div>
            <div>
                <label for="work">Имеется работа</label>
                <select name="work">
                    <option value=""></option>
                    <option value="1" @if ($work === '1') selected @endif>Да
                    </option>
                    <option value="0" @if ($work === '0') selected @endif>Нет
                    </option>
                </select>
            </div>
            <div>
                <label for="unification">Общая группа</label>
                <select name="unification">
                    <option value=""></option>
                    <option value="АТ-(МХ)" @if ($unification === 'АТ-(МХ)') selected @endif>АТ-(МХ)</option>
                    <option value="АТ-(АВ)" @if ($unification === 'АТ-(АВ)') selected @endif>АТ-(АВ)</option>
                    <option value="АТ-(ОНО)" @if ($unification === 'АТ-(ОНО)') selected @endif>АТ-(ОНО)</option>
                    <option value="АТ-АБ" @if ($unification === 'АТ-АБ') selected @endif>АТ-АБ</option>
                    <option value="АТ-ОВД" @if ($unification === 'АТ-ОВД') selected @endif>АТ-ОВД</option>
                    <option value="ОП-ЛГ" @if ($unification === 'ОП-ЛГ') selected @endif>ОП-ЛГ</option>
                    <option value="ОП" @if ($unification === 'ОП') selected @endif>ОП</option>
                    <option value="Д-ЛЭ" @if ($unification === 'Д-ЛЭ') selected @endif>Д-ЛЭ</option>
                    <option value="Д-МХ" @if ($unification === 'Д-МХ') selected @endif>Д-МХ</option>
                    <option value="Д-АВ" @if ($unification === 'Д-АВ') selected @endif>Д-АВ</option>
                    <option value="Д-ОВД" @if ($unification === 'Д-ОВД') selected @endif>Д-ОВД</option>
                    <option value="Д-АБ" @if ($unification === 'Д-АБ') selected @endif>Д-АБ</option>
                    <option value="Д-ОНО" @if ($unification === 'Д-ОНО') selected @endif>Д-ОНО</option>
                    <option value="Д-ОП" @if ($unification === 'Д-ОП') selected @endif>Д-ОП</option>
                    <option value="Д-ОП-ЛГ" @if ($unification === 'Д-ОП-ЛГ') selected @endif>Д-ОП-ЛГ</option>
                    <option value="МП-АТ" @if ($unification === 'МП-АТ') selected @endif>МП-АТ</option>
                    <option value="МП-ТУ" @if ($unification === 'МП-ТУ') selected @endif>МП-ТУ</option>
                    <option value="МНП-ТУ" @if ($unification === 'МНП-ТУ') selected @endif>МНП-ТУ</option>
                </select>
            </div>
            <div>
                <label for="process">Процесс</label>
                <select name="process">
                    <option value=""></option>
                    <option value="Армия" @if ($process === 'Армия') selected @endif>Армия</option>
                    <option value="Декрет" @if ($process === 'Декрет') selected @endif>Декрет</option>
                    <option value="Повторный курс" @if ($process === 'Повторный курс') selected @endif>Повторный курс</option>
                    <option value="Выписано направление" @if ($process === 'Выписано направление') selected @endif>Выписано направление</option>
                    <option value="Обработанный" @if ($process === 'Обработанный') selected @endif>Обработанные</option>
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
