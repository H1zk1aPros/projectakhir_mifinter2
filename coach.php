<?php  include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Coaches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .coach-card {
            border: none;
        }
        .coach-name {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .coach-role {
            font-size: 1.25rem;
            color: red;
            font-weight: bold;
        }
        .coach-image {
            background-color: #b60000;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
        }
        .coach-image img {
            max-height: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Our Coaches</h1>
        
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="coach-image">
                    <img src="asset/akira.png" alt="Akira">
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="coach-name">Akira</h2>
                <p class="coach-role">COACH JIUJITSU</p>
                <p>Akira memulai Jiu-jitsu sejak 7 tahun lalu dan mendalaminya di Singapura. Rasa ingin tahunya yang tinggi membuat ia terus belajar untuk menyelesaikan sesuatu yang sedikit lebih besar dan besar dalam Jiu-jitsu setiap harinya.
                Akira  saat mengajar memberikan struktur dan tujuan yang jelas pada setiap teknik atau gerakan yang ia ajarkan. Sehingga, murid dapat mengembangkan skill-nya dalam waktu singkat. Ia berharap murid dapat berprestasi dan meraskan efek positif yang sama dengan yang Akira rasakan  dari Jiu-jitsu.</p>
                <p><strong>Certificate:</strong></p>
                <img src="asset/certificate-akira.png" alt="Certificate Akira" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <div class="coach-image">
                    <img src="asset/satria.png" alt="Satria">
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="coach-name">Satria</h2>
                <p class="coach-role">COACH MUAYTHAI & BOXING</p>
                <p>Memulai karirnya di muaythai pada 2010. Menjuarai kejuaraan tingkat nasional sejak 2013 dan berlatih di pelatnas. Kini menjadi trainer muaythai dengan motivasi menyalurkan dan mengembangkan bakatnya. </p>
                <p><strong>Certificate:</strong></p>
                <img src="asset/certificate-satria.png" alt="Certificate Satria" class="img-fluid">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <div class="coach-image">
                    <img src="asset/nyo.png" alt="Nyo">
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="coach-name">Nyo</h2>
                <p class="coach-role">COACH KARATE</p>
                <p>Dalam mengajar, Budi atau yang akrab disapa Nyo memiliki prinsip mengajar karate dimulai dari seribu hari dan dikuasai 10.000 hari. Prinsip tersebut dapat diibaratkan dengan air dalam teko yang dipanasi , ketika api dimatikan jelas akan kembali mengulang dari awal. Jadi, air harus selalu dipanasi dan ditambah agar tetap menjadi air panas. Karate adalah perjalanan seumur hidup.
                Pengalamannya dalam mengajar menemui berbagai macam murid. Terdapat murid yang cepat menerima dan sebaliknya. Nyo beranggapan bahwa tidak ada murid yang tidak memiliki bakat. Semua bisa jika berlatih dan belajar dengan tekun</p>
                <p><strong>Certificate:</strong></p>
                <img src="asset/certificate-nyo.png" alt="Certificate Nyo" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php  include "includes/footer.php"; ?>