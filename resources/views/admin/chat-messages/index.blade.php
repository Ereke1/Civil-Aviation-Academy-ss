@extends('admin.layouts.app')

@php
    $parrentCat = '';
    $active_menu = 'Чат-бот';
@endphp

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Обращения из чата</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Сообщение</th>
                            <th>Способ связи</th>
                            <th>Статус</th>
                            <th>Дата</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name ?? '—' }}</td>
                                <td>{{ Str::limit($message->message, 100) }}</td>
                                <td>{{ $message->contact_type === 'email' ? 'Email' : 'Телефон' }}: {{ $message->contact_value }}</td>
                                <td>
                                    <span class="badge badge-info">{{ $message->status }}</span>
                                </td>
                                <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.chat-messages.show', $message->id) }}" class="btn btn-sm btn-outline-primary">Подробнее</a>
                                    <form action="{{ route('admin.chat-messages.destroy', $message->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger ml-2" onclick="return confirm('Удалить обращение?')">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">Нет обращений.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if ($messages->hasPages())
            <div class="card-footer bg-white">
                {{ $messages->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
