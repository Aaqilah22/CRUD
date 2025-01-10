<?php
// contact.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="styles.css"> <!-- Gaya CSS -->
    <style>
        /* General reset for margins and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            background: #fff;
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
            text-align: center;
        }

        h3 {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 8px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 1.1rem;
        }

        a:hover {
            text-decoration: underline;
        }

        .contact-item {
            margin-bottom: 25px;
        }

        .contact-item p {
            font-size: 1.2rem;
        }

        /* Button for "Contact Us" link */
        .contact-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #45a049;
        }

        /* Footer styling */
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #888;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Kontak Kami</h1>
        <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan gunakan informasi kontak berikut:</p>

        <div class="contact-item">
            <h3>Email:</h3>
            <p><a href="mailto:aaqilahaathiras22@gmail.com">aaqilahaathiras22@gmail.com</a></p>
        </div>

        <div class="contact-item">
            <h3>Instagram:</h3>
            <p><a href="mailto:@aqilahas._">@aqilahas._</a></p>
        </div>

        <div class="contact-item">
            <h3>Telepon:</h3>
            <p>+6281289304088</p>
        </div>

        <div class="contact-item">
            <h3>Lokasi:</h3>
            <p>Jl. Ciantra, Perum Cikarang Permai, Cikarang Selatan - Bekasi</p>
        </div>

        <a href="mailto:aaqilahaathiras22@gmail.com" class="contact-btn">Hubungi Kami Sekarang</a>
    </div>

</body>
</html>
