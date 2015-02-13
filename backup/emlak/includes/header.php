<?php require_once('includes/db.php');
session_start();

 ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aviators - byaviators.com">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/chosen/chosen.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
    <link rel="stylesheet" href="assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/realia-blue.css" type="text/css" id="color-variant-default">
    <link rel="stylesheet" href="#" type="text/css" id="color-variant">

    <title>Tanrıverdi Gayrimenkul | Gayrimenkul,Dükkan,Bina,Daire,Arsa,Fabrika</title>

</head>
<body>
<div id="wrapper-outer" >
    <div id="wrapper">
        <div id="wrapper-inner">
            <!-- BREADCRUMB -->
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="index.php">Anasayfa</a></li>
                            </ul><!-- /.breadcrumb -->

                            <div class="account pull-right">
                                <ul class="nav nav-pills">
                                    <li><a href="login.php">Giriş</a></li>
                                    <li><a href="404.php">Kayıt Ol</a></li>
                                </ul>
                            </div>
                        </div><!-- /.span12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-wrapper -->

            <!-- HEADER -->
            <div id="header-wrapper">
                <div id="header">
                    <div id="header-inner">
                        <div class="container">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="row">
                                        <div class="logo-wrapper span4">
                                            <a href="#nav" class="hidden-desktop" id="btn-nav">Ücretsiz ilanlar</a>

                                            <div class="logo">
                                                <a href="index.php" title="Home">
                                                    <img src="assets/img/logo.jpg" alt="Home">
                                                </a>
                                            </div><!-- /.logo -->

                                        </div><!-- /.logo-wrapper -->

                                        <div class="info">
                                            <div class="site-email">
                                                <a href="mailto:info@byaviators.com">info@tanriverdiemlak.net</a>
                                            </div><!-- /.site-email -->

                                            <div class="site-phone">
                                                <span>+90 224 662 07 58</span>
                                            </div><!-- /.site-phone -->
                                        </div><!-- /.info -->

                                        <a class="btn btn-primary btn-large list-your-property arrow-right" href="list-your-property.php">Ücretsiz ilan gir</a>
                                    </div><!-- /.row -->
                                </div><!-- /.navbar-inner -->
                            </div><!-- /.navbar -->
                        </div><!-- /.container -->
                    </div><!-- /#header-inner -->
                </div><!-- /#header -->
            </div><!-- /#header-wrapper -->

            <!-- NAVIGATION -->
            <div id="navigation">
                <div class="container">
                    <div class="navigation-wrapper">
                        <div class="navigation clearfix-normal">

                            <ul class="nav">
                                <li><a href="index.php">Anasayfa</a></li>
								<li><a href="404.php">Hakkımızda</a></li>
                                <li class="menuparent">
                                    <span class="menuparent nolink">Kategoriler</span>
                                    <ul>
                                        <li><a href="isyeri.php">İşyeri & Dükkan <strong style="font-size:13px; font-family:courier;">[1150]</strong></a></li>
                                        <li><a href="apartman.php">Apartman & Bina <strong style="font-size:13px; font-family:courier;">[2150]</strong></a></li>
                                        <li><a href="arazi.php">Tarla & Arazi <strong style="font-size:13px; font-family:courier;">[1752]</strong></a></li>
                                        <li><a href="ciftlik.php">Çiftlik Evleri<strong style="font-size:13px; font-family:courier;">[2365]</strong></a></li>
                                        <li><a href="fabrika.php">Fabrika İşletme<strong style="font-size:13px; font-family:courier;">[6325]</strong></a></li>
                                        <li><a href="daire.php">Daire & Müstakil<strong style="font-size:13px; font-family:courier;">[1254]</strong></a></li>
                                        <li><a href="arsa.php">Arsa <strong style="font-size:13px; font-family:courier;">[6321]</strong></a></li>
                                        <li><a href="villa.php">Villa & Yazlık <strong style="font-size:13px; font-family:courier;">[2150]</strong></a></li>
                                    </ul>
                                </li>
								<li><a href="404.php">Referans</a></li>
                                </li>
                                <li><a href="contact-us.php">Bize Ulaşın</a></li>
                            </ul><!-- /.nav -->
                            <form method="get" class="site-search" action="?">
                                <div class="input-append">
                                    <input title="Enter the terms you wish to search for." class="search-query span2 form-text" placeholder="Emlak Ara" type="text" name="">
                                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                                </div><!-- /.input-append -->
                            </form><!-- /.site-search -->
                        </div><!-- /.navigation -->
                    </div><!-- /.navigation-wrapper -->
                </div><!-- /.container -->
            </div><!-- /.navigation -->