@extends('layouts.main')

@section('title', 'COMICS')

@section('main')
    <main>
        <div class="comics-list">
            <div class="container-xl">
                <div class="comics-title">
                    <h2 class="m-0">YOUR LIST OF COMICS & GRAPHIC NOVELS</h2>
                </div>

                <div class="comics">
                    <div class="row row-cols-4 g-3">
                        @foreach ($comics as $comic)
                            <div class="col">
                                <a href="#">
                                    <div class="card text-center border-0">
                                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
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
