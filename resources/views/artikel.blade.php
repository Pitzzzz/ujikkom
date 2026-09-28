@extends('layouts.app')

@section('title', 'Artikel — Harapan Mulia')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span aria-hidden="true">/</span>
            <span>Artikel</span>
        </nav>
        <h1 class="page-hero__title">Artikel</h1>
        <p class="page-hero__lead">Berita, pengumuman, prestasi, dan catatan kecil dari kehidupan sekolah.</p>
    </div>
</section>

<section class="articles-page">
    <div class="articles-toolbar reveal">
        <label class="articles-search">
            <span class="sr-only">Cari artikel</span>
            <input type="search" id="article-search" placeholder="Cari judul atau topik…" autocomplete="off">
        </label>
        <div class="filter-bar" role="tablist" aria-label="Filter kategori artikel" data-filter-group="articles">
            @foreach (['Semua', 'Berita', 'Pengumuman', 'Prestasi', 'Tips'] as $i => $cat)
                <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ $cat }}</button>
            @endforeach
        </div>
    </div>

    @php $featured = $articles[0]; @endphp
    <a href="{{ route('artikel.show', $featured['slug']) }}" class="folio__feature reveal article-feature" data-article-item data-category="{{ $featured['cat'] }}" data-title="{{ strtolower($featured['title'].' '.$featured['excerpt']) }}">
        <div class="folio__feature-media">
            <img src="{{ $featured['img'] }}" alt="{{ $featured['title'] }}" loading="lazy">
        </div>
        <div class="folio__feature-copy">
            <span class="label-nav text-[var(--accent-soft)]">{{ $featured['cat'] }} · {{ $featured['date'] }}</span>
            <h2>{{ $featured['title'] }}</h2>
            <p>{{ $featured['excerpt'] }}</p>
            <span class="folio__link">Baca cerita →</span>
        </div>
    </a>

    <div class="article-grid" id="article-grid">
        @foreach (array_slice($articles, 1) as $article)
            <a
                href="{{ route('artikel.show', $article['slug']) }}"
                class="article-card reveal"
                data-article-item
                data-category="{{ $article['cat'] }}"
                data-title="{{ strtolower($article['title'].' '.$article['excerpt']) }}"
            >
                <div class="article-card__media">
                    <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" loading="lazy">
                </div>
                <div class="article-card__body">
                    <p class="label-nav text-[var(--accent-soft)]">{{ $article['cat'] }}</p>
                    <h3>{{ $article['title'] }}</h3>
                    <p>{{ $article['excerpt'] }}</p>
                    <span>{{ $article['date'] }} · {{ $article['read'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection
