@extends('layouts.main')

@section('title', 'HOME')

@section('main')
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('img/slider_1.avif') }}" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>PEACEMAKER</h1>
                        <p>Peacemaker begrudgingly offered to mentor Jaime Reyes in the finer parts of superheroing—though
                            his violent, shoot-first-ask-questions-never nature often conflicted with Jaime’s more
                            pacifistic nature.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/slider_2.avif') }}" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>BLUE BEETLE</h1>
                        <p>Recent college grad Jaime Reyes discovered an ancient relic of alien biotechnology: the Scarab.
                            When the Scarab chose Jaime to be its symbiotic host, he was bestowed with an incredible suit of
                            armor capable of extraordinary and unpredictable powers.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/slider_3.avif') }}" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>BOOSTER GOLD</h1>
                        <p>Booster Gold has fought evil alongside different versions of the Justice League and his good pal
                            Ted Kord, the second Blue Beetle.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
@endsection
