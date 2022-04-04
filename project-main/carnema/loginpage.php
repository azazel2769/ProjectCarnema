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
        <link rel="stylesheet" type="text/css" href="css/login.css">
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
                                                <li><a href="#products">Movies</a></li>
                                                <li class="active"><a href="loginpage.html">Login</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->

                <!-- Login Form -->


                <div class="container">
                <form action="loginproses.php" class="container" method="post">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn"><a href="signup.html">Sign Up</a></button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
                </form>

                <!-- Login form end -->
                <div class="copyright_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="copyright_taital">2019 All Rights Reserved. <a href="#">Carnema Website</p>
                        </div>
                    </div>
                </div>
            </div>


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