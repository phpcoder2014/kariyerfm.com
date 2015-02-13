<?php include_once("includes/header.php"); ?>
   <!-- CONTENT -->
            <div id="content">
<div class="container">
    <div id="main">
        <div class="slider-wrapper">
    <div class="slider">
        <div class="slider-inner">
            <div class="row">
                <div class="images span9">
                    <div class='iosSlider'>
                        <div class='slider-content'>
						<?php $sorgu = mysql_query("select * from tbl_emlak order by emlak_id asc limit 5") or die("Sorgu Hatası"); 
								while($row = mysql_fetch_assoc($sorgu)){
						?>
                            <div class="slide">
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_2']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">

                                <div class="slider-info">
                                    <div class="price">
                                        <h2><?php echo $row['fiyat']; ?> ₺&nbsp;(<?php echo $row['durum']; ?>)</h2>
                                        <a href="detail.php?detay=<?php echo $row['emlak_id']; ?>">Detaylar</a>
                                    </div><!-- /.price -->
                                    <h2><a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"><?php echo $row['emlak_baslik']; ?></a></h2>
                                    <div class="bathrooms"><?php echo $row['oda']; ?></div><!-- /.bathrooms -->
                                    <div class="bedrooms">0</div><!-- /.bedrooms -->
                                </div><!-- /.slider-info -->
                            </div><!-- /.slide -->
						<?php } ?>
                        </div><!-- /.slider-content -->
                    </div><!-- .iosSlider -->

                    <ul class="navigation">
                        <li class="active"><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                    </ul><!-- /.navigation-->
                </div><!-- /.images -->
                <div class="span3">
                    <div class="property-filter">
                        <div class="content">
                            <form method="post" action="ara.php">
                                <div class="location control-group">
                                    <label class="control-label" for="inputLocation">
                                        Şehir
                                    </label>
                                    <div class="controls">
                                        <select name="sehir" id="inputLocation">
											<option select="selected" id="apartment">Lütfen İl Seçin</option>
                                            <option id="malibu">Ankara</option>
                                            <option id="palo-alto">İstanbul</option>
                                            <option id="palo-alto">İzmir</option>
                                            <option id="palo-alto">Bursa</option>
                                            <option id="palo-alto">Trabzon</option>
                                            <option id="palo-alto">Eskişehir</option>
                                            <option id="palo-alto">Antalya</option>
                                            <option id="palo-alto">Adana</option>
                                        </select>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="type control-group">
                                    <label class="control-label" for="inputType">
                                        Türü
                                    </label>
                                    <div class="controls">
                                        <select name="emlak_turu" id="inputType">
											<option select="selected" id="apartment">Emlak Türü Seçin</option>
                                            <option id="condo" value="2">Bina</option>
                                            <option id="condo" value="6">Daire</option>
                                            <option id="condo" value="7">Arsa</option>
                                            <option id="condo" value="8">Villa</option>
                                            <option id="condo" value="5">Fabrika</option>
                                            <option id="condo" value="3">Tarla</option>
                                            <option id="condo" value="1">Dükkan</option>
                                            <option id="condo" value="4">Çiftlik</option>
                                        </select>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="beds control-group">
                                    <label class="control-label" for="inputBeds">
                                       Evin Yaş
                                    </label>
                                    <div class="controls">
                                        <select name="tarih" id="inputBeds">
                                    <?php for($i=1950; $i<2015; $i++){echo '<option id="1">'.$i.'</option>';} ?>        
											                                          
                                        </select>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="baths control-group">
                                    <label class="control-label" for="inputBaths">
                                       Aralığı
                                    </label>
                                    <div class="controls">
                                        <select id="inputBaths">
									<?php for($i=1950; $i<2015; $i++){echo '<option id="1">'.$i.'</option>';} ?>  
                                        </select>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->


                                <div class="rent control-group">
                                    <div class="controls">
                                        <label class="checkbox" for="inputRent">
                                            <input type="checkbox" name="kiralik" id="inputRent"> Kiralık
                                        </label>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="sale control-group">
                                    <div class="controls">
                                        <label class="checkbox" for="inputSale">
                                            <input type="checkbox" name="satilik" id="inputSale"> Satılık
                                        </label>
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="price-from control-group">
                                    <label class="control-label" for="inputPriceFrom">
                                        Price from
                                    </label>
                                    <div class="controls">
                                        <input type="text" id="inputPriceFrom" name="inputPriceFrom">
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="price-to control-group">
                                    <label class="control-label" for="inputPriceTo">
                                        Price to
                                    </label>
                                    <div class="controls">
                                        <input type="text" id="inputPriceTo" name="inputPriceTo">
                                    </div><!-- /.controls -->
                                </div><!-- /.control-group -->

                                <div class="price-value">
                                    <span class="from"></span><!-- /.from -->
                                    -
                                    <span class="to"></span><!-- /.to -->
                                </div><!-- /.price-value -->

                                <div class="price-slider">
                                </div><!-- /.price-slider -->

                                <div class="form-actions">
                                    <input type="submit" value="Arama Yap" class="btn btn-primary btn-large">
                                </div><!-- /.form-actions -->
                            </form>
                        </div><!-- /.content -->
                    </div><!-- /.property-filter -->

                </div><!-- /.span3 -->
            </div><!-- /.row -->
        </div><!-- /.slider-inner -->
    </div><!-- /.slider -->
</div><!-- /.slider-wrapper -->

        <div class="row">
            <div class="span9">
                <h1 class="page-header">Tanrıverdi Gayrimenkul Emlak İlanları</h1>
                <div class="properties-grid">
    <div class="row">
	<?php $sorgu = mysql_query("Select * from tbl_emlak order by emlak_id asc limit 18") or die("Sorgu Hatası"); 
			while($row = mysql_fetch_assoc($sorgu)){
	?>
        <div class="property span3">
            <div class="image">
                <div class="content">
                    <a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"></a>
                    <img src="assets/img/emlak_photo/small/<?php echo $row['resim_1']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                </div><!-- /.content -->

                <div class="price"><?php echo $row['fiyat']; ?> ₺</div><!-- /.price -->
                <div class="reduced"><?php echo $row['durum']; ?> </div><!-- /.reduced -->
            </div><!-- /.image -->

            <div class="title">
                <h2><a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"><?php echo $row['emlak_baslik']; ?></a></h2>
            </div><!-- /.title -->

            <div class="location"><?php echo $row['emlak_sahibi']; ?></div><!-- /.location -->
            <div class="area">
                <span class="key">Alanı:</span><!-- /.key -->
                <span class="value"><?php echo $row['alan']; ?> m²</span><!-- /.value -->
            </div><!-- /.area -->
            <div class="bedrooms"><div class="content">0</div></div><!-- /.bedrooms -->
            <div class="bathrooms"><div class="content"><?php echo $row['oda']; ?></div></div><!-- /.bathrooms -->
        </div><!-- /.property -->
	<?php } ?>

    </div><!-- /.row -->
</div><!-- /.properties-grid -->
            </div>
            <div class="sidebar span3">
                <div class="widget our-agents">
    <div class="title">
        <h2>Şubelerimiz</h2>
    </div><!-- /.title -->

    <div class="content">
        <div class="agent">
            <div class="image">
                <img src="assets/img/photos/emma-small.png" width="140px" height="141px" alt="">
            </div><!-- /.image -->
            <div class="name">Karacabey Şubesi</div><!-- /.name -->
            <div class="phone">Tavşanlı Mh. 60 sk. No: 4</div><!-- /.phone -->
            <div class="phone">0(224)-662-07 58</div><!-- /.phone -->
            <div class="email"><a href="mailto:karacabey@tanriverdiemlak.net">karacabey@tanriverdiemlak.net</a></div><!-- /.email -->
        </div><!-- /.agent -->

        <div class="agent">
            <div class="image">
                <img src="assets/img/photos/john-small.png" width="140px" height="141px" alt="">
            </div><!-- /.image -->
            <div class="name">Karacabey Şubesi</div><!-- /.name -->
            <div class="phone">Tavşanlı Mh. 60 sk. No: 4</div><!-- /.phone -->
            <div class="phone">0(224)-662-07 58</div><!-- /.phone -->
            <div class="email"><a href="mailto:bursa@tanriverdiemlak.net">bursa@tanriverdiemlak.net</a></div><!-- /.email -->
        </div><!-- /.agent -->
    </div><!-- /.content -->
	
</div><!-- /.our-agents -->
                <div class="hidden-tablet">
 <div class="widget properties last">
    <div class="title">
        <h2>Kiralık gayrimenkuller</h2>
    </div><!-- /.title -->

    <div class="content">
	<?php $sorgu = mysql_query("Select * from tbl_emlak where durum='Kiralık' limit 6") or die("Sorgu Hatası"); 
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
	<div class="title">
        <h2>Satılık gayrimenkuller</h2>
    </div><!-- /.title -->

    <div class="content">
	<?php $sorgu = mysql_query("Select * from tbl_emlak where durum='Satılık' limit 6") or die("Sorgu Hatası"); 
			while($row = mysql_fetch_assoc($sorgu)){
	?>
        <div class="property">
            <div class="image">
                <a href="detail.php?detay=<?php echo $row['emlak_id']; ?>"></a>
                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_1']; ?>" alt="<?php echo $row['emlak_sahibi']; ?>">
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
</div><!-- /.properties -->

                </div>
				
            </div>
        </div>
        <div class="carousel">

		</div><!-- /.carousel -->        
		<div class="features">

		</div><!-- /.features -->   
		</div>
		</div>
 </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<?php include_once("includes/footer.php"); ?>