@extends('layouts.app')

@section('title', 'Home - Emma Travel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.14.0/simple-lightbox.min.css">
@endsection

@section('content')
    <section class="hero">
        <div class="container">
            <p class="hero-subtitle">Welcome to,</p><br>
            <h1 class="hero-title">PT EMMA TOUR TRAVEL</h1>
            <p class="hero-subtitle">Mitra andal dalam layanan umrah</p>
            <a href="https://wa.me/+6281999949348?text=Assalamualaikum,%20Halo%20Emma%20Tour" class="cta-button">Contact Us</a>
        </div>
    </section>

    <section id="packages" class="section">
        <div class="container">
            <h2 class="section-title umroh-title">Program Umrah</h2>
            <div class="packages-grid">
                @foreach ($packages as $package)
                    <div class="package-card">
                        <a href="{{ asset('storage/' . $package->image) }}" class="package-image-link">
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}">
                        </a>
                        <h3>{{ $package->name }}</h3>
                        <p><i class="fas fa-tags"></i> Harga: Rp.{{ number_format($package->harga, 0, ',', '.') }}</p>
                        <p>Hotel: {{ $package->hotel }}</p>
                        <p><i class="fas fa-plane"></i> Maskapai: {{ $package->maskapai }}</p>
                        <p>Fasilitas: {{ $package->fasilitas }}</p>
                        <p>{{ $package->description }}</p>
                        <a href="https://wa.me/+6282261574283?text=Assalamualaikum,%20saya%20tertarik%20dengan%20Paket%20{{ $package->name }}" class="order-btn">Book Now</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3>Harga Terjangkau</h3>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>Fasilitas Lengkap</h3>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Pembimbing Berpengalaman</h3>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.14.0/simple-lightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var lightbox = new SimpleLightbox('.packages-grid a.package-image-link');
    });
</script>
@endsection