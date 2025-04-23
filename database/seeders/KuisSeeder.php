<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembelajaran;
use App\Models\Quiz;
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

class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembelajarans = Pembelajaran::all();

        foreach ($pembelajarans as $pembelajaran) {
            $kuis = [
                'judul' => 'Kuis ' . $pembelajaran->judul,
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorum sunt quod optio. Non impedit earum aperiam eos accusantium? Rem ratione sed distinctio, facere asperiores dolorem consequatur voluptates alias tenetur.',
                'gambar' => null,
                'modul_pengantar' => $pembelajaran->slug,
                'created_by' => $pembelajaran->created_by,
            ];

            Quiz::create($kuis);
        }
    }
}
