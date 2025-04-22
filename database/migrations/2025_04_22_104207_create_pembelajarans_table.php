<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary(true);
            $table->string('slug')->unique();
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('tujuan_pembelajaran')->nullable(true);
            $table->text('materi_tambahan')->nullable(true)->comment("Materi tambahan atau penjelasan tambahan terkait dengan modul.");
            $table->string('lampiran')->nullable(true);
            $table->string('gambar')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelajarans');
    }
};
