<h1>Новая заявка на консультацию с сайта</h1>

<p><strong>Номер заявки:</strong> #{{ $chatMessage->id }}</p>
<p><strong>Имя:</strong> {{ $chatMessage->name ?: 'Не указано' }}</p>
<p><strong>{{ ucfirst($chatMessage->contact_type) }}:</strong> {{ $chatMessage->contact_value }}</p>
<p><strong>Сообщение:</strong></p>
<p>{!! nl2br(e($chatMessage->message)) !!}</p>
<p><strong>Язык обращения:</strong> {{ strtoupper($chatMessage->locale) }}</p>
<p><strong>Дата и время:</strong> {{ $chatMessage->created_at->format('d.m.Y H:i:s') }}</p>
<p>
    <a href="{{ route('admin.chat-messages.show', $chatMessage->id) }}">Открыть заявку в административной панели</a>
</p>
