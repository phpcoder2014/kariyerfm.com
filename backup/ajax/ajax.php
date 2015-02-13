<?php
	require "ayar.php";
	
	if ($_POST){
	
		$lastid = $_POST["lastid"];
		if (!$lastid){
			$array["hata"] = "Geçersiz işlem!";
		} else {
		
			$query = mysql_query("SELECT * FROM veri WHERE veri_id > $lastid ORDER BY veri_id DESC");
			if (mysql_affected_rows()){
				while ($row = mysql_fetch_object($query)){
					$array["veriler"] = '<li class="new" id="'.$row->veri_id.'"><img src="images/liste.png" />&nbsp;'.$row->veri_text.'&nbsp;<span>'.$row->zaman.'</span></li>';
				}
			} else {
				$array["hata"] = "Kariyer FM İstek Paneli'ne Hoşgeldiniz..";
			}
		
		}
		
		echo json_encode($array);
	
	}

?>