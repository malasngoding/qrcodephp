<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat QR Code Generator Dengan PHP - www.malasngoding.com</title>
</head>
<body>

    <style type="text/css">
        body{
            /*background: orange;*/
        }

        h2,h3{
            text-align: center;
        }

        .kotak{
            width: 300px;
            border: 1px dashed black;
            margin: 10px auto;
            padding: 20px;
            text-align: center;
        }

        .hasil{
            text-align: center;
        }
    </style>

    <h2>Tutorial Membuat QR Code Dengan PHP</h2>
    <h3><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>

    <div class="kotak">
        <form method="GET" action="">
            <input type="text" name="isi_konten" placeholder="isi konten qrcode ..">
            <input type="submit" value="Buat QR Code">
        </form>
    </div>

    <div class="hasil">
        <?php 
        if(isset($_GET['isi_konten'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $_GET['isi_konten'];

            // memanggil library php qrcode
            include "phpqrcode/qrlib.php"; 

            // nama folder tempat penyimpanan file qrcode
            $penyimpanan = "temp/";

            // membuat folder dengan nama "temp"
            if (!file_exists($penyimpanan))
             mkdir($penyimpanan);

            // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
            // atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
            // atur pixel qrcode pada parameter ke 4
            // atur jarak frame pada parameter ke 5
            QRcode::png($isi, $penyimpanan.'hasil_qrcode.png', QR_ECLEVEL_L, 10, 5); 
         
            // menampilkan qrcode 
            echo '<img src="'.$penyimpanan.'hasil_qrcode.png">';
        
        }
        ?>
    </div>

</body>
</html>