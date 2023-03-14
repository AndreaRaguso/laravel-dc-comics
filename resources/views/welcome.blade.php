@extends('layouts.app')

@section('page_title')
    Home | Laravel Comics
@endsection


@section('content')

<div class="main-bg">
    
    <div class="container main-content position-relative py-5">
        
        <a href="#" class="series">CURRENT SERIES</a>

        <div class="row">
    
            {{-- @foreach ($comics as $comic)
                <div class="col-2 items">
    
                    <img src="{{ $comic['thumb'] }}" alt="">
    
                    {{ $comic['series'] }}
    
                </div>
            @endforeach --}}
            
        </div>
        
        <div class="d-flex justify-content-center">
            <a href="#" class="load">Visualizza Comics</a>
            <a href="#" class="load mx-5">Crea Comic</a>
            <a href="#" class="load">Cerca Comic</a>
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