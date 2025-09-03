<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Paket</title>
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
                <h1>Kelola Paket</h1>
                <a href="{{ route('admin.packages.create') }}" class="btn-add-new">Tambah Paket Baru</a>
            </header>

             @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="content-area">
                <table>
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td><img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" width="100"></td>
                                <td>{{ $package->name }}</td>
                                <td>Rp {{ number_format($package->harga, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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