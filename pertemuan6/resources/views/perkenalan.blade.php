<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            border:2px solid black;
            border-radius:25px;
            max-width: 800px;
            margin: 0 auto;
            background: #fffeb8;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        ul, li {
            list-style-type:none;
            margin-bottom:10px;
        }
        .details {
            display: flex;
            flex-direction: column;
        }

        .details li {
            display: flex;
        }

        .details li strong {
            min-width: 150px;
        }
        span {
            font-weight:bold;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Perkenalan Diri</h1>
        <ul class="details">
            <li><strong>Nama :</strong> Erik Setiawan</li>
            <li><strong>Tempat Lahir :</strong> Bogor</li>
            <li><strong>Alamat :</strong> Bogor</li>
            <li><strong>Hobi :</strong> Bermain Game</li>
            <li><strong>Pendidikan :</strong> STT Terpadu Nurul Fikri</li>
        </ul>
        <h2>About Me</h2>
        <blockquote>
            <p><strong>Hello Everyone!</strong> Saya merupakan salah satu mahasiswa Teknik Informatika semester 2 di STT Terpadu Nurul Fikri. Saat ini saya sedang mengikuti kelas online Web Developer di <span>Jarviscamp Academy batch 5</span> dengan materi saat ini yang sedang dipelajari yaitu Laravel.
            <br>
            Ingin ikutan juga ? Buruan daftar di <a href="https://jarvis-solusi.id/">Jarviscamp Academy batch 5</a>!!
            </p>
        </blockquote>
    </div>
</body>
</html>