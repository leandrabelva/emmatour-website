<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket</title>
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
                <h1>Edit Paket</h1>
            </header>
            
            <div class="content-area">
                <div class="form-container">
                    <form action="{{ route('admin.packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama Paket</label>
                            <input type="text" name="name" id="name" value="{{ $package->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" rows="5" required>{{ $package->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" value="{{ $package->harga }}" required>
                        </div>
                        <div class="form-group">
                            <label for="hotel">Hotel</label>
                            <input type="text" name="hotel" id="hotel" value="{{ $package->hotel }}">
                        </div>
                        <div class="form-group">
                            <label for="maskapai">Maskapai</label>
                            <input type="text" name="maskapai" id="maskapai" value="{{ $package->maskapai }}">
                        </div>
                        <div class="form-group">
                            <label for="fasilitas">Fasilitas</label>
                            <textarea name="fasilitas" id="fasilitas" rows="3">{{ $package->fasilitas }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="current_image">Gambar Saat Ini</label>
                            @if($package->image)
                                <img src="{{ asset('storage/' . $package->image) }}" alt="Current Image" width="150">
                            @else
                                <p>Tidak ada gambar.</p>
                            @endif
                            <label for="image">Ganti Gambar (Opsional)</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-submit">Perbarui Paket</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>