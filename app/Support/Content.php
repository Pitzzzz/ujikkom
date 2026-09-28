<?php

namespace App\Support;

class Content
{
    public static function gallery(): array
    {
        return [
            ['src' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=900&h=1200&fit=crop', 'title' => 'Belajar di Kelas', 'desc' => 'Suasana pembelajaran interaktif yang hangat dan fokus.', 'date' => '12 Mar 2026', 'cat' => 'Kegiatan'],
            ['src' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=900&h=1200&fit=crop', 'title' => 'Hari Wisuda', 'desc' => 'Momen kelulusan yang penuh kebanggaan bagi seluruh warga sekolah.', 'date' => '28 Jun 2025', 'cat' => 'Acara'],
            ['src' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=900&h=1200&fit=crop', 'title' => 'Gedung Utama', 'desc' => 'Fasilitas belajar yang nyaman dengan arsitektur terbuka.', 'date' => '05 Jan 2026', 'cat' => 'Fasilitas'],
            ['src' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=900&h=1200&fit=crop', 'title' => 'Perpustakaan', 'desc' => 'Ruang baca yang tenang untuk menumbuhkan budaya literasi.', 'date' => '18 Feb 2026', 'cat' => 'Fasilitas'],
            ['src' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=900&h=1200&fit=crop', 'title' => 'Kompetisi Sains', 'desc' => 'Prestasi siswa di ajang olimpiade tingkat kota.', 'date' => '03 Sep 2025', 'cat' => 'Prestasi'],
            ['src' => 'https://images.unsplash.com/photo-1577896851231-70ef042ee0e0?w=900&h=1200&fit=crop', 'title' => 'Upacara Bendera', 'desc' => 'Menanamkan disiplin dan cinta tanah air setiap Senin pagi.', 'date' => '22 Sep 2025', 'cat' => 'Kegiatan'],
            ['src' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=900&h=1200&fit=crop', 'title' => 'Laboratorium', 'desc' => 'Eksperimen sains yang membuka rasa ingin tahu.', 'date' => '14 Apr 2026', 'cat' => 'Fasilitas'],
            ['src' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=900&h=1200&fit=crop', 'title' => 'Pameran Karya', 'desc' => 'Karya seni siswa dipamerkan untuk publik sekolah.', 'date' => '08 Mei 2026', 'cat' => 'Acara'],
            ['src' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=900&h=1200&fit=crop', 'title' => 'Tim Basket', 'desc' => 'Latihan rutin menuju kejuaraan antar sekolah.', 'date' => '02 Feb 2026', 'cat' => 'Prestasi'],
            ['src' => 'https://images.unsplash.com/photo-1588075592448-701ba8080a32?w=900&h=1200&fit=crop', 'title' => 'Diskusi Kelompok', 'desc' => 'Kolaborasi yang menumbuhkan empati dan argumen sehat.', 'date' => '19 Mar 2026', 'cat' => 'Kegiatan'],
            ['src' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=900&h=1100&fit=crop&sat=-20', 'title' => 'Ruang Baca', 'desc' => 'Sudut tenang untuk membaca dan menulis.', 'date' => '11 Jan 2026', 'cat' => 'Fasilitas'],
            ['src' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=900&h=1200&fit=crop', 'title' => 'Festival Budaya', 'desc' => 'Merayakan keberagaman melalui tarian dan musik.', 'date' => '30 Agu 2025', 'cat' => 'Acara'],
        ];
    }

    public static function articles(): array
    {
        return [
            [
                'slug' => 'festival-seni-sekolah-2026',
                'img' => 'https://images.unsplash.com/photo-1514320291840-b9a56d2d8bd8?w=1400&h=900&fit=crop',
                'cat' => 'Berita',
                'title' => 'Festival Seni Sekolah 2026',
                'excerpt' => 'Ratusan siswa menampilkan karya seni, musik, dan teater dalam perayaan tahunan yang merayakan keberanian berkreasi.',
                'date' => '20 Sep 2026',
                'author' => 'Redaksi HM',
                'read' => '4 mnt',
                'body' => [
                    'Setiap tahun, panggung sekolah berubah menjadi ruang yang lebih luas dari sekadar aula. Festival Seni Sekolah 2026 menghadirkan lukisan, musik kamar, teater pendek, dan instalasi yang dibuat lintas jenjang.',
                    'Bukan soal siapa yang paling menonjol. Yang dirayakan adalah keberanian tampil — dan cara siswa saling menyangga di belakang layar.',
                    'Tahun ini, tema “Komposisi yang Belum Selesai” mengajak penonton melihat proses, bukan hanya hasil akhir. Sketsa, latihan, dan catatan latihan ikut dipamerkan.',
                ],
                'quote' => 'Seni di sekolah bukan ekstra. Seni adalah cara membaca dunia.',
            ],
            [
                'slug' => 'juara-olimpiade-matematika',
                'img' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=1400&h=900&fit=crop',
                'cat' => 'Prestasi',
                'title' => 'Juara Olimpiade Matematika',
                'excerpt' => 'Tim olimpiade membawa pulang medali emas tingkat provinsi untuk ketiga kalinya.',
                'date' => '12 Sep 2026',
                'author' => 'Bidang Prestasi',
                'read' => '3 mnt',
                'body' => [
                    'Dengan persiapan yang tenang dan konsisten, tim olimpiade matematika kembali menorehkan emas di tingkat provinsi.',
                    'Latihan bukan hanya soal soal-soal sulit, tetapi juga cara mengelola tekanan dan saling mengoreksi tanpa menghakimi.',
                ],
                'quote' => 'Ketelitian tumbuh dari kerendahan hati untuk diperbaiki.',
            ],
            [
                'slug' => 'tips-belajar-efektif',
                'img' => 'https://images.unsplash.com/photo-1456513080800-b54747fb42ba?w=1400&h=900&fit=crop',
                'cat' => 'Tips',
                'title' => 'Tips Belajar Efektif di Rumah',
                'excerpt' => 'Panduan singkat dari guru bimbingan untuk menjaga fokus tanpa kehilangan rasa ingin tahu.',
                'date' => '05 Sep 2026',
                'author' => 'Guru BK',
                'read' => '5 mnt',
                'body' => [
                    'Belajar di rumah sering gagal bukan karena malas, melainkan karena ruang dan ritme tidak ditata.',
                    'Mulai dari blok waktu pendek, istirahat sadar, dan satu tujuan per sesi. Hindari multitasking yang menyamar sebagai produktivitas.',
                ],
                'quote' => 'Fokus adalah otot. Ia tumbuh jika dilatih pelan-pelan.',
            ],
            [
                'slug' => 'pengumuman-ppdb-2026',
                'img' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1400&h=900&fit=crop',
                'cat' => 'Pengumuman',
                'title' => 'Pengumuman PPDB 2026',
                'excerpt' => 'Jadwal, jalur, dan dokumen yang perlu disiapkan untuk calon peserta didik baru.',
                'date' => '01 Sep 2026',
                'author' => 'Panitia PPDB',
                'read' => '2 mnt',
                'body' => [
                    'Pendaftaran peserta didik baru tahun ajaran 2026/2027 dibuka secara bertahap. Pastikan dokumen identitas dan rapor tersedia sejak awal.',
                    'Informasi lengkap dapat dikonfirmasi melalui halaman kontak atau datang langsung ke sekretariat sekolah.',
                ],
                'quote' => null,
            ],
            [
                'slug' => 'kebun-sekolah-hijau',
                'img' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=1400&h=900&fit=crop',
                'cat' => 'Berita',
                'title' => 'Kebun Sekolah yang Hijau Kembali',
                'excerpt' => 'Program literasi ekologi mengubah lahan kosong menjadi ruang belajar hidup.',
                'date' => '22 Agu 2026',
                'author' => 'Komunitas Hijau',
                'read' => '4 mnt',
                'body' => [
                    'Siswa menanam, mencatat pertumbuhan, dan belajar bahwa merawat tanah adalah bagian dari merawat diri.',
                ],
                'quote' => 'Sekolah yang baik juga mengajarkan cara menunggu.',
            ],
            [
                'slug' => 'paduan-suara-nasional',
                'img' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=1400&h=900&fit=crop',
                'cat' => 'Prestasi',
                'title' => 'Paduan Suara ke Panggung Nasional',
                'excerpt' => 'Paduan suara sekolah lolos babak final festival paduan suara pelajar.',
                'date' => '10 Agu 2026',
                'author' => 'Ekskul Musik',
                'read' => '3 mnt',
                'body' => [
                    'Harmoni yang dibangun di ruang latihan kecil kini bersiap menghadapi panggung yang lebih luas.',
                ],
                'quote' => null,
            ],
        ];
    }

    public static function article(string $slug): ?array
    {
        foreach (self::articles() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }

        return null;
    }

    public static function products(): array
    {
        return [
            ['img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=900&h=900&fit=crop', 'cat' => 'Merchandise', 'title' => 'Tas Sekolah Premium', 'desc' => 'Tas berbahan tahan lama dengan logo sekolah bordir. Cocok untuk kegiatan harian dan ekstrakurikuler.', 'price' => 'Rp 185.000', 'priceValue' => 185000, 'no' => '01', 'variants' => ['Abu', 'Hitam', 'Navy']],
            ['img' => 'https://images.unsplash.com/photo-1588072432836-e10032774350?w=900&h=900&fit=crop', 'cat' => 'Seragam', 'title' => 'Seragam Olahraga', 'desc' => 'Set jersey dan celana olahraga breathable, tersedia ukuran S–XXL.', 'price' => 'Rp 220.000', 'priceValue' => 220000, 'no' => '02', 'variants' => ['S', 'M', 'L', 'XL', 'XXL']],
            ['img' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=900&h=900&fit=crop', 'cat' => 'Buku', 'title' => 'Buku Panduan Literasi', 'desc' => 'Kumpulan panduan membaca dan menulis kreatif untuk siswa SMP–SMA.', 'price' => 'Rp 95.000', 'priceValue' => 95000, 'no' => '03', 'variants' => ['Edisi Standar']],
            ['img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=900&h=900&fit=crop', 'cat' => 'Merchandise', 'title' => 'Kaos Alumni', 'desc' => 'Kaos katun premium dengan tipografi identitas sekolah.', 'price' => 'Rp 145.000', 'priceValue' => 145000, 'no' => '04', 'variants' => ['S', 'M', 'L', 'XL']],
            ['img' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=900&h=900&fit=crop', 'cat' => 'Buku', 'title' => 'Jurnal Siswa', 'desc' => 'Buku catatan harian untuk refleksi belajar dan proyek pribadi.', 'price' => 'Rp 65.000', 'priceValue' => 65000, 'no' => '05', 'variants' => ['Polos', 'Bertanggal']],
            ['img' => 'https://images.unsplash.com/photo-1517649763962-0c623066027c?w=900&h=900&fit=crop', 'cat' => 'Program', 'title' => 'Paket Ekskul Musik', 'desc' => 'Sesi latihan 8 pertemuan dengan mentor musik sekolah.', 'price' => 'Rp 480.000', 'priceValue' => 480000, 'no' => '06', 'variants' => ['Vokal', 'Gitar', 'Piano']],
        ];
    }
}
