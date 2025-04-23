<nav class="navbar navbar-expand-lg bg-body-tertiary py-4 px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME', 'Web Project') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </li>
                @if (auth()->guest() || !auth()->check())
                    <li class="nav-item">
                        <a class="btn bttn-unite bttn-sm" href="{{ route('login.index') }}">Masuk</a>
                    </li>
                @else
                    <li class="nav-item">
                        <form action="{{ route('login.destroy') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin keluar?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bttn-unite bttn-sm bttn-danger">Keluar</button>
                        </form>
                        {{-- <a class="btn bttn-unite bttn-sm bttn-danger" href="{{ route('login.destroy') }}">Keluar</a> --}}
                    </li>
                @endif
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
