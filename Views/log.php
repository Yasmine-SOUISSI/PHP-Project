<?php
    session_start();
        include_once '../Models/user.php';
        include_once '../Controller/userC.php';

        $error = "";
        $message="";

        $User = null;

        $UserC = new userC();
        $a = 0;
    
    ?>
<?php
    if (isset($_POST["email"]) &&isset($_POST["pwd"])) {
        if (!empty($_POST["email"]) && !empty($_POST["pwd"])) {
            $message=$UserC->connexionUser($_POST["email"],$_POST["pwd"]);
            $_SESSION['e'] = $_POST["email"];

            if($message!='pseudo ou le mot de passe est incorrect')
            {     
                    $info = $UserC->recupererUserInfo($_POST["email"]);
                    $_SESSION['id'] = $info["id"];
                    $_SESSION['username'] = $info["username"];
                    $_SESSION['pwd'] = $info["pwd"];
                    $_SESSION['confirmer'] = $info["confirmer"];            
                    $_SESSION['datee'] = $info["datee"];
                    $_SESSION['typee'] = $info["typee"];
                    if($message=='admin')
                    { 
                    header('Location: ../Admin/afficherutilisateur.php');
                    }
                    else if ($message=='client')
                    {
                    header('Location:../BackViews/compte.php');
                    }
            }
        } else $error = "Missing information";
    }
?>

<html style="font-size: 16px;">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Add Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />

    <!-- Bootstrap -->


    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
    }
    </script>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Land<em>Na</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <a href="../index.html" class="active">Home</a>
                            </li>
                            <li><a href="./Bloc.php">Blocs</a></li>

                            <li>
                                <a href="./EventFront.php">Events</a>
                            </li>
                            <li>
                                <a href="./afficherResto.php">Restaurants</a>
                            </li>
                            <li><a href="./ajouterUser.php">Sign Up</a></li>
                            <li><a href="log.php">Sign In</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="error">
        <?php echo $error; ?>
    </div>


    <div id="booking" class="section">

        <div class="section-center">

            <div class="container">
                <div class="row">


                    <div class="booking-form">

                        <form method="POST" action="">
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" name="email" type="text" id="nom_client" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Password</span>
                                <input class="form-control" type="password" name="pwd"
                                    placeholder=" Enter your email" />
                            </div>
                            <div class="form-btn">
                                <input type="submit" value="Log In " class="submit-btn" />
                            </div>
                            <a class="u-label u-label-1" href="./ajouterUser.php">S'inscrire </a>
                            <a class="u-label u-label-2" href="./reset_pass.php">Mot de passe oublié ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- ***** Footer ***** -->
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <div class="sub-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <span>Land<em>Na</em></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu">
                                <ul class="nav">
                                    <li>
                                        <a href="index.html" class="active">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>

                                    <li>
                                        <a href="shows-events.html">Shows & Events</a>
                                    </li>
                                    <li>
                                        <a href="">Restaurants</a>
                                    </li>
                                    <li>
                                        <a href="tickets.html">Tickets</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                        </script>
                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                        </script>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/mixitup.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
</body>

</html>