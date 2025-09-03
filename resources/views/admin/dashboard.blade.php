<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.packages.index') }}"><i class="fas fa-box"></i> Kelola Paket</a></li>
            </ul>
            
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </aside>
        <main class="main-content">
            <header class="header-admin">
                <button class="menu-toggle" aria-label="Toggle Menu">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Dashboard</h1>
                <div>Selamat datang, {{ Auth::user()->name }}</div>
            </header>
            <div class="content-area">
                <p>Halaman ini adalah pusat kendali Anda. Di sini Anda bisa mengelola konten website seperti paket umrah, berita, dan lainnya.</p>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');

            if (menuToggle && sidebar && mainContent) {
                menuToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('active');
                    mainContent.classList.toggle('active');
                });
            }
        });
    </script>
    
</body>
</html>