@extends('layouts.app')

@section('title', 'Hubungi Kami — Interlochen Arts Academy')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span aria-hidden="true">/</span>
            <span>Kontak</span>
        </nav>
        <h1 class="page-hero__title">Hubungi<br>Kami</h1>
        <p class="page-hero__lead">Tanya soal pendaftaran, kerja sama, atau sekadar ingin mengenal sekolah lebih dekat.</p>
    </div>
</section>

<section class="contact-page">
    <div class="contact-grid">
        <aside class="contact-info reveal">
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                </span>
                <div>
                    <p class="label-nav">Alamat</p>
                    <p>Jl. Pendidikan No. 12, Bogor</p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2.1Z"/></svg>
                </span>
                <div>
                    <p class="label-nav">Telepon</p>
                    <p><a href="tel:+622518901234">(0251) 890-1234</a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/></svg>
                </span>
                <div>
                    <p class="label-nav">Email</p>
                    <p><a href="mailto:info@harapanmulia.sch.id">info@harapanmulia.sch.id</a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                </span>
                <div>
                    <p class="label-nav">Jam operasional</p>
                    <p>Senin–Jumat, 07.00–16.00</p>
                </div>
            </div>
            <div class="contact-social">
                <p class="label-nav mb-3">Media sosial</p>
                <div class="flex flex-wrap gap-4 text-sm text-[var(--text-muted)]">
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">YouTube</a>
                    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                </div>
            </div>
        </aside>

        <form class="contact-form reveal" id="contact-form" novalidate>
            <div class="form-field">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required autocomplete="name">
                <span class="form-error" data-error-for="name"></span>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autocomplete="email">
                <span class="form-error" data-error-for="email"></span>
            </div>
            <div class="form-field">
                <label for="phone">No. Telepon</label>
                <input type="tel" id="phone" name="phone" required autocomplete="tel">
                <span class="form-error" data-error-for="phone"></span>
            </div>
            <div class="form-field">
                <label for="subject">Subjek</label>
                <select id="subject" name="subject" required>
                    <option value="">Pilih subjek</option>
                    <option value="umum">Informasi umum</option>
                    <option value="daftar">Pendaftaran</option>
                    <option value="kerja-sama">Kerja sama</option>
                </select>
                <span class="form-error" data-error-for="subject"></span>
            </div>
            <div class="form-field">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <span class="form-error" data-error-for="message"></span>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>

    <div class="contact-map reveal">
        <iframe
            title="Peta lokasi Interlochen Arts Academy"
            src="https://maps.google.com/maps?q=Bogor&t=&z=13&ie=UTF8&iwloc=&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen
        ></iframe>
    </div>
</section>
@endsection
