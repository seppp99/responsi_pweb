<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Antrian</title>
    <style>
        body {
            background-color: aliceblue;
            font-family: 'Roboto', sans-serif;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .navbar {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: right;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            background-color: rgb(103, 106, 108);
            transition: background-color 0.3s, backdrop-filter 0.3s;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding-top: 80px; /* Tambahkan padding untuk menghindari overlap dengan navbar */
        }

        h1 {
            font-size: 40px;
            color: #fff;
        }

        .antrian-list {
            width: 80%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border: 5px solid rgb(248, 247, 247);
        }

        .antrian {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px 0;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            text-align: left;
        }

        .antrian p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="menu.html" class="back">Back</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="antrian.php">Antrian</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Daftar Antrian</h1>
        <div class="antrian-list">
            <?php
            $antrian = file("antrian.txt", FILE_IGNORE_NEW_LINES);

            foreach ($antrian as $entry) {
                echo "<div class='antrian'>";
                echo nl2br($entry); // Menggunakan nl2br untuk menampilkan baris baru dari data antrian
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
