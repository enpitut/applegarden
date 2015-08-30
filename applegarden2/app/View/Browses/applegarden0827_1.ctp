<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML内でのPHPスクリプト - PHP入門</title>
<link href="applegarden0827.css" rel="stylesheet" type="text/css">
<?php echo $this->Html->css('applegarden0827'); ?>
</head>
<body>

<h1>店舗一覧</h1>

<table class="table table-striped">
 <tr><th>店舗名</th><th>場所</th></tr>
  <?php for($i=0;$i<count($data);$i++){ ?>
  <tr>
  <td><a href="applegarden0827_kasu?store=<?php echo $data[$i]["Applegarden"]["id"] ?>"><?php echo $data[$i]["Applegarden"]["store"] ?></a></td>
  <td><?php echo $data[$i]["Applegarden"]["Prefecture"].$data[$i]["Applegarden"]["Prefectures"].$data[$i]["Applegarden"]["Address"] ?></td>
  </tr>
 <?php } ?>

</table>

<a href="applegarden0827">商品ごとに見る</a>

</body>
