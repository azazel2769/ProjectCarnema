<?php
// data dari form
$k = new PDO ("mysql:host=localhost;dbname=carnema_db", "root", "");
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$username = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


//1.




//2.
$sql = "INSERT INTO register (firstname, lastname, email, password)
        VALUES (?, ?, ?, ?)";

//3.
$result = $k->prepare($sql);
$result->execute([$fname, $lname, $username, $password]);


//redirect
header('Location: home.php');