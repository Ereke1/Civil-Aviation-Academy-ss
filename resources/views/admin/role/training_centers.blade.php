<div class='dropdown'>
    <div class='parrent title @if ($parrentCat === 'Управление АУЦ') active @endif'>
        <i class="fas fa-users"></i>
        Управление АУЦ
        <i class="fa fa-angle-right @if ($parrentCat === 'Управление АУЦ') rotate-90 @endif'"></i>
    </div>
    <div class='menu @if ($parrentCat === 'Управление АУЦ') active @else hide @endif'>
        <a href="{{ route('admin.website.training_courses.index') }}" @if ($active_menu === 'Курсы АУЦ') class="active" @endif>
            Курсы АУЦ
        </a>
    </div>
</div>
