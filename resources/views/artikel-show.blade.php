@extends('layouts.app')

@section('title', $article['title'].' — Interlochen Arts Academy')

@section('content')
<article class="article-detail">
    <header class="article-detail__hero">
        <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}">
        <div class="article-detail__hero-shade"></div>
        <div class="article-detail__hero-copy reveal">
            <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Beranda</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('artikel') }}">Artikel</a>
                <span aria-hidden="true">/</span>
                <span>{{ \Illuminate\Support\Str::limit($article['title'], 28) }}</span>
            </nav>
            <p class="label-nav text-[var(--accent-soft)]">{{ $article['cat'] }} · {{ $article['date'] }} · {{ $article['author'] }} · {{ $article['read'] }}</p>
            <h1>{{ $article['title'] }}</h1>
        </div>
    </header>

    <div class="article-detail__body reveal">
        @foreach ($article['body'] as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach

        @if (!empty($article['quote']))
            <blockquote>{{ $article['quote'] }}</blockquote>
        @endif

        <div class="article-share">
            <p class="label-nav">Bagikan</p>
            <div class="article-share__actions">
                <a class="btn btn-ghost" href="https://wa.me/?text={{ urlencode($article['title'].' '.url()->current()) }}" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                <a class="btn btn-ghost" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer">Facebook</a>
                <button type="button" class="btn btn-ghost" id="copy-link" data-url="{{ url()->current() }}">Salin tautan</button>
            </div>
        </div>
    </div>

    <nav class="article-pager" aria-label="Navigasi artikel">
        @if ($prev)
            <a href="{{ route('artikel.show', $prev['slug']) }}" class="reveal">
                <span class="label-nav">← Sebelumnya</span>
                <strong>{{ $prev['title'] }}</strong>
            </a>
        @else
            <span></span>
        @endif
        @if ($next)
            <a href="{{ route('artikel.show', $next['slug']) }}" class="article-pager__next reveal">
                <span class="label-nav">Berikutnya →</span>
                <strong>{{ $next['title'] }}</strong>
            </a>
        @endif
    </nav>

    <section class="article-related">
        <div class="reveal">
            <p class="label-nav text-[var(--accent-soft)]">Terkait</p>
            <h2 class="lookbook__title" style="font-size: clamp(1.8rem, 4vw, 2.8rem)">Bacaan lain</h2>
        </div>
        <div class="article-grid">
            @foreach ($related as $item)
                <a href="{{ route('artikel.show', $item['slug']) }}" class="article-card reveal">
                    <div class="article-card__media">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy">
                    </div>
                    <div class="article-card__body">
                        <p class="label-nav text-[var(--accent-soft)]">{{ $item['cat'] }}</p>
                        <h3>{{ $item['title'] }}</h3>
                        <span>{{ $item['date'] }} · {{ $item['read'] }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</article>
@endsection
