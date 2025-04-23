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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('modul_pengantar')->comment("Modul pengantar yang terkait dengan kuis ini.");
            $table->string('created_by')->comment("User yang membuat modul pembelajaran.");
            $table->timestamps();

            $table->foreign('modul_pengantar')->references('slug')->on('pembelajarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('slug')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
