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
                    <p>4000 J. Maddy Pkwy, Interlochen, MI 49643, USA</p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2.1Z"/></svg>
                </span>
                <div>
                    <p class="label-nav">Telepon</p>
                    <p><a href="tel:+12312767200">+1 231-276-7200</a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/></svg>
                </span>
                <div>
                    <p class="label-nav">Email</p>
                    <p><a href="mailto:academy@interlochen.org">academy@interlochen.org</a></p>
                </div>
            </div>
            <div class="contact-info__item">
                <span class="contact-info__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                </span>
                <div>
                    <p class="label-nav">Jam operasional</p>
                    <p>24 Jam</p>
                </div>
            </div>
            <div class="contact-social">
                <p class="label-nav mb-3">Media sosial</p>
                <div class="flex flex-wrap gap-4 text-sm text-[var(--text-muted)]">
                    <a href="https://www.instagram.com/interlochenarts/" target="_blank" rel="noopener noreferrer">Instagram</a>
                    <a href="https://www.facebook.com/InterlochenArtsCenter" target="_blank" rel="noopener noreferrer">Facebook</a>
                    <a href="https://www.youtube.com/user/InterlochenArts" target="_blank" rel="noopener noreferrer">YouTube</a>
                    <a href="https://wa.me/+12312767200" target="_blank" rel="noopener noreferrer">WhatsApp</a>
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2839.4287174594615!2d-85.76660079999999!3d44.629154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881e380279b498bf%3A0x1cb55e4aca5f1962!2sInterlochen%20Center%20for%20the%20Arts!5e0!3m2!1sen!2sid!4v1790817538965!5m2!1sen!2sid"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen
        ></iframe>
    </div>
</section>
@endsection