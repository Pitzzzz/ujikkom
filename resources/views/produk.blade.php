@extends('layouts.app')

@section('title', __('pages.products_title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('nav.products') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('pages.products_heading') }}</h1>
        <p class="page-hero__lead">{{ __('pages.products_lead') }}</p>
    </div>
</section>

<section class="products-page">
    <div class="products-toolbar reveal">
        <div class="filter-bar" role="tablist" aria-label="{{ __('pages.products_filter') }}" data-filter-group="products">
            @foreach (['all', 'Merchandise', 'Seragam', 'Buku', 'Program'] as $i => $cat)
                <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ __('categories.'.$cat) }}</button>
            @endforeach
        </div>
        <label class="products-sort">
            <span class="sr-only">{{ __('pages.sort') }}</span>
            <select id="product-sort">
                <option value="newest">{{ __('pages.newest') }}</option>
                <option value="price-asc">{{ __('pages.price_asc') }}</option>
                <option value="price-desc">{{ __('pages.price_desc') }}</option>
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
