@extends('layouts.main')

@section('title', 'COMICS')


@section('main')
    <main>
        <div class="container-xl my-5">
            {{-- Singolo Comic --}}
            <div class="comics">
                <div class="row">
                    {{-- Immagine (se presente) --}}
                    @if ($comic->thumb)
                        <div class="col-4">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">
                        </div>
                    @endif

                    {{-- Descrizione --}}
                    <div class="col-{{ $comic->thumb ? '8' : '12' }}">
                        <h5 class="card-subtitle">{{ Str::of($comic->type)->upper() }}</h5>
                        <h2 class="card-title fw-bold text-black">{{ $comic->title }}</h2>
                        <div class="description my-5">{!! $comic->description !!}</div>
                        <button class="card-button me-3">find a comic shop near you</button>
                        <button class="card-button">join dc universe infinite</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Dettagli del fumetto --}}
        <section id="comic-details">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <h4>TALENT</h4>
                        <div class="row row-cols-2">
                            <div class="col-3">Writer:</div>
                            <div class="col-9">{{ $comic->writers }}</div>
                            <div class="col-3">Art by:</div>
                            <div class="col-9">{{ $comic->artists }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>SPECS</h4>
                        <div class="row row-cols-2">
                            @if ($comic->series)
                                <div class="col-3 ">Series:</div>
                                <div class="col-9 series">{{ $comic->series }}</div>
                            @endif
                            <div class="col-3">U.S. Price:</div>
                            <div class="col-9">{{ $comic->price }}</div>
                            @if ($comic->sale_date)
                                <div class="col-3">On Sale Date:</div>
                                <div class="col-9">{{ $comic->sale_date }}</div>
                            @endif
                            <div class="col-3">Page
                                Count:
                            </div>
                            <div class="col-9">{{ $comic->page_count }}</div>
                            <div class="col-3">Rated:</div>
                            <div class="col-9">{{ $comic->rated }}</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4>settings <i class="fa-solid fa-gear"></i></h4>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-update me-3">edit</a>
                        <a href="{{ route('comics.destroy', $comic) }}" class="btn btn-delete">delete</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
