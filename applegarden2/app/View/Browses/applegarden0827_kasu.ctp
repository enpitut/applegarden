<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML内でのPHPスクリプト - PHP入門</title>
<?php echo $this->Html->css('applegarden0827_kasu'); ?>
</head>
<body>

<a class="back_goods" href="applegarden0827">割引商品一覧に見る</a>
<br/>
<a class="back_store" href="applegarden0827_1">店舗一覧に戻る</a>

<div id=title><?php echo $data[0]["Applegarden"]["store"]?></div>
 <?php for($i=0;$i<count($data2);$i++){ ?>
<div class=menu>
	<div class=menu_pic></div>
	<div class=menu_who><?php echo $data2[$i]["Applegarden"]["user"] ?></div>
	<div class=menu_time><?php echo $data2[$i]["Applegarden"]["date"] ?></div>
	<div class=menu_comment><?php echo $data2[$i]["Applegarden"]["name"] ?></div>
</div>
 <?php } ?>
</body>
</html>
