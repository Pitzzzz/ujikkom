@php
    $current = app()->getLocale();
@endphp
<nav class="lang-switch" aria-label="{{ __('common.language') }}">
    <a
        href="{{ route('locale.switch', 'id') }}"
        class="lang-switch__link {{ $current === 'id' ? 'is-active' : '' }}"
        hreflang="id"
        lang="id"
        @if($current === 'id') aria-current="true" @endif
    >ID</a>
    <span class="lang-switch__sep" aria-hidden="true">/</span>
    <a
        href="{{ route('locale.switch', 'en') }}"
        class="lang-switch__link {{ $current === 'en' ? 'is-active' : '' }}"
        hreflang="en"
        lang="en"
        @if($current === 'en') aria-current="true" @endif
    >EN</a>
</nav>
