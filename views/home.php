<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Makanan dan Minuman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff; /* Latar belakang putih */
        }
        header {
            background-color: #ffffff; /* Header putih */
            color: #333; /* Warna teks abu gelap */
            padding: 15px 20px;
            text-align: center;
            border-bottom: 2px solid #f0f0f0; /* Garis bawah untuk header */
        }
        .container {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card {
            border: 1px solid #f0f0f0; /* Batas abu-abu terang */
            border-radius: 8px;
            width: 300px;
            margin: 10px;
            background-color: #ffffff; /* Latar belakang kartu putih */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sedikit bayangan */
            transition: transform 0.2s, box-shadow 0.2s; /* Efek hover */
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Bayangan saat hover */
        }
        .card img {
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .card h3 {
            margin: 10px;
            color: #333; /* Warna teks abu gelap */
        }
        .card p {
            margin: 10px;
            color: #555; /* Warna teks abu lebih terang */
        }
        .card .price {
            margin: 10px;
            font-weight: bold;
            color: #ff6f61; /* Warna harga lebih menonjol */
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Home Makanan dan Minuman</h1>
</header>

<div class="container">
    <?php
    // Array makanan dan minuman
    $items = [
        [
            'nama' => 'Soto Betawi',
            'gambar' => 'https://asset.kompas.com/crops/a5LYD_3KtzA7sB62uAFMhx7Vfjg=/0x0:1000x667/1200x800/data/photo/2023/07/03/64a24c69d154d.jpg',
            'rasa' => 'Gurih dan sedikit manis, yang bersal dari kuah yang kental dan kaya rempah-rempah.'
        ],
        [
            'nama' => 'Pempek',
            'gambar' => 'https://indonesiakaya.com/wp-content/uploads/2023/04/pm_Artboard_1.jpg',
            'rasa' => 'Gurih dari ikan , manis, dan asam dari kuah cuko.'
        ],
        [
            'nama' => 'Mie Aceh',
            'gambar' => 'https://www.astronauts.id/blog/wp-content/uploads/2023/10/Resep-Mie-Aceh-Goreng-Simpel-Untuk-Masak-di-Rumah-1024x678.jpg',
            'rasa' => 'Pedas, gurih, dan kaya akan rempah.'
        ],
        [
            'nama' => 'Karedok',
            'gambar' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/11/Resep-Karedok.jpg?fit=1920%2C1280&ssl=1',
            'rasa' => 'Pedas, segar, dan gurih. Rasa yang berasal dari bumbu kacang.'
        ],
        [
            'nama' => 'Rendang',
            'gambar' => 'https://www.frisianflag.com/storage/app/media/uploaded-files/rendang-padang.jpg',
            'rasa' => 'Pedas, gurih, dan kaya akan rempah.'
        ],
        [
            'nama' => 'Bajigur',
            'gambar' => 'https://asset.kompas.com/crops/Q8gAMW15GUuW65hkosrxWwThn2M=/111x83:735x499/1200x800/data/photo/2020/03/28/5e7eb826a19c9.jpg',
            'rasa' => 'Manis, legit, dan hangat.'
        ],
        [
            'nama' => 'Es Cendol',
            'gambar' => 'https://sewasepeda.net/wp-content/uploads/2024/05/image-9.jpeg',
            'rasa' => 'Manis gurih, dan menyegarkan. Terbuat dari tepung beras, santan, dan gula merah cair.'
        ],
        [
            'nama' => 'Es Selendang Mayang',
            'gambar' => 'https://asset.kompas.com/crops/F9RqQ0eBXFqshIacjXd4wr9zxkg=/0x0:1000x667/1200x800/data/photo/2020/06/16/5ee88774b92e5.jpg',
            'rasa' => 'Manis dan gurih. Terbuat dari tepung beras, hunkwe, sagu, garam, daun pandan suji, dan gula merah.'
        ],
        [
            'nama' => 'Es Pisang Ijo',
            'gambar' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/24024706/Ini-Cara-Membuat-Es-Pisang-Ijo-Khas-Makassar-yang-Menyegarkan-.jpg',
            'rasa' => 'Manis dan gurih. Rasa manisnya dari pisang yang matang dan gurih dari santan dan gula merah cair.'
        ],
        [
            'nama' => 'Sekoteng',
            'gambar' => 'https://storage.googleapis.com/bakingworld-web-production/uploads/media/content/66d0bcc680f7c25a3745c63203250ade_resize_w1000-1722587582014.jpg',
            'rasa' => 'Perpaduan rasa manis, gurih, dan sedikit pedas dari jahe yang membuat tubuh menjadi hangat.'
        ],
    ];

    // Tampilkan data
    foreach ($items as $item) {
        echo "<div class='card'>";
        echo "<img src='{$item['gambar']}' alt='{$item['nama']}'>";
        echo "<h3>{$item['nama']}</h3>";
        echo "<p>{$item['rasa']}</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
