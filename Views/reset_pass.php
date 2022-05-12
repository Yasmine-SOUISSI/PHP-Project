<?php

// On prolonge la session
// session_start();
// $user="null";

if(isset($_POST["submit_email"])){
    $to=$_POST['email'];
    $subject="Change your password";
    $message="http://http://localhost/PW/Views/changepwd.php";
    $from="From: mail.projetuser@gmail.com";
mail($to,$subject,$message,$from);
header('Location:./log.php');

}

?>


<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Traveling is a good method to release stress">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>reset_pass</title>
    <link rel="stylesheet" href="nicepagereset.css" media="screen">
    <link rel="stylesheet" href="reset.css" media="screen">

    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
</head>

<body class="u-body">

    <section class="u-align-center u-clearfix u-palette-1-base u-section-1" id="carousel_3906">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-border-20 u-border-custom-color-1 u-image u-image-circle u-image-1" data-image-width="736"
                data-image-height="1092"></div>
            <div class="u-shape u-shape-svg u-text-palette-4-dark-1 u-shape-1">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1186"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-1186"
                    style="enable-background:new 0 0 160 160;">
                    <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                </svg>
            </div>
            <div class="u-shape u-shape-svg u-text-palette-4-base u-shape-2">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-525f"></use>
                </svg>
                <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-525f"
                    style="enable-background:new 0 0 160 160;">
                    <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                </svg>

            </div>
            <div style="right: 580px;top: 50px;">
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
                </script>
                <script type="text/javascript"
                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <h3 class="u-text u-text-black u-text-1">mot de passe oublié?</h3>
            <h6 class="u-text u-text-2"> Nous comprenons, il se passe des choses. Entrez simplement votre adresse e-mail
                ci-dessous et nous vous enverrons un lien pour réinitialiser votre mot de passe !<br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </h6>
            <div class="u-form u-form-1">

                <form class="register-form" method="POST">

                    <div class="u-form-email u-form-group">
                        <input type="email"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-13 u-white u-input-1"
                            required="" name="email" placeholder="Entrez votre adresse email">

                    </div>

                    <div class="u-align-left u-form-group u-form-submit">

                        <input type="submit" name="submit_email"
                            class="u-btn u-btn-round u-btn-submit u-button-style u-radius-10">

                    </div>
                </form>

            </div>
            <div class="u-border-1 u-border-grey-10 u-line u-line-horizontal u-line-1"></div>
            <h3 class="u-align-center u-text u-text-black u-text-3">
                <a style="text-decoration: underline !important;" href="ajouterUser.php">créer un compte ?</a>
            </h3>


            <a class="u-text u-text-white u-text-4" href="log.php">retour à la page login!</a>
        </div>
    </section>
</body>

</html>