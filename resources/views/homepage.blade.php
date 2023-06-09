@extends('layout_format.header')

{{-- Categories: clothes, figure, key chain, stationary, manga (comic) --}}
@section('container')
    <h2 style = "color:black;"><b>Categories</b></h2>
    {{-- Outfits Category Section --}}
    <div class = "col-md-3 mb-4">
        <div class = "card">
            <img src = "{{ asset('assets/anime-market-items/clothes/animeclothes2.jpg') }}" class = "card-img-top img-fluid" style = "height: 400px;">
            <div class = "card-body">
                <a href = "{{ route('clothes.view', ['category' => 'clothes']) }}">Clothes</a>
            </div>
        </div>
    </div>

    {{-- Figure Category Section --}}
    <div class = "col-md-3 mb-4">
        <div class = "card">
            <img src = "{{ asset('assets/anime-market-items/figure/fig3.jpg') }}" class = "card-img-top img-fluid" style = "height: 400px;">
            <div class = "card-body">
                <a href = "{{ route('figure.view', ['category' => 'figure']) }}">Figures</a>
            </div>
        </div>
    </div>

    {{-- Keychain Category Section --}}
    <div class = "col-md-3 mb-4">
        <div class = "card">
            <img src = "{{ asset('assets/anime-market-items/keychain/kc1.jpg') }}" class = "card-img-top img-fluid" style = "height: 400px;">
            <div class = "card-body">
                <a href = "{{ route('keychain.view', ['category' => 'keychain']) }}">Keychains</a>
            </div>
        </div>
    </div>

    {{-- Stationary Category Section --}}
    <div class = "col-md-3 mb-4">
        <div class = "card">
            <img src = "{{ asset('assets/anime-market-items/stationery/stationery1.jpg') }}" class = "card-img-top img-fluid" style = "height: 400px;">
            <div class = "card-body">
                <a href = "{{ route('stationary.view', ['category' => 'stationary']) }}">Stationaries</a>
            </div>
        </div>
    </div>

    {{-- Manga Category Section --}}
    <div class = "col-md-3 mb-4">
        <div class = "card">
            <img src = "{{ asset('assets/anime-market-items/manga/komik_horimiya3.jpg') }}" class = "card-img-top img-fluid" style = "height: 400px;">
            <div class = "card-body">
                <a href = "{{ route('manga.view', ['category' => 'manga']) }}">Mangas</a>
            </div>
        </div>
    </div>
@endsection

{{-- Footer --}}
@extends('layout_format.footer')

{{-- REFERENCES --}}
{{-- a. https://www.youtube.com/watch?v=XdaDDmC00fs --}}
{{-- b. https://www.nicesnippets.com/blog/how-to-add-carousel-slider-in-laravel --}}
{{-- c. https://gist.github.com/evercode1/f020573b54f9da2d727e --}}
