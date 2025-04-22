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
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                    <div class="card-body">
                        <h5 class="card-title">Pembelajaran</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @foreach ($pembelajarans as $pembelajaran)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                        <div class="card-body">
                            <h5 class="card-title">Modul {{ $pembelajaran->judul }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </div>
@endsection
