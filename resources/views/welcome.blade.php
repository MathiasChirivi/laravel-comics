@extends('layouts.app')

@section('content')
<div class="containerMainImg">
    <div class="content">
    </div>
</div>

<div class="containerImg d-flex justify-content-center align-items-center">
    <div class="mx-auto d-flex justify-content-center align-items-center flex-column containerItems">
        <ul class="pt-5 mx-auto list-unstyled d-flex flex-wrap justify-content-center align-items-center">
            @foreach ($comicsArray as $comic)
                <li class="itemsComicCentre d-flex flex-column p-2">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div>{{ $comic['title'] }}</div>
                </li>
            @endforeach
        </ul>
        <button class="bg-primary text-white border-0 w-25">LOAD MORE</button>
    </div>
</div>

<div class="mt-5 bg-primary h-75">
    <div class="containerBlue">
        <ul class="itemsComic">
            <li class="itemsComicCentreBlue">
                    <img class="imgPartner" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <img class="imgPartner" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <img class="imgPartner" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <img class="imgPartner" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <img class="imgPartner" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
            </li>
        </ul>
    </div>
</div>

@endsection