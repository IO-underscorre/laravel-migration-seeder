@php
    $main_nav_links = config('navmenues.main_nav_links');
@endphp

<nav class="topbar">
    <ul>
        <li class="logo">
            <img src="{!! Vite::asset('resources/images/logo.png') !!}" alt="">
        </li>

        <li>
            <menu class="links">
                @foreach ($main_nav_links as $link)
                    <li class="{!! Route::currentRouteName() === $link['route_name'] ? 'active' : null !!}">
                        <a href="{!! route($link['route_name']) !!}">
                            {{ $link['menu_text'] }}
                        </a>
                    </li>
                @endforeach
            </menu>
        </li>
    </ul>
</nav>
