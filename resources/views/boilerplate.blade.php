<!DOCTYPE html>
<html>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <!-- Normalize CSS
     <link rel="stylesheet" href="css/normalize.css">
    Main CSS -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="css/animate.min.css"> -->
    <!-- Font-awesome CSS-->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- Owl Caousel CSS -->
    <!-- <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css"> -->
    <!-- Main Menu CSS -->
    <!-- <link rel="stylesheet" href="css/meanmenu.min.css"> -->
    <!-- nivo slider CSS -->
    <!-- <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" /> -->
    <!-- Datetime Picker Style CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.datetimepicker.css"> -->
    <!-- Magic popup CSS -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- Switch Style CSS -->
    <!-- <link rel="stylesheet" href="css/hover-min.css"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="style.css">  -->
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    <style>
        @media screen and (min-height: 500px;){}
        .footer.vesitfooter{
            background-color: #404552;
            color: white;
            width:100%;
        }

        .footer.vesitfooter a{
            color: white;
            text-decoration: none;
        }

        .vesitcopyright{
            background-color: #404552;
            color: white;
            width:100%;
        }

        #header li.nav-item a.nav-link.vesittopnavcolor{
            text-decoration: none;
            color:white;
        }
        #header li.nav-item.nav-link{
            text-decoration: none;
            color:white;
    }

        </style>
         <header style="background-color: #224C83;, height: 20px;width:100%;">
                <nav class="navbar mb-3" style="background-color: #224C83;" id="header">
                    <li class="nav-item nav-link">1800 266 9010</li>
                    <li class="nav-item nav-link">vesit@ves.ac.in</li>
                    <ul class="nav justify-content-end">
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="#">Search</a></li>
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="#">Updates</a></li>
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="#">NIRF</a></li>
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="#">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link vesittopnavcolor" href="/contact">Contact Us</a></li>
                    </ul>
                </nav>
            </header>
    <body>
       <div>
           @include('navbar')</div>
           <div>@include('messages')</div>
        <div>@yield('page')</div>
        
    </body>
    <footer class="footer vesitfooter" style="padding-top: 2%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://ves.ac.in/vesit/wp-content/uploads/sites/3/2018/07/Logo.png" style="max-height: 70px;" alt="VESIT">
                        </div>
                        <div class="col-md-10">
                            <span class="font-weight-bold">Vivekanand Society's Institute Of Technology</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <span class="font-weight-bold">
                                    Hashu Adwani Memorial Complex, Collector's Colony, Chembur, Mumbai, Maharashtra 400074
                            </span>
                            <br>
                            <span>VESIT Directory</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Online Payments</a></li>
                        <li><a href="#">Current Opening</a></li>
                        <li><a href="#">NIRF</a></li>
                        <li><a href="#">IQAC</a></li>
                        <li><a href="#">PRME</a></li>
                        <li><a href="#">Swamyam</a></li>
                        <li><a href="#">NDL</a></li>
                        <li><a href="#">Nptel</a></li>
                        <li><a href="#">Feedback Process</a></li>
                        <li><a href="#">Student Handbook</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Audit Reports</a></li>
                </div>
                <div class="col-md-3">
                    <h5>Other Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">DTE Maharashtra</a></li>
                        <li><a href="#">ATMA AIMS</a></li>
                        <li><a href="#">CMAT</a></li>
                        <li><a href="#">GMAT</a></li>
                        <li><a href="#">CAT</a></li>
                        <li><a href="#">MAT</a></li>
                        <li><a href="#">XAT</a></li>
                        <li><a href="#">Caste-based Discrimination</a></li>
                        <li><a href="#">Complaints</a></li>
                        <li><a href="#">Edugrievance</a></li>
                        <li><a href="#">Students and Faculty</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>Social Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="vesitcopyright text-center">
        <span class="font-weight-bold">&copy;2019 Vivekanand Education Society. All Rights Reserved</span>
    </div>
</html>
