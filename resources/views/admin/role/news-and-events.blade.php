@php
use App\Models\User;

$worker_permission = User::find(Auth::user()->id)->workersPermissions;
$worker_permission = unserialize($worker_permission->permission);
@endphp
<div class='dropdown'>
    <div class='parrent title @if ($parrentCat === 'Управление новостями и событиями') active @endif'>
        <i class="far fa-newspaper"></i>
        Новости и события
        <i class="fa fa-angle-right @if ($parrentCat === 'Управление новостями и событиями') rotate-90 @endif'"></i>
    </div>
    <div class='menu @if ($parrentCat === 'Управление новостями и событиями') active @else hide @endif'>
        @if (isset($worker_permission->news->read) && $worker_permission->news->read == true)
            <a href="{{ route('admin.website.news.index') }}" @if ($active_menu === 'Новости') class="active" @endif>
                Новости
            </a>
        @endif
        @if (isset($worker_permission->events->read) && $worker_permission->events->read == true)
            <a href="{{ route('admin.website.events.index') }}"
                @if ($active_menu === 'События') class="active" @endif>
                События
            </a>
        @endif
    </div>
</div>
