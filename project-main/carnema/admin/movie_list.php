<html>
<head>
<title>Admin Panel</title>
<style>
body{
    margin: 0px;
    border: 0px;
}
#header{
    width: 100%;
    height: 120px;
    background: #FF5733;
    color: white;
}
#sidebar{
    width: 300px;
    height: 650px;
    background: #FF5733;
    float: left;
}
#data{
    height: 600px;
    background: white;
}
ul li{
    padding: 20px;
    border-bottom: 2px solid black;
}

ul li:hover{
    background: #c0392b;
    color: white;
}
</style>
</head>

<body>
<div id="Header">
Carnema Admin Page
</div>

<div id="sidebar">
<ul>
<li><a href="upload_form.php">Add Data</a></li>
<li><a href="movie_list.php">Delete Data</a></li>
<li><a href="comingsoon.php"> comingsoon</a> </li>
<li><a href="bookinglist.php"> Booking List</a>  </li>
</ul>
</div>
<div id="data">
<?php

//Tahap 1.
$a = "mysql:host=localhost;dbname=carnema_db";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

//Tahap 2. 
$sql = "SELECT * FROM movie";

//Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute();

?>

<h1>Daftar Produk</h1>
<br></br>
<table border="1">
    <tr>
    <th>No</th>
    <th>ID</th>
    <th>Judul</th>
    <th>Foto</th>
    <th>Deskripsi</th>
    <th>Tindakan</th>
    </tr>
    <?php
$i = 1;
while($row = $hasil->fetch()):
?>
<tr>
    <td><?= $i; ?></td>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['judul']; ?></td>
    <td><?php echo $row['foto']; ?></td>
    <td><?php echo $row['deskripsi']; ?></td>
    <td>
    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    <a href="form_edit.php?id=<?= $row['id'] ?>">Edit</a>
    </td>


</tr>
<?php
$i++;
endwhile;
?>
</table>

</div>
</body>
</html>