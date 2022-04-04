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
<li><a href="upload_form2.php">ComingSoon  </a> </li>
<li><a href="bookinglist.php">BookingList</a> </li>
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
$sql = "SELECT * FROM booking";

//Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute();

?>

<h1>BookingList</h1>
<br></br>
<table border="1">
    <tr>
    <th>No</th>
    <th>ID</th>
    <th>Full Name</th>
    <th>Last Name</th>
    <th>Film</th>
    </tr>
    <?php
$i = 1;
while($row = $hasil->fetch()):
?>
<tr>
    <td><?= $i; ?></td>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
    <td><?php echo $row['film']; ?></td>
    <td>
    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
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