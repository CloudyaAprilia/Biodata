<?php
$piket = [
    ["Cindy","Keisha","Anin","Aida","Aqila"],
    ["Nata","Shafanira","Shifa","Maharani","Alais"],
    ["Tsabita","Aurora","Tania","Alyaa","Gendhis"],
    ["Naila","Sila","Fasya","Denia","Cloudya"], 
    ["Kartika","Syauqi","Eka","Ravid","Azis"],
    ["Rasya","Nail","Dzaky","Ibnu","Raka"],
    ["Yusuf","Wahyu","Vino","Tegar","Rayhan"],
    ["Habibi"]
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Piket</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="container">

    <header class="page-header">
        <i class="fas fa-broom icon"></i>
        <h1>Jadwal Piket Kelas</h1>
    </header>

<table class="jadwal-table">
    <tr>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
    </tr>

    <?php foreach($piket as $row): ?>
    <tr>
        <?php foreach($row as $nama): ?>
            <td class="<?= $nama=='Cloudya' ? 'highlight' : '' ?>">
                <?= $nama ?>
            </td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>

</table>

<a href="index.php" class="btn"><i class="fas fa-arrow-left"></i> Kembali</a>

</div>

</body>
</html>