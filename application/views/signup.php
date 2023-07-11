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
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url("assets/css/font-face.css"); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/font-awesome-4.7/css/font-awesome.min.css"); ?>  " rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/font-awesome-5/css/fontawesome-all.min.css"); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/mdi-font/css/material-design-iconic-font.min.css"); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url("assets/vendor/bootstrap-4.1/bootstrap.min.css"); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url("assets/vendor/animsition/animsition.min.css"); ?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/ vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")?> " rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/wow/animate.css")?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/css-hamburgers/hamburgers.min.css")?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/slick/slick.css")?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/select2/select2.min.css")?>" rel="stylesheet" media="all">
    <link href="<?= base_url("assets/vendor/perfect-scrollbar/perfect-scrollbar.css")?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url("assets/css/theme.css"); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= base_url("assets/images/icon/kaly.png")?>" alt="CoolAdmin" width="100px" height="50px">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="<?= base_url('user/insertuser') ?>" method="post">


                            <div class="form-group">
                                <label>Nom</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Nom" >
                            </div>


                            <div class="form-group">
                                <label>Date de Naissance</label>
                                <input class="au-input au-input--full" type="date" name="dtn" placeholder="Date de Naissance" >
                            </div>



                            <div class="form-group">
                                <label>Genre</label>
                                <select name="genre" class="au-input au-input--full" style="height: 45px;">
                                    <?php for($i=0;$i<count($genre);$i++){ ?>
                                        <option value="<?= $genre[$i]['id_genre'] ?>"><?= $genre[$i]['nom_genre'] ?></option>
                                    <?php } ?>    
                                    
                                </select>
                            </div>



                            <div class="form-group">
                                <label>Email Addres</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>




                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>

                            <div style="height: 40px">

                            </div>

                            <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">sign up</button>

                        </form>

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