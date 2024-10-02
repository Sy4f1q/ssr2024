<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aturan & Kebijakan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #007bff; /* Background biru */
            background-image: url('https://example.com/your-image.jpg'); /* Ganti dengan URL gambar kamu */
            background-size: cover; /* Membuat gambar menutupi seluruh layar */
            background-position: center; /* Memusatkan gambar */
            background-blend-mode: overlay; /* Membuat warna biru tetap terlihat */
            color: white; /* Warna teks putih */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.85); /* Latar belakang konten semi-transparan */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek 3D */
            border: 5px solid DodgerBlue; /* Border dengan warna DodgerBlue */
        }
        .btn-download {
            margin-top: 20px;
        }
        
        iframe {
            border: 2px solid  #1E90FF;
            border-radius: 10px;
        }
        h1, p {
            text-align: center;
            color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Aturan & Kebijakan</h1>
    <p>Di bawah ini adalah dokumen aturan dan kebijakan yang bisa kamu baca dan unduh.</p>

    <!-- Menyematkan PDF dari Google Drive -->
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/your_google_drive_file_id/preview" allowfullscreen></iframe>
    </div>

    <!-- Tombol untuk Mengunduh PDF -->
    <div class="text-center btn-download">
        <a href="https://drive.google.com/uc?export=download&id=your_google_drive_file_id" class="btn btn-light">
            <i class="fa fa-download"></i> Unduh PDF
        </a>
    </div>
</div>

<!-- Bootstrap JS dan dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
