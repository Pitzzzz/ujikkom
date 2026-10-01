@extends('layouts.app')

@section('title', 'Interlochen Arts Academy — Ketika Pendidikan Menjadi Seni')

@section('content')
{{-- =========================================================
     Hero — design.md §5.1
     ========================================================= --}}
<section class="hero container-site" id="beranda">
    <h1 class="heading-xl reveal">
        Akademi Seni Interlochen<br>Sekolah Asrama Seni Michigan
    </h1>
    <p class="hero__subtitle reveal">
        Interlochen baru-baru ini dinobatkan sebagai Sekolah Menengah Atas Terbaik #1 untuk Seni di Amerika, selain menerima nilai A+ untuk Akademik dan A+ untuk Persiapan Perguruan Tinggi.
    </p>
    <div class="hero__cta reveal">
        <a href="{{ route('kontak') }}" class="btn btn-primary">Daftar Sekarang</a>
    </div>

    {{-- Desktop 5-panel collage --}}
    <div class="collage" id="hero-collage" aria-hidden="true">
        <div class="collage__panel">
            <img src="{{ asset('images/hero1.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero2.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero3.jfif') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero4.jfif') }}" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="{{ asset('images/hero5.jfif') }}" alt="" loading="eager">
        </div>
    </div>

    {{-- Mobile carousel collage --}}
    <div class="collage-mobile" aria-label="Galeri suasana sekolah">
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
        <div class="collage-mobile__panel">
            <img src="{{ asset('images/sekolah5.jpg') }}" alt="" loading="eager">
        </div>
    </div>
</section>


{{-- =========================================================
     Angka — tipografi raksasa, bukan strip statistik
     ========================================================= --}}
<section class="ledger" id="sekilas">
    <div class="ledger__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Sejak 1962</p>
        <h2 class="ledger__title">Yang kami<br>ukir bersama</h2>
    </div>

    <ol class="ledger__list">
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="579">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Siswa aktif</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="201">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Guru & staf</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="12000">+</span>
            <span class="ledger__meta">
                <span class="ledger__label">Prestasi</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="1962">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Tahun berdiri</span>
            </span>
        </li>
    </ol>
</section>

{{-- =========================================================
     Manifesto keunggulan — daftar editorial, bukan kartu ikon
     ========================================================= --}}
<section class="manifesto">
    <div class="manifesto__rail reveal" aria-hidden="true">
        <span>Kurikulum</span>
        <span class="side-rail__diamond">◆</span>
        <span>Fasilitas</span>
        <span class="side-rail__diamond">◆</span>
        <span>Ekstra</span>
    </div>

    <div class="manifesto__body">
        <!-- Kolom Kiri: Teks & Poin Manifesto -->
        <div class="manifesto__content">
            <p class="manifesto__eyebrow label-nav reveal">Mengapa di sini</p>
            <h2 class="manifesto__heading reveal">Pendidikan<br>sebagai<br><em>komposisi</em></h2>

            <div class="manifesto__items">
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">I</span>
                    <div>
                        <h3>Dual Kurikulum</h3>
                        <p>Menggunakan kurikulum Artistic Major, setiap siswa dapat mengembangkan bakat sesuai minatnya. College Prep, di samping seni, siswa wajib menyelesaikan standar akademik berasrama yang diakreditasi oleh Independent Schools Association of the Central States (ISACS) dan Cognia.</p>
                    </div>
                </article>
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">II</span>
                    <div>
                        <h3>Kresge Auditorium</h3>
                        <p>Amfiteater ikonik berkapasitas 4.000 penonton yang berlokasi di tepi danau kampus Interlochen. Memadukan desain open-air beratap dengan akustik alami yang memukau, Kresge Auditorium menjadi panggung utama untuk konser simfoni, festival musim panas, dan berbagai pertunjukan seni akbar.</p>
                    </div>
                </article>
                <article class="manifesto__item reveal">
                    <span class="manifesto__index">III</span>
                    <div>
                        <h3>National Medal of Arts (2006)</h3>
                        <p>Prestasi terbesar Interlochen ditandai dengan penganugerahan National Medal of Arts pada tahun 2006, penghargaan seni tertinggi dari Pemerintah Federal Amerika Serikat yang diserahkan langsung di Gedung Putih atas kontribusi luar biasanya dalam mencetak generasi seniman dunia.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================
     Galeri — film strip horizontal, tinggi tidak seragam
     ========================================================= --}}
<section class="strip" id="galeri">
    <div class="strip__header">
        <div class="reveal">
            <p class="label-nav text-[var(--accent-soft)] mb-3">Menangkap Harmoni, Mengabadikan Perjalanan Seni</p>
            <h2 class="strip__title">Bingkai<br>Abadi</h2>
        </div>
        <a href="{{ route('galeri') }}" class="strip__hint reveal">lihat semua →</a>
    </div>

    <div class="strip__track" tabindex="0" aria-label="Galeri foto sekolah">
        @foreach ($gallery as $i => $item)
            <button
                type="button"
                class="strip__frame strip__frame--{{ ($i % 3) + 1 }} reveal"
                data-gallery-index="{{ $i }}"
                data-src="{{ $item['src'] }}"
                data-title="{{ $item['title'] }}"
                data-desc="{{ $item['desc'] }}"
                data-date="{{ $item['date'] }}"
                data-category="{{ $item['cat'] }}"
                aria-label="Perbesar {{ $item['title'] }}"
            >
                <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
                <span class="strip__caption">
                    <span class="strip__cat">{{ $item['cat'] }}</span>
                    <span class="strip__name">{{ $item['title'] }}</span>
                </span>
            </button>
        @endforeach
    </div>
</section>

{{-- =========================================================
     Artikel — layout majalah: satu hero + daftar tipografi
     ========================================================= --}}
<section class="folio" id="artikel">
    <div class="folio__head reveal flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="label-nav text-[var(--accent-soft)]">Gema pemikiran & kisah inspirasi</p>
            <h2 class="folio__title">Gema<br>Karya</h2>
        </div>
        <a href="{{ route('artikel') }}" class="folio__link">Semua artikel →</a>
    </div>

    <a href="{{ route('artikel.show', $articles[0]['slug']) }}" class="folio__feature reveal" aria-label="{{ $articles[0]['title'] }}">
        <div class="folio__feature-media">
            <img src="{{ $articles[0]['img'] }}" alt="{{ $articles[0]['title'] }}" loading="lazy">
        </div>
        <div class="folio__feature-copy">
            <span class="label-nav text-[var(--accent-soft)]">{{ $articles[0]['cat'] }} · {{ $articles[0]['date'] }}</span>
            <h3>{{ $articles[0]['title'] }}</h3>
            <p>{{ $articles[0]['excerpt'] }}</p>
            <span class="folio__link">Baca cerita →</span>
        </div>
    </a>

    <ul class="folio__list">
        @foreach (array_slice($articles, 1) as $i => $article)
            <li class="reveal">
                <a href="{{ route('artikel.show', $article['slug']) }}" class="folio__row">
                    <span class="folio__row-no">0{{ $i + 2 }}</span>
                    <span class="folio__row-body">
                        <span class="folio__row-cat">{{ $article['cat'] }}</span>
                        <span class="folio__row-title">{{ $article['title'] }}</span>
                    </span>
                    <span class="folio__row-meta">{{ $article['date'] }} · {{ $article['read'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</section>

{{-- =========================================================
     Produk — lookbook selang-seling, bukan grid toko
     ========================================================= --}}
<section class="lookbook" id="produk">
    <div class="lookbook__intro reveal flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="label-nav text-[var(--accent-soft)]">Cenderamata & perlengkapan kreasi</p>
            <h2 class="lookbook__title">Jejak<br>Karya</h2>
        </div>
        <a href="{{ route('produk') }}" class="folio__link">Lihat Semua →</a>
    </div>

    @foreach ($products as $i => $product)
        <article class="lookbook__piece lookbook__piece--{{ $i % 2 === 0 ? 'a' : 'b' }} reveal">
            <div class="lookbook__shot">
                <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" loading="lazy">
                <span class="lookbook__no" aria-hidden="true">{{ $product['no'] }}</span>
            </div>
            <div class="lookbook__copy">
                <p class="label-nav text-[var(--accent-soft)]">{{ $product['cat'] }}</p>
                <h3>{{ $product['title'] }}</h3>
                <p class="lookbook__price">{{ $product['price'] }}</p>
                <p class="lookbook__desc">{{ $product['desc'] }}</p>
                <button
                    type="button"
                    class="btn btn-ghost"
                    data-product-index="{{ $i }}"
                    data-img="{{ $product['img'] }}"
                    data-title="{{ $product['title'] }}"
                    data-desc="{{ $product['desc'] }}"
                    data-category="{{ $product['cat'] }}"
                    data-price="{{ $product['price'] }}"
                >
                    Lihat Detail
                </button>
            </div>
        </article>
    @endforeach
</section>

@endsection