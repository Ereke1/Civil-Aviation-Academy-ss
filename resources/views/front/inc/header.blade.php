<header>
    <div class="container">
        <div class="row">
            <nav id="navMenu" class="navbar navbar-expand-lg">
                <div id="my_image" class="logo">
                    <a href="/">
                        <img src="/assets/images/logo_agakaz_b.png" />
                    </a>
                </div>
                <div>
                <div class="lang_choose float-left">
                    <select onchange="location = this.value;">
                        @foreach ($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                        <option selected>{{ $locale_name }}</option>
                        @else
                        <option value="/language/{{ $available_locale }}">
                                {{ $locale_name }}
                            </option>
                        @endif
                    @endforeach
                    </select>
                </div>
                <div class="sitenavigation float-right">
                <span class="menu-icon">
                        <a href="#" class="menu example5"><span></span></a>
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </span>
                    <ul>
                        @foreach ($tree as $item)
                            @if ($item->children->count() > 0)
                                <li class="nav-dropdown">
                                    <a href="{!! $item->link !!}">
                                        @if (Config::get('app.locale') == 'ru')
                                            {!! $item->title_ru !!}
                                        @elseif ( Config::get('app.locale') == 'kk' )
                                            {!! $item->title_kk !!}
                                        @elseif ( Config::get('app.locale') == 'en' )
                                            {!! $item->title_en !!}
                                        @endif
                                    </a>
                                    <ul class>
                                        @foreach ($item->children as $child)
                                            @if ($child->children->count() > 0)
                                                <li class="nav-dropdown">
                                                    @if (Request::root() . '/' . $child->link === Request::fullUrl())
                                                        <a href="{!! route('front.pages', $child->link) !!}" class="active">
                                                            @if (Config::get('app.locale') == 'ru')
                                                                {!! $child->title_ru !!}
                                                            @elseif ( Config::get('app.locale') == 'kk' )
                                                                {!! $child->title_kk !!}
                                                            @elseif ( Config::get('app.locale') == 'en' )
                                                                {!! $child->title_en !!}
                                                            @endif
                                                        </a>
                                                    @else
                                                        <a href="{!! route('front.pages', $child->link) !!}">
                                                            @if (Config::get('app.locale') == 'ru')
                                                                {!! $child->title_ru !!}
                                                            @elseif ( Config::get('app.locale') == 'kk' )
                                                                {!! $child->title_kk !!}
                                                            @elseif ( Config::get('app.locale') == 'en' )
                                                                {!! $child->title_en !!}
                                                            @endif
                                                        </a>
                                                    @endif
                                                    <ul>
                                                        @foreach ($child->children as $chi)
                                                            @if ($chi->children->count() > 0)
                                                                <li class="nav-dropdown">
                                                                    <a href="{!! $chi->link !!}">
                                                                        @if (Config::get('app.locale') == 'ru')
                                                                            {!! $chi->title_ru !!}
                                                                        @elseif ( Config::get('app.locale') == 'kk'
                                                                            )
                                                                            {!! $chi->title_kk !!}
                                                                        @elseif ( Config::get('app.locale') == 'en'
                                                                            )
                                                                            {!! $chi->title_en !!}
                                                                        @endif
                                                                    </a>
                                                                    <ul>
                                                                        @foreach ($chi->children as $ch)
                                                                            <li>
                                                                                <a href="{!! $ch->link !!}">
                                                                                    @if (Config::get('app.locale') == 'ru')
                                                                                        {!! $ch->title_ru !!}
                                                                                    @elseif (
                                                                                        Config::get('app.locale') ==
                                                                                        'kk' )
                                                                                        {!! $ch->title_kk !!}
                                                                                    @elseif (
                                                                                        Config::get('app.locale') ==
                                                                                        'en' )
                                                                                        {!! $ch->title_en !!}
                                                                                    @endif
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{!! $chi->link !!}">
                                                                        @if (Config::get('app.locale') == 'ru')
                                                                            {!! $chi->title_ru !!}
                                                                        @elseif ( Config::get('app.locale') == 'kk'
                                                                            )
                                                                            {!! $chi->title_kk !!}
                                                                        @elseif ( Config::get('app.locale') == 'en'
                                                                            )
                                                                            {!! $chi->title_en !!}
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{!! $child->link !!}">
                                                        @if (Config::get('app.locale') == 'ru')
                                                            {!! $child->title_ru !!}
                                                        @elseif ( Config::get('app.locale') == 'kk' )
                                                            {!! $child->title_kk !!}
                                                        @elseif ( Config::get('app.locale') == 'en' )
                                                            {!! $child->title_en !!}
                                                        @endif
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="/{!! $item->link !!}">
                                        @if (Config::get('app.locale') == 'ru')
                                            {!! $item->title_ru !!}
                                        @elseif ( Config::get('app.locale') == 'kk' )
                                            {!! $item->title_kk !!}
                                        @elseif ( Config::get('app.locale') == 'en' )
                                            {!! $item->title_en !!}
                                        @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            </nav>
        </div>
    </div>
</header>
