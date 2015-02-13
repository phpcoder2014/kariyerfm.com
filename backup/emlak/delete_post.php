    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aviators - byaviators.com">
<?php
	require_once("includes/db.php");
	session_start();
	$gelen = $_GET['sil'];
	
	$sorgu = mysql_query("delete from tbl_emlak where emlak_id='$gelen'");
	if($sorgu){
			echo str_repeat("<br>", 8)."<center><h1>Kayıt Silindi..</h1></center>";
			header("Refresh: 1; url=emlak.php");
	}
?>