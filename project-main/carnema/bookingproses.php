<?php

try {
    $kunci = new PDO("mysql:host=localhost;dbname=carnema_db", "root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $sql = "INSERT INTO booking (fname, lname, film) VALUES (:fname,:lname,:film)";

    $hasil = $kunci->prepare($sql);
    $data = [
        ':fname' =>$_POST['first-name'],
        ':lname' =>$_POST['last-name'],
        ':film' =>$_POST['judul']
    ];

    $stmt = $hasil ->execute($data);
    header("Location: qrpage.php");


}catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

?>