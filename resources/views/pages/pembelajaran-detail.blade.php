@extends('master')

@section('title', 'Modul '.$pembelajaran->judul)
@section('content')
    @include('layouts.navbar')

    <section class="container py-5">
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
                    <section class="max-w-2xl py-3">
                        <h2>Deskripsi</h2>
                        <p class="whitespace-pre-wrap" style="max-width: 76ch;">{{ $pembelajaran->deskripsi }}</p>
                    </section>
                    <section class="max-w-2xl py-3">
                        <h2>Tujuan Pembelajaran</h2>
                        <ul>
                            @foreach(explode(';;', $pembelajaran->tujuan_pembelajaran) as $tujuan)
                                <li>{{ trim($tujuan) }}</li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="max-w-2xl py-3">
                        <h2>Materi Tambahan</h2>
                        <p class="whitespace-pre-wrap">{{ $pembelajaran->materi_tambahan }}</p>
                    </section>
                    <section>
                        <h2>Lampiran</h2>
                        <p>{{ $pembelajaran->lampiran }}</p>
                    </section>
                    {{-- <section>
                        <h2>File</h2>
                        <p>{{ $pembelajaran->gambar }}</p>
                    </section> --}}
                </section>
            </section>
            <section class="col-4 col-lg-4 col-xl-4 col-xxl-4">
                <h3>Tentang Pengajar</h3>
                <fieldset>
                    <h4>&nbsp;&nbsp;<i>{{ $pembelajaran->author->name }}</i></h4>
                </fieldset>
            </section>
        </section>
    </section>
@endsection
