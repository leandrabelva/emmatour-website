@extends('layouts.app')

@section('title', 'Contact - Emma Travel')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="container contact-container">
            <div class="contact-info">
                <div class="contact-content">
                    <h3>Kantor Emmatour</h3>
                    <p>Jl. Basuki rahmat no. 18<br>Jakarta, Indonesia</p>
                    
                    <div class="contact-item">
                        <h3><i class="fas fa-phone-alt contact-icon"></i> No. Telp</h3>
                        <p>+62 819-9994-9348</p>
                    </div>

                    <div class="contact-item">
                        <h3><i class="fab fa-whatsapp contact-icon"></i> Whatsapp</h3>
                        <a href="https://wa.me/6281999949348?text=Assalamualaikum,%20Halo%20Emma%20Tour" class="contact-link">+62 819-9994-9348</a>
                    </div>

                    <div class="contact-item">
                        <h3><i class="fas fa-envelope contact-icon"></i> Email</h3>
                        <p>emmatourtravel2025@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="google-maps">
                <h3>Lokasi Kantor</h3>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2739433708502!2d106.88185519999999!3d-6.2275678999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36f252e392f%3A0x5a26aa0e25b18231!2sJl.%20Jenderal%20Basuki%20Rachmat%20No.18%2C%20RT.5%2FRW.6%2C%20Cipinang%20Besar%20Sel.%2C%20Kecamatan%20Jatinegara%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013410!5e0!3m2!1ses!2sid!4v1756398499496!5m2!1ses!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection