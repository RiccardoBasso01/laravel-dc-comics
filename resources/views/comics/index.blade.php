@extends('layouts.main')

@section('title', 'COMICS')

@php
    $imgPath = 'https://static.dc.com/2022-11/DC_placeholder_comic-active_573b3c133ef580.76442500.jpg?w=192';
@endphp

@section('main')
    <main>
        <div class="comics-list">
            <div class="container-xl">
                {{-- Titolo della pagina --}}
                <div class="comics-title">
                    <h2 class="m-0">YOUR LIST OF COMICS & GRAPHIC NOVELS</h2>
                </div>

                {{-- Lista comics --}}
                <div class="comics">
                    <div class="row row-cols-4 g-3">
                        @foreach ($comics as $comic)
                            <div class="col">
                                <a href="{{ route('comics.show', $comic) }}">
                                    <div class="card text-center border-0">
                                        {{-- Immagine (se presente) --}}
                                        <img src="{{ $comic->thumb ? $comic->thumb : $imgPath }}" alt="{{ $comic->title }}">
                                        {{-- Titolo e sottotitolo --}}
                                        <div class="card-body">
                                            <h6 class="card-subtitle">{{ Str::of($comic->type)->upper() }}</h6>
                                            <h4 class="card-title fw-bold text-black">{{ $comic->title }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
