<?php
	require "db.php";
	
	if ($_POST){
	
		$lastid = $_POST["lastid"];
		if (!$lastid){
			$array["hata"] = "Geçersiz işlem!";
		} else {
		
			$query = mysql_query("SELECT * FROM tb_istek WHERE istek_id > $lastid ORDER BY istek_id DESC");
			if (mysql_affected_rows()){
				while ($row = mysql_fetch_object($query)){
					$array["veriler"] = '<li id="'.$row->istek_id.'">'.$row->mesaj.'</li>';
				}
			} else {
				$array["hata"] = "Yeni eklenmiş veri bulunmuyor!";
			}
		
		}
		
		echo json_encode($array);
	
	}
?>