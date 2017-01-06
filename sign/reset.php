<?php 
session_start();
$_SESSION['temp']=$_GET['token'];

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Sign In | HMS</title>
    
    <!-- For fotter icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- /footer icons -->
    
    <!-- CSS for materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- /CSS -->
    <!--fevicon-->
    <!-- /fevicon -->
    <!-- for smooth scroll -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script src="../js/smooth.js"></script>
    <!--/ for smooth scroll -->




</head>
<body>
    <div class="navbar-fixed">
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="https://www.bitcoinindia.in" class="brand-logo">HMS</a>
                <ul class="right hide-on-med-and-down">
                      <li><a href="#">Security</a></li>
                    <li><a href="#">MD5 hashing</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Support</a></li>
                    <li>
                        <a href="up.html" class="btn waves-effect red waves-light">
                            Sign Up
                        </a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">About</a></li>

                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        </div>
     
<iframe src="pass2.php" frameborder="0" width="100%" height="550px"></iframe>


      <footer class="page-footer red">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">HMS Pvt. Ltd.</h5>
                        <div class="white-text" style="margin-top:20px">We are a team of college students working on this project.We aim to accelerate the adoptation of HMS in India.</div>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Learn More</h5>
                        <ul>

                            <li><a class="white-text" href="#">Security</a></li>
                            <li><a class="white-text" href="#">FAQ's</a></li>
                            <li><a class="white-text" href="#">Terms of use</a></li>
                            <li><a class="white-text" href="#">AML/KYC Policy</a></li>
                            <li><a class="white-text" href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                            <li><a class="white-text" href="#!"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a class="white-text" href="#!"><i class="fa fa-youtube"></i> Youtube</a></li>
                            <li><a class="white-text" href="#!"><i class="fa fa-skype"></i> Skype</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Copyright &#169 2016 HMS Pvt. Ltd
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>

    </body>
    </html>
