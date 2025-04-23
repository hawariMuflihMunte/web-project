<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembelajaran;
use App\Models\Quiz;

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
