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
            <!-- CONTENT -->
            <div id="content">
<div class="container">
    <div>
        <div id="main">
            <div class="list-your-property-form">
    <h2 class="page-header">Emlak ilanınızı Girin</h2>
	
    <div class="content">
        <div class="row">
            <div class="span8">
                <p>
                    <div id="sonuc"></div>
                </p>
				
            </div><!-- /.span8 -->
        </div><!-- /.row -->

        <form method="post" action="emlak_post.php" enctype="multipart/form-data">
            
			<div class="row">
                <div class="span4">
                    <h3><strong>1.</strong> <span>Personel bilgileri</span></h3>

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyFirstName">
                            Adı Soyadı
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="adi_soyadi" id="inputPropertyFirstName">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertySurname">
                            Başlık bilgisi
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="baslik" id="inputPropertySurname">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyEmail">
                            Adres
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="adres" id="inputPropertyEmail">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyPhone">
                            Kategori
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select name="kategori" id="inputPropertyPropertyType">
                                <option id="apartment1" value="1">Bina</option>
                                <option id="apartment1" value="8">Villa</option>
                                <option id="apartment1" value="4">Çiftlik</option>
                                <option id="apartment1" value="1">Dükkan</option>
                                <option id="apartment1" value="5">Fabrika</option>
                                <option id="apartment1" value="7">Arsa</option>
                                <option id="apartment1" value="3">Tarla</option>
                                <option id="apartment1" value="6">Daire</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					<div class="control-group">
                        <label class="control-label" for="inputPropertyNotes">
                            Açıklamalar
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <textarea id="inputPropertyNotes" name="aciklama" Placeholder="Lütfen detaylı açıklama giriniz..." style="width:768px;"></textarea>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
                </div><!-- /.span4 -->

                <div class="span4">
                    <h3><strong>2.</strong> <span>Özellikler</span></h3>

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyLocation">
                            İL
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="sehir" id="inputPropertyLocation">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="property-type control-group">
                        <label class="control-label" for="inputPropertyPropertyType">
                            İLÇE
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
						<input type="text" name="ilce" id="inputPropertyBedrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="contract-type control-group">
                        <label class="control-label" for="inputPropertyContractType">
                            Durum
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select name="durum" id="inputPropertyContractType">
                                <option id="apartment2">Kiralık</option>
                                <option id="apartment3">Satılık</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="bedrooms control-group">
                        <label class="control-label" for="inputPropertyBedrooms">
                            Oda
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="oda" id="inputPropertyBedrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="bathrooms control-group">
                        <label class="control-label" for="inputPropertyBathrooms">
                            Salon
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="salon" id="inputPropertyBathrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="area control-group">
                        <label class="control-label" for="inputPropertyArea">
                            Alan
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="alan" id="inputPropertyArea">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="price control-group">
                        <label class="control-label" for="inputPropertyPrice">
                            Fiyat
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" name="fiyat" id="inputPropertyPrice">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
					
                </div><!-- /.span4 -->

                <div class="span4">
				
                    <h3><strong>3.</strong> <span>Resim Yükleme</span></h3>

                    <div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
								<span class="btn btn-file">
									<span class="fileupload-new">Resim Ekle</span>
									<span class="fileupload-exists">Değiştir</span>
									<input type="file" name="resim_bir" />
								</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->                    
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
								<span class="btn btn-file">
									<span class="fileupload-new">Resim Ekle</span>
									<span class="fileupload-exists">Değiştir</span>
									<input type="file" name="resim_iki" />
								</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
								<span class="btn btn-file">
									<span class="fileupload-new">Resim Ekle</span>
									<span class="fileupload-exists">Değiştir</span>
									<input type="file" name="resim_uc" />
								</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
								<span class="btn btn-file">
									<span class="fileupload-new">Resim Ekle</span>
									<span class="fileupload-exists">Değiştir</span>
									<input type="file" name="resim_dort" />
								</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->					
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
								<span class="btn btn-file">
									<span class="fileupload-new">Resim Ekle</span>
									<span class="fileupload-exists">Değiştir</span>
									<input type="file" name="resim_bes" />
								</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
					<div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Resim dosyaları
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
									<span class="btn btn-file">
										<span class="fileupload-new">Resim Ekle</span>
										<span class="fileupload-exists">Değiştir</span>
										<input type="file" name="resim_alti" />
									</span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->
                </div><!-- /.span4 -->
            </div><!-- /.row -->
			<input type="submit" class="btn btn-primary btn-large list-your-property arrow-right" value="Gönder" />
			<input type="reset" class="btn btn-primary btn-large list-your-property arrow-right" value="Temizle" />
		</form>

    </div><!-- /.content -->
</div><!-- /.list-your-property-form -->        
</div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<div id="footer-wrapper">
    <div id="footer-top">
        <div id="footer-top-inner" class="container">
            <div class="row">
            </div><!-- /.row -->
        </div><!-- /#footer-top-inner -->
    </div><!-- /#footer-top -->

    <div id="footer" class="footer container">
        <div id="footer-inner">
            <div class="row">
                <div class="span6 copyright">
                    <p>© Copyright 2014 Tasarım & Kodlama <a href="mailto:nihatsendil@gmail.com">Nihat Şendil</a>. Tüm hakları gizlidir.</p>
                </div><!-- /.copyright -->

                <div class="span6 share">
                    <div class="content">
                        <ul class="menu nav">
                            <li class="first leaf"><a href="http://www.facebook.com" class="facebook">Facebook</a></li>
                            <li class="leaf"><a href="http://flickr.net" class="flickr">Flickr</a></li>
                            <li class="leaf"><a href="http://plus.google.com" class="google">Google+</a></li>
                            <li class="leaf"><a href="http://www.linkedin.com" class="linkedin">LinkedIn</a></li>
                            <li class="leaf"><a href="http://www.twitter.com" class="twitter">Twitter</a></li>
                            <li class="last leaf"><a href="http://www.vimeo.com" class="vimeo">Vimeo</a></li>
                        </ul>
                    </div><!-- /.content -->
                </div><!-- /.span6 -->
            </div><!-- /.row -->
        </div><!-- /#footer-inner -->
    </div><!-- /#footer -->
</div><!-- /#footer-wrapper -->
</div><!-- /#wrapper -->
</div><!-- /#wrapper-outer -->

<div class="palette">
    <div class="toggle">
        <a href="#">Toggle</a>
    </div><!-- /.toggle -->

    <div class="inner">
        <div class="headers">
            <h2>Header styles</h2>
            <ul>
                <li><a class="header-light">Light</a></li>
                <li><a class="header-normal">Normal</a></li>
                <li><a class="header-dark">Dark</a></li>
            </ul>
        </div><!-- /.headers -->

        <div class="patterns">
            <h2>Background patterns</h2>
            <ul>
                <li><a class="pattern-cloth-alike">cloth-alike</a></li>
                <li><a class="pattern-corrugation">corrugation</a></li>
                <li><a class="pattern-diagonal-noise">diagonal-noise</a></li>
                <li><a class="pattern-dust">dust</a></li>
                <li><a class="pattern-fabric-plaid">fabric-plaid</a></li>
                <li><a class="pattern-farmer">farmer</a></li>
                <li><a class="pattern-grid-noise">grid-noise</a></li>
                <li><a class="pattern-lghtmesh">lghtmesh</a></li>
                <li><a class="pattern-pw-maze-white">pw-maze-white</a></li>
                <li><a class="pattern-none">none</a></li>
            </ul>
        </div>

        <div class="colors">
            <h2>Color variants</h2>
            <ul>
                <li><a href="assets/css/realia-red.css" class="red">Red</a></li>
                <li><a href="assets/css/realia-magenta.css" class="magenta">Magenta</a></li>
                <li><a href="assets/css/realia-brown.css" class="brown">Brown</a></li>
                <li><a href="assets/css/realia-orange.css" class="orange">Orange</a></li>
                <li><a href="assets/css/realia-brown-dark.css" class="brown-dark">Brown dark</a></li>

                <li><a href="assets/css/realia-gray-red.css" class="gray-red">Gray Red</a></li>
                <li><a href="assets/css/realia-gray-magenta.css" class="gray-magenta">Gray Magenta</a></li>
                <li><a href="assets/css/realia-gray-brown.css" class="gray-brown">Gray Brown</a></li>
                <li><a href="assets/css/realia-gray-orange.css" class="gray-orange">Gray Orange</a></li>
                <li><a href="assets/css/realia-gray-brown-dark.css" class="gray-brown-dark">Gray Brown dark</a></li>

                <li><a href="assets/css/realia-green-light.css" class="green-light">Green light</a></li>
                <li><a href="assets/css/realia-green.css" class="green">Green</a></li>
                <li><a href="assets/css/realia-turquiose.css" class="turquiose">Turquiose</a></li>
                <li><a href="assets/css/realia-blue.css" class="blue">Blue</a></li>
                <li><a href="assets/css/realia-violet.css" class="violet">Violet</a></li>

                <li><a href="assets/css/realia-gray-green-light.css" class="gray-green-light">Gray Green light</a></li>
                <li><a href="assets/css/realia-gray-green.css" class="gray-green">Gray Green</a></li>
                <li><a href="assets/css/realia-gray-turquiose.css" class="gray-turquiose">Gray Turquiose</a></li>
                <li><a href="assets/css/realia-gray-blue.css" class="gray-blue">Gray Blue</a></li>
                <li><a href="assets/css/realia-gray-violet.css" class="gray-violet">Gray Violet</a></li>
            </ul>
        </div><!-- /.colors -->

        <a href="#" class="btn btn-primary reset">Reset default</a>
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