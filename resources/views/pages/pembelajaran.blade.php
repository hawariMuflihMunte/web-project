@extends('master')

@section('title', 'Pembelajaran')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5">
        <section id="services" class="py-2">
            @role ('Admin')
                <section class="py-3 mx-auto w-100 d-flex justify-content-center align-items-center gap-3">
                    <h1 class="d-inline">Pembelajaran</h1>
                    <a href="{{ route('pembelajaran.create') }}" class="btn btn-sm btn-primary">&nbsp;&nbsp;Tambah Modul&nbsp;&nbsp;</a>
                </section>
            @else
                <h1 class="text-center">Pembelajaran</h1>
            @endrole

            <section class="py-5 d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row flex-nowrap flex-lg-wrap flex-xl-wrap flex-xxl-wrap justify-content-center align-items-center gap-5">
                @if (!$pembelajarans->isEmpty())
                    @role('Admin')
                        @foreach ($pembelajarans as $pembelajaran)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                                <div class="card-body">
                                    <h5 class="card-title">Modul {{ $pembelajaran->judul }}</h5>
                                    <p class="card-text text-truncate">{{ $pembelajaran->deskripsi }}</p>
                                    <a href="admin/pembelajaran/{{ $pembelajaran->slug }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($pembelajarans as $pembelajaran)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                                <div class="card-body">
                                    <h5 class="card-title">Modul {{ $pembelajaran->judul }}</h5>
                                    <p class="card-text text-truncate">{{ $pembelajaran->deskripsi }}</p>
                                    <a href="{{ route('pembelajaran.show', $pembelajaran->slug) }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    @endrole
                @else
                    <div class="card text-bg-dark" style="max-width: 500px;">
                        <img src="{{ asset('images/undraw_creative-flow_t3kz.png') }}" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    <p><i>Tidak ada modul pembelajaran saat ini. Silahkan tambah modul pembelajaran.</i></p>
                @endif
            </section>
        </section>
    </div>
    @include('layouts.footer')
@endsection
