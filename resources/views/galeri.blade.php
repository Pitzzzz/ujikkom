@extends('layouts.app')

@section('title', 'Galeri — Interlochen Arts Academy')

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
            <x-gallery-card :item="$item" :index="$i" />
        @endforeach
    </div>
</section>
@endsection
