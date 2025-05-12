@extends('layouts.master')

@section('titolo')
    Homepage
@endsection

@php
    $comics = config("comics");
    // dd($comics);
@endphp

@section('contenuto')
<main>
    <section class="jumbotron">

    </section>

    <div class="container">        
        <div class="row row-cols-6">

            @foreach ($comics as $comic)
            <div class="col">
                <x-card>

                    <x-slot:thumb>{{$comic["thumb"]}}</x-slot> 
    
                    <x-slot:titolo>{{$comic["series"]}}</x-slot>             
                    
                
                    </x-card>
            </div>      
            @endforeach
            
        </div>
    </div>

    <section class="blue-strip">
        <div class="container">
            <div class="icon">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics" /> <span>Digital Comics</span></a>
            </div>
            <div class="icon">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise" /> <span>DC Merchandise</span></a>
            </div>
            <div class="icon">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription" /> <span>Subscription</span></a>
            </div>
            <div class="icon">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator" /> <span>Comic Shop Locator</span></a>
            </div>
            <div class="icon">
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" /> <span>DC Power Visa</span> </a>
            </div>
        </div>
       
    </section>

</main>

    
@endsection    
    
