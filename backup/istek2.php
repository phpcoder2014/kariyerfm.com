<?php require("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>

	<title>Kariyer FM | Bütün sevenler bizdendir..</title>
</head>
<style type="text/css" />
ul, li {padding:0px; margin:0px; list-style:none; font: 14px; Tahoma;}
ul, li {padding:5px; background: #000000; margin-bottom: 5px;}
ul, li {color: #C0C0C0;}
#istekler{width:816px;}
#sonuc{width:816px;}
span {color: #00FF00;}
</head>
</style>
<body style="background-color:#000">
<ul>
	<?php 
		$sorgu = mysql_query("select * from tbl_istek order by istek_id desc");
		while($row = mysql_fetch_object($sorgu)){
		echo '<li id="'.$row->istek_id.'"><img src="images/Music-32.png"/>&nbsp;'.$row->mesaj.'&nbsp;<span>'.$row->zaman.'</span></li>';
		}
	?>
</ul>
<div id="sonuc"></div>
</body>
</html>