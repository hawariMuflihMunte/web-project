@extends('master')

@section('title', 'Home Page')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5">
        <section class="py-2 d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row flex-nowrap">
            <section class="py-5 px-2">
                <h1>Selamat Datang di ???</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id minus, ducimus quae odit debitis repellat vel corrupti. Labore, incidunt ex.</p>
                <a href="#services" class="btn bttn-unite bttn-md d-block">&nbsp;&nbsp;Mulai&nbsp;&nbsp;</a>
            </section>
            <section class="p-2">
                <img src="{{ asset('images/undraw_book-writer_ri5u.png') }}" alt="Write something on a book" class="img-fluid">
            </section>
        </section>
        <section id="services" class="py-5">
            <h2 class="text-center">Layanan Yang Tersedia</h2>
            <section class="py-5 d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row flex-nowrap flex-lg-wrap flex-xl-wrap flex-xxl-wrap justify-content-center align-items-center gap-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                    <div class="card-body">
                        <h5 class="card-title">Pembelajaran</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @for ($i = 1; $i <= 5; $i++)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="Reading a book">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endfor
            </section>
        </section>
    </div>
@endsection
