@extends('layouts.app')

@section('content')
    <div class="main-bg">

        <div class="container main-content position-relative py-5">

            <h1 class="text-center">Crea un nuovo Comic</h1>

            <div class="row py-5">

                <div class="col-12  mx-auto mb-3 w-75">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo originale">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="series" id="nome" required  placeholder="Inserisci il nome">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="type" class="form-label">Tipo</label>
                                <select class="form-select" name="type" id="type" required>
                                    <option selected>Seleziona un tipo</option>
                                    <option value="comic book">Comic Book</option>
                                    <option value="graphic novel">Graphic Novel</option>
                                </select>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="weight" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" name="weight" id="weight" required placeholder="Inserisci il prezzo">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="weight" class="form-label">Sconto</label>
                                <input type="date" class="form-control" name="weight" id="weight" required placeholder="Inserisci la data in cui è scontato">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione..."></textarea>
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
