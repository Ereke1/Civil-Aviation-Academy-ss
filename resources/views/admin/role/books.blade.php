@php
use App\Models\User;

$worker_permission = User::find(Auth::user()->id)->workersPermissions;
$worker_permission = unserialize($worker_permission->permission);
@endphp
<div class='dropdown'>
    <div class='parrent title @if ($parrentCat === 'Управление книгами') active @endif'>
        <i class="fa fa-book"></i>
        Книги
        <i class="fa fa-angle-right @if ($parrentCat === 'Управление книгами') rotate-90 @endif'"></i>
    </div>
    <div class='menu @if ($parrentCat === 'Управление книгами') active @else hide @endif'>
        @if (isset($worker_permission->books->read) && $worker_permission->books->read == true)
            <a href="{{ route('admin.website.books.index') }}" @if ($active_menu === 'Новые книги') class="active" @endif>
                Новые книги
            </a>
        @endif
        @if (isset($worker_permission->books->read) && $worker_permission->books->read == true)
            <a href="{{ route('admin.website.book_collection.index') }}"
                @if ($active_menu === 'Подборка книг') class="active" @endif>
                Подборка книг
            </a>
        @endif
    </div>
</div>
