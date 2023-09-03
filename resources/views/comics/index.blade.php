@extends('layouts.main')

@section('title', 'COMICS')

@php
    $imgPath = 'https://static.dc.com/2022-11/DC_placeholder_comic-active_573b3c133ef580.76442500.jpg?w=192';
@endphp

@section('main')
    <main>
        <section id="comics-list">
            <div class="container-xl">
                {{-- Header --}}
                <header class="d-flex justify-content-between align-items-center">
                    {{-- Titolo della pagina --}}
                    <div class="comics-title">
                        <h2 class="m-0">YOUR LIST OF COMICS & GRAPHIC NOVELS</h2>
                    </div>

                    <div>
                        <a href="{{ route('comics.create') }}" class="add"><i class="fa-solid fa-plus fa-2x"></i></a>
                    </div>
                </header>

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
        </section>
    </main>
@endsection
