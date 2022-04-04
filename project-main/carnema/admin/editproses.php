<?php

try {
    $kunci = new PDO("mysql:host=localhost;dbname=carnema_db", "root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $sql = "UPDATE movie
SET judul = :judul, 
    foto = :foto,
    deksripsi = :dekripsi
WHERE id = :id";

    $hasil = $kunci->prepare($sql);

    $data =[
        ':judul' =>$_POST['judul'],
        ':foto' =>$_POST['foto'],
        ':deskripsi'=>$_POST['deskrispi'],
        ':id' =>$_POST['id']
    ];

    $stmt = $hasil ->execute($data);
    header("Location: form_edit.php");
}catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();

}

?>