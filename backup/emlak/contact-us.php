<?php include_once("includes/header.php"); ?>
            <!-- CONTENT -->
            <div id="content">    <div class="container">
        <div id="main">
            <div class="row">
                <div class="span9">
                    <h1 class="page-header">Tanrıverdi gayrimenkul iletişim</h1>
                        <iframe class="map" width="425" height="350" src="https://maps.google.com/maps?q=37.440587,-122.139816&amp;num=1&amp;ie=UTF8&amp;ll=37.435681,-122.135696&amp;spn=0.041038,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>

                        <p>
                            Tanrıverdi Gayrimenkul Emlak size tık daha yakın. Tüm ev, işyeri, çiflik, fabrika vs taşınmazlarınızın ücretsiz ilanını verebilirsiniz. Bize istediğiniz an sitemizden ulaşabilirsiniz.
                        </p>

                        <div class="row">
                            <div class="span3">
                                <h3 class="address">Adres</h3>
                                <p class="content-icon-spacing">
                                    Tavşanlı mahallesi 60 sok<br>
                                    No:4 Karacabey / BURSA
                                </p>
                            </div>
                            <div class="span3">
                                <h3 class="call-us">Telefon</h3>
                                <p class="content-icon-spacing">
                                    +90 224 662 07 58<br>
                                    
                                </p>
                            </div>
                            <div class="span3">
                                <h3 class="email">Email</h3>
                                <p class="content-icon-spacing">
                                    <a href="mailto:info@tanriverdiemlak.net">Müşteri Temsilcisi</a><br>
                                    <a href="mailto:destek@tanriverdiemlak.net">Teknik Destek</a>
                                </p>
                            </div>
                        </div>

                        <h2>Merak ettiğim bir konuda size danışmak istiyorum!</h2>
						<div id="mesaj"></div>
                        <form class="contact-form">
                            <div class="name control-group">
                                <label class="control-label" for="inputContactName">
                                    Adım
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" name="name" id="inputContactName">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="email control-group">
                                <label class="control-label" for="inputContactEmail">
                                    Email Adresi
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div class="controls">
                                    <input type="text" name="email" id="inputContactEmail">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class="control-group">
                                <label class="control-label" for="inputContactMessage">
                                    Mesajım
                                    <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div class="controls">
                                    <textarea id="inputContactMessage" name="message"></textarea>
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->
							
                            <div class="form-actions">
                                <input type="button" onclick="Mesaj();" class="btn btn-primary arrow-right" value="Mesajı gönder">								
                            </div><!-- /.form-actions -->
							
                        </form>
						<script type="text/javascript"> 
							function Mesaj() {
								$.ajax({ 
									type: "POST",
									url: "contact_post.php",
									data: $('.contact-form').serialize(), 
									error:function(){ $('#mesaj').html("Bir hata algılandı."); }, //Hata alınırsa ekrana bastırılacak veri 
									success: function(veri) { 
									$('#inputContactName').val('');
									$('#inputContactEmail').val('');
									$('#inputContactMessage').val('');
									$('#mesaj').html(veri);
									}
									
								}); }
						</script>
                </div>

                <div class="sidebar span3">
                    <div class="widget properties last">
    <div class="title">
        <h2>En yeni ilanlar</h2>
    </div><!-- /.title -->

    <div class="content">
	<?php $sorgu = mysql_query("Select * from tbl_emlak order by rand() limit 6") or die("Sorgu Hatası"); 
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
                <div class="price"><?php echo $row['fiyat']; ?> ₺&nbsp;<?php echo $row['sehir']; ?></div><!-- /.price -->
            </div><!-- /.wrapper -->
        </div><!-- /.property -->
	<?php } ?>
 
    </div><!-- /.content -->
</div><!-- /.properties -->
                    <div class="ad widget">
    <h2>Advertisements</h2>
    <div class="content">
        <a href="#"><img src="assets/img/banner/1.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/2.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/3.gif" alt="Banner"></a>
        <a href="#"><img src="assets/img/banner/4.gif" alt="Banner"></a>
    </div><!-- /.content -->
</div><!-- /.ad -->
                </div>
            </div>
        </div>
    </div>
    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<?php include_once("includes/footer.php"); ?>