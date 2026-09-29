@extends('layouts.app')

@section('title', 'Artikel — Interlochen Arts Academy')

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
    <x-article-card :article="$featured" :featured="true" />

    <div class="article-grid" id="article-grid">
        @foreach (array_slice($articles, 1) as $article)
            <x-article-card :article="$article" :featured="false" />
        @endforeach
    </div>
</section>
@endsection
