@extends('layouts.app')

@section('title', 'Harapan Mulia — Ketika Pendidikan Menjadi Seni')

@section('content')
{{-- =========================================================
     Hero — design.md §5.1
     ========================================================= --}}
<section class="hero container-site" id="beranda">
    <h1 class="heading-xl reveal">
        Ketika Pendidikan<br>Menjadi Seni
    </h1>
    <p class="hero__subtitle reveal">
        Sekolah yang membangun karakter, prestasi, dan cinta belajar.
    </p>
    <div class="hero__cta reveal">
        <a href="{{ route('kontak') }}" class="btn btn-primary">Daftar Sekarang</a>
    </div>

    {{-- Desktop 5-panel collage --}}
    <div class="collage" id="hero-collage" aria-hidden="true">
        <div class="collage__panel">
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=600&fit=crop" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=700&fit=crop" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&h=800&fit=crop" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=400&h=700&fit=crop" alt="" loading="eager">
        </div>
        <div class="collage__panel">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=400&h=600&fit=crop" alt="" loading="eager">
        </div>
    </div>

    {{-- Mobile carousel collage --}}
    <div class="collage-mobile" aria-label="Galeri suasana sekolah">
        <div class="collage-mobile__panel">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=500&h=700&fit=crop" alt="Kegiatan belajar di kelas" loading="lazy">
        </div>
        <div class="collage-mobile__panel">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&h=700&fit=crop" alt="Wisuda dan prestasi siswa" loading="lazy">
        </div>
        <div class="collage-mobile__panel">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=500&h=700&fit=crop" alt="Gedung sekolah" loading="lazy">
        </div>
    </div>
</section>


{{-- =========================================================
     Angka — tipografi raksasa, bukan strip statistik
     ========================================================= --}}
<section class="ledger" id="sekilas">
    <div class="ledger__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Sejak 1998</p>
        <h2 class="ledger__title">Yang kami<br>ukir bersama</h2>
    </div>

    <ol class="ledger__list">
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="1250">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Siswa aktif</span>
                <span class="ledger__note">belajar di tiga jenjang</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="86">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Guru & staf</span>
                <span class="ledger__note">pendamping setiap hari</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="142">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Prestasi</span>
                <span class="ledger__note">kota · provinsi · nasional</span>
            </span>
        </li>
        <li class="ledger__row reveal">
            <span class="ledger__num" data-count="1998">0</span>
            <span class="ledger__meta">
                <span class="ledger__label">Tahun berdiri</span>
                <span class="ledger__note">akar yang terus tumbuh</span>
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
        <p class="manifesto__eyebrow label-nav reveal">Mengapa di sini</p>
        <h2 class="manifesto__heading reveal">Pendidikan<br>sebagai<br><em>komposisi</em></h2>

        <div class="manifesto__items">
            <article class="manifesto__item reveal">
                <span class="manifesto__index">I</span>
                <div>
                    <h3>Kurikulum yang bernapas</h3>
                    <p>Akademik, seni, dan nilai kemanusiaan disusun seperti partitur — tiap siswa menemukan nadanya sendiri.</p>
                </div>
            </article>
            <article class="manifesto__item reveal">
                <span class="manifesto__index">II</span>
                <div>
                    <h3>Ruang yang mengundang</h3>
                    <p>Lab, perpustakaan, dan studio terbuka. Bukan dekorasi — tempat eksplorasi benar-benar terjadi.</p>
                </div>
            </article>
            <article class="manifesto__item reveal">
                <span class="manifesto__index">III</span>
                <div>
                    <h3>Bakat yang dipanggil keluar</h3>
                    <p>Olahraga, riset, panggung. Mentor hadir bukan untuk mengarahkan, tapi menyalakan.</p>
                </div>
            </article>
        </div>
    </div>

    <figure class="manifesto__figure reveal">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&h=1100&fit=crop" alt="Siswa dalam suasana belajar" loading="lazy">
        <figcaption>Kelas bukan tempat duduk. Kelas adalah panggung kecil.</figcaption>
    </figure>
</section>

{{-- =========================================================
     Galeri — film strip horizontal, tinggi tidak seragam
     ========================================================= --}}
<section class="strip" id="galeri">
    <div class="strip__header">
        <div class="reveal">
            <p class="label-nav text-[var(--accent-soft)] mb-3">Galeri</p>
            <h2 class="strip__title">Bingkai<br>yang hidup</h2>
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
            <p class="label-nav text-[var(--accent-soft)]">Artikel</p>
            <h2 class="folio__title">Bacaan<br>minggu ini</h2>
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
            <p class="label-nav text-[var(--accent-soft)]">Produk</p>
            <h2 class="lookbook__title">Dikenakan.<br>Dibawa.<br>Dibaca.</h2>
        </div>
        <a href="{{ route('produk') }}" class="folio__link">Semua produk →</a>
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

{{-- =========================================================
     CTA — tipografi penuh layar, bukan band tengah
     ========================================================= --}}
<section class="invite">
    <p class="invite__whisper reveal label-nav">Pendaftaran dibuka</p>
    <h2 class="invite__giant reveal" aria-hidden="true">
        <span>Bergabung</span>
        <span>Bersama</span>
        <span>Kami</span>
    </h2>
    <h2 class="sr-only">Bergabung Bersama Kami</h2>
    <p class="invite__line reveal">
        Temukan ruang belajar yang membentuk karakter — lalu merayakan setiap pencapaian.
    </p>
    <a href="{{ route('kontak') }}" class="invite__cta reveal">Daftar Sekarang <span aria-hidden="true">→</span></a>
</section>
@endsection
