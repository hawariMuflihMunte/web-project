@extends('master')

@section('title', 'Home Page')
@section('content')
    @include('layouts.navbar')
    <div class="container py-5">
        <section class="py-2 d-flex">
            <section>
                <h1>Selamat Datang di ???</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id minus, ducimus quae odit debitis repellat vel corrupti. Labore, incidunt ex.</p>
                <a href="" class="btn b"></a>
            </section>
            <section>
                <img src="{{ asset('images/undraw_book-writer_ri5u.png') }}" alt="" class="img-fluid">
            </section>
        </section>
    </div>
@endsection
