<?php
    include_once '../Models/user.php';
    include_once '../Controller/userC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $userC = new userC();
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
            $user = new user(
                //$_POST['id'],
				$_POST['username'],
                $_POST['email'], 
				$_POST['pwd'],
                $_POST['confirmer'],
                $_POST['datee'],
                $_POST['typee']
            );
            $userC->modifieruser($user, $_POST["id"]);
            header('Location:compte.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="votre compte">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>compte</title>
    <link rel="stylesheet" href="nicepagecompte.css" media="screen">
    <link rel="stylesheet" href="compte.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">


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

<body>
    <button><a href="afficherUser.php">Retour à la liste des utilisateurs</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
			if (isset($_POST['id'])){
				$user = $userC->recupereruser($_POST['id']);
				
		?>




    <body class="u-body">
        <header class="u-clearfix u-header u-header" id="sec-93f3">
            <div class="u-clearfix u-sheet u-sheet-1">
                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                        <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="#">
                            <svg class="u-svg-link" viewBox="0 0 24 24">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                            </svg>
                            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px"
                                y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                            <li class="u-nav-item"><a
                                    class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                                    href="Accueil.html" style="padding: 10px 28px;">Accueil</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                                    href="compte.html" style="padding: 10px 28px;">compte</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base"
                                    href="Contact.html" style="padding: 10px 31px 10px 28px;">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div
                            class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html"
                                            style="padding: 10px 20px;">Accueil</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="compte.html"
                                            style="padding: 10px 20px;">compte</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html"
                                            style="padding: 10px 20px;">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="u-align-center u-clearfix u-palette-5-light-2 u-section-1" id="carousel_dc00">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-1">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e858"></use>
                    </svg>
                    <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-e858"
                        style="enable-background:new 0 0 160 160;">
                        <path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path>
                    </svg>
                </div>
                <div class="u-image u-image-circle u-image-1" data-image-width="450" data-image-height="450"></div>
                <div class="u-palette-1-light-2 u-shape u-shape-circle u-shape-2"></div>
                <div
                    class="u-align-left u-container-style u-expanded-width-xs u-group u-radius-12 u-shape-round u-white u-group-1">
                    <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-1"><svg
                                class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 53 53" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4070"></use>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 53 53" x="0px"
                                y="0px" id="svg-4070" style="enable-background:new 0 0 53 53;">
                                <path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
	c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
	c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
	c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
	c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
	C20.296,39.899,19.65,40.986,18.613,41.552z"></path>
                                <g>
                                    <path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
		c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
		c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
		s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
		c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
		c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z">
                                    </path>
                                </g>
                            </svg></span>
                        <h2 class="u-custom-font u-font-lobster u-text u-text-palette-1-base u-text-1">modifier le
                            compte</h2>
                        <div
                            class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">


                            <form action="" method="POST">
                                <table border="1" align="center">
                                    <div class="u-form-group u-form-name">
                                        <label for="id"
                                            class="u-custom-font u-font-lobster u-label u-label-1">cin:</label>
                                        <input type="text" name="id" id="id" value="<?php echo $user['id']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12"
                                            required="" maxlength="20">
                                    </div>

                                    <div class="u-form-group u-form-name">
                                        <label for="username"
                                            class="u-custom-font u-font-lobster u-label u-label-1">username:</label>
                                        <input type="text" name="username" id="username"
                                            value="<?php echo $user['username']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12"
                                            required="" maxlength="20">
                                    </div>


                                    <div class="u-form-email u-form-group">
                                        <label for="email"
                                            class="u-custom-font u-font-lobster u-label u-label-2">email:</label>
                                        <input type="email" name="email" id="email"
                                            value="<?php echo $user['email']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12"
                                            required="" maxlength="60">
                                    </div>

                                    <div class="u-form-group u-form-group-3">

                                        <label for="pwd"
                                            class="u-custom-font u-font-lobster u-label u-label-3">pwd:</label>
                                        <input type="password" name="pwd" id="pwd " value="<?php echo $user['pwd']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
                                    </div>


                                    <div class="u-form-group u-form-group-4">


                                        <label for="confirmer"
                                            class="u-custom-font u-font-lobster u-label u-label-4">confirmer pwd:
                                        </label>

                                        <input type="password" name="confirmer" id="confirmer"
                                            value="<?php echo $user['confirmer']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
                                    </div>

                                    <div class="u-form-group u-form-group-3">
                                        <label for="datee" class="u-custom-font u-font-lobster u-label u-label-4">Datee:
                                        </label>

                                        <input type="date" name="datee" id="datee" value="<?php echo $user['datee']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
                                    </div>
                                    <div class="u-form-group u-form-group-3">
                                        <label for="typee" class="u-custom-font u-font-lobster u-label u-label-4">type:
                                        </label>

                                        <input type="text" name="typee" id="typee" value="<?php echo $user['typee']; ?>"
                                            class="u-input u-input-rectangle u-palette-5-light-2 u-radius-12">
                                    </div>

                                    <tr>

                                        <td>
                                            <input type="submit" value="modifier">
                                        </td>
                                        <td>
                                            <input type="reset" value="Annuler">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <?php
		}
		?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>