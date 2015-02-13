<?php require_once('includes/db.php');
session_start();
  if(!isset($_SESSION["login"])){
	echo str_repeat("<br>", 8)."<center><h1> Sisteme Yonleniyor..</h1></center>";
	header("Refresh: 2; url=login.php");
  }else{
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

    <title>Tanrıverdi Gayrimenkul | Admin</title>

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
                                <li><a href="index.php">Uyeler</a></li>
                                <li><a href="index.php">Emlak Ekle</a></li>
                                <li><a href="index.php">Emlak Listeleri</a></li>
                                <li><a href="index.php">Gelen Mesajlar</a></li>
                            </ul><!-- /.breadcrumb -->

                            <div class="account pull-right">
                                <ul class="nav nav-pills">
                                    <li><a href="#">Hoşgeldin Tanrıverdi Gayrimenkul Emlak</a></li>
                                    <li><a href="logout.php">Çıkış</a></li>
                                </ul>
                            </div>
                        </div><!-- /.span12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-wrapper -->