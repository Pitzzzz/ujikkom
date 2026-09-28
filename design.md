# DESIGN.md — Website Sekolah

Dokumen desain ini diturunkan dari gambar referensi (landing page "DREAM" sekolah berkuda) dan diadaptasi menjadi **website sekolah**. Gaya visual, tata letak, dan komponen khas dari referensi dipertahankan, sedangkan konten dan struktur halaman disesuaikan untuk kebutuhan sekolah.

---

## 1. Ringkasan Konsep

**Nama (placeholder):** `NAMA SEKOLAH` — ganti sesuai sekolah.
**Tagline hero:** "Ketika Pendidikan Menjadi Seni" (alternatif: "Tempat Karakter dan Prestasi Bertumbuh").
**Suasana:** premium, sinematik, hangat, elegan. Latar gelap dengan cahaya tembaga/oranye keemasan, tipografi tipis dan lapang, banyak ruang kosong.
**Elemen khas (signature):**
1. Latar gelap cokelat-hitam dengan *glow* hangat di tengah.
2. **Kolase 5 panel foto vertikal** (tengah paling tinggi, mengecil simetris ke kiri-kanan).
3. **Teks vertikal di sisi kiri dan kanan** dengan garis tipis dan pemisah berbentuk belah ketupat (◆).
4. Navigasi minimalis di tengah, logo di kiri, ikon kontak di kanan, diapit garis tipis.
5. Tombol CTA warna tembaga.

---

## 2. Design Tokens

### 2.1 Warna

| Token | Hex | Penggunaan |
|---|---|---|
| `--bg-base` | `#121110` | Latar utama halaman |
| `--bg-elevated` | `#1B1815` | Kartu, popup, footer |
| `--bg-glow` | `#3A2416` | Pusat gradien radial (glow hangat) |
| `--accent` | `#B8642F` | Tombol CTA, aksen utama |
| `--accent-hover` | `#D07A3F` | Hover tombol/link |
| `--accent-soft` | `#F2A65A` | Highlight, ikon aktif, garis aksen |
| `--text-primary` | `#FFFFFF` | Judul, nav |
| `--text-secondary` | `#D9D2CA` | Paragraf, subjudul |
| `--text-muted` | `#8C847B` | Caption, meta |
| `--line` | `rgba(255,255,255,0.55)` | Garis tipis dekoratif |
| `--line-soft` | `rgba(255,255,255,0.15)` | Border kartu/divider |

**Latar halaman:**
```css
background:
  radial-gradient(ellipse at 50% 35%, var(--bg-glow) 0%, transparent 60%),
  var(--bg-base);
```

Tambahkan *vignette* gelap di tepi layar agar fokus ke tengah.

### 2.2 Tipografi

| Peran | Font | Berat | Catatan |
|---|---|---|---|
| Judul (H1/H2) | **Montserrat** (alternatif: Open Sans) | 300–400 | UPPERCASE, letter-spacing 0.02–0.04em |
| Body | **Open Sans** | 400 | Line-height 1.7 |
| Nav / label kecil | Montserrat | 500 | UPPERCASE, 12–13px, letter-spacing 0.08em |
| Teks vertikal | Montserrat | 400 | UPPERCASE, 11–12px, letter-spacing 0.15em |

**Skala ukuran (desktop):** H1 `48–56px`, H2 `36px`, H3 `22px`, body `16px`, caption `13px`.
**Skala ukuran (mobile):** H1 `30px`, H2 `24px`, H3 `18px`, body `15px`.

### 2.3 Spacing, Radius, Efek

- Grid spacing: kelipatan 8px (`8, 16, 24, 32, 48, 64, 96`).
- Container maks `1200px`, padding horizontal `24px` (mobile) / `48px` (desktop).
- Radius: tombol `2px` (hampir kotak, sesuai referensi), kartu `4px`, gambar kolase `0` (tajam).
- Shadow kartu: `0 20px 50px rgba(0,0,0,0.5)`.
- Transisi standar: `all 0.3s ease`.

---

## 3. Komponen Global

### 3.1 Header / Navbar
- Tinggi 72px, transparan di atas hero, menjadi `--bg-base` dengan blur saat scroll.
- **Kiri:** logo sekolah + garis horizontal tipis (±50px) di sampingnya.
- **Tengah:** menu — `BERANDA · TENTANG · GALERI · ARTIKEL · PRODUK · KONTAK`.
- **Kanan:** garis tipis + ikon lokasi, telepon, WhatsApp/Telegram.
- Link aktif: teks putih + garis bawah `--accent-soft` 1px.
- **Mobile:** logo kiri, ikon hamburger kanan; menu tampil sebagai overlay layar penuh dengan link terpusat.

### 3.2 Tombol
- **Primary (CTA):** latar `--accent`, teks putih uppercase 12px, padding `12px 28px`, hover ke `--accent-hover`, naik 2px.
- **Ghost:** border 1px `--line`, teks putih, hover border `--accent-soft`.

### 3.3 Teks Vertikal Samping (Side Rail)
Meniru sisi kiri-kanan pada referensi.
- Posisi `fixed` / `absolute` di tepi konten, hanya tampil di layar ≥ 1024px.
- Teks diputar (`writing-mode: vertical-rl; transform: rotate(180deg)`).
- Format: `garis tipis — TEKS ◆ TEKS ◆ TEKS — garis tipis`.
- **Kiri:** jenjang pendidikan → `SD ◆ SMP ◆ SMA` (atau `TK ◆ SD ◆ SMP`).
- **Kanan:** lokasi → `NAMA KOTA ◆ NAMA JALAN ◆ NO. GEDUNG`.

### 3.4 Kolase 5 Panel (Signature)
- 5 foto vertikal sejajar, jarak antar panel `8px`.
- Tinggi relatif: panel 1 & 5 = 55%, panel 2 & 4 = 75%, panel 3 (tengah) = 100%.
- Rata tengah secara vertikal; tepi luar lebih redup (opacity 0.7 / blur ringan) agar fokus ke tengah.
- Animasi masuk: panel muncul berurutan dari tengah ke luar (stagger 100ms, fade + slide-up).
- **Mobile:** ubah menjadi *carousel* horizontal 3 panel (tengah membesar) atau tampilkan 3 panel saja.
- Sumber gambar: foto siswa, kegiatan belajar, gedung, upacara, ekstrakurikuler; beri *color grade* hangat (oranye/keemasan) agar sesuai tema.

### 3.5 Kartu Umum
- Latar `--bg-elevated`, border `--line-soft`, radius 4px.
- Hover: gambar zoom 1.05, garis bawah aksen muncul, shadow menguat.

### 3.6 Popup / Modal (dipakai Galeri & Produk)
- Overlay `rgba(0,0,0,0.85)` + blur 4px.
- Kotak modal `--bg-elevated`, maks lebar `900px`, animasi fade + scale (0.95 → 1).
- Tombol tutup (✕) di kanan atas; tutup juga dengan klik overlay dan tombol `Esc`.
- Fokus dikunci di dalam modal (*focus trap*), `aria-modal="true"`, scroll body dinonaktifkan saat terbuka.

### 3.7 Footer
- Latar `--bg-elevated`, 3–4 kolom: logo + deskripsi singkat, tautan cepat, kontak, media sosial.
- Baris bawah: garis tipis + `© 2026 Nama Sekolah. Hak cipta dilindungi.`

---

## 4. Struktur Halaman & Rute

| Halaman | Rute | Perilaku |
|---|---|---|
| Beranda | `/` | Halaman utama |
| Tentang | `/tentang` | Profil sekolah |
| Galeri | `/galeri` | **Klik foto → popup (lightbox)** |
| Artikel | `/artikel` | Daftar artikel |
| Detail Artikel | `/artikel/[slug]` | **Klik artikel → halaman baru** |
| Produk | `/produk` | **Klik produk → popup detail** |
| Kontak | `/kontak` | Form dan informasi kontak |

---

## 5. Detail Tiap Halaman

### 5.1 Beranda (`/`)
Mengikuti layout referensi secara langsung.

1. **Hero** (tinggi ±100vh)
   - H1 terpusat: `KETIKA PENDIDIKAN MENJADI SENI` (2 baris).
   - Subjudul: "Sekolah yang membangun karakter, prestasi, dan cinta belajar."
   - Tombol CTA: `DAFTAR SEKARANG` (tautan ke `/kontak`).
   - Kolase 5 panel di bawah CTA.
   - Side rail kiri dan kanan aktif.
2. **Sekilas Sekolah** — 3–4 angka statistik (jumlah siswa, guru, prestasi, tahun berdiri) dengan animasi *count-up*.
3. **Keunggulan** — 3 kartu ikon (kurikulum, fasilitas, ekstrakurikuler).
4. **Galeri Pilihan** — 6 foto, klik membuka popup.
5. **Artikel Terbaru** — 3 kartu, klik menuju halaman detail.
6. **Produk Unggulan** — 3 kartu, klik membuka popup.
7. **CTA Penutup** — "Bergabung bersama kami", tombol ke `/kontak`.

### 5.2 Tentang (`/tentang`)
1. Hero kecil: judul `TENTANG KAMI` + breadcrumb.
2. **Profil & Sejarah** — teks kiri, foto gedung kanan (tata letak dua kolom).
3. **Visi & Misi** — dua blok berdampingan dengan garis aksen vertikal.
4. **Nilai Sekolah** — 4 nilai inti dengan pemisah ◆.
5. **Timeline Sejarah** — garis vertikal tipis dengan titik ◆ per tahun.
6. **Tim Pengajar / Manajemen** — grid 4 kolom, foto hitam-putih yang berubah hangat saat hover.
7. **Fasilitas** — grid foto dengan label.

### 5.3 Galeri (`/galeri`)
- Hero kecil: `GALERI`.
- **Filter kategori** (chip): `Semua · Kegiatan · Prestasi · Fasilitas · Acara`.
- **Grid masonry** 3 kolom (desktop), 2 kolom (tablet), 1–2 kolom (mobile).
- Hover: overlay gelap + judul + ikon perbesar.
- **Klik foto → popup lightbox:**
  - Foto besar (rasio asli), judul, deskripsi singkat, tanggal, kategori.
  - Tombol panah kiri-kanan (dan tombol keyboard ← →) untuk foto sebelumnya/berikutnya.
  - Penghitung `3 / 24`.
  - Tutup dengan ✕, klik overlay, atau `Esc`.
- Lazy loading gambar.

### 5.4 Artikel (`/artikel`)
- Hero kecil: `ARTIKEL`.
- Kolom pencarian + filter kategori (`Berita · Pengumuman · Prestasi · Tips`).
- **Artikel unggulan** (kartu besar horizontal) di atas.
- Grid kartu 3 kolom: gambar 16:9, kategori (warna aksen), judul, ringkasan 2 baris, tanggal, waktu baca.
- Paginasi di bawah (atau tombol "Muat lebih banyak").
- **Klik kartu → navigasi ke halaman baru** `/artikel/[slug]`.

#### Detail Artikel (`/artikel/[slug]`)
- Gambar sampul lebar penuh dengan gradasi gelap di bawah.
- Breadcrumb: `Beranda / Artikel / Judul`.
- Meta: kategori, tanggal, penulis, waktu baca.
- H1 judul artikel.
- Isi artikel: lebar kolom maks `720px`, paragraf `--text-secondary`, subjudul H2/H3, kutipan dengan garis kiri aksen, gambar dalam artikel dengan caption.
- Tombol bagikan (WhatsApp, Facebook, salin tautan).
- Navigasi `← Artikel Sebelumnya | Artikel Berikutnya →`.
- **Artikel Terkait** — 3 kartu.

### 5.5 Produk (`/produk`)
Produk sekolah dapat berupa: seragam, buku, merchandise, paket ekstrakurikuler, atau program/kursus. Sesuaikan dengan kebutuhan.

- Hero kecil: `PRODUK`.
- Filter kategori (chip) + urutkan (terbaru / harga).
- Grid kartu 3–4 kolom: gambar 1:1, nama, harga (warna `--accent-soft`), tombol `LIHAT DETAIL`.
- **Klik kartu → popup detail:**
  - Kiri: galeri gambar (gambar utama + thumbnail).
  - Kanan: nama, kategori, harga, deskripsi, pilihan varian (ukuran/paket), tombol primary `PESAN VIA WHATSAPP`, tombol ghost `TUTUP`.
  - Mobile: popup menjadi *bottom sheet* penuh layar dengan gambar di atas.

### 5.6 Kontak (`/kontak`)
- Hero kecil: `HUBUNGI KAMI`.
- Dua kolom:
  - **Kiri:** informasi — alamat, telepon, email, jam operasional, tautan media sosial, masing-masing dengan ikon garis tipis.
  - **Kanan:** formulir — Nama, Email, No. Telepon, Subjek (dropdown: Informasi umum / Pendaftaran / Kerja sama), Pesan, tombol `KIRIM PESAN`.
- **Peta** (embed Google Maps) di bawah, ditata dengan filter gelap (`filter: grayscale(1) invert(0.9) contrast(0.9)`) agar cocok dengan tema.
- Validasi form: label jelas, pesan error di bawah field (warna `#E5704A`), status sukses berupa toast.

---

## 6. Interaksi & Animasi

- **Scroll reveal:** elemen fade-in + naik 20px saat masuk viewport (durasi 0.6s).
- **Kolase hero:** stagger dari tengah ke luar; efek *parallax* halus saat mouse bergerak (opsional).
- **Hover kartu:** zoom gambar 1.05, garis aksen memanjang di bawah judul.
- **Transisi halaman:** fade 0.3s.
- Hormati `prefers-reduced-motion`: matikan animasi non-esensial.

---

## 7. Responsif

| Breakpoint | Lebar | Penyesuaian |
|---|---|---|
| Mobile | < 640px | 1 kolom, hamburger menu, side rail disembunyikan, kolase menjadi carousel |
| Tablet | 640–1023px | 2 kolom, side rail disembunyikan |
| Desktop | ≥ 1024px | Layout penuh, side rail tampil |
| Wide | ≥ 1440px | Container tetap 1200px, latar glow melebar |

---

## 8. Aksesibilitas & Performa

- Kontras teks terhadap latar minimal WCAG AA (teks putih di atas `#121110` sudah lulus).
- Semua gambar memiliki `alt` yang deskriptif.
- Popup: focus trap, `Esc` untuk menutup, kembalikan fokus ke elemen pemicu.
- Semua elemen interaktif dapat diakses dengan keyboard dan memiliki `:focus-visible` (outline 2px `--accent-soft`).
- Gunakan format gambar WebP/AVIF, `loading="lazy"`, dan ukuran responsif (`srcset`).
- Teks vertikal dan elemen dekoratif diberi `aria-hidden="true"`.

---

## 9. Saran Teknologi (Opsional)

- **Framework:** Next.js (App Router) atau Astro — mendukung rute dinamis `/artikel/[slug]`.
- **Styling:** Tailwind CSS **secara tipis saja**.
  - Token warna, font, dan spacing tetap didefinisikan sebagai CSS variables di `globals.css` (bagian 2), bukan diperluas besar-besaran di `tailwind.config`.
  - Tailwind hanya dipakai untuk utilitas dasar: layout (`flex`, `grid`, `gap`), spacing (`p-*`, `m-*`), responsif (`md:`, `lg:`), dan `hidden`/`block`.
  - Komponen khas (kolase 5 panel, teks vertikal, glow latar, popup, tombol CTA) ditulis dengan CSS biasa di file terpisah atau CSS Module, bukan rangkaian utility class panjang.
  - Hindari `@apply` berlebihan, plugin tambahan, dan class arbitrary (`w-[123px]`) kecuali benar-benar perlu.
  - Tujuannya: markup tetap bersih dan mudah dibaca, desain mudah diubah lewat token.
- **Animasi:** Framer Motion atau GSAP.
- **Modal:** Radix UI Dialog atau Headless UI (sudah menangani a11y dan focus trap).
- **Konten:** file MDX/Markdown atau CMS (Sanity, Strapi) untuk artikel, galeri, dan produk.

---

## 10. Daftar Aset yang Perlu Disiapkan

- Logo sekolah (SVG, versi putih untuk latar gelap).
- 5–7 foto hero/kolase (vertikal, resolusi tinggi, nuansa hangat).
- Foto galeri per kategori.
- Foto gedung, fasilitas, dan tim pengajar.
- Data artikel (judul, sampul, isi, tanggal, kategori).
- Data produk (nama, foto, harga, deskripsi, varian).
- Informasi kontak, koordinat peta, dan tautan media sosial.