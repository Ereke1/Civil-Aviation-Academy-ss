<div class='dropdown'>
    <div class='parrent title @if ($parrentCat === 'Управление работниками') active @endif'>
        <i class="fas fa-users"></i>
        Работники
        <i class="fa fa-angle-right @if ($parrentCat === 'Управление работниками') rotate-90 @endif'"></i>
    </div>
    <div class='menu @if ($parrentCat === 'Управление работниками') active @else hide @endif'>
        <a href="{{ route('admin.workers.index') }}" @if ($active_menu === 'Работники') class="active" @endif>
            Информация о работниках
        </a>
        <a href="{{ route('admin.workers-permissions.index') }}" @if ($active_menu === 'Доступы работников') class="active" @endif>
            Доступы работников
        </a>
        <a href="{{ route('admin.workers.create') }}" @if ($active_menu === 'Добавить работника') class="active" @endif>
            Добавить работника
        </a>
    </div>
</div>
