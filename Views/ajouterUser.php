<?php
    include_once '../Models/user.php';
    include_once '../Controller/userC.php';
    include_once '../Controller/mail.php';
    //$_POST['g-recaptcha-response'] != ""
    if (isset($_POST['submit'])  ) {
        // include "db_config.php";
        // $secret = '6LdAnrYfAAAAAGnfKNoDyyVefvW7d1GmHk9qLsti';
        // $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        // $responseData = json_decode($verifyResponse);
        // if ($responseData->success) {
            
            //first validate then insert in db
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            mysqli_query($conn, "INSERT INTO signup(name, email ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . md5($_POST['password']) . "')");
            echo "Your registration has been successfully done!";
    //     }
    }
    $error = "";
    $User = null;
    // create an instance of the controller
    $UserC = new userC();
    if (
       // isset($_POST["id"]) &&
		isset($_POST["username"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["pwd"]) && 
        isset($_POST["confirmer"]) && 
        isset($_POST["datee"])
      
       

    ) {
        if (
           // !empty($_POST["id"]) && 
			!empty($_POST["username"]) &&
            !empty($_POST["email"]) && 
			!empty($_POST["pwd"]) && 
            !empty($_POST["confirmer"]) && 
            !empty($_POST["datee"])
         

           
        ) {
            $User = new user(
               // $_POST['id'],
				$_POST['username'],
                $_POST['email'], 
				$_POST['pwd'],
                $_POST['confirmer'],
                $_POST['datee']
                
            );


            $secret = '6LdAnrYfAAAAAGnfKNoDyyVefvW7d1GmHk9qLsti';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' );
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            



            $UserC->ajouteruser($User);
            

           $email='ala.chebil@esprit.tn';
            $email_content = array(
            'Subject' => ' Verification',
            'body' => "http://localhost/login/views/log.php
            cordialement,
            EDUCAPLAY"
           );
            sendemail($email,$email_content);


            //header('Location:log.php');
            //header('refresh:1;url=log.php');
            
        }
        // if(isset)
    
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en" style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Accueil</title>
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />

    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .error {
        color: red;
    }
    </style>
    <script type="text/javascript" src="script.js"></script>

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
                            <ul class="nav">
                                <li>
                                    <a href="../index.html" class="active">Home</a>
                                </li>
                                <li><a href="./Bloc.php">Blocs</a></li>

                                <li>
                                    <a href="./EventFront.php">Events</a>
                                </li>
                                <li>
                                    <a href="afficheResto.php">Restaurants</a>
                                </li>
                                <li><a href="./ajouterUser.php">Sign Up</a></li>
                                <li><a href="./log.php">Sign In</a></li>
                            </ul>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2> Create you acount</h2>
                    <span>Check out our venues, pick your choice and fill the reservation application.</span>
                </div>
            </div>
        </div>
    </div>
    <section class="u-clearfix u-section-1" id="carousel_37b1">

        <div class="u-align-left u-image u-image-circle u-image-1" data-image-width="275" data-image-height="183">
        </div>
        <div class="u-form u-form-1">
            <div class="u-form-group u-label-top u-form-group-1">

                <div id="error">
                    <?php echo $error; ?>
                </div>


                <script>
                function showNotification() {
                    const notification = new Notification("Nouvelle notification", {
                        body: "Vous avez été inscrit avec succes !!!",
                        icon: "Images/Rueeus.PNG"
                    });
                    notification.onclick = (e) => {
                        window.location.href = "Event.html";

                    };
                }

                console.log(Notification.permission);
                if (Notification.permission === "granted") {
                    showNotification();
                } else if (Notification.permission !== "denied") {
                    Notification.requestPermission().then(permission => {
                        if (permission === "granted") {

                            showNotification();
                        }

                    });
                }
                </script>
                <form name="clubForm" action="" method="POST"
                    class="u-clearfix u-form-spacing-40 u-form-vertical u-inner-form" source="custom" name="form"
                    style="padding: 28px;">





                    <div class="u-form-group u-label-top">
                        <label for="username" class="u-label u-label-2">nom d'utilisateur</label>
                        <input type="text" placeholder="Entrez votre email ou numéro telephone" name="username"
                            id="username" class="u-input u-input-rectangle u-palette-1-light-3 u-radius-14 u-input-2"
                            required="required" maxlength="20">
                        <p id="errorusername" class="error"></p>
                    </div>

                    <div class="u-form-email u-form-group u-label-top u-form-group-3">

                        <label for="email" class="u-label u-label-3">Email</label>
                        <input type="email" placeholder="Entrez une adresse mail valide" name="email" id="email"
                            class="u-input u-input-rectangle u-palette-1-light-3 u-radius-14 u-input-3" required=""
                            maxlength="60">
                        <p id="erroremail" class="error"></p>
                    </div>

                    <div class="u-form-group u-form-name u-label-top">

                        <label for="pwd" class="u-label u-label-4">mot de passe</label>
                        <input type="password" placeholder="entrez votre mot de passe" name="pwd" id="pwd"
                            class="u-input u-input-rectangle u-palette-1-light-3 u-radius-14 u-input-4" required="">
                        <p id="errorpwd" class="error"></p>
                    </div>


                    <div class="u-form-group u-label-top u-form-group-5">

                        <label for="confirmer" class="u-label u-label-5">confirmer mot de passe </label>
                        <input type="password" placeholder="confirmez votre mot de passe" name="confirmer"
                            id="confirmer" class="u-input u-input-rectangle u-palette-1-light-3 u-radius-14 u-input-5">
                        <p id="errorconfirmer" class="error"></p>
                    </div>


                    <div class="u-form-date u-form-group u-label-top u-form-group-6">
                        <label for="datee" class="u-label u-label-6">Date de naissance</label>
                        <input type="date" placeholder="MM-DD-YYYY" name="datee" id="datee"
                            class="u-input u-input-rectangle u-palette-1-light-3 u-radius-14 u-input-6" required="">
                        <p id="errordatee" class="error"></p>

                        <div class="g-recaptcha" data-sitekey="6LdAnrYfAAAAAEYWZ7NAbNtSTNdCCG_hOVaaPbYU"></div>
                    </div>


                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                        <input type="submit" value="Envoyer"
                            class="u-active-palette-1-light-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-23 u-btn-1"
                            onclick="showNotification()" onclick="verif()">

                        <input type="reset" value="reset">
                        <br>

                        <a href="log.php" class="u-label u-label-6">page login</a>
                    </div>

                </form>
                </form>
            </div>
        </div>
    </section>
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