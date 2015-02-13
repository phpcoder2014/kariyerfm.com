<?php require_once('includes/db.php');
session_start();
  if(!isset($_SESSION["login"])){
	header("Refresh: 0; url=login.php");
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
                                <li><a href="list-your-property.php">Anasayfa</a></li>
                                <li><a href="emlak.php">Emlak</a></li>
                                <li><a href="mesaj.php">Gelen Mesajlar</a></li>
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
            <!-- NAVIGATION -->
            

            <!-- CONTENT -->
            <div id="content"><div class="container">
<div id="main">
<h1 class="page-header">Emlak</h1>

<ul class="tabs nav nav-tabs" id="myTab">
    <li class="active"><a href="#arsa">Gelen Mesajlar</a></li>
</ul>
<form method="post" action="delete_post_php">
<div class="tab-content">
    <div class="tab-pane active" id="arsa">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width: 64px;">Emlak</th>
                <th>Adı Soyadı</th>
                <th>Gelen Mesaj</th>
                <th>E-Mail</th>
                <th>Tarih</th>
                <th>Durum</th>
            </tr>
            </thead>
            <tbody>
            <?php $sorgu = mysql_query("select * from tbl_irtibat");
					while($row = mysql_fetch_assoc($sorgu)){
					
			?>
			<tr>
                <td><img src="assets/img/mesaj.png" width="48" height="48" /></td>
				<td><?php echo $row['adi']; ?></td>
				<td><?php echo $row['mesaj']; ?></td>
                <td><?php echo $row['email']; ?><br/> </td>
				<td><?php echo $row['zaman']; ?></td>
				<td><a href="delete_mesaj.php?sil=<?php echo $row['ilet_id']; ?>" ><img src="assets/img/remove.png" width="48" height="48" /></a></td>
            </tr>
			<?php } ?>
            </tbody>
        </table>
    </div>    

</div>
</form>

</div>
</div>
    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
    </div><!-- /.inner -->
</div><!-- /.palette -->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.ezmark.js"></script>
<script type="text/javascript" src="assets/js/jquery.currency.js"></script>
<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/carousel.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.infobox.min.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script>
<script type="text/javascript" src="assets/libraries/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/libraries/iosslider/_src/jquery.iosslider.min.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/js/realia.js"></script>
</body>
</html>
<?php } ?>