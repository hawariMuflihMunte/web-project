@extends('master')

@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5 mb-5">
        <section class="py-2 d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row flex-nowrap">
            <section class="py-5 px-2">
                <h1>Selamat Datang di {{ env('APP_NAME', 'Web Project') }}.</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id minus, ducimus quae odit debitis repellat vel corrupti. Labore, incidunt ex.</p>
                <section class="d-flex flex-column gap-3 py-3 px-1">
                    <a href="#services" class="btn bttn-unite bttn-md d-block">&nbsp;&nbsp;Mulai&nbsp;&nbsp;</a>
                    @if (auth()->guest() || !auth()->check())
                        <a href="{{ route('register.index') }}" class="btn bttn-minimal bttn-sm bttn-primary w-50 mx-auto">&nbsp;&nbsp;Bergabung <i class="bi bi-arrow-right-short"></i>&nbsp;&nbsp;</a>
                    @endif
                </section>
            </section>
            <section class="p-2">
                <img src="{{ asset('images/undraw_book-writer_ri5u.png') }}" alt="A man is writing something on a book." class="img-fluid">
            </section>
        </section>
        <section id="services" class="py-5 bg-light rounded-5 my-4">
            <h2 class="text-center">Layanan Yang Tersedia</h2>
            <section class="py-5 d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row flex-nowrap flex-lg-wrap flex-xl-wrap flex-xxl-wrap justify-content-center align-items-center gap-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/undraw_reading-a-book_4cap.png') }}" class="card-img-top" alt="A girl is reading a book.">
                    <div class="card-body">
                        <h5 class="card-title">Pembelajaran</h5>
                        <p class="card-text">Akses modul pembelajaran.</p>
                        <a href="{{ route('pembelajaran.index') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </section>
        </section>
        <section id="about" class="py-5 my-4">
            <h2 class="text-center">Tentang Kami</h2>
            <section class="row py-5">
                <section class="col-12 col-lg-7 col-xl-7 col-xxl-7">
                    <p class="text-end" style="max-width: 60ch;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores illum aut cupiditate officiis voluptas sunt expedita maiores nostrum laboriosam odit veniam modi molestiae a accusantium, enim mollitia animi ducimus? Eos incidunt velit, architecto vero temporibus tenetur dolor totam iusto provident.</p>
                </section>
                <section class="col-12 col-lg-5 col-xl-5 col-xxl-5">
                    <img src="{{ asset('images/undraw_building-a-website_1wrp.png') }}" alt="A man is building a website." class="img-fluid">
                </section>
            </section>
        </section>
        <section id="contact" class="py-5 my-4">
            <h2 class="text-center">Hubungi Kami</h2>
            <section class="row py-5">
                <section class="col-12 col-lg-5 col-xl-5 col-xxl-5">
                    <img src="{{ asset('images/undraw_work-friends_g4mn.png') }}" alt="Colleagues are chatting together." class="img-fluid">
                </section>
                <section class="col-12 col-lg-7 col-xl-7 col-xxl-7">
                    <p class="text-start" style="max-width: 60ch;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quos corrupti suscipit.</p>
                </section>
            </section>
        </section>
    </div>
    @include('layouts.footer')
@endsection
