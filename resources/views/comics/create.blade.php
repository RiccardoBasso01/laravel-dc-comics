@extends('layouts.main')

@section('title', 'ADD COMICS')

@section('main')
    <section id="create">
        <div class="container-xl">
            {{-- Header --}}
            <header>
                <div class="comics-title">
                    <h2 class="m-0">Add comics to your list</h2>
                </div>
            </header>

            {{-- Main --}}
            <main>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        {{-- #1 --}}
                        <div class="col-4 mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                                required>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="series" class="form-label">Series</label>
                            <input name="series" type="text" class="form-control" id="series" placeholder="Series"
                                required>
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label">Type</label>
                            <select name="type" class="form-select">
                                <option selected>Comic Book</option>
                                <option value="1">Graphic Novel</option>
                            </select>
                        </div>

                        {{-- #2 --}}
                        <div class="col-12 mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
                        </div>

                        {{-- #3 --}}
                        <div class="col-5 mb-4">
                            <label for="thumb" class="form-label">URL</label>
                            <input name="thumb" type="text" class="form-control" id="thumb" placeholder="URL">
                        </div>
                        <div class="col-1 mb-4">
                            <img id="preview" class="img-fluid"
                                src="https://static.dc.com/2022-11/DC_placeholder_comic-active_573b3c133ef580.76442500.jpg?w=192"
                                alt="preview">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label">Rated</label>
                            <select name="rated" class="form-select">
                                <option selected>Teen</option>
                                <option value="1">Mature</option>
                            </select>
                        </div>
                        <div class="col-2 mb-4">
                            <label for="price" class="form-label">Price $</label>
                            <input name="price" type="number" step="0.01" class="form-control" id="price"
                                placeholder="Price" min="1.00" required>
                        </div>

                        {{-- #4 --}}
                        <div class="col-5 mb-4">
                            <label for="writers" class="form-label">Writers</label>
                            <input name="writers" type="text" class="form-control" id="writers" placeholder="Writers"
                                required>
                        </div>
                        <div class="col-5 mb-4">
                            <label for="artists" class="form-label">Artists</label>
                            <input name="artists" type="text" class="form-control" id="artists" placeholder="Artists"
                                required>
                        </div>
                        <div class="col-2 mb-4">
                            <label for="page_count" class="form-label">Page Count</label>
                            <input name="page_count" type="number" class="form-control" id="page_count"
                                placeholder="Page Count" min="1" required>
                        </div>

                        {{-- #5 --}}
                        <div class="col-4 mb-4">
                            <label for="sale_date" class="form-label">Sale Date</label>
                            <input name="sale_date" type="date" class="form-control" id="sale_date"
                                placeholder="Sale Date">
                        </div>

                        {{-- footer --}}
                        <div class="col-12 my-5 d-flex justify-content-center">
                            <button class="btn btn-form me-3">save comic</button>
                            <button type="reset" class="btn btn-form">Reset</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const placeholder = 'https://static.dc.com/2022-11/DC_placeholder_comic-active_573b3c133ef580.76442500.jpg?w=192';
        const image_input = document.getElementById('thumb');
        const img_preview = document.getElementById('preview');

        image_input.addEventListener('input', () => {
            image_input.value ? img_preview.src = image_input.value : img_preview.src = placeholder
        });
    </script>
@endsection
