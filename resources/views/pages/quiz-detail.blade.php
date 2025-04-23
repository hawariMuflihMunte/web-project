@extends('master')

@section('title', 'Modul '.$quiz->pembelajaran->judul.', '.$quiz->judul)
@section('content')
    @include('layouts.navbar')
    <section class="container py-5">
        {{ $quiz }}
    </section>
    @include('layouts.footer')
@endsection
