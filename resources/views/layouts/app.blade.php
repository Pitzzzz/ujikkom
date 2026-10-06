<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('common.meta_description') }}">
    <title>@yield('title', __('common.brand'))</title>

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
            United States
            <span class="side-rail__diamond">◆</span>
            Michigan
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
            <a href="{{ route('home') }}" class="site-logo">
                <span>{{ __('common.brand') }}</span>
                <span class="site-logo__line" aria-hidden="true"></span>
            </a>

            <nav class="site-nav label-nav" aria-label="{{ __('nav.main') }}">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">{{ __('nav.home') }}</a>
                <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'is-active' : '' }}">{{ __('nav.about') }}</a>
                <a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'is-active' : '' }}">{{ __('nav.gallery') }}</a>
                <a href="{{ route('artikel') }}" class="{{ request()->routeIs('artikel*') ? 'is-active' : '' }}">{{ __('nav.articles') }}</a>
                <a href="{{ route('produk') }}" class="{{ request()->routeIs('produk') ? 'is-active' : '' }}">{{ __('nav.products') }}</a>
                <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'is-active' : '' }}">{{ __('nav.contact') }}</a>
            </nav>

            <div class="site-header__actions">
                <span class="site-header__line" aria-hidden="true"></span>
                <a href="https://maps.app.goo.gl/HWkotfACwM5eNyTG8" class="icon-btn" aria-label="{{ __('nav.location') }}" title="{{ __('nav.location') }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z"/>
                        <circle cx="12" cy="10" r="2.5"/>
                    </svg>
                </a>
                <a href="tel:+12312767200" class="icon-btn" aria-label="{{ __('nav.phone') }}" title="{{ __('nav.phone') }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2.1Z"/>
                    </svg>
                </a>
                <a href="https://wa.me/+12312767200" class="icon-btn" aria-label="{{ __('nav.whatsapp') }}" title="{{ __('nav.whatsapp') }}" target="_blank" rel="noopener noreferrer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M20.5 11.5A8.5 8.5 0 0 1 7.6 18.7L4 20l1.4-3.5A8.5 8.5 0 1 1 20.5 11.5Z"/>
                        <path d="M9.2 9.8c.3-.5.5-.5.8-.5h.6c.2 0 .4 0 .5.4l.8 2c.1.2 0 .4-.1.5l-.4.5c-.1.1-.1.3 0 .4.4.7 1.1 1.4 1.9 1.9.1.1.3.1.4 0l.5-.4c.2-.1.3-.2.5-.1l2 .8c.3.1.4.3.4.5v.6c0 .3 0 .5-.5.8-.4.3-1 .4-1.6.3A8 8 0 0 1 8.9 11c-.1-.6 0-1.2.3-1.6Z"/>
                    </svg>
                </a>
            </div>

            <button type="button" class="icon-btn menu-toggle" id="menu-toggle" aria-label="{{ __('nav.open_menu') }}" aria-expanded="false" aria-controls="mobile-menu">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </div>
    </header>

    <div class="mobile-menu" id="mobile-menu" hidden>
        <button type="button" class="icon-btn mobile-menu__close" id="menu-close" aria-label="{{ __('nav.close_menu') }}">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                <path d="M6 6l12 12M18 6 6 18"/>
            </svg>
        </button>
        <nav class="label-nav" aria-label="{{ __('nav.mobile') }}">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <a href="{{ route('tentang') }}">{{ __('nav.about') }}</a>
            <a href="{{ route('galeri') }}">{{ __('nav.gallery') }}</a>
            <a href="{{ route('artikel') }}">{{ __('nav.articles') }}</a>
            <a href="{{ route('produk') }}">{{ __('nav.products') }}</a>
            <a href="{{ route('kontak') }}">{{ __('nav.contact') }}</a>
        </nav>
    </div>

    <x-language-switcher />

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container-site">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <p class="site-logo mb-4">{{ __('common.brand') }}</p>
                    <p class="text-sm text-[var(--text-muted)] leading-relaxed">
                        {{ __('common.tagline') }}
                    </p>
                </div>
                <div>
                    <p class="footer-title">{{ __('common.quick_links') }}</p>
                    <ul class="flex flex-col gap-3 text-sm text-[var(--text-muted)]">
                        <li><a href="{{ route('tentang') }}">{{ __('nav.about') }}</a></li>
                        <li><a href="{{ route('galeri') }}">{{ __('nav.gallery') }}</a></li>
                        <li><a href="{{ route('artikel') }}">{{ __('nav.articles') }}</a></li>
                        <li><a href="{{ route('produk') }}">{{ __('nav.products') }}</a></li>
                        <li><a href="{{ route('kontak') }}">{{ __('nav.contact') }}</a></li>
                    </ul>
                </div>
                <div>
                    <p class="footer-title">{{ __('common.contact') }}</p>
                    <ul class="flex flex-col gap-3 text-sm text-[var(--text-muted)]">
                        <li>4000 4000 J. Maddy Pkwy, Interlochen, MI 49643, USA</li>
                        <li><a href="tel:+622518901234">(0251) 890-1234</a></li>
                        <li><a href="mailto:info@harapanmulia.sch.id">info@harapanmulia.sch.id</a></li>
                        <li>{{ __('common.hours') }}</li>
                    </ul>
                </div>
                <div>
                    <p class="footer-title">{{ __('common.social') }}</p>
                    <ul class="flex flex-col gap-3 text-sm text-[var(--text-muted)]">
                        <li><a href="#" rel="noopener">Instagram</a></li>
                        <li><a href="#" rel="noopener">Facebook</a></li>
                        <li><a href="#" rel="noopener">YouTube</a></li>
                        <li><a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">{{ __('nav.whatsapp') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="site-footer__bottom">
                {{ __('common.copyright') }}
            </div>
        </div>
    </footer>

    <div class="modal" id="gallery-modal" role="dialog" aria-modal="true" aria-labelledby="gallery-modal-title" hidden>
        <div class="modal__dialog" role="document">
            <button type="button" class="modal__close" data-modal-close aria-label="{{ __('common.close') }}">✕</button>
            <div class="modal__media">
                <img id="gallery-modal-image" src="" alt="">
            </div>
            <div class="modal__body">
                <p class="label-nav text-[var(--accent-soft)] mb-2" id="gallery-modal-category"></p>
                <h2 class="heading-md" id="gallery-modal-title"></h2>
                <p class="mt-3 text-[var(--text-secondary)]" id="gallery-modal-desc"></p>
                <p class="modal__meta mt-3" id="gallery-modal-date"></p>
                <div class="modal__nav">
                    <button type="button" class="btn btn-ghost" id="gallery-prev" aria-label="{{ __('common.prev') }}">{{ __('common.prev') }}</button>
                    <span class="modal__meta" id="gallery-counter">1 / 1</span>
                    <button type="button" class="btn btn-ghost" id="gallery-next" aria-label="{{ __('common.next') }}">{{ __('common.next') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="product-modal" role="dialog" aria-modal="true" aria-labelledby="product-modal-title" hidden>
        <div class="modal__dialog" role="document">
            <button type="button" class="modal__close" data-modal-close aria-label="{{ __('common.close') }}">✕</button>
            <div class="product-modal__grid p-6">
                <div class="overflow-hidden rounded-[4px]">
                    <img id="product-modal-image" src="" alt="" class="w-full aspect-square object-cover">
                </div>
                <div class="flex flex-col">
                    <p class="label-nav text-[var(--accent-soft)] mb-2" id="product-modal-category"></p>
                    <h2 class="heading-md" id="product-modal-title"></h2>
                    <p class="price mt-4" id="product-modal-price"></p>
                    <p class="mt-4 text-[var(--text-secondary)] flex-1" id="product-modal-desc"></p>
                    <div id="product-modal-variants" class="mt-4 flex flex-wrap gap-2"></div>
                    <div class="flex flex-wrap gap-3 mt-8">
                        <a href="https://wa.me/6281234567890" class="btn btn-primary" id="product-wa" target="_blank" rel="noopener noreferrer">{{ __('common.order_wa') }}</a>
                        <button type="button" class="btn btn-ghost" data-modal-close>{{ __('common.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast" id="toast" hidden role="status" aria-live="polite"></div>

    @stack('scripts')
</body>
</html>
