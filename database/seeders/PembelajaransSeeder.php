<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembelajaran;

class PembelajaransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembelajarans = array(
            array(
                "id" => 1,
                "slug" => "cerita-pendek",
                "judul" => "Cerita Pendek",
                "deskripsi" => "Pada modul ajar di topik “ Cerita Pendek” membahas mengenai kebudayaan daerah yang dituangkan dalam bentuk cerita-cerita pendek yang harapannya untuk membukakan gagasan terhadap keilmuan sastra daerah yang dapat lebih dikenalkan dan dimaknai lebih sederhana karena berbentuk cerita pendek yang menarik.",
                "tujuan_pembelajaran" => "Meningkatkan Motivasi.;; Meningkatkan Pengetahuan.;; Meningkatkan Keterampilan.",
                "materi_tambahan" => NULL,
                "lampiran" => NULL,
                "gambar" => NULL,
                "created_by" => "64e1b8d3",
                "created_at" => "2025-04-23 02:56:19",
                "updated_at" => "2025-04-23 02:56:19",
            ),
        );

        foreach ($pembelajarans as $pembelajaran) {
            Pembelajaran::create($pembelajaran);
        }
    }
}
