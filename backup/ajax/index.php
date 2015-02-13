<?php require "ayar.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Istek Paneli</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style type="text/css">
	ul, li {padding-left: 3px; margin: 0; list-style: none; font-size: 13px; font-family: courier;}
	ul li {padding: 0px; background: #000; color:#C0C0C0; margin-bottom: 5px}
	ul li.new {color: #C0C0C0;}
	span {color: #606060; font: 11px}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body style="background-color:#000">

<ul>
	<?php
	$query = mysql_query("SELECT * FROM veri ORDER BY veri_id DESC");
	while ($row = mysql_fetch_object($query)){
		echo '<li id="'.$row->veri_id.'"><img src="images/liste.png" />&nbsp;'.$row->veri_text.'&nbsp;<span><i>'.$row->zaman.'</i></span></li>';
	}
	?>
</ul>

<div id="sonuc"></div>

</body>
</html>