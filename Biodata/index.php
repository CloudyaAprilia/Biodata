<?php

$nama_lengkap = "Cloudya Aprilia Anggreani";
$nama_panggilan = "Cloudya";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 24;
$bulan_lahir = "April";
$tahun_lahir = 2010;
$alamat = "Jl. Candi Lama, Semarang";
$kewarganegaraan = "Indonesia";
$gender = "Perempuan";
$no_wa = "0895358236099";
$email = "anggrainiy027@gmail.com";

$hobi = ["Mendengarkan Musik", "Memasak", "Menggambar"];
$skills = ["Memasak"=>89, "Menggambar"=>85];

$makanan_favorit = ["Nasi Goreng", "Mie Ayam", "Sate"];
$minuman_favorit = ["Es Teh", "Kopi", "Es Jeruk"];

$pendidikan = [
    ["SDN 03 Semarang", "2016", "2022"],
    ["SMPN 8 Semarang", "2022", "2025"],
    ["SMKN 8 Semarang", "2025", "2028"]
];

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;

$keinginan = "Hai namaku $nama_panggilan, saat ini tahun $tahun_sekarang, aku adalah seorang pelajar yang berumur $umur tahun. 
10 tahun lagi di tahun $tahun_10_lagi, di umur $umur_10_lagi tahun, aku ingin menjadi pengusaha café sukses. 
Rencana yang akan aku tempuh adalah belajar lebih rajin, mengembangkan skill, dan bekerja keras.";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Biodata Cloudya</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="card">

    <div class="card-header">
        <h1>BIODATA</h1>
    </div>

    <div class="card-body">

        <div class="photo">
            <img src="foto.jpg">
        </div>

        <div class="info">
            <p><b>Nama Lengkap:</b> <?= $nama_lengkap ?></p>
            <p><b>Nama Panggilan:</b> <?= $nama_panggilan ?></p>
            <p><b>Umur:</b> <?= $umur ?></p>
            <p><b>Tanggal :</b> <?= "$tanggal_lahir" ?></p>
            <p><b>Bulan :</b> <?= "$bulan_lahir" ?></p>
            <p><b>Tahun :</b> <?= "$tahun_lahir" ?></p>
        </div>

    </div>
    <div class="motto-card">
        <marquee direction="left">
            Di Setiap Kesulitan, Ada Kemudahan
        </marquee>
    </div>
</div>

<section class="content">

<div class="box-section">
    <h2><i class="fa fa-user"></i> Data Lengkap</h2>
    <div class="text-justify">
<p><b>Agama:</b> <?= $agama ?></p>
<p><b>Alamat:</b> <?= $alamat ?></p>
<p><b>Kewarganegaraan:</b> <?= $kewarganegaraan ?></p>
<p><b>Gender:</b> <?= $gender ?></p>
<p><b>Email:</b> <?= $email ?></p>
<p><b>No WA:</b> <?= $no_wa ?></p>
</div>
</div>

<div class="box-section">
    <h2><i class="fa fa-heart"></i> Hobi</h2>
    <ol>
        <?php foreach($hobi as $h): ?>
        <li><?= $h ?></li>
        <?php endforeach; ?>
    </ol>
</div>

<div class="box-section">
    <h2><i class="fa fa-star"></i> Skills</h2>
    <?php foreach($skills as $nama=>$nilai): ?>
        <p><?= $nama ?></p>
        <input type="range" value="<?= $nilai ?>" min="0" max="100">
    <?php endforeach; ?>
</div>

<div class="box-section">
    <h2><i class="fa fa-utensils"></i> Makanan Favorit</h2>
    <ul style="list-style-type:square;">
        <?php foreach($makanan_favorit as $m): ?>
        <li><?= $m ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="box-section">
    <h2><i class="fa fa-mug-hot"></i> Minuman Favorit</h2>
    <ol type="A">
        <?php foreach($minuman_favorit as $mn): ?>
        <li><?= $mn ?></li>
        <?php endforeach; ?>
    </ol>
</div>

<div class="box-section">
<h2><i class="fa fa-school"></i> Riwayat Pendidikan</h2> 
<div class="table-space">
<table>
<tr><th>Sekolah</th><th>Mulai</th><th>Lulus</th></tr>
<?php foreach($pendidikan as $p): ?>
<tr>
<td><?= $p[0] ?></td>
<td><?= $p[1] ?></td>
<td><?= $p[2] ?></td>
</tr>
<?php endforeach; ?>
</table>
</div>

</div>

<div class="box-section">
    <h2><i class="fa fa-bullseye"></i> Keinginan 10 Tahun Lagi</h2>
    <div class="text-justify">
        <p><?= $keinginan ?></p>
    </div>
</div>

<div class="button-area">
<a href="jadwal.php">Jadwal Pelajaran</a>
<a href="piket.php">Jadwal Piket</a>
</div>

</section>

</body>
</html>