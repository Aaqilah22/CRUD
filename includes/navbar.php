<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Estetik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
        }

        nav {
            background: linear-gradient(45deg, #6a11cb, #2575fc); /* Gradient Background */
            padding: 15px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #ffffff; /* White text */
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease-in-out; /* Smooth transition */
        }

        nav a i {
            margin-right: 8px; /* Space between icon and text */
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent white on hover */
            transform: scale(1.1); /* Slight scaling */
        }

        nav a.active {
            background: #ffffff; /* Active link background */
            color: #6a11cb; /* Match gradient starting color */
            font-weight: bold;
        }

        nav a.active:hover {
            transform: scale(1.1); /* Keep hover scaling on active */
        }
    </style>
</head>
<body>

    <nav>
        <a href="?page=home" class="active"><i class="fas fa-home"></i>Home</a>
        <a href="?page=makanan"><i class="fas fa-utensils"></i>Makanan</a>
        <a href="?page=minuman"><i class="fas fa-coffee"></i>Minuman</a>
        <a href="?page=about"><i class="fas fa-info-circle"></i>About</a>
        <a href="?page=contact"><i class="fas fa-envelope"></i>Contact</a>
    </nav>

</body>
</html>
