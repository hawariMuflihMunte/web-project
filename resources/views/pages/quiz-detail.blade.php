@extends('master')

@section('title', 'Modul '.$quiz->pembelajaran->judul.', '.$quiz->judul)
@section('content')
    @include('layouts.navbar')
    <section class="container py-5 my-5">
        <div class="container rounded-4 border p-4 shadow-sm">
            <h1>{{ $quiz->judul }}</h1>
            <section class="w-100">
                @if ($quiz->gambar)
                    <img src="{{ asset($quiz->gambar) }}" alt="" class="img-fluid">
                @else
                    <img src="{{ asset('images/undraw_preparation_59f0.png') }}" alt="A man and a woman preparing for examination." class="img-fluid">
                @endif
            </section>
            <section class="py-3">
                <h2 class="mb-3">Deskripsi</h2>
                <p style="max-width: 60ch;">{{ $quiz->deskripsi }}</p>
            </section>
            <section class="py-3">
                <h2 class="mb-3">Informasi</h2>
                <section class="d-flex flex-column justify-content-center align-items-start gap-3">
                    <section class="bg-light p-3 rounded-3">
                        <i class="bi bi-hourglass-split"></i>
                        <span>0 menit</span>
                    </section>
                    <section class="bg-light p-3 rounded-3">
                        <i class="bi bi-check-circle"></i>
                        <span>0 soal</span>
                    </section>
                </section>
            </section>
            <section class="py-3">
                <h2 class="mb-3">Instruksi</h2>
                <ul class="list-unstyled bg-light p-4 rounded-3" style="width: max-content;">
                    <li class=""><i class="bi bi-asterisk" style="font-size: 10px;"></i> Kerjakan soal dengan benar, jujur, teliti, dan baik.</li>
                    <li class="mt-2"><i class="bi bi-asterisk" style="font-size: 10px;"></i> Pilih satu jawaban yang paling tepat dari opsi yang tersedia.</li>
                    <li class="mt-2"><i class="bi bi-asterisk" style="font-size: 10px;"></i> Waktu akan berjalan otomatis saat quiz dimulai.</li>
                    <li class="mt-2"><i class="bi bi-asterisk" style="font-size: 10px;"></i> Quiz akan berakhir secara otomatis saat waktu habis.</li>
                    <li class="mt-2"><i class="bi bi-asterisk" style="font-size: 10px;"></i> Pastikan koneksi internet Anda stabil selama mengerjakan.</li>
                </ul>
            </section>
            <section class="py-3 mb-5">
                <hr>
                <section>
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>
                </section>
            </section>
            <section class="py-1 mt-4 row">
                <section class="col-12 col-lg-8 col-xl-8 col-xxl-8">
                    <a href="{{ route('pembelajaran.show', $quiz->pembelajaran->slug) }}" class="btn btn-outline-secondary btn-md w-100"><i class="bi bi-arrow-left-short"></i> Kembali</a>
                </section>
                <section class="col-12 col-lg-4 col-xl-4 col-xxl-4 mt-3 mt-lg-0 mt-xl-0 mt-xxl-0">
                    <a href="{{ route('quiz.edit', $quiz->slug) }}" class="btn bttn-unite bttn-md w-100">Mulai</a>
                </section>
            </section>
        </div>
    </section>
    @include('layouts.footer')
@endsection
