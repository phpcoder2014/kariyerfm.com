<?php 
require("db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/favicon.ico">
	<script type="text/javascript" src="flash/swfobject.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<meta name="google-site-verification" content="SS9MANf8wNIE2v4B5B0Mx_JF815XijJc6HzdUd7WREo" />
	<meta name="keywords" content="kariyer,kariyer fm,radyo" />
	<meta name="robots" content="index,follow" />
	<meta name="description" content="Kariyer fm bütün sevenler bizdendir..İnternet Online Radyo">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Exo:500' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>

	<title>Kariyer FM | Bütün sevenler bizdendir. Online Radio 2014</title>
</head>
<style type="text/css" />
ul, li {padding:0px; margin:0px; list-style:none; font: 14px; Tahoma;}
ul, li {padding:5px; background: #000000; margin-bottom: 5px;}
ul, li {color: #C0C0C0;}
#istekler{width:590px; margin-bottom:10px;}
#sonuc{width:816px;}
span {color: #00FF00;}
cite {color: #C3C3C3; font-size: 11px; Tahoma;}
strong {color: #EEEEEE; font-size: 12px; Tahoma; margin-left:500px; }
div.color {
  border-width:1px;
  border-style:solid;
  border-color:#686868;
  margin-right:10px;
  border-radius: 4px;
  margin-bottom:10px;
  }
.box{
  border-width:1px;
  border-style:solid;
  border-color:#686868;
  border-radius: 4px;
  padding:5px;
}
</style>
</style>
<body style="background-color:#000">
	<div id="home">
		<img src="images/logo.gif"></img>&nbsp;<cite>&nbsp;<strong></strong></cite>
	</div>
<div id="flashcontent1">
		<p><strong>Sorry this site have a flash based native radio and needed adobe flash 10+ support. </strong><br />
	    <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Download Flash here.</a></p>
</div>
<script type="text/javascript">
	// <![CDATA[
	
	var so = new SWFObject("flash/nativeradio2small.swf", "nativeradio2small", "860", "50", "10", "#cccccc");
	so.addParam("scale", "noscale");
	so.addVariable("swfcolor", "000000");
	so.addVariable("swfwidth", "860");
	so.addVariable("swfradiochannel", "M U Z I G I N  E N  K A R I Y T E R L I  A D R E S I - Kariyer FM");
	so.addVariable("swfstreamurl", "http://78.129.163.75:34930");
	so.addVariable("swfpause", "0");
	so.write("flashcontent1");
	//http://www.ustream.tv/embed/19000940?v=3&amp;wmode=direct
	// ]]>
</script>
<div class="color" style="float:left;">
<iframe width="260" height="224" src="Kariyer FM" scrolling="no" frameborder="0" style="border: 0px none transparent;">
</iframe><br />
<!--ul style="font-family: 'Exo', sans-serif;">
<li>DJ ADI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Nihat Şendil</li>
<li>Müzik Türü : Fantezi Müzik</li>
<li>Yayın Saati : 18:00 - 20:00</li>
<li>Yaşadığı IL : Bursa</li>
<li>Sistem Durumu : <span>Şu an Aktif</span></li>
<li>Aktif Ziyaretçi : <span>26</span></li>
</ul -->
</div>
<div id="istekler" class="box" style="float:left;">
 <iframe width="579" height="439" scrolling="no" src="ajax/index.php" style="border:none; overflow: scroll;" ></iframe> 
</div>
<br/>
<div style="float:left;" class="box">
<div class="form-inline" role="form">
  <div class="form-group"style="float:left;">
    <input type="text" class="form-control" style="width:780px;" name="mesaj" id="mesaj" placeholder="lütfen adınızı,mesajınızı ve istediğiniz parçayı yazıp bize gönderebilirisiniz...">
  </div>
  <button type="submit" id="gonder" class="btn btn-primary">Gönder</button>
</div></div>

<script type="text/javascript">
$('#gonder').click(function(){//göndere tıklanma olayı
/* burdan sonrası göndere bastıktan yapılacak işlemler*/
var isim_degiskeni = $('#mesaj').val();//isim alanına yazılan veriyi bir değişkene aldık
var post_edilecek_veriler = 'mesaj='+isim_degiskeni; //post edilmeye hazır hale getirdik. yani verileri bir değişkene atadık.
$.ajax({ // ajax işlemi başlar
type:'POST', // veri gönderme tipimiz. get olabilirdi json olabilirdi. ama biz post kullanıyoruz
url:'ajaxPost.php', // post edilecek adres
data:post_edilecek_veriler, //post edilecek veriler
success:function(cevap){// işlem başarılıysa
alert("istek gönderildi"); //sonuc id'sine ajaxPost.php den dönen verileri basıyoruz.
$('#mesaj').val("");
}
});
});
</script>
</body>
</html>