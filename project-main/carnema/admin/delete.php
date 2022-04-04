<?php
$id = $_GET['id'];

// TAHAP 1.
$a = "mysql:host=localhost;dbname=carnema_db";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

// Tahap 2
$sql = "DELETE FROM movie
        WHERE id=?";

// Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute([$id]);

// // redirect back 
// header('Location: select.php');
