@extends('master')

@section('title', 'Pembelajaran')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5">
        <section id="services" class="py-5">
            <h2 class="text-center">Pembelajaran</h2>
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
