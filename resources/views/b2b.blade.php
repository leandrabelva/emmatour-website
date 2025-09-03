@extends('layouts.app')

@section('title', 'B2B - Emma Travel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/b2b.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.14.0/simple-lightbox.min.css">
@endsection

@section('content')
    <section class="b2b-section">
        <div class="container">
            <h2 class="b2b-title">Layanan B2B</h2>
            <p class="b2b-description">
                EMMA Tour Travel melayani Visa Umrah 1447 H / 2025 khusus mitra travel. 
                Harga spesial untuk pemesanan minimal 35 pax. <br> Serahkan urusan teknis pada kami, Anda fokus melayani jamaah. 🕋✨
            </p>
            <div class="b2b-poster-container">
                <a href="{{ asset('images/B2BPoster.jpg') }}">
                    <img src="{{ asset('images/B2BPoster.jpg') }}" alt="B2B Poster" class="b2b-poster">
                </a>
            </div>
            <a href="https://wa.me/+6282261582283?text=Assalamualaikum,%20saya%20tertarik%20dengan%20layanan%20B2B" class="b2b-order-btn">Book B2B Now</a>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.14.0/simple-lightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var lightbox = new SimpleLightbox('.b2b-poster-container a');
    });
</script>
@endsection