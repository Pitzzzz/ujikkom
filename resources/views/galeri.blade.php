@extends('layouts.app')

@section('title', 'Galeri — Harapan Mulia')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span aria-hidden="true">/</span>
            <span>Galeri</span>
        </nav>
        <h1 class="page-hero__title">Galeri</h1>
        <p class="page-hero__lead">Kumpulan bingkai dari kelas, panggung, lapangan, dan ruang yang diam-diam membentuk kami.</p>
    </div>
</section>

<section class="gallery-page">
    <div class="filter-bar reveal" role="tablist" aria-label="Filter kategori galeri" data-filter-group="gallery">
        @foreach (['Semua', 'Kegiatan', 'Prestasi', 'Fasilitas', 'Acara'] as $i => $cat)
            <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ $cat }}</button>
        @endforeach
    </div>

    <div class="masonry" id="gallery-masonry">
        @foreach ($gallery as $i => $item)
            <button
                type="button"
                class="masonry__item reveal"
                data-gallery-index="{{ $i }}"
                data-category="{{ $item['cat'] }}"
                data-src="{{ $item['src'] }}"
                data-title="{{ $item['title'] }}"
                data-desc="{{ $item['desc'] }}"
                data-date="{{ $item['date'] }}"
                aria-label="Perbesar {{ $item['title'] }}"
            >
                <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
                <span class="masonry__overlay">
                    <span class="label-nav">{{ $item['cat'] }}</span>
                    <span class="masonry__title">{{ $item['title'] }}</span>
                </span>
            </button>
        @endforeach
    </div>
</section>
@endsection
