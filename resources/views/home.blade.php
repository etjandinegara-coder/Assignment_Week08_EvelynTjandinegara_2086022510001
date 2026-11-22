@extends('layout.layout')

@section('content')
    <section class="hero">
        <div class="hero-content">
            @foreach ($home as $item)
                <p class="hero-greeting">{{ $item->greeting }}</p>

                <h1>{{ $item->description }}</h1>

                <a href="{{ route('blog') }}" class="btn">Read My Blog</a>

                <div class="hero-cards">
                    <div class="hero-card">
                        <h3>{{ $item->about_title }}</h3>
                        <p>{{ $item->about_description }}</p>
                        <a href="{{ route('about') }}" class="btn-kecil">About</a>
                    </div>

                    <div class="hero-card">
                        <h3>{{ $item->contact_title }}</h3>
                        <p>{{ $item->contact_description }}</p>
                        <a href="{{ route('contact') }}" class="btn-kecil">Contact</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection