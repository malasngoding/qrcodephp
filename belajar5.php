<?php
// https://www.malasngoding.com

// memanggil library php qrcode
include "phpqrcode/qrlib.php"; 

// nama folder tempat penyimpanan file qrcode
$penyimpanan = "temp/";

// membuat folder dengan nama "temp"
if (!file_exists($penyimpanan))
 mkdir($penyimpanan);

// isi qrcode yang ingin dibuat. akan muncul saat di scan
$isi = 'https://www.malasngoding.com'; 

// perintah untuk membuat qrcode dan menyimpannya dalam folder temp
// atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
// atur pixel qrcode pada parameter ke 4
// atur jarak frame pada parameter ke 5
QRcode::png($isi, $penyimpanan.'004_1.png', QR_ECLEVEL_L, 1, 5); 
QRcode::png($isi, $penyimpanan.'004_2.png', QR_ECLEVEL_M, 2, 8); 
QRcode::png($isi, $penyimpanan.'004_3.png', QR_ECLEVEL_Q, 3, 10); 
QRcode::png($isi, $penyimpanan.'004_4.png', QR_ECLEVEL_H, 4, 15);


echo '<h2>Tutorial Membuat QR Code Dengan PHP : Jarak Frame</h2>';
echo '<h3>www.malasngoding.com</h3>';

 // menampilkan qrcode 
echo '<img src="'.$penyimpanan.'004_1.png">';
echo '<img src="'.$penyimpanan.'004_2.png">';
echo '<img src="'.$penyimpanan.'004_3.png">';
echo '<img src="'.$penyimpanan.'004_4.png">';
?>
