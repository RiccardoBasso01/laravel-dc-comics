@extends('layouts.main')

@section('title', 'COMICS')

@php
    // $imgNames = config('main_navbar');
    // $comics = config('comics');
@endphp

@section('main')
    <main>
        <div class="comics-list">
            <div class="container-xl">
                <div class="comics-title">
                    <h2 class="m-0">YOUR LIST OF COMICS & GRAPHIC NOVELS</h2>
                </div>

                <div class="comics">
                    <ul>
                        {{-- @foreach ($comics as $index => $comic) --}}
                        <li>
                            {{-- <a href="{{ url("/comic/$index") }}">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"
                                        title="{{ $comic['series'] }}">
                                    <div class="comic-subtitle">{{ Str::of($comic['type'])->upper() }} </div>
                                    <div class="comic-title">
                                        {{ Str::of($comic['series'])->upper() }}</div>
                                </a> --}}
                        </li>
                        {{-- @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
