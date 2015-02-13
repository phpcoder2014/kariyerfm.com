<?php
		require("db.php");
			
			$mesaj			= $_POST['mesaj'];
			$zaman 			= date("d.m.Y H:i:s");

			$sorgu = mysql_query("insert into veri(veri_text,zaman) 
			values('$mesaj','$zaman')");
			if($sorgu){
			echo "<script>alert('Bilgiler basariyla gonderildi..');</script>";
			header('refresh: 1; url=/index.php'); 
			}
			
?>	