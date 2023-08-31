@php
    $links = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<header class=" sticky-top">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <!-- logo -->
                <div class="logo"><img src="{{ asset('img/dc-logo.png') }}" alt="logo"></div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($links as $link)
                        <li class="nav-item @if (Route::is($link)) active @endif ">
                            <a class="nav-link "
                                href="@if ($link === 'comics') {{ route('comics') }} @endif">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
