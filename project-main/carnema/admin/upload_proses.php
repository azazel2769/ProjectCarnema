<?php
// data dari form
$judul = $_POST['judul'];
$foto = $_FILES['foto'];
$deskripsi = $_POST['deskripsi'];

// dapatkan ekstensi file
$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);

// buat array berisi dftar ekstensi yang diperbolehkan
$ext_boleh = ['jpg', 'png', 'jpeg'];

// cek apakah file yang diupload memiliki ext yang valid
if(in_array($ext, $ext_boleh)){
   $sumber = $foto['tmp_name'];
   $tujuan = 'uploads/' . $foto['name'];
   move_uploaded_file($sumber, $tujuan);

   $k = new PDO("mysql:host=localhost;dbname=carnema_db", "root", "");
   $sql = " INSERT INTO  movie (judul, foto, deskripsi)
   VALUES (?, ?, ?)";
   $result = $k->prepare($sql);
   $result->execute([$judul, $tujuan, $deskripsi]);

}else{
    echo "file tidak valid";
}