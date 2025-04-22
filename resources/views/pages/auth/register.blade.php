@extends('master')

@section('title', 'Daftar')
@section('content')
    <section class="d-flex w-100 justify-content-center align-items-center" style="height: calc(100vh - 20px);">
        <fieldset class="border p-4 rounded shadow-md" style="min-width: 320px; max-width: 450px; width: 100%;">
            <legend class="text-center">Daftar</legend>
            <hr>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <p class="my-0">Sudah punya akun? <a href="{{ route('login.index') }}" class="btn btn-link">Masuk</a></p>
                </div>
            </form>
        </fieldset>
    </section>
@endsection
