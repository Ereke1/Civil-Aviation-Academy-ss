@extends('admin.layouts.app')

@php
    $parrentCat = '';
    $active_menu = 'Чат-бот';
@endphp

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Детали обращения</h4>
            <a href="{{ route('admin.chat-messages.index') }}" class="btn btn-outline-secondary btn-sm">Назад</a>
        </div>
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3">Имя</dt>
                <dd class="col-sm-9">{{ $message->name ?? '—' }}</dd>

                <dt class="col-sm-3">Сообщение</dt>
                <dd class="col-sm-9">{{ $message->message }}</dd>

                <dt class="col-sm-3">Способ связи</dt>
                <dd class="col-sm-9">{{ $message->contact_type }}: {{ $message->contact_value }}</dd>

                <dt class="col-sm-3">Согласие</dt>
                <dd class="col-sm-9">{{ $message->consent ? 'Да' : 'Нет' }}</dd>

                <dt class="col-sm-3">Язык</dt>
                <dd class="col-sm-9">{{ strtoupper($message->locale) }}</dd>

                <dt class="col-sm-3">Дата</dt>
                <dd class="col-sm-9">{{ $message->created_at->format('d.m.Y H:i') }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection
