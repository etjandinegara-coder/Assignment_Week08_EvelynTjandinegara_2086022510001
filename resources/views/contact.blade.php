
@extends('layout.layout')

@section('content')
    <section class="contact">
        <div class="contact-wrapper">

            @foreach ($contacts as $contact)
                <div class="info-card">
                    <h2>{{ $contact['email'] }}</h2>

                    <div class="info-item">
                        <small>Telepon</small>
                        <p>{{ $contact['telepon'] }}</p>
                    </div>

                    <div class="info-item">
                        <small>Lokasi</small>
                        <p>{{ $contact['lokasi'] }}</p>
                    </div>

                    <div class="info-item">
                        <small>Instagram</small>
                        <p>{{ $contact['instagram'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
