<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>

<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
 </body>
 </html>
</form>
<?php
echo 'Selamat Datang Galan';
?>

<h2>Operator</h2>
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>

<h2>Kondisi IF</h2>
<?php
$nama_hari = date("1");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} else if ($nama_hari == "Monday") {
    echo "Senin" ; 
} else {
    echo "Selasa";
}
?>

<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("1");
switch ($nama_hari) {
    case "Sunday" :
        echo "Minggu" ;
        break;
    case "Monday" ;
        echo "Senin";
        break; 
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
}
?>

<h2>Perulangan For</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}

echo "Perulangan menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i .  '<br />';
}
?>

<h2>Perulangan while</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
?>

<h2>Perulangan dowhile</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i<=10);
?>

