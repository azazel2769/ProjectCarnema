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
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <!-- Lightslider css-->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <!--Jquerry-->
    <script type="text/javascript" src="js/Jquerry.js"></script>
    <!--Lightslider JS-->
    <script type="text/javascript" src="js/lightslider.js"></script>
</head>

<body>
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
                                        <a href="#home"><img src="images/contoh logo.png" style="max-width: 100%;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="#products">Movies</a></li>
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




    <!-- product start-->
    <div id="products" class="layout_padding product_section ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="margin-bottom:10px;" class="product_text"><strong><span class="den">Now</span>Showing</strong></h1>
                </div>
            </div>
      
                <form action="" method="POST" enctype="multipart/form-data">

<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'carnema_db');

$query = "SELECT * FROM movie";
$query_run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($query_run)) {
    $img_src = $row['foto'];
?>
<!-- <div style="margin: 5px;"> -->

<img style="margin-right:20px; margin-bottom: 20px;" src="admin/<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" width="310" height="500" class="img-responsive; float: left;" />
<!-- </div> -->
    <?php
}

?>

</form>
                     
                        </div>

                
                    <!-- Upcoming -->
                    <div id="products" class="layout_padding product_section ">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="product_text"><strong><span class="den">Up</span>Coming</strong></h1>
                                </div>
                            </div>
                            <div class="product_section_2 images">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="images"><img src="images/cover 1.jpg" style="max-width: 100%; width: 100%;"></div>
                                        <h2 class="den_text croissants"><a href="#">Monster House</a></h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="images"><img src="images/cover 2.jfif" style="max-width: 100%; width: 100%;"></div>
                                        <h2 class="den_text"><a href="#">Avatar</a></h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="images"><img src="images/cover 3.jfif" style="max-width: 100%; width: 100%;"></div>
                                        <h2 class="den_text"><a href="#">BreadFrench Toast</a></h2>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product end-->


                    copyright start
                    <div class="copyright_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="copyright_taital">2019 All Rights Reserved. <a href="index.html">Carnema Website</p>
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
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

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
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/location_point.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>


    <script src="js/script.js"></script>


</body>

</html>