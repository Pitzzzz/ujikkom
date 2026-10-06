@extends('layouts.app')

@section('title', __('home.title'))

@section('content')
{{-- =========================================================
     Hero — design.md §5.1
     ========================================================= --}}
<section class="hero container-site" id="beranda">
    <h1 class="heading-xl reveal">
        {{ __('home.hero_title_1') }}<br>{{ __('home.hero_title_2') }}
    </h1>
    <p class="hero__subtitle reveal">
        {{ __('home.hero_subtitle') }}
    </p>
    <div class="hero__cta reveal">
        <a href="{{ route('kontak') }}" class="btn btn-primary">{{ __('common.register_now') }}</a>
    </div>

    {{-- Desktop 5-panel collage --}}
    <div class="collage" id="hero-collage" aria-hidden="true">
        <div class="collage__panel">
            <img src="{{ asset('images/hero1.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero2.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero3.jfif') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero4.jfif') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero5.jfif') }}" alt="" loading="eager">
        </div>
    </div>

    {{-- Mobile carousel collage --}}
    <div class="collage-mobile" aria-label="{{ __('home.gallery_aria') }}">
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
    </div>
</section>


{{-- =========================================================
     Angka — tipografi raksasa, bukan strip statistik
     ========================================================= --}}
<section class="ledger" id="sekilas">
    <div class="ledger__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">{{ __('home.since') }}</p>
        <h2 class="ledger__title">{{ __('home.ledger_title_1') }}<br>{{ __('home.ledger_title_2') }}</h2>
    </div>

    <ol class="ledger__list">
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="579">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">{{ __('home.stat_students') }}</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="201">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">{{ __('home.stat_staff') }}</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="12000">+</span>
            <span class="ledger__meta">
                <span class="ledger__label">{{ __('home.stat_achievements') }}</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="1962">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">{{ __('home.stat_founded') }}</span>
            </span>
        </li>
    </ol>
</section>

{{-- =========================================================
     Manifesto keunggulan — daftar editorial, bukan kartu ikon
     ========================================================= --}}
<section class="manifesto">
    <div class="manifesto__rail reveal" aria-hidden="true">
        <span>{{ __('home.rail_curriculum') }}</span>
        <span class="side-rail__diamond">◆</span>
        <span>{{ __('home.rail_facilities') }}</span>
        <span class="side-rail__diamond">◆</span>
        <span>{{ __('home.rail_extra') }}</span>
    </div>

    <div class="manifesto__body">
        <!-- Kolom Kiri: Teks & Poin Manifesto -->
        <div class="manifesto__content">
            <p class="manifesto__eyebrow label-nav reveal">{{ __('home.why_here') }}</p>
            <h2 class="manifesto__heading reveal">{{ __('home.manifesto_title_1') }}<br>{{ __('home.manifesto_title_2') }}<br><em>{{ __('home.manifesto_title_em') }}</em></h2>

            <div class="manifesto__items">
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">I</span>
                    <div>
                        <h3>{{ __('home.item1_title') }}</h3>
                        <p>{{ __('home.item1_body') }}</p>
                    </div>
                </article>
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">II</span>
                    <div>
                        <h3>{{ __('home.item2_title') }}</h3>
                        <p>{{ __('home.item2_body') }}</p>
                    </div>
                </article>
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">III</span>
                    <div>
                        <h3>{{ __('home.item3_title') }}</h3>
                        <p>{{ __('home.item3_body') }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================
     Galeri — film strip horizontal, tinggi tidak seragam
     ========================================================= --}}
<section class="strip" id="galeri">
    <div class="strip__header">
        <div class="reveal">
            <p class="label-nav text-[var(--accent-soft)] mb-3">{{ __('home.gallery_eyebrow') }}</p>
            <h2 class="strip__title">{{ __('home.gallery_title_1') }}<br>{{ __('home.gallery_title_2') }}</h2>
        </div>
        <a href="{{ route('galeri') }}" class="strip__hint reveal">{{ __('common.see_all') }}</a>
    </div>

    <div class="strip__track" tabindex="0" aria-label="{{ __('home.gallery_strip_aria') }}">
        @foreach ($gallery as $i => $item)
            <button
                type="button"
                class="strip__frame strip__frame--{{ ($i % 3) + 1 }} reveal"
                data-gallery-index="{{ $i }}"
                data-src="{{ $item['src'] }}"
                data-title="{{ $item['title'] }}"
                data-desc="{{ $item['desc'] }}"
                data-date="{{ $item['date'] }}"
                data-category="{{ $item['cat'] }}"
                aria-label="{{ __('common.enlarge', ['title' => $item['title']]) }}"
            >
                <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
                <span class="strip__caption">
                    <span class="strip__cat">{{ t_category($item['cat']) }}</span>
                    <span class="strip__name">{{ $item['title'] }}</span>
                </span>
            </button>
        @endforeach
    </div>
</section>

{{-- =========================================================
     Artikel — layout majalah: satu hero + daftar tipografi
     ========================================================= --}}
<section class="folio" id="artikel">
    <div class="folio__head reveal flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="label-nav text-[var(--accent-soft)]">{{ __('home.articles_eyebrow') }}</p>
            <h2 class="folio__title">{{ __('home.articles_title_1') }}<br>{{ __('home.articles_title_2') }}</h2>
        </div>
        <a href="{{ route('artikel') }}" class="folio__link">{{ __('common.all_articles') }}</a>
    </div>

    @if (!empty($articles))
    <a href="{{ route('artikel.show', $articles[0]['slug']) }}" class="folio__feature reveal" aria-label="{{ $articles[0]['title'] }}">
        <div class="folio__feature-media">
            <img src="{{ $articles[0]['img'] }}" alt="{{ $articles[0]['title'] }}" loading="lazy">
        </div>
        <div class="folio__feature-copy">
            <span class="label-nav text-[var(--accent-soft)]">{{ t_category($articles[0]['cat']) }} · {{ $articles[0]['date'] }}</span>
            <h3>{{ $articles[0]['title'] }}</h3>
            <p>{{ $articles[0]['excerpt'] }}</p>
            <span class="folio__link">{{ __('common.read_story') }}</span>
        </div>
    </a>

    <ul class="folio__list">
        @foreach (array_slice($articles, 1) as $i => $article)
            <li class="reveal">
                <a href="{{ route('artikel.show', $article['slug']) }}" class="folio__row">
                    <span class="folio__row-no">0{{ $i + 2 }}</span>
                    <span class="folio__row-body">
                        <span class="folio__row-cat">{{ t_category($article['cat']) }}</span>
                        <span class="folio__row-title">{{ $article['title'] }}</span>
                    </span>
                    <span class="folio__row-meta">{{ $article['date'] }} · {{ $article['read'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
    @else
        <p class="folio__link">{{ __('common.no_articles') }}</p>
    @endif
</section>

{{-- =========================================================
     Produk — lookbook selang-seling, bukan grid toko
     ========================================================= --}}
<section class="lookbook" id="produk">
    <div class="lookbook__intro reveal flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="label-nav text-[var(--accent-soft)]">{{ __('home.products_eyebrow') }}</p>
            <h2 class="lookbook__title">{{ __('home.products_title_1') }}<br>{{ __('home.products_title_2') }}</h2>
        </div>
        <a href="{{ route('produk') }}" class="folio__link">{{ __('common.view_all') }}</a>
    </div>

    @foreach ($products as $i => $product)
        <article class="lookbook__piece lookbook__piece--{{ $i % 2 === 0 ? 'a' : 'b' }} reveal">
            <div class="lookbook__shot">
                <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" loading="lazy">
                <span class="lookbook__no" aria-hidden="true">{{ $product['no'] }}</span>
            </div>
            <div class="lookbook__copy">
                <p class="label-nav text-[var(--accent-soft)]">{{ t_category($product['cat']) }}</p>
                <h3>{{ $product['title'] }}</h3>
                <p class="lookbook__price">{{ $product['price'] }}</p>
                <p class="lookbook__desc">{{ $product['desc'] }}</p>
                <button
                    type="button"
                    class="btn btn-ghost"
                    data-product-index="{{ $i }}"
                    data-img="{{ $product['img'] }}"
                    data-title="{{ $product['title'] }}"
                    data-desc="{{ $product['desc'] }}"
                    data-category="{{ $product['cat'] }}"
                    data-price="{{ $product['price'] }}"
                >
                    {{ __('common.view_detail') }}
                </button>
            </div>
        </article>
    @endforeach
</section>

@endsection
