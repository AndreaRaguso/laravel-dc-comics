@extends('layouts.app')

@section('content')
    <div class="main-bg">

        <div class="container main-content position-relative py-5">

            <h1 class="text-center">Modifica un Comic</h1>

            <div class="row py-5">

                <div class="col-12  mx-auto mb-3 w-75">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title',$comic->title) }}" required maxlength="255"
                                    placeholder="Inserisci il titolo originale">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="series" id="nome"
                                    value="{{ old('series',$comic->series) }}" required placeholder="Inserisci il nome">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="type" class="form-label">Tipo</label>
                                <select class="form-select" name="type" id="type" required>
                                    <option selected>Seleziona un tipo</option>
                                    <option value="comic book" {{ old('type', $comics->type) == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                                    <option value="graphic novel" {{ old('type', $comics->type) == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                                </select>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" step=".01" name="price"
                                    value="{{ old('price',$comic->price) }}" id="price" required placeholder="Inserisci il prezzo">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="sale_date" class="form-label">Sconto</label>
                                <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date',$comic->sale_date) }}"
                                    id="sale_date" required placeholder="Inserisci la data in cui è scontato">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" name="description" id="description" rows="3"
                                    placeholder="Inserisci una descrizione...">{{ old('description',$comic->description) }}</textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-success w-25">
                                    Salva
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('home') }}" class="load">TORNA INDIETRO</a>
                </div>

            </div>

        </div>



    </div>

    <div class=" bg-b ">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="item d-flex  align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="buy">
                <span class="text-white fw-bold mx-3">DIGITAL COMICS</span>
            </div>
            <div class="item d-flex  align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="buy">
                <span class="text-white fw-bold mx-3">DC MERCHANDISE</span>
            </div>
            <div class="item d-flex  align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="buy">
                <span class="text-white fw-bold mx-3">SUBSCIPTION</span>
            </div>
            <div class="item d-flex  align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="buy">
                <span class="text-white fw-bold mx-3">COMIC SHOP LOCATOR</span>
            </div>
            <div class="item d-flex  align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="buy">
                <span class="text-white fw-bold mx-3">DC POWER VISA</span>
            </div>
        </div>
    </div>
@endsection
