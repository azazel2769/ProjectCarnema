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

    
}
</style>
</head>

<body>
<div id="Header">
<div class="judul">
<p>Carnema Admin Page</p>
</div>
</div>

<div id="sidebar">
<ul>
<li><a href="upload_form.php">Add Data</a></li>
<li><a href="movie_list.php">Delete Data</a></li>
<li><a href="comingsoon.php"> comingsoon</a> </li>
<li><a href="bookinglist.php"> Booking List</a>  </li>
</ul>
</div>

<?php

try {
    $kunci = new PDO("mysql:host=localhost;dbname=carnema_db", "root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $sql ="SELECT * FROM movie WHERE id=:id";

    $dat = [':id' => $_GET['id']];

    $hasil = $kunci -> prepare($sql);

    $hasil->execute($dat);

    $row = $hasil->fetch();
}catch (PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}



?>

<div id="data">
<form action="upload_proses.php"
method="post"
enctype="multipart/form-data">
<?php
    echo "Id Produk : ";
    echo $_GET['id']
    ?>

Judul:
<input style="width:900px; margin-bottom: 20px;" type="text" name="judul" value="<?= $row['judul'] ?>" /><br />
Foto:
<input type="file" name="foto" /> <br />
Deskripsi:
<input style="width:900px; height:200px; margin-bottom: 20px; margin-top: 20px;" type="text" name="deskripsi"value="<?= $row['deskripsi'] ?>" /><br />
<button type="submit">Upload</button>

  
</div>

</form>
</div>
</body>
</html>