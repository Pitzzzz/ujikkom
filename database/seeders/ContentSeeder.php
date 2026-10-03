<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use RuntimeException;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            [
                'slug' => 'proses-kreatif-di-interlochen',
                'image' => $this->image('1.jfif'),
                'category' => 'Berita',
                'date' => now()->subDays(2)->toDateString(),
                'title' => 'Proses Kreatif di Interlochen',
                'author' => 'Redaksi HM',
                'read_time' => '4 mnt',
                'excerpt' => 'Ruang belajar seni mendorong siswa untuk bereksperimen, berkolaborasi, dan menemukan cara baru untuk berkarya.',
                'content' => '<p>Setiap karya berawal dari rasa ingin tahu. Di lingkungan belajar yang terbuka, siswa berlatih mengembangkan gagasan menjadi karya yang matang.</p><p>Proses ini memadukan eksplorasi, latihan, dan umpan balik dari komunitas belajar.</p>',
                'quote' => 'Karya yang baik tumbuh dari keberanian untuk mencoba.',
            ],
            [
                'slug' => 'belajar-seni-dalam-kolaborasi',
                'image' => $this->image('13.jfif'),
                'category' => 'Tips',
                'date' => now()->subDays(5)->toDateString(),
                'title' => 'Belajar Seni dalam Kolaborasi',
                'author' => 'Redaksi HM',
                'read_time' => '3 mnt',
                'excerpt' => 'Kolaborasi membantu seniman muda bertukar perspektif dan memperluas kemungkinan sebuah gagasan.',
                'content' => '<p>Bekerja bersama mengajarkan siswa untuk mendengarkan, menyampaikan ide, dan menyatukan beragam sudut pandang.</p><p>Kebiasaan ini membuat proses berkarya menjadi lebih kaya sekaligus membangun rasa saling percaya.</p>',
                'quote' => null,
            ],
            [
                'slug' => 'panggung-untuk-karya-muda',
                'image' => $this->image('16.jfif'),
                'category' => 'Prestasi',
                'date' => now()->subDays(9)->toDateString(),
                'title' => 'Panggung untuk Karya Muda',
                'author' => 'Redaksi HM',
                'read_time' => '5 mnt',
                'excerpt' => 'Pertunjukan dan pameran menjadi ruang bagi siswa untuk membagikan proses serta hasil karya mereka.',
                'content' => '<p>Kesempatan tampil memberi siswa pengalaman berharga dalam menyiapkan dan menyampaikan karya kepada publik.</p><p>Di balik setiap penampilan ada latihan, kerja tim, dan banyak proses belajar.</p>',
                'quote' => null,
            ],
            [
                'slug' => 'ruang-berkarya-setiap-hari',
                'image' => $this->image('18.jfif'),
                'category' => 'Pengumuman',
                'date' => now()->subDays(14)->toDateString(),
                'title' => 'Ruang Berkarya Setiap Hari',
                'author' => 'Redaksi HM',
                'read_time' => '3 mnt',
                'excerpt' => 'Beragam ruang dan fasilitas mendukung kegiatan belajar, latihan, serta eksplorasi seni sehari-hari.',
                'content' => '<p>Ruang belajar yang dirancang untuk praktik membantu siswa menghubungkan teori dengan pengalaman langsung.</p><p>Fasilitas digunakan untuk mencoba teknik, menyelesaikan proyek, dan berbagi hasil karya.</p>',
                'quote' => null,
            ],
        ] as $article) {
            Article::firstOrCreate(['slug' => $article['slug']], $article);
        }

        foreach ([
            ['title' => 'Kaos Interlochen', 'image' => $this->image('2.jfif'), 'category' => 'Merchandise', 'price' => 150000, 'variants' => ['S', 'M', 'L', 'XL'], 'short_description' => 'Kaos nyaman untuk kegiatan dan keseharian.', 'sort_order' => 1],
            ['title' => 'Jaket Kampus', 'image' => $this->image('5.jfif'), 'category' => 'Seragam', 'price' => 425000, 'variants' => ['S', 'M', 'L', 'XL'], 'short_description' => 'Jaket kampus untuk menemani aktivitas belajar.', 'sort_order' => 2],
            ['title' => 'Buku Sketsa', 'image' => $this->image('8.jfif'), 'category' => 'Buku', 'price' => 85000, 'variants' => [], 'short_description' => 'Buku untuk mencatat ide dan membuat sketsa.', 'sort_order' => 3],
            ['title' => 'Paket Alat Berkarya', 'image' => $this->image('20.jfif'), 'category' => 'Program', 'price' => 225000, 'variants' => ['Dasar', 'Lengkap'], 'short_description' => 'Perlengkapan pilihan untuk memulai proyek kreatif.', 'sort_order' => 4],
        ] as $product) {
            Product::firstOrCreate(['title' => $product['title']], $product);
        }

        foreach ([
            ['title' => 'Eksplorasi Karya di Studio', 'image' => $this->image('1.jfif'), 'category' => 'Kegiatan', 'date' => now()->subDays(2)->toDateString(), 'short_description' => 'Siswa bereksperimen dengan gagasan dan medium baru.'],
            ['title' => 'Momen di Atas Panggung', 'image' => $this->image('13.jfif'), 'category' => 'Prestasi', 'date' => now()->subDays(5)->toDateString(), 'short_description' => 'Persiapan dan penampilan karya bersama komunitas.'],
            ['title' => 'Belajar di Ruang Terbuka', 'image' => $this->image('16.jfif'), 'category' => 'Fasilitas', 'date' => now()->subDays(8)->toDateString(), 'short_description' => 'Lingkungan kampus menjadi bagian dari pengalaman belajar.'],
            ['title' => 'Pertemuan Komunitas', 'image' => $this->image('17.jfif'), 'category' => 'Acara', 'date' => now()->subDays(11)->toDateString(), 'short_description' => 'Berbagi cerita dan gagasan dalam kegiatan komunitas.'],
            ['title' => 'Latihan Bersama', 'image' => $this->image('19.jfif'), 'category' => 'Kegiatan', 'date' => now()->subDays(14)->toDateString(), 'short_description' => 'Proses latihan membangun keterampilan dan kekompakan.'],
            ['title' => 'Pameran Karya Siswa', 'image' => $this->image('22.jfif'), 'category' => 'Prestasi', 'date' => now()->subDays(18)->toDateString(), 'short_description' => 'Apresiasi untuk karya dan proses kreatif siswa.'],
        ] as $gallery) {
            Gallery::firstOrCreate(['title' => $gallery['title']], $gallery);
        }
    }

    private function image(string $filename): string
    {
        $path = 'seeded/'.$filename;

        if (! Storage::disk('public')->exists($path)) {
            $source = public_path('images/'.$filename);

            if (! is_file($source) || ! Storage::disk('public')->put($path, file_get_contents($source))) {
                throw new RuntimeException("Unable to seed image [{$filename}].");
            }
        }

        return $path;
    }
}