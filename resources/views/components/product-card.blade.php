{{-- Product card component --}}
<article
    class="product-tile reveal"
    data-product-item
    data-category="{{ $product['cat'] }}"
    data-price="{{ $product['priceValue'] }}"
    data-index="{{ $index }}"
>
    <div class="product-tile__media">
        <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" loading="lazy">
        <span class="product-tile__no" aria-hidden="true">{{ $product['no'] }}</span>
    </div>
    <div class="product-tile__body">
        <p class="label-nav text-[var(--accent-soft)]">{{ t_category($product['cat']) }}</p>
        <h2>{{ $product['title'] }}</h2>
        <p class="price">{{ $product['price'] }}</p>
        <button
            type="button"
            class="btn btn-ghost"
            data-product-index="{{ $index }}"
            data-img="{{ $product['img'] }}"
            data-title="{{ $product['title'] }}"
            data-desc="{{ $product['desc'] }}"
            data-category="{{ $product['cat'] }}"
            data-price="{{ $product['price'] }}"
            data-variants="{{ implode(',', $product['variants']) }}"
        >
            {{ __('common.view_detail') }}
        </button>
    </div>
</article>
