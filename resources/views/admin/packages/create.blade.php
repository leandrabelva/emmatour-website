<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Baru</title>
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
                <h1>Tambah Paket Baru</h1>
            </header>
            
            <div class="content-area">
                <div class="form-container">
                    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Paket</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="hotel">Hotel</label>
                            <input type="text" name="hotel" id="hotel">
                        </div>
                        <div class="form-group">
                            <label for="maskapai">Maskapai</label>
                            <input type="text" name="maskapai" id="maskapai">
                        </div>
                        <div class="form-group">
                            <label for="fasilitas">Fasilitas</label>
                            <textarea name="fasilitas" id="fasilitas" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar Paket</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-submit">Simpan Paket</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>