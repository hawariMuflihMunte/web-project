@extends('master')

@section('title', 'Tambah Modul Pembelajaran')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5">
        <fieldset class="border p-4 rounded shadow-md w-100">
            <legend class="text-center">Tambah Modul Pembelajaran</legend>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('pembelajaran.store') }}" method="POST" class="py-2" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <section class="d-flex flex-row w-100 justify-content-between align-items-start gap-3">
                    <section class="d-flex flex-column w-100 align-items-baseline">
                        <div class="mb-4 w-100">
                            <label for="judul" class="form-label">Judul<span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" id="judul" name="judul" required value="{{ old('judul') }}">
                        </div>
                        <div class="mb-4 w-100">
                            <label for="deskripsi" class="form-label">Deskripsi<span class="text-danger">*</span></label>
                            <textarea class="form-control w-100" id="deskripsi" name="deskripsi" rows="8" required>{{ old('deskripsi') }}</textarea>
                        </div>
                    </section>
                    <section class="d-flex flex-column w-100">
                        <div class="mb-4 w-100">
                            <label for="tujuan_pembelajaran" class="form-label">Tujuan Pembelajaran</label>
                            <textarea class="form-control" id="tujuan_pembelajaran" name="tujuan_pembelajaran" rows="3">Meningkatkan Motivasi.;; Meningkatkan Pengetahuan.;; Meningkatkan Keterampilan.</textarea>
                            <small class="form-text text-primary">Isi dengan format seperti contoh berikut: "Meningkatkan Motivasi.;; Meningkatkan Pengetahuan.;; Meningkatkan Keterampilan.".</small>
                            <br>
                            <small class="form-text text-muted">Gunakan <kbd>;;</kbd> untuk memisahkan poin-poin tujuan.</small>
                        </div>
                        <div class="mb-4 w-100">
                            <label for="materi_tambahan" class="form-label">Materi Tambahan/Penjelasan Tambahan</label>
                            <textarea class="form-control" id="materi_tambahan" name="materi_tambahan" rows="3">{{ old('materi_tambahan') }}</textarea>
                        </div>
                    </section>
                </section>
                <section class="d-flex flex-row w-100 justify-content-between align-items-start gap-3 py-3">
                    <div class="mb-4 w-100">
                        <label for="lampiran" class="form-label">Lampiran</label>
                        <input type="file" class="form-control w-100" id="lampiran" name="lampiran">
                    </div>
                    <div class="mb-4 w-100">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control w-100" id="gambar" name="gambar">
                    </div>
                </section>
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('pembelajaran.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </fieldset>
    </div>
@endsection
