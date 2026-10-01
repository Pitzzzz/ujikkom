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
        <p class="page-hero__lead"></p>
    </div>
</section>

<section class="about-profile">
    <div class="about-profile__copy reveal">
        <p class="label-nav text-[var(--accent-soft)]">Profil & Sejarah</p>
        <h2 class="about-profile__title">Dari ruang kecil<br>menjadi komposisi</h2>
        <p>Interlochen Arts Academy berdiri pada tahun 1962 dengan keyakinan sederhana: pendidikan yang baik bukan hanya menyampaikan materi, tetapi membentuk cara siswa memandang dunia. Berawal dari panggung sederhana di tepi danau, sekolah ini tumbuh menjadi komunitas belajar seni tingkat SMA dengan irama yang sama: kehangatan, ketelitian, dan keberanian untuk melahirkan karya hebat.</p>
    </div>
    <figure class="about-profile__figure reveal">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1000&h=1200&fit=crop" alt="Gedung utama Interlochen Arts Academy" loading="lazy">
        <figcaption>Gedung utama</figcaption>
    </figure>
</section>

<section class="about-vision">
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">Visi</p>
        <h2>Menjadi pusat pendidikan seni global yang membina dan menginspirasi seniman muda untuk membentuk masa depan kebudayaan dunia.</h2>
    </article>
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">Misi</p>
        <p>Mengintegrasikan pelatihan seni tingkat profesional dengan akademik unggulan untuk membentuk pribadi kreatif, kritis, dan berdampak.</h2>
    </article>
</section>


<section class="about-timeline">
    <div class="about-timeline__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">Timeline</p>
        <h2>Jejak yang<br>terus ditulis</h2>
    </div>
    <ol class="about-timeline__list">
        <li class="reveal">
            <span class="about-timeline__year">1928</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Pendirian Perkemahan Seni</h3>
                <p>Diawali sebagai National High School Orchestra Camp di tepi Danau Green untuk menyatukan musisi muda berbakat dari seluruh Amerika Serikat.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">1963</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Peresmian Interlochen Arts Academy</h3>
                <p>Resmi berkembang menjadi sekolah menengah atas seni berasrama pertama di Amerika Serikat yang menggabungkan pelatihan seni profesional dan akademis.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">2006</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Penganugerahan National Medal of Arts</h3>
                <p>Meraih penghargaan seni tertinggi dari Pemerintah Federal Amerika Serikat yang diserahkan langsung di Gedung Putih atas kontribusi luar biasanya bagi dunia seni.</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">Kini</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>Pusat Talenta Kreatif Global</h3>
                <p>Terus mencetak ribuan alumni bereputasi dunia yang telah meraih lebih dari 162 Grammy, 36 Tony, 31 Emmy, 5 Oscar, dan 5 Pulitzer Prize.</p>
            </div>
        </li>
    </ol>
</section>



@endsection
