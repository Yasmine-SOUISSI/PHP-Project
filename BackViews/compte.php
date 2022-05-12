<?php
// On prolonge la session
    session_start();

    //include_once "C://wamp64/www/solis/config.php";
    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e']))
    {
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location: ../Views/log.php');
    }
    ?>
<?php
    //require_once '../../Controller/UserC.php';
    require_once '../Controller/userC.php';
    require_once '../Models/user.php';

    $error = "";

    $admin = null;


if (
    isset($_POST["id"]) &&
    isset($_POST["username"]) &&		
    isset($_POST["email"]) &&
    isset($_POST["pwd"]) && 
    isset($_POST["confirmer"]) && 
    isset($_POST["datee"])&&
    isset($_POST["typee"])
) {
    if (
        !empty($_POST["id"]) && 
        !empty($_POST["username"]) &&
        !empty($_POST["email"]) && 
        !empty($_POST["pwd"]) && 
        !empty($_POST["confirmer"]) && 
        !empty($_POST["datee"])&&
        !empty($_POST["typee"])
    ) {
        $user = new User(
            $_POST['username'],
            $_POST['email'], 
            $_POST['pwd'],
            $_POST['confirmer'],
            $_POST['datee'],
            $_POST['typee']
        );
       
        header('refresh:2;url=afficherUser.php');
    } else
        echo "Missing information";
}
$userC = new userC();

$email=  $_SESSION['e'] ;
$username=  $_SESSION['username'] ;
$pwd=  $_SESSION['pwd'] ;
$datee=  $_SESSION['datee'] ;
$typee=  $_SESSION['typee'] ;
$cin= $_SESSION['id'] ;
?>



<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Get Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />

    <!-- Bootstrap -->



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
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="compte">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
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
                                <a href="../index.html">Home</a>
                            </li>
                            <li>
                                <a href="../Views/Bloc.php">Blocs</a>
                            <li>
                            <li>
                                <a href="../Views/EventFront.php">Events </a>
                            <li>
                                <a href="compte.php">Profile</a>
                            </li>
                            <li>
                                <a href="./ajouterReservation.php">Ajouter Reservation</a>
                            </li>


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
    <h2 class="u-custom-font u-font-lobster u-text u-text-palette-1-base u-text-1">votre compte</h2>
    <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">


        <table>

            <div class="u-form-group u-form-name">
                <label for="cin" class="u-custom-font u-font-lobster u-label u-label-1">cin</label>
                <input type="text" value="<?php  echo $cin ?>" id="cin" name="cin"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12" required="">
            </div>
            <div class="u-form-group u-form-name">
                <label for="username" class="u-custom-font u-font-lobster u-label u-label-1">username</label>
                <input type="text" value="<?php  echo $username ?>" id="username" name="username"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12" required="">
            </div>
            <div class="u-form-email u-form-group">
                <label for="email" class="u-custom-font u-font-lobster u-label u-label-2">Email</label>
                <input type="email" value="<?php  echo $email ?>" id="email" name="email"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12" required="">
            </div>
            <div class="u-form-group u-form-group-3">
                <label for="pwd" class="u-custom-font u-font-lobster u-label u-label-3">mot de
                    passe</label>
                <input type="password" value="<?php  echo $pwd ?>" id="pwd" name="pwd"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
            </div>
            <div class="u-form-group u-form-group-4">
                <label for="datee" class="u-custom-font u-font-lobster u-label u-label-4">date de
                    naissance</label>
                <input type="text" value="<?php  echo $datee ?>" id="datee" name="datee"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
            </div>
            <div class="u-form-group u-form-group-4">
                <label for="typee" class="u-custom-font u-font-lobster u-label u-label-4">date de
                    naissance</label>
                <input type="text" value="<?php  echo $typee ?>" id="typee" name="typee"
                    class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
            </div>

            <tr>
                <td>
                    <form method="POST" action="modifierUser.php">
                        <input type="submit" name="Modifier" value="Modifier">
                        <input type="hidden" value=<?php  echo $cin ?> name="id">
                    </form>
                </td>
                <td>
                    <!-- Logout Modal-->
                    <form action="./logout.php">
                        <button type="submit">Logout</button>
                    </form>
                </td>
            </tr>
        </table>



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















</html>