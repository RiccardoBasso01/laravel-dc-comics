@php
    $links = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<header class=" sticky-top">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            {{-- Logo --}}
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="logo"><img src="{{ asset('img/dc-logo.png') }}" alt="DC logo"></div>
            </a>

            {{-- Hamburger-menu --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Navbar --}}
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($links as $link)
                        <li class="nav-item @if (request()->routeIs($link . '*')) active @endif ">
                            <a class="nav-link" {{-- Funziona solo il link ai comics perchè al momento non esiste nessuna rotta per gli altri link della navbar --}}
                                href="@if ($link === 'comics') {{ route('comics.index') }} @endif">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
