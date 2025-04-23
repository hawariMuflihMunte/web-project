<nav class="navbar navbar-expand-lg bg-body-tertiary py-4 px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME', 'Web Project') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" {{ request()->is('/') ? "aria-current='page'" : '' }} href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (auth()->guest() || !auth()->check())
                    <li class="nav-item">
                        <a class="btn bttn-unite bttn-sm" href="{{ route('login.index') }}">Masuk</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('login.destroy') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin keluar?');" class="dropdown-item bg-danger">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-white">Keluar</button>
                                </form>
                            </li>
                        </ul>
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
