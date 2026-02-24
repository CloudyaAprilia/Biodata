<?php
$jadwal = [
    "Senin" => ["MTK","MTK","Sejarah","Agama","Agama","Agama","Agama","B. Inggris","B. Inggris","B. Indonesia"],
    "Selasa"=>["IPAS","IPAS","IPAS","IPAS","PPS","PPS","B. Jawa","B. Jawa","Seni Musik","Seni Musik"],
    "Rabu"=>["PGD","PGD","PGD","PGD","PGD","PGD","GIM","GIM","GIM","GIM"],
    "Kamis"=>["POR","POR","POR","Sejarah","B. Inggris","B. Inggris","MTK","MTK","B. Indonesia","B. Indonesia"],
    "Jumat"=>["Informatika","Informatika","KKA","KKA","IPAS","IPAS","PGD","PGD","-","-"]
];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jadwal Pelajaran</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">

<h2>Jadwal Pelajaran</h2>

<table class="jadwal-table">
<tr>
<th>Jam</th>
<?php foreach($jadwal as $hari => $mapel): ?>
<th><?= $hari ?></th>
<?php endforeach; ?>
</tr>

<?php for($i=0; $i<10; $i++): ?>
<tr>
<td><b><?= $i+1 ?></b></td>
<?php foreach($jadwal as $hari => $mapel): ?>
<td><?= $mapel[$i] ?></td>
<?php endforeach; ?>
</tr>
<?php endfor; ?>
</table>

<br>
<a href="index.php">Kembali ke Biodata</a>

</div>

</body>
</html>