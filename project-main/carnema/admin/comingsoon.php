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

</div>

<div id="sidebar">
<ul>
<li><a href="upload_form.php"> Add data</a> </li>
<li><a href="movie_list.php"> Delete Data</a></li>
<li> ComingSoon </li>
</ul>
</div>

<div id="data">
<form action="upload_proses2.php"
method="post"
enctype="multipart/form-data">

Judul:
<input type="text" name="judul" /><br />
Foto:
<input type="file" name="foto" /> <br />
<button type="submit">Upload</button>

</form>
</div>
</body>
</html>