<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Emma Tour Travel')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @yield('styles')
</head>
<body>

    <header class="header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logoEmmaTravel.png') }}" alt="Emma Travel Logo">
            </a>
            <button class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <nav class="nav-links-container">
                <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('packages.all') }}" class="{{ Request::is('packages') ? 'active' : '' }}">Paket Umrah</a>
                <a href="{{ route('b2b') }}" class="{{ Request::is('b2b') ? 'active' : '' }}">B2B</a>
                <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Kontak Kami</a>
                
                <a href="https://wa.me/6281999949348" class="whatsapp-icon" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                
                <a href="https://wa.me/6281999949348?text=Assalamualaikum,%20Halo%20Emma%20Tour" class="book-now-btn">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Emma Travel. All rights reserved.</p>
            <div class="social-links">
                <a href="https://www.instagram.com/official.emmatour" target="_blank" class="social-link instagram-link">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://wa.me/+6281999949348" target="_blank" class="social-link whatsapp-link">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </footer>

    @yield('scripts')

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Fungsionalitas untuk menu responsif
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinksContainer = document.querySelector('.nav-links-container');
        menuToggle.addEventListener('click', () => {
            navLinksContainer.classList.toggle('active');
        });

        // Fungsionalitas animasi fade-in
        const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-on-scroll').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>