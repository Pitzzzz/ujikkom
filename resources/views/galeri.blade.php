@extends('layouts.app')

@section('title', __('pages.gallery_title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('nav.gallery') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('pages.gallery_heading') }}</h1>
        <p class="page-hero__lead">{{ __('pages.gallery_lead') }}</p>
    </div>
</section>

<section class="gallery-page">
    <div class="filter-bar reveal" role="tablist" aria-label="{{ __('pages.gallery_filter') }}" data-filter-group="gallery">
        @foreach (['all', 'Kegiatan', 'Prestasi', 'Fasilitas', 'Acara'] as $i => $cat)
            <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ __('categories.'.$cat) }}</button>
        @endforeach
    </div>

    <div class="masonry" id="gallery-masonry">
        @foreach ($gallery as $i => $item)
            <x-gallery-card :item="$item" :index="$i" />
        @endforeach
    </div>
</section>
@endsection
