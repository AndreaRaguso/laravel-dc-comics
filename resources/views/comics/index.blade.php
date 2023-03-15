@extends('layouts.app')

@section('content')
    <div class="main-bg">

        <div class="container main-content position-relative py-5">

            <a href="#" class="series">CURRENT SERIES</a>

            <div class="row py-5">

                @foreach ($comics as $comic)
                    <div class="col-2 items mb-5">

                        <div class="row">

                            <div class="col comic-thumb">
                                <div class="position-relative">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                    <div class="position-absolute comic-more d-flex flex-column gap-1">
                                        <a href="{{ route('comics.show', $comic->id) }}" class="load">Dettagli</a>
                                        <a href="{{ route('comics.edit', $comic->id) }}" class="load">Modifica</a>
                                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                            @csrf

                                            @method('DELETE')

                                            <button type="submit" class="load" data-toggle="modal" data-target="#exampleModal">
                                                Cancella
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                {{ $comic['series'] }}
                            </div>

                        </div>
                    </div>
                @endforeach

                    

            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('home') }}" class="load">TORNA INDIETRO</a>
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
