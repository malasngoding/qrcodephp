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
QRcode::png($isi, $penyimpanan.'qrcodeku_L.png', QR_ECLEVEL_L); 
QRcode::png($isi, $penyimpanan.'qrcodeku_M.png', QR_ECLEVEL_M); 
QRcode::png($isi, $penyimpanan.'qrcodeku_Q.png', QR_ECLEVEL_Q); 
QRcode::png($isi, $penyimpanan.'qrcodeku_H.png', QR_ECLEVEL_H);


echo '<h2>Tutorial Membuat QR Code Dengan PHP : Level ECC</h2>';
echo '<h3>www.malasngoding.com</h3>';

 // menampilkan qrcode 
echo '<img src="'.$penyimpanan.'qrcodeku_L.png">';
echo '<img src="'.$penyimpanan.'qrcodeku_M.png">';
echo '<img src="'.$penyimpanan.'qrcodeku_Q.png">';
echo '<img src="'.$penyimpanan.'qrcodeku_H.png">';
?>
