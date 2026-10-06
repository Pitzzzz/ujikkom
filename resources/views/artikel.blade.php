@extends('layouts.app')

@section('title', __('pages.articles_title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('nav.articles') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('pages.articles_heading') }}</h1>
        <p class="page-hero__lead">{{ __('pages.articles_lead') }}</p>
    </div>
</section>

<section class="articles-page">
    <div class="articles-toolbar reveal">
        <label class="articles-search">
            <span class="sr-only">{{ __('pages.search_articles') }}</span>
            <input type="search" id="article-search" placeholder="{{ __('pages.search_placeholder') }}" autocomplete="off">
        </label>
        <div class="filter-bar" role="tablist" aria-label="{{ __('pages.articles_filter') }}" data-filter-group="articles">
            @foreach (['all', 'Berita', 'Pengumuman', 'Prestasi', 'Tips'] as $i => $cat)
                <button type="button" class="filter-chip {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $cat }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">{{ __('categories.'.$cat) }}</button>
            @endforeach
        </div>
    </div>

    @if (!empty($articles))
    @php $featured = $articles[0]; @endphp
    <x-article-card :article="$featured" :featured="true" />

    <div class="article-grid" id="article-grid">
        @foreach (array_slice($articles, 1) as $article)
            <x-article-card :article="$article" :featured="false" />
        @endforeach
    </div>
    @else
        <p>{{ __('common.no_articles') }}</p>
    @endif
</section>
@endsection
