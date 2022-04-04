<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Carnema</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/filmpage.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style>
.flex-container {
  display: flex;
  flex-wrap: nowrap;

}

.flex-container > div {

  width: 500px;
  margin: 10px;
  text-align: justify;
  line-height: 75px;
  font-size: 30px;
}

.teks{
    margin-top: 150px;
}

.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}

.first {
  -webkit-transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
  box-shadow: 0 0 40px 40px #e74c3c inset;
}

.jam{
    margin-left: 300px;
}
</style>
</head>

<body>
    <header>
        <div class="layout_padding banner_section_start">
            <!-- header inner -->
            <header>
                <div class="layout_padding banner_section_start">
                    <!-- header inner -->
                    <div class="header">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.html"><img src="images/logocarnema.png" style="max-width: 100%;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                    <div class="menu-area">
                                        <div class="limit-box">
                                            <nav class="main-menu">
                                                <ul class="menu-area-main">
                                                    <li class="active"><a href="home.php">Home</a></li>
                                                    <li><a href="schedule.php">Movies</a></li>
                                                    <li><a href="loginpage.php">Login</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- end header inner -->


            <!-- Content -->

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


    <?php
    echo "";
    echo $_GET['id']
    ?>

<div class="flex-container">
  <div>
  <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den"><?= $row['judul'] ?></span></strong></h1>
     <img src="admin/<?=$row['foto']?>" style="width: 500px; height: 600px; margin-top: 50px;"/>
  </div>
  <div>
  <div class="jam">
  <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den"><?= $row['jam']?></span></strong></h1>
  </div>
      <div class="teks">
      <p><?= $row['deskripsi'] ?></p>
      <button class="btn first"><a href="bookingform.php">Pesan Tiket</button>
</div>
    </div>
 

     <!-- HEHE -->
    <!-- <div class="row">
        <div class="col">
            <div class="leftside">
                <div id="products" class="layout_padding product_section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den"><?= $row['judul'] ?></span></strong></h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                <img src="admin/<?=$row['foto']?>" style="width: 300px; height: 400px"/>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="rightside"><?= $row['deskripsi'] ?></div>
        </div>
           
    -->
   
  
   
   
    </div>

            

            </div>

            <!-- Testing Brow -->
         

            

            <!-- copyright start-->
            <div class="copyright_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="copyright_taital">2019 All Rights Reserved. <a href="#">Carnema Website</p>
    			</div>
    		</div>
    	</div>
    </div>



	<!-- copyright end-->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 

         <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/location_point.png';
          var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
          });
        }
        </script>
        <!-- google map js -->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
        <!-- end google map js -->




</body>
</html>