<div class="right-sidebar col-md-10">
    <div class="right-sidebar__top-line">
        <h3>
            Добро пожаловать
            {!! Auth::user()->family !!} {!! Auth::user()->name !!}
            @if (isset(Auth::user()->patronimyc))
                {!! Auth::user()->patronimyc !!}
            @endif
        </h3>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Выйти') }}
        </a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
            @csrf
        </form>
    </div>
    <main>
        @yield('content')
    </main>
</div>
