@extends('master')

@section('title', 'Modul '.$pembelajaran->judul)
@section('content')
    @include('layouts.navbar')

    <section class="container py-5 mb-5">
        <section class="row">
            <section id="content" class="col-12 col-lg-8 col-xl-8 col-xxl-8">
                <section class="px-3 pb-5 mb-4">
                    <h1>Modul {{ $pembelajaran->judul }}</h1>
                    <section class="d-flex flex-row justify-content-between align-items-center gap-4" style="width: max-content;">
                        <section>
                            <i class="bi bi-person-fill"></i>
                            <span>{{ $pembelajaran->author->name }}</span>
                        </section>
                        <section>
                            <i class="bi bi-calendar3"></i>
                            <span>{{ $pembelajaran->created_at->format('j F Y') }}</span>
                        </section>
                    </section>
                    <section>
                    @if (str_contains($pembelajaran->gambar, '/'))
                        <img src="{{ asset($pembelajaran->gambar) }}" alt="" class="img-fluid">
                    @else
                        <img src="{{ asset('images/undraw_correct-answer_vjt7.png') }}" alt="A correct answer in a pile of questions in a quiz." class="img-fluid">
                    @endif
                    </section>
                    <section class="max-w-2xl py-2">
                        <h2>Deskripsi</h2>
                        <p class="whitespace-pre-wrap" style="max-width: 76ch;">{{ $pembelajaran->deskripsi }}</p>
                    </section>
                    <section class="max-w-2xl py-2">
                        <h2>Tujuan Pembelajaran</h2>
                        <ul>
                            @foreach(explode(';;', $pembelajaran->tujuan_pembelajaran) as $tujuan)
                                <li>{{ trim($tujuan) }}</li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="max-w-2xl py-2 pb-4">
                        <h2>Materi Tambahan</h2>
                        <p class="whitespace-pre-wrap">{{ $pembelajaran->materi_tambahan }}</p>
                    </section>
                    <section>
                        <h2>Lampiran</h2>
                        @if (str_contains($pembelajaran->lampiran, '/'))
                            <a href="{{ asset($pembelajaran->lampiran) }}" class="btn btn-sm btn-primary" download>Download</a>
                        @else
                            <p class="text-muted">Tidak ada lampiran.</p>
                            <img src="{{ asset('images/undraw_private-files_m2bw.png') }}" alt="A compiled document filled with files and folders." class="img-fluid">
                        @endif
                    </section>
                </section>
            </section>
            <section class="col-12 col-lg-4 col-xl-4 col-xxl-4 d-flex flex-column gap-4">
                <section class="border shadow-md rounded-3 p-4">
                    <h3>Tentang Pengajar</h3>
                    <fieldset>
                        <h4 class="text-muted">&nbsp;&nbsp;<i>{{ $pembelajaran->author->name }}</i></h4>
                    </fieldset>
                </section>
                <section class="border shadow-md rounded-3 p-4">
                    <h3>Evaluasi Pembelajaran</h3>
                    <section class="bg-light p-4 rounded-3 mt-4">
                        <h5>Modul {{ $pembelajaran->judul }}</h5>
                        <section class="text-muted">
                            <section class="my-4">
                                <p class="my-1">
                                    <i class="bi bi-hourglass-split"></i>
                                    <span>Durasi: 0 menit</span>
                                </p>
                                <p class="my-1">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Jumlah Soal: 0</span>
                                </p>
                                <p class="my-1">
                                    <i class="bi bi-check-circle"></i>
                                    <span>Total Nilai: 0</span>
                                </p>
                            </section>
                            <button type="button" class="btn bttn-unite bttn-sm bttn-primary d-block w-100" disabled title="Belum ada kuis!">Mulai Kuis</button>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    @include('layouts.footer')
@endsection
