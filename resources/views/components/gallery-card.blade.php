{{-- Gallery card component --}}
<button
    type="button"
    class="masonry__item reveal"
    data-gallery-index="{{ $index }}"
    data-category="{{ $item['cat'] }}"
    data-src="{{ $item['src'] }}"
    data-title="{{ $item['title'] }}"
    data-desc="{{ $item['desc'] }}"
    data-date="{{ $item['date'] }}"
    aria-label="{{ __('common.enlarge', ['title' => $item['title']]) }}"
>
    <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
    <span class="masonry__overlay">
        <span class="label-nav">{{ t_category($item['cat']) }}</span>
        <span class="masonry__title">{{ $item['title'] }}</span>
    </span>
</button>
