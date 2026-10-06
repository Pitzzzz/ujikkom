<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('superadmin.panel') }} — {{ __('common.brand') }}">
    <title>@yield('title', __('superadmin.panel')) — {{ __('common.brand') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <script>window.__i18n = @json(__('js'));</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <aside class="side-rail side-rail--left" aria-hidden="true">
        <span class="side-rail__line"></span>
        <span class="side-rail__text">
            Super
            <span class="side-rail__diamond">◆</span>
            Admin
        </span>
        <span class="side-rail__line"></span>
    </aside>

    <aside class="side-rail side-rail--right" aria-hidden="true">
        <span class="side-rail__line"></span>
        <span class="side-rail__text">
            Interlochen
            <span class="side-rail__diamond">◆</span>
            Arts
            <span class="side-rail__diamond">◆</span>
            Academy
        </span>
        <span class="side-rail__line"></span>
    </aside>

    <header class="site-header" id="site-header">
        <div class="site-header__inner">
            <a href="{{ auth()->check() && auth()->user()->isSuperAdmin() ? route('superadmin.dashboard') : route('superadmin.login') }}" class="site-logo">
                <span>{{ __('superadmin.panel') }}</span>
                <span class="site-logo__line" aria-hidden="true"></span>
            </a>

            @auth
                @if(auth()->user()->isSuperAdmin())
                    <nav class="site-nav label-nav" aria-label="{{ __('superadmin.panel') }}">
                        <a href="{{ route('superadmin.dashboard') }}" class="{{ request()->routeIs('superadmin.dashboard') ? 'is-active' : '' }}">{{ __('superadmin.dashboard') }}</a>
                        <a href="{{ route('superadmin.admins.index') }}" class="{{ request()->routeIs('superadmin.admins.*') ? 'is-active' : '' }}">{{ __('superadmin.manage_admins') }}</a>
                    </nav>

                    <div class="site-header__actions">
                        <span class="site-header__line" aria-hidden="true"></span>
                        <span class="sa-user-label">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('superadmin.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-ghost sa-logout-btn">{{ __('superadmin.logout') }}</button>
                        </form>
                    </div>

                    <button type="button" class="icon-btn menu-toggle" id="menu-toggle" aria-label="{{ __('nav.open_menu') }}" aria-expanded="false" aria-controls="mobile-menu">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path d="M4 7h16M4 12h16M4 17h16"/>
                        </svg>
                    </button>
                @endif
            @endauth

        </div>
    </header>

    <x-language-switcher />

    @auth
        @if(auth()->user()->isSuperAdmin())
            <div class="mobile-menu" id="mobile-menu" hidden>
                <button type="button" class="icon-btn mobile-menu__close" id="menu-close" aria-label="{{ __('nav.close_menu') }}">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M6 6l12 12M18 6 6 18"/>
                    </svg>
                </button>
                <nav class="label-nav" aria-label="{{ __('nav.mobile') }}">
                    <a href="{{ route('superadmin.dashboard') }}">{{ __('superadmin.dashboard') }}</a>
                    <a href="{{ route('superadmin.admins.index') }}">{{ __('superadmin.manage_admins') }}</a>
                    <form method="POST" action="{{ route('superadmin.logout') }}" class="mt-6">
                        @csrf
                        <button type="submit" class="btn btn-ghost">{{ __('superadmin.logout') }}</button>
                    </form>
                </nav>
            </div>
        @endif
    @endauth

    <main>
        @if (session('success'))
            <div class="container-site sa-flash reveal" role="status">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container-site">
            <div class="site-footer__bottom" style="border-top: none; padding-top: 0;">
                {{ __('superadmin.footer') }}
            </div>
        </div>
    </footer>
</body>
</html>
