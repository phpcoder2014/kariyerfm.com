
<div id="footer-wrapper">
    <div id="footer-top">
        <div id="footer-top-inner" class="container">
            <div class="row">
                <div class="widget properties span3">
                    <div class="title">
                        <h2>En Yeniler</h2>
                    </div><!-- /.title -->

                    <div class="content">
						<?php $sorgu = mysql_query("Select * from tbl_emlak order by emlak_id desc limit 3") or die("Sorgu Hatası"); 
								while($row = mysql_fetch_assoc($sorgu)){
						?>
                        <div class="property">
                            <div class="image">
                                <a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"></a>
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_1']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </div><!-- /.image -->
                            <div class="wrapper">
                                <div class="title">
                                    <h3>
                                        <a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"><?php echo $row['emlak_baslik']; ?></a>
                                    </h3>
                                </div><!-- /.title -->
                                <div class="location"><?php echo $row['emlak_sahibi']; ?>&nbsp;(<?php echo $row['durum']; ?>)</div><!-- /.location -->
                                <div class="price"><?php echo $row['fiyat']; ?> ₺ <?php echo $row['sehir']; ?></div><!-- /.price -->
                            </div><!-- /.wrapper -->
                        </div><!-- /.property -->
					<?php } ?>

                    </div><!-- /.content -->
                </div><!-- /.properties-small -->

                <div class="widget span3">
                    <div class="title">
                        <h2>İrtibat</h2>
                    </div><!-- /.title -->

                    <div class="content">
                        <table class="contact">
                            <tbody>
                            <tr>
                                <th class="address">Adresimiz:</th>
                                <td>Tavşanlı mahallesi<br>60 sokak No:4<br>Karacabey/BURSA<br></td>
                            </tr>
                            <tr>
                                <th class="phone">Telefon:</th>
                                <td>+90 224 662 07 58</td>
                            </tr>
                            <tr>
                                <th class="email">E-mail:</th>
                                <td><a href="mailto:info@tanriverdiemlak.net">info@tanriverdiemlak.net</a></td>
                            </tr>
                            <tr>
                                <th class="skype">Skype:</th>
                                <td>tanriverdi.emlak</td>
                            </tr>
                            <tr>
                                <th class="gps">Konum:</th>
                                <td>40.213970, 28.357501</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.content -->
                </div><!-- /.widget -->

                <div class="widget span3">
                    <div class="title">
                        <h2 class="block-title">Site haritası</h2>
                    </div><!-- /.title -->

                    <div class="content">
                        <ul class="menu nav">
                            <li class="first leaf"><a href="404.html">Anasayfa</a></li>
                            <li class="leaf"><a href="about-us.html">Hakkımızda</a></li>
                            <li class="leaf"><a href="contact-us.html">Kategoriler</a></li>
                            <li class="leaf"><a href="grid-system.html">Referans</a></li>
                            <li class="leaf"><a href="our-agents.html">Bize Ulaşın</a></li>
                        </ul>
                    </div><!-- /.content -->
                </div><!-- /.widget -->

                <div class="widget span3">
                    <div class="title">
                        <h2 class="block-title">Bir mesajım var!</h2>
                    </div><!-- /.title -->
					<div id="sonuc"></div>
                    <div class="content">
                        <form>
                            <div class="control-group">
                                <label class="control-label" for="inputName">
                                    Adın
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" name="name" id="inputName">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputEmail">
                                    Email
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" name="email" id="inputEmail">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputMessage">
                                    Mesajın
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div class="controls">
                                    <textarea id="inputMessage" name="message"></textarea>
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="form-actions">
                                <input type="button" onclick="Gonder();" class="btn btn-primary arrow-right" value="Gönder">
                            </div><!-- /.form-actions -->
                        </form>
							<script type="text/javascript"> 
							function Gonder() {
								$.ajax({ 
									type: "POST",
									url: "contact_post.php",
									data: $('form').serialize(), 
									error:function(){ $('#sonuc').html("Bir hata algılandı."); }, //Hata alınırsa ekrana bastırılacak veri 
									success: function(veri) {
									$('#inputName').val('');
									$('#inputEmail').val('');
									$('#inputMessage').val('');
									$('#sonuc').html(veri);
									}									
								}); }
						</script>
                    </div><!-- /.content -->
                </div><!-- /.widget -->
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