@extends('master')

@section('title', 'Kuis '.$quiz->judul)
@section('content')
    @include('layouts.navbar')
    <section class="container py-5 my-4">
        <section class="container border rounded-3 shadow-md p-4">
            <section class="d-flex justify-content-between align-items-center">
                <h1>Modul {{ $quiz->pembelajaran->judul }}</h1>
                <section class="bg-light p-2 rounded-3">
                    <i class="bi bi-hourglass-split"></i>
                    <span>1:00</span>
                </section>
            </section>
            <section class="my-3 mb-5">
                <section class="d-flex justify-content-between align-items-center">
                    <h5>Pertanyaan 0 dari 0</h5>
                    <section class="bg-info p-2 rounded-3">
                        20 poin
                    </section>
                </section>
            </section>
            <section class="my-4">
                <section class="my-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptate ab delectus vel laudantium nemo fugit aperiam atque doloribus quibusdam quam vitae, eligendi excepturi ullam odio ea ex.</p>
                </section>
                <form action="" class="d-flex flex-column gap-3">
                    <div class="form-check bg-light p-3 rounded-3 ps-5">
                        <input class="form-check-input" type="radio" name="radioDefault" id="jawaban1" value="1">
                        <label class="form-check-label" for="jawaban1">
                            Jawaban #1
                        </label>
                    </div>
                    <div class="form-check bg-light p-3 rounded-3 ps-5">
                        <input class="form-check-input" type="radio" name="radioDefault" id="jawaban2" value="2">
                        <label class="form-check-label" for="jawaban2">
                            Jawaban #2
                        </label>
                    </div>
                    <div class="form-check bg-light p-3 rounded-3 ps-5">
                        <input class="form-check-input" type="radio" name="radioDefault" id="jawaban3" value="3">
                        <label class="form-check-label" for="jawaban3">
                            Jawaban #3
                        </label>
                    </div>
                    <div class="form-check bg-light p-3 rounded-3 ps-5">
                        <input class="form-check-input" type="radio" name="radioDefault" id="jawaban4" value="4">
                        <label class="form-check-label" for="jawaban4">
                            Jawaban #4
                        </label>
                    </div>
                </form>
            </section>
            <section class="d-flex justify-content-between mt-5">
                <button type="submit" class="btn btn-md btn-secondary">Sebelumnya</button>
                <button type="submit" class="btn btn-md btn-primary">Selanjutnya</button>
            </section>
        </section>
    </section>
    @include('layouts.footer')
@endsection
