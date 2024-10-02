<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kejuaraan</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet'>
    <style>
        /* Reset body styling */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f4f4f4; /* Warna latar belakang */
            color: #333;               /* Warna teks */
            margin: 0;
            padding: 20px;            /* Padding untuk konten */
        }

        /* Kontainer utama */
        .container {
            max-width: 800px;         /* Lebar maksimum kontainer */
            margin: auto;             /* Memusatkan kontainer */
            background: white;       /* Warna latar belakang kontainer */
            padding: 20px;           /* Padding dalam kontainer */
            border-radius: 8px;      /* Sudut membulat */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        /* Styling untuk judul utama */
        h1 {
            text-align: center;       /* Teks di tengah */
            color: black;          /* Warna teks judul */
            margin-bottom: 20px;     /* Margin bawah */
        }

        /* Informasi kejuaraan */
        .championship-info {
            margin-bottom: 20px;     /* Margin bawah */
        }

        /* Styling untuk subjudul */
        .championship-info h2 {
            margin: 10px 0;          /* Margin atas dan bawah */
            color: black;          /* Warna teks subjudul */
        }

        /* Styling untuk paragraf */
        .championship-info p {
            margin: 8px 0;           /* Margin atas dan bawah */
        }

        /* Mempertegas informasi tanggal dan lokasi */
        .championship-info .date, 
        .championship-info .location {
            font-weight: bold;        /* Teks tebal */
        }

        /* Deskripsi kejuaraan */
        .description {
            margin: 20px 0;          /* Margin atas dan bawah */
            line-height: 1.6;        /* Jarak antar baris */
        }

        /* Memusatkan judul adendum dan amandemen */
        .description h2 {
            text-align: center;       /* Teks di tengah */
            margin-top: 20px;        /* Margin atas */
            margin-bottom: 10px;     /* Margin bawah */
        }

        /* Menata list */
        .description ol {
            margin-left: 20px;       /* Margin kiri untuk list */
            line-height: 1.6;        /* Jarak antar baris dalam list */
        }

        /* Kontainer untuk tombol pendaftaran */
        .register-container {
            display: flex;            /* Menggunakan flexbox */
            justify-content: center;  /* Memusatkan isi secara horizontal */
            margin: 20px 0;          /* Margin atas dan bawah */
        }

        /* Tombol pendaftaran */
        .register-button {
            padding: 12px 20px;      /* Padding dalam tombol */
            border: none;             /* Tanpa border */
            border-radius: 5px;      /* Sudut membulat */
            background-color: #1E90FF; /* Warna latar belakang tombol */
            color: white;             /* Warna teks tombol */
            font-size: 18px;          /* Ukuran font */
            text-align: center;       /* Teks di tengah */
            text-decoration: none;    /* Tanpa garis bawah */
            transition: background-color 0.3s, transform 0.2s; /* Efek transisi */
            cursor: pointer;          /* Ubah kursor saat hover */
        }

        /* Efek hover pada tombol */
        .register-button:hover {
            background-color: #1C86EE; /* Warna lebih gelap saat hover */
            transform: scale(1.05);    /* Sedikit memperbesar tombol saat hover */
        }

        /* Responsif untuk ukuran layar kecil */
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;      /* Ukuran font judul yang lebih kecil */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Semarang Sprint Rally 2024 </h1>
        
        <div class="championship-info">
            <h2>Detail Kejuaraan</h2>
            <p class="date">Tanggal: 26 - 27 Oktober 2024</p>
            <p class="location">Lokasi: Sirkuit Mijen, Kec. Mijen, Kota Semarang, Jawa Tengah</p>
            <p class="participants">Peserta: Tim dari seluruh Indonesia</p>
        </div>
        
        <div class="description">
            <h2>ADENDUM & AMANDEMEN <br>NOMOR : 001/PSPO/ADM-AMD/VII/2024 <br>TANGGAL 12 JULI 2024 </h2> <!-- Judul yang dipusatkan -->
            <p>   
                Berikut adalah perubahan yang berlaku pada peraturan:<br>
            </p>
            <ol>
                <li>Perbaikan pada Peraturan :
                    <ul>
                        <li><strong>II. SIFAT PERLOMBAAN</strong></li>
                        <li>Point 1: Jumlah minimum yang start dan lulus scrutineering adalah 5 (lima) kendaraan untuk setiap group, apabila peserta dibawah 5 (lima), tidak mendapat point Kejurnas. (Dihilangkan/Dihapus)</li>
                        <li><strong>IV. POINT SYSTEM</strong></li>
                        <li>Point 2: Finisher adalah peserta yang menjalani SS terakhir dan berhasil mencapai garis finish di SS terakhir dan telah menjalani Scrutineering Akhir. Menjadi: Finisher adalah peserta yang telah melakukan Start pada SS terakhir.</li>
                    </ul>
                </li>
                <li>Group G1:
                    <ul>
                        <li>Point a: Mesin 1000cc Bawaan mobil Menjadi: Point a. Mesin 1000cc Bawaan mobil (Karburator)</li>
                    </ul>
                </li>
                <li>Group G2:
                    <ul>
                        <li>Point a: Mesin 1001cc s/d 4500cc Menjadi: Point a. Mesin 1001cc s/d 4500cc (Karburator)</li>
                        <li>Point b: Standard Karburator Menjadi: Point b. Karburator Bebas</li>
                    </ul>
                </li>
                <li>Pasal 29 PENGHARGAAN:
                    <ul>
                        <li>Ditambahkan: Point 29.4 Besaran Hadiah uang Pembinaan akan diberikan, jika jumlah peserta minimal 5 Peserta di Group nya.</li>
                    </ul>
                </li>
                <li>Pasal 33 KATEGORI SEEDED DAN NON SEEDED:
                    <ul>
                        <li>33.1. Non seeded adalah peserta pemula berusia 25 tahun kebawah (U-25) yang belum pernah menjadi juara Group baik pada putaran atau keseluruhan putaran, dan hanya berlaku untuk peserta G4 dan G6 Menjadi: Non seeded adalah peserta pemula yang belum pernah menjadi juara Group baik pada putaran atau keseluruhan putaran.</li>
                    </ul>
                </li>
            </ol>
        </div>
        
        <!-- Kontainer untuk tombol pendaftaran -->
        <div class="register-container">
            <a href="Pendaftaran.php" class="register-button">Daftar Sekarang</a>
        </div>
    </div>
</body>
</html>
