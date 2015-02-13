<?php include_once("includes/header.php"); ?>
            <!-- CONTENT -->
            <div id="content"><div class="container">
    <div id="main">
        <div class="row">
			<?php
				$detay = $_GET['detay'];
				$sorgu = mysql_query("select * from tbl_emlak where emlak_id ='$detay'") or die("Sorgu Hatası");
						while($row = mysql_fetch_assoc($sorgu)){
			?>
            <div class="span9">
                <h1 class="page-header"><?php echo $row['emlak_baslik']; ?></h1>
				
                <div class="carousel property">
                    <div class="preview">
                        <img src="assets/img/emlak_photo/small/<?php echo $row['resim_2']; ?>" alt="">
                    </div><!-- /.preview -->

                    <div class="content">

                        <a class="carousel-prev" href="#">Previous</a>
                        <a class="carousel-next" href="#">Next</a>
                        <ul>
						    <li class="active">
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_2']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </li>
                            <li>
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_3']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </li>
                            <li>
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_4']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </li>
                            <li>
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_5']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </li>                            
							<li>
                                <img src="assets/img/emlak_photo/small/<?php echo $row['resim_2']; ?>" alt="<?php echo $row['emlak_baslik']; ?>">
                            </li>
                        </ul>
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.carousel -->

                <div class="property-detail">
                    <div class="pull-left overview">
                        <div class="row">
                            <div class="span3">
                                <h2>Emlak hakkında</h2>

                                <table>
                                    <tr>
                                        <th>Fiyatı:</th>
                                        <td><?php echo $row['fiyat']; ?> ₺</td>
                                    </tr>
                                    <tr>
                                        <th>Kontrat Türü:</th>
                                        <td><?php echo $row['durum']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Türü:</th>
                                        <td>Daire</td>
                                    </tr>
                                    <tr>
                                        <th>Şehir:</th>
                                        <td><?php echo $row['sehir']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Oda:</th>
                                        <td><?php echo $row['oda']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Salon:</th>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>Alanı:</th>
                                        <td><?php echo $row['alan']; ?>&nbsp;m<sup>2</sup></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.span2 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <p><strong><?php echo $row['aciklama']; ?></strong></p>
					<br /><br />
                    <h2>Genel Özellikler</h2>

                    <div class="row">
                        <ul class="span2">
                            <li class="checked">
                                Air conditioning
                            </li>
                            <li class="checked">
                                Balcony
                            </li>
                            <li class="checked">
                                Bedding
                            </li>
                            <li class="checked">
                                Cable TV
                            </li>
                            <li class="plain">
                                Cleaning after exit
                            </li>
                            <li class="plain">
                                Cofee pot
                            </li>
                            <li class="plain">
                                Computer
                            </li>
                            <li class="checked">
                                Cot
                            </li>
                        </ul>
                        <ul class="span2">
                            <li class="checked">
                                Dishwasher
                            </li>
                            <li class="checked">
                                DVD
                            </li>
                            <li class="checked">
                                Fan
                            </li>
                            <li class="checked">
                                Fridge
                            </li>
                            <li class="checked">
                                Grill
                            </li>
                            <li class="checked">
                                Hairdryer
                            </li>
                            <li class="plain">
                                Heating
                            </li>
                            <li class="checked">
                                Hi-fi
                            </li>
                        </ul>
                        <ul class="span2">
                            <li class="plain">
                                Internet
                            </li>
                            <li class="checked">
                                Iron
                            </li>
                            <li class="checked">
                                Juicer
                            </li>
                            <li class="checked">
                                Lift
                            </li>
                            <li class="plain">
                                Microwave
                            </li>
                            <li class="plain">
                                Oven
                            </li>
                            <li class="checked">
                                Parking
                            </li>
                            <li class="plain">
                                Parquet
                            </li>
                        </ul>
                        <ul class="span2">
                            <li class="plain">
                                Radio
                            </li>
                            <li class="checked">
                                Roof terrace
                            </li>
                            <li class="plain">
                                Smoking allowed
                            </li>
                            <li class="checked">
                                Terrace
                            </li>
                            <li class="plain">
                                Toaster
                            </li>
                            <li class="plain">
                                Towelwes
                            </li>
                            <li class="plain">
                                Use of pool
                            </li>
                            <li class="plain">
                                Video
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
			<?php } ?>
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
                <div class="widget contact">
    <div class="title">
        <h2 class="block-title">irtibata geçin!</h2>
    </div><!-- /.title -->

    <div class="content">
        <form method="post">
            <div class="control-group">
                <label class="control-label" for="inputName">
                    Adın
                    <span class="form-required" title="This field is required.">*</span>
                </label>
                <div class="controls">
                    <input type="text" id="inputName">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="control-group">
                <label class="control-label" for="inputEmail">
                    Email
                    <span class="form-required" title="This field is required.">*</span>
                </label>
                <div class="controls">
                    <input type="text" id="inputEmail">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="control-group">
                <label class="control-label" for="inputMessage">
                    Mesajın
                    <span class="form-required" title="This field is required.">*</span>
                </label>

                <div class="controls">
                    <textarea id="inputMessage"></textarea>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class="form-actions">
                <input type="submit" class="btn btn-primary arrow-right" value="Gönder">
            </div><!-- /.form-actions -->
        </form>
    </div><!-- /.content -->
</div><!-- /.widget -->
                <div class="widget properties last">
    <div class="title">
        <h2>Seçtiklerimizden</h2>
    </div><!-- /.title -->

        <div class="content">
	<?php $sorgu = mysql_query("Select * from tbl_emlak where rand() limit 6") or die("Sorgu Hatası"); 
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
</div>
    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<?php include_once("includes/footer.php"); ?>