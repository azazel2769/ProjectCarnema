<?php
session_start();
//data dari form
$username = $_POST['email'];
$password = $_POST['psw'];
echo 'Bisa gak 1';

//Koneksi
try {
$k = new PDO ("mysql:host=localhost;dbname=carnema_db", "root", "");
echo 'Bisa gak 2';
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


//SQL
$sql = "SELECT * FROM register
        WHERE email = ?";

//
echo 'Bisa gak 3';

$result = $k->prepare($sql);
$result->execute([$username]);

echo 'Bisa gak 4';


//Cek email & pass
if($row = $result->fetch()){
    
echo 'Bisa gak 5';

    //username ada
    //cek password apakah sesuai
    if(password_verify($password, $row['password'])){

        //password cocok
        $_SESSION['email'] = $row['email'];
        // $_SESSION['role'] = $row['role'];
        // $_SESSION['user_id'] = $row['id'];
        header('Location: schedule.php');
    }else{
        //LOGIN gagal
        header('Location: sudahlogin.php');
        echo 'bisa dong';
}    
}