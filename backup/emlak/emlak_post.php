<?php

include_once("includes/db.php");

$adi_soyadi		= mysql_real_escape_string(trim($_POST["adi_soyadi"]));
$baslik			= mysql_real_escape_string(trim($_POST["baslik"]));
$adres			= mysql_real_escape_string(trim($_POST["adres"]));
$kategori		= $_POST["kategori"];
$aciklama		= mysql_real_escape_string(trim($_POST["aciklama"]));
$il 			= mysql_real_escape_string(trim($_POST["sehir"]));
$ilce			= $_POST["ilce"];
$durum			= $_POST["durum"];
$oda			= mysql_real_escape_string(trim($_POST["oda"]));
$salon			= mysql_real_escape_string(trim($_POST["salon"]));
$alan			= mysql_real_escape_string(trim($_POST["alan"]));
$fiyat			= mysql_real_escape_string(trim($_POST["fiyat"]));
$resim_bir		= $_FILES["resim_bir"]["name"];
$resim_iki		= $_FILES["resim_iki"]["name"];
$resim_uc		= $_FILES["resim_uc"]["name"];
$resim_dort		= $_FILES["resim_dort"]["name"];
$resim_bes		= $_FILES["resim_bes"]["name"];
$resim_alti		= $_FILES["resim_alti"]["name"];
$date = date("dmyhis");
if($_POST["kategori"] == 'Dükkan'){$kategori = '1';}
if($_POST["kategori"] == 'Bina'){$kategori = '2';}
if($_POST["kategori"] == 'Tarla'){$kategori = '3';}
if($_POST["kategori"] == 'Çiftlik'){$kategori = '4';}
if($_POST["kategori"] == 'Fabrika'){$kategori = '5';}
if($_POST["kategori"] == 'Daire'){$kategori = '6';}
if($_POST["kategori"] == 'Arsa'){$kategori = '7';}
if($_POST["kategori"] == 'Villa'){$kategori = '8';}
            $dosya = $_FILES['resim_bir']['tmp_name'];
            $dosya2 = $_FILES['resim_iki']['tmp_name'];
            $dosya3 = $_FILES['resim_uc']['tmp_name'];
            $dosya4 = $_FILES['resim_dort']['tmp_name'];
            $dosya5 = $_FILES['resim_bes']['tmp_name'];
            $dosya6 = $_FILES['resim_alti']['tmp_name'];
						
            copy($dosya, 'assets/img/emlak_photo/small/' . $_FILES['resim_bir']['name']);
            copy($dosya2, 'assets/img/emlak_photo/small/' . $_FILES['resim_iki']['name']);
            copy($dosya3, 'assets/img/emlak_photo/small/' . $_FILES['resim_uc']['name']);
            copy($dosya4, 'assets/img/emlak_photo/small/' . $_FILES['resim_dort']['name']);
            copy($dosya5, 'assets/img/emlak_photo/small/' . $_FILES['resim_bes']['name']);
            copy($dosya6, 'assets/img/emlak_photo/small/' . $_FILES['resim_alti']['name']);
            

$baglan = mysql_query("insert into tbl_emlak (emlak_sahibi,emlak_baslik,adres,kategori,aciklama,sehir,ilce,durum,oda,salon,alan,fiyat,resim_1,resim_2,resim_3,resim_4,resim_5,resim_6) 
values('$adi_soyadi','$baslik','$adres','$kategori','$aciklama','$il','$ilce','$durum','$oda','$salon','$alan','$fiyat','$resim_bir','$resim_iki','$resim_uc','$resim_dort','$resim_bes','$resim_alti');") or die(mysql_error());
if($baglan){
			echo str_repeat("<br>", 8)."<center><h1>Emlak yukleniyor..</h1></center>";
			header("Refresh: 1; url=list-your-property.php");
}else {
echo "işlem başarısız";
}
	

?>