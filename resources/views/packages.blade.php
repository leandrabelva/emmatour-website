@extends('layouts.app')

@section('title', 'Packages - Emma Travel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/packages.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.14.0/simple-lightbox.min.css">
@endsection

@section('content')
    <div class="page-hero">
        <div class="container">
            <h1 class="hero-title-package">Program Umrah</h1>
        </div>
    </div>

    <section id="all-packages" class="section">
        <div class="container">
            <div class="packages-grid">
                @foreach ($packages as $package)
                    <div class="package-card" >
                        <a href="{{ asset('storage/' . $package->image) }}" class="package-image-link">
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}">
                        </a>
                        <h3>{{ $package->name }}</h3>
                        <p><i class="fas fa-tags"></i> Harga: Rp {{ number_format($package->harga, 0, ',', '.') }}</p>
                        <p>Hotel: {{ $package->hotel }}</p>
                        <p> <i class="fas fa-plane"></i> Maskapai: {{ $package->maskapai }}</p>
                        <p>Fasilitas: {{ $package->fasilitas }}</p>
                        <p>{{ $package->description }}</p>
                        <a href="https://wa.me/+6282261574283?text=Assalamualaikum,%20saya%20tertarik%20dengan%20Paket%20{{ $package->name }}" class="order-btn">Book Now</a>
                    </div>
                @endforeach
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