@extends('layout.layout')

@section('content')
    @foreach ($about as $item)
        <section class="about">
            <div class="about-wrapper">

                <div class="about-text">
                    <h1>{{ $item->judul }}</h1>
                    <p>{{ $item->deskripsi }}</p>

                    <h2>Skill</h2>
                    <p>{{ $item->skills }}</p>
                </div>

                <div class="about-foto">
                    <h3>{{ $item->nama }}</h3>
                    <img src="{{ asset('image/imt.jpg') }}" alt="IMT" width="500">
                </div>

            </div>
        </section>
    @endforeach
@endsection