<?php
if($_POST) {
include_once("includes/db.php");
$adi		= mysql_real_escape_string(trim($_POST["name"]));
$email		= mysql_real_escape_string(trim($_POST["email"]));
$message	= mysql_real_escape_string(trim($_POST["message"]));
$zaman		= date("d.m.y h:i:s");

$baglan = mysql_query("insert into tbl_irtibat (adi,email,mesaj,zaman) values('$adi','$email','$message','$zaman')");
if($baglan){
echo '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Tebrikler!</strong> Mesajınız başarılı bir şekilde gönderildi.
    </div>';
}
}
else {
echo "İşlem hatası yapıldı.";
}
?>