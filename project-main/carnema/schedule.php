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
    <link rel="stylesheet" type="text/css" href="css/home.css">
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
                                            <li><a href="home.php">Home</a></li>
                                            <li class="active"><a href="schedule.php">Movies</a></li>
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
            <!-- end header inner -->

    
            <!-- Now Showing -->

    <div id="products" class="layout_padding product_section ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den">Now</span>Showing</strong></h1>
                </div>
            </div>
</div>
</div>

<!-- Now Showing End -->
  

    <!-- Poster FIlm -->
    <div class="row">
        <div class="col-lg-12 scrolling-wrapper" style="margin-left: 200px;">
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
            <?php
            $i = 1;
            while ($row = $hasil->fetch()) :
                $img_src = $row['foto'];
            ?>



                <!-- Card -->
                <div class="card">

                    <img src="admin/<?php echo $img_src; ?>" style="width: 300px; height: 400px" alt="" title="<?php echo $img_name; ?>">
                    <div class="container">
                        <h3 class="card-title"><?php echo $row['judul']; ?></h3>
                    </div>
                    <div class="button-container">
                    <a class="btn-solid-reg popup-with-move-anim" href="filmpage.php?id=<?=$row['id'] ?>">Cek Film</a>
                            </div> <!-- end of button-container -->
                </div>
    
            <?php
                $i++;
            endwhile;
            ?>
</div>
        </div>
       <!-- Akhir Poster Film -->

       <!-- Coming Soon -->

       <div id="products" class="layout_padding product_section ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den">Coming</span>Soon</strong></h1>
                </div>
            </div>
</div>
</div>

       <div class="row">
        <div class="col-lg-12 scrolling-wrapper" style="margin-left: 200px;">
            <?php

            //Tahap 1.
            $a = "mysql:host=localhost;dbname=carnema_db";
            $b = "root";
            $c = "";
            $kunci = new PDO($a, $b, $c);

            //Tahap 2. 
            $sql = "SELECT * FROM comingsoon";

            //Tahap 3.
            $hasil = $kunci->prepare($sql);
            $hasil->execute();

            ?>
            <?php
            $i = 1;
            while ($row = $hasil->fetch()) :
                $img_src = $row['foto'];
            ?>



                <!-- Card -->
                <div class="card">

                    <img src="admin/<?php echo $img_src; ?>" style="width: 300px; height: 400px" alt="" title="<?php echo $img_name; ?>">
                    <div class="container">
                        <h3 class="card-title"><?php echo $row['judul']; ?></h3>
                    </div>
                  
                </div>
    
            <?php
                $i++;
            endwhile;
            ?>
</div>
        </div>

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