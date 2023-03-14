@extends('layouts.app')

@section('content')
    <div class="main-bg">

        <div class="container main-content position-relative py-5">

            <img src="{{ $comic['thumb'] }}" class="thumb-high" alt="">

            <div class="row py-5">

                <div class="col-9">
                    <div class="fw-bold fs-2">
                        {{ $comic['title'] }} : {{ $comic['series'] }}
                    </div>

                    <div class="btn btn-success w-75 my-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-auto">
                                        <strong>Categoria: </strong>{{ $comic['type'] }}
                                    </div>
                                    <div class="col">
                                        <strong>Prezzo: </strong> {{ $comic['price'] }}$
                                    </div>
                                    <div class="col-auto">
                                        <strong>Sconti il: </strong>{{ $comic['sale_date'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        {{ $comic['description'] }}
                    </div>

                </div>

                <div class="col-3">

                    <img src="{{ $comic['thumb'] }}" alt="">

                </div>

                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('comics.index') }}" class="load">TORNA INDIETRO</a>
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
