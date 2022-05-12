<?php
require_once  '../Controller/userC.php';

if(isset($_POST['emaill']) && $_POST['newpwdd']  )
{ 
  $email=$_POST['emaill'];
  $pass=$_POST['newpwdd'];
  
  
    $link = mysqli_connect('localhost','root','');
  mysqli_select_db(  $link , 'landna');
  $select=mysqli_query( $link,"update user set pwd='$pass' ,confirmer='$pass'  where email='$email'");
 
  header('refresh:1;url=log.php');
}
?>



<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About</title>
    <link rel="stylesheet" href="nicepagepwd.css" media="screen">
    <link rel="stylesheet" href="changepwd.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    <section
        class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-palette-1-light-2 u-section-1"
        id="carousel_7272">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-1">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4ae9"></use>
                </svg>
                <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-4ae9">
                    <path d="M157.4,45.5c11.3-39.1-16.3-50.2-43.8-43.8c-25.2,5.8-35.5,17.2-61,16.5C21.7,17.4,0,39.8,0,71.3
	c0,49.1,58.2,47.8,76.2,68.5c38.8,44.7,92.8,8.2,79.3-40.3C148.1,73.2,155.9,50.6,157.4,45.5z"></path>
                </svg>
            </div>
            <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-2">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-18ef"></use>
                </svg>
                <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-18ef">
                    <path d="M157.4,45.5c11.3-39.1-16.3-50.2-43.8-43.8c-25.2,5.8-35.5,17.2-61,16.5C21.7,17.4,0,39.8,0,71.3
	c0,49.1,58.2,47.8,76.2,68.5c38.8,44.7,92.8,8.2,79.3-40.3C148.1,73.2,155.9,50.6,157.4,45.5z"></path>
                </svg>
            </div>
            <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-3">
                <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bedf"></use>
                </svg>
                <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-bedf">
                    <path d="M157.4,45.5c11.3-39.1-16.3-50.2-43.8-43.8c-25.2,5.8-35.5,17.2-61,16.5C21.7,17.4,0,39.8,0,71.3
	c0,49.1,58.2,47.8,76.2,68.5c38.8,44.7,92.8,8.2,79.3-40.3C148.1,73.2,155.9,50.6,157.4,45.5z"></path>
                </svg>
            </div>
            <div class="u-image u-image-circle u-image-contain u-image-1" data-image-width="640"
                data-image-height="640"></div>
            <div class="u-image u-image-circle u-image-contain u-image-2" data-image-width="640"
                data-image-height="640"></div>
            <div class="u-image u-image-circle u-image-contain u-image-3" data-image-width="640"
                data-image-height="640"></div>
            <div class="u-form u-form-1">
                <form action="" method="POST" class="u-clearfix u-form-spacing-27 u-form-vertical u-inner-form"
                    style="padding: 7px;" source="custom" name="form">
                    <div class="u-form-group u-form-name u-label-none">
                        <label for="name-3b9a">entrez votre email</label>
                        <input type="text" placeholder="entrez votre email" id="name-3b9a" name="emaill"
                            class="u-border-3 u-border-palette-1-light-1 u-input u-input-rectangle u-palette-3-light-2 u-radius-13 u-input-1"
                            required="">
                    </div>
                    <div class="u-form-group u-form-name u-label-none">
                        <label for="name-3b9a" class="u-label u-text-black u-label-1">entrer le nouveau mot de
                            passe</label>
                        <input type="text" placeholder="entrer le nouveau mot de passe" id="name-3b9a" name="newpwdd"
                            class="u-border-3 u-border-palette-1-light-1 u-input u-input-rectangle u-palette-3-light-2 u-radius-13 u-input-1"
                            required="">
                    </div>

                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="log.php"
                            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-gradient u-none u-radius-16 u-btn-1">changer</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                </form>
            </div>
            <div class="u-palette-3-base u-shape u-shape-circle u-shape-4"></div>
            <div class="u-palette-3-base u-shape u-shape-circle u-shape-5"></div>
            <div class="u-palette-3-base u-shape u-shape-circle u-shape-6"></div>
        </div>
    </section>


</body>

</html>