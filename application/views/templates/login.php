<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo bu('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?> rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>"  rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo bu('assets/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo bu('assets/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo bu('assets/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo bu('assets/css/theme.css'); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?=base_url("assets/images/icon/logo.png")?>" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo su('welcome/checkUtilisateur'); ?>" method="post">
                                <div class="form-group">
                                    <label>Votre Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="toky@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Votre mot de passe" value="toky1234">
                                </div>
                                <div style="height: 40px">

                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Se connecter</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    <a href="<?php echo su('welcome/redirect_to_signup'); ?>">S'inscrire</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo bu('assets/vendor/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo bu('assets/vendor/bootstrap-4.1/popper.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/bootstrap-4.1/bootstrap.min.js'); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo bu('assets/vendor/slick/slick.min.js'); ?>">
    </script>
    <script src="<?php echo bu('assets/vendor/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/animsition/animsition.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>">
    </script>
    <script src="<?php echo bu('assets/vendor/counter-up/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/counter-up/jquery.counterup.min.js'); ?>">
    </script>
    <script src="<?php echo bu('assets/vendor/circle-progress/circle-progress.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/chartjs/Chart.bundle.min.js'); ?>"></script>
    <script src="<?php echo bu('assets/vendor/select2/select2.min.js'); ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo bu('assets/js/main.js'); ?>"></script>
</body>

</html>
<!-- end document-->