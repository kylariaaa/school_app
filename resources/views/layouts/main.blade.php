<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Aplikasi Sekolah - @yield('title')</title>
</head>

<body>
    <header style="background-color: #f8f9fa; padding:15px; border-bottom: 1px solid #e7e7e7; text-align:center;">
        <h1><a href="/" style="text-decoration: none; color: #333;">Aplikasi Web Sekolah</a></h1>
        <nav style="margin-top: 10px;">

            <a href="/" style="margin: 0 10px; textdecoration: none; color: blue;">Beranda</a>
            <a href="/about" style="margin: 0 10px; textdecoration: none; color: blue;">Tentang Kami</a> |
            <a href="/dashboard" style="margin: 0 10px; text-decoration: none; color: blue;">Dashboard</a>
            <a href="/teacher" style="margin: 0 10px; text-decoration: none; color: blue;">TeacherList</a>

        </nav>
    </header>

    <main style="padding: 20px; min-height: 400px;">
        @yield('content') {{-- Ini adalah "lubang" untuk konten utama halaman --}}
    </main>

    <footer style="background-color: #f8f9fa; padding:10px; border-top: 1px solid #e7e7e7; text-align: center; margin-top: 20px;">
        <p>&copy; 2025 SMK PLUS PELITA NUSANTARA. Hak
            Cipta Dilindungi.</p>
    </footer>

</body>
</html>
