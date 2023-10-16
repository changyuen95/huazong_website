<nav class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }}
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}">
    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('admin.partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Configured left links --}}

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Navbar right links --}}
    <ul class="navbar-nav ml-auto">
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}

        {{-- User menu link --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                @include('admin.partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('admin.partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- Right sidebar toggler link --}}
        @if(config('adminlte.right_sidebar'))
            @include('admin.partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>

</nav>
