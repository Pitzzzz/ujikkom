@extends('layouts.app')

@section('title', 'Produk — Interlochen Arts Academy')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span aria-hidden="true">/</span>
            <span>Produk</span>
        </nav>
        <h1 class="page-hero__title">Produk</h1>
        <p class="page-hero__lead">Seragam, buku, merchandise, dan program yang menemani perjalanan belajar.</p>
    </div>
</section>

<section class="products-page">
    <div class="products-toolbar reveal">
        <div class="filter-bar" role="tablist" aria-label="Filter kategori produk" data-filter-group="products">
            @foreach (['Semua', 'Merchandise', 'Seragam', 'Buku', 'Program'] as $i => $cat)
                <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ $cat }}</button>
            @endforeach
        </div>
        <label class="products-sort">
            <span class="sr-only">Urutkan</span>
            <select id="product-sort">
                <option value="newest">Terbaru</option>
                <option value="price-asc">Harga terendah</option>
                <option value="price-desc">Harga tertinggi</option>
            </select>
        </label>
    </div>

    <div class="product-grid" id="product-grid">
        @foreach ($products as $i => $product)
            <x-product-card :product="$product" :index="$i" />
        @endforeach
    </div>
</section>
@endsection
