@extends('layouts.app')

@section('title', 'About Us - Emma Travel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <style>
        /* CSS untuk animasi fade-in */
        .fade-in-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endsection

@section('content')
    <section class="section about-section" data-animation="true">
        <div class="container">
            {{-- Section 1: Tentang Perusahaan --}}
            <div class="about-card-tentang fade-in-on-scroll">
                <div class="about-header">
                    <img src="{{ asset('logoEmmaTravel.png') }}" alt="Emma Travel Logo" class="about-logo">
                    <h2>TENTANG PERUSAHAAN</h2>
                </div>
                <p>PT Emma Tour and Travel adalah perusahaan resmi dan terpercaya yang telah terdaftar di Kementerian Agama Republik Indonesia dengan No. U-520 Tahun 2021 yang bergerak di bidang penyediaan layanan umrah dan haji khusus untuk segmen B2B (Business to Business). Kami hadir sebagai mitra strategis bagi biro perjalanan umrah di seluruh Indonesia yang membutuhkan dukungan lengkap dan profesional dalam penyelenggaraan layanan umrah yang berkualitas tinggi.</p>
                <p>Dengan pengalaman dan jaringan luas di Arab Saudi, kami berkomitmen memberikan layanan yang cepat, aman, dan efisien. Kami memahami bahwa kesuksesan mitra kami adalah kesuksesan kami juga.</p>
                <div class="about-images">
                    <img src="{{ asset('images/office4.jpg') }}" alt="Office Interior" class="about-img-small">
                    <img src="{{ asset('images/office3.jpg') }}" alt="Office Exterior" class="about-img-large">
                </div>
            </div>

            {{-- Section 2: Visi & Misi Perusahaan --}}
            <div class="about-card visi-misi fade-in-on-scroll">
                <h2>VISI PERUSAHAAN</h2>
                <p>Menjadi mitra terpercaya nomor satu di Indonesia dalam penyediaan layanan Umrah B2B yang profesional, efisien, dan bernilai tambah tinggi.</p>
                <h2>MISI PERUSAHAAN</h2>
                <ol>
                    <li>Memberikan layanan visa, hotel, transportasi, dan katering umrah dengan kualitas terbaik dan harga bersaing.</li>
                    <li>Menyediakan solusi terpadu dan mudah diakses untuk biro perjalanan umrah di seluruh Indonesia.</li>
                    <li>Membangun kemitraan jangka panjang yang saling menguntungkan dengan mitra lokal dan internasional.</li>
                    <li>Mengembangkan sistem digital dan teknologi informasi untuk mempercepat proses pemesanan dan pelayanan.</li>
                    <li>Menjaga komitmen terhadap profesionalisme, kejujuran, dan kepuasan pelanggan.</li>
                </ol>
            </div>

            {{-- Section 3: Nilai-Nilai Perusahaan (Company Values) --}}
            <div class="about-card nilai-nilai fade-in-on-scroll">
                <h2>NILAI-NILAI PERUSAHAAN</h2>
                <div class="value-item">
                    <h3>AMANAH</h3>
                    <p>Menjaga kepercayaan mitra dengan integritas dan tanggung jawab tinggi.</p>
                </div>
                <div class="value-item">
                    <h3>PROFESIONALISME</h3>
                    <p>Menyediakan layanan terbaik dengan standar kerja yang tinggi.</p>
                </div>
                <div class="value-item">
                    <h3>KEMITRAAN</h3>
                    <p>Mengutamakan hubungan kerja sama yang erat dan saling menguntungkan.</p>
                </div>
                <div class="value-item">
                    <h3>INOVASI</h3>
                    <p>Terus berinovasi untuk memberikan solusi yang relevan dan efisien.</p>
                </div>
                <div class="value-item">
                    <h3>TRANSPARANSI</h3>
                    <p>Menyediakan informasi dan layanan dengan jujur dan terbuka.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    @endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in-on-scroll').forEach(element => {
            observer.observe(element);
        });
    });
</script>
@endsection