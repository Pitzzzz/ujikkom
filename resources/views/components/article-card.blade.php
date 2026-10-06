{{-- Article card component --}}
@if ($featured)
    <a href="{{ route('artikel.show', $article['slug']) }}" class="folio__feature reveal article-feature" data-article-item data-category="{{ $article['cat'] }}" data-title="{{ strtolower($article['title'].' '.$article['excerpt']) }}">
        <div class="folio__feature-media">
            <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" loading="lazy">
        </div>
        <div class="folio__feature-copy">
            <span class="label-nav text-[var(--accent-soft)]">{{ t_category($article['cat']) }} · {{ $article['date'] }}</span>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['excerpt'] }}</p>
            <span class="folio__link">{{ __('common.read_story') }}</span>
        </div>
    </a>
@else
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
            <p class="label-nav text-[var(--accent-soft)]">{{ t_category($article['cat']) }}</p>
            <h3>{{ $article['title'] }}</h3>
            <p>{{ $article['excerpt'] }}</p>
            <span>{{ $article['date'] }} · {{ $article['read'] }}</span>
        </div>
    </a>
@endif
