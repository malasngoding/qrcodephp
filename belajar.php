<?php
// https://www.malasngoding.com

// memanggil library php qrcode
include "phpqrcode/qrlib.php"; 

// isi qrcode yang ingin dibuat. akan muncul saat di scan
$isi = 'https://www.malasngoding.com'; 

// perintah untuk membuat qrcode dan menampilkannya secara langsung dengan format .PNG
QRcode::png($isi); 
?>