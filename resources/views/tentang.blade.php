@extends('layouts.app')

@section('title', 'Tentang Kami — Interlochen Arts Academy')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span aria-hidden="true">/</span>
            <span>Tentang</span>
        </nav>
        <h1 class="page-hero__title">Tentang<br>Kami</h1>
        <p class="page-hero__lead">Sekolah yang merawat karakter seperti merawat sebuah karya — pelan, teliti, dan penuh maksud.</p>
    </div>
</section>

<section class="about-profile">
    <div class="about-profile__copy reveal">
        <p class="label-nav text-[var(--accent-soft)]">Profil & Sejarah</p>
        <h2 class="about-profile__title">Dari ruang kecil<br>menjadi komposisi</h2>
        <p>Interlochen Arts Academy berdiri pada 1998 dengan keyakinan sederhana: pendidikan yang baik bukan hanya menyampaikan materi, tetapi membentuk cara siswa memandang dunia.</p>
        <p>Dari satu gedung sederhana, sekolah tumbuh menjadi komunitas belajar lintas jenjang — SD, SMP, dan SMA — dengan irama yang sama: kehangatan, ketelitian, dan keberanian untuk bertanya.</p>
    </div>
    <figure class="about-profile__figure reveal">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1000&h=1200&fit=crop" alt="Gedung utama Interlochen Arts Academy" loading="lazy">
        <figcaption>Gedung utama · Bogor</figcaption>
    </figure>
</section>

<section class="about-vision">
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">Visi</p>
        <h2>Menjadi ruang tumbuh yang membentuk manusia utuh — cerdas, berkarakter, dan peduli.</h2>
    </article>
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">Misi</p>
        <ul>
            <li>Menghadirkan pembelajaran yang bermakna dan kontekstual.</li>
            <li>Merawat budaya literasi, seni, dan penalaran kritis.</li>
            <li>Membangun komunitas yang saling menghargai perbedaan.</li>
            <li>Menyiapkan siswa untuk melangkah dengan tanggung jawab.</li>
        </ul>
    </article>
</section>

<section class="about-values">
    <div class="about-values__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Nilai Sekolah</p>
        <h2>Empat tiang<br>yang menopang</h2>
    </div>
    <ul class="about-values__list">
        <li class="reveal"><span>Integritas</span><p>Kejujuran sebagai kebiasaan, bukan slogan.</p></li>
        <li class="reveal" aria-hidden="true"><span class="about-values__diamond">◆</span></li>
        <li class="reveal"><span>Keingintahuan</span><p>Bertanya lebih berharga daripada meniru.</p></li>
        <li class="reveal" aria-hidden="true"><span class="about-values__diamond">◆</span></li>
        <li class="reveal"><span>Kolaborasi</span><p>Prestasi tumbuh dari kerja bersama.</p></li>
        <li class="reveal" aria-hidden="true"><span class="about-values__diamond">◆</span></li>
        <li class="reveal"><span>Kepedulian</span><p>Ilmu yang berguna adalah ilmu yang menolong.</p></li>
    </ul>
</section>

<section class="about-timeline">
    <div class="about-timeline__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Timeline</p>
        <h2>Jejak yang<br>terus ditulis</h2>
    </div>
    <ol class="about-timeline__list">
        <li class="reveal">
            <span class="about-timeline__year">1998</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Berdiri</h3>
                <p>Sekolah dibuka dengan semangat pendidikan yang humanis.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">2008</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Perluasan jenjang</h3>
                <p>SMP dan SMA bergabung dalam satu ekosistem belajar.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">2016</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Studio & lab baru</h3>
                <p>Fasilitas seni dan sains diperbarui untuk eksplorasi lebih dalam.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">2024</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Kurikulum komposisi</h3>
                <p>Pendekatan lintas disiplin resmi menjadi identitas sekolah.</p>
            </div>
        </li>
    </ol>
</section>

<section class="about-team">
    <div class="about-team__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Tim</p>
        <h2>Wajah di balik<br>proses belajar</h2>
    </div>
    <div class="about-team__grid">
        @foreach ([
            ['name' => 'Dewi Lestari', 'role' => 'Kepala Sekolah', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=750&fit=crop'],
            ['name' => 'Andi Pratama', 'role' => 'Wakasek Kurikulum', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&h=750&fit=crop'],
            ['name' => 'Sari Melati', 'role' => 'Koordinator Seni', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=600&h=750&fit=crop'],
            ['name' => 'Bima Nugraha', 'role' => 'Pembina Prestasi', 'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&h=750&fit=crop'],
        ] as $member)
            <figure class="about-team__card reveal">
                <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" loading="lazy">
                <figcaption>
                    <strong>{{ $member['name'] }}</strong>
                    <span>{{ $member['role'] }}</span>
                </figcaption>
            </figure>
        @endforeach
    </div>
</section>

<section class="about-facilities">
    <div class="about-facilities__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Fasilitas</p>
        <h2>Ruang yang<br>mengundang</h2>
    </div>
    <div class="about-facilities__grid">
        @foreach ([
            ['title' => 'Perpustakaan', 'img' => 'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=800&h=600&fit=crop'],
            ['title' => 'Laboratorium', 'img' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=600&fit=crop'],
            ['title' => 'Studio Seni', 'img' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=800&h=600&fit=crop'],
            ['title' => 'Lapangan', 'img' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba6851?w=800&h=600&fit=crop'],
        ] as $facility)
            <figure class="about-facilities__item reveal">
                <img src="{{ $facility['img'] }}" alt="{{ $facility['title'] }}" loading="lazy">
                <figcaption>{{ $facility['title'] }}</figcaption>
            </figure>
        @endforeach
    </div>
</section>
@endsection
