<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Background Hijau Pastel</title>
    <style>
        /* Gaya untuk navbar */
        nav {
            background-color: #a8e6cf; /* Warna background navbar hijau pastel */
            padding: 10px 20px; /* Padding atas-bawah dan kiri-kanan */
            text-align: center; /* Pusatkan tautan */
        }

        /* Gaya untuk tautan di navbar */
        nav a {
            color: white; /* Warna teks tautan */
            text-decoration: none; /* Hilangkan garis bawah */
            margin: 0 10px; /* Jarak antar tautan */
            font-size: 18px; /* Ukuran font */
            transition: color 0.3s ease; /* Animasi perubahan warna */
        }

        /* Gaya saat tautan dihover */
        nav a:hover {
            color: #ff6f61; /* Warna teks saat dihover */
        }

        /* Gaya untuk pemisah (|) */
        nav span {
            color: white; /* Warna pemisah */
            margin: 0 5px; /* Jarak antara pemisah dan tautan */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="?page=home">Home</a> |
        <a href="?page=makanan">Makanan</a> |
        <a href="?page=minuman">Minuman</a> |
        <a href="?page=about">About</a> |
        <a href="?page=contact">Contact</a>
    </nav>
</body>
</html>