<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML内でのPHPスクリプト - PHP入門</title>
<link href="applegarden0827.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1>現在の割引商品</h1>

<table border=3; table-layout:fixed;>
 <tr><th>商品名</th><th>店舗名</th><th>割引開始時間</th><th>割引率</th><th>投稿者</th></tr>
 <?php for($i=0;$i<count($data);$i++){ ?>
 <?php for($j=0;$j<count($data2);$j++){ 
 if($data[$i]["Applegarden"]["store"] == $data2[$j]["Applegarden"]["store"]){
 $linknow = $data2[$j]["Applegarden"]["id"];
 }
 }
 ?>
  <tr>
  <td><?php echo $data[$i]["Applegarden"]["name"] ?></td>
  <td><a href="applegarden0827_kasu?store=<?php echo $linknow ?>"><?php echo $data[$i]["Applegarden"]["store"] ?></a></td>
  <td><?php echo $data[$i]["Applegarden"]["date"] ?></td>
  <td><?php echo $data[$i]["Applegarden"]["rate"] ?>%</td>
  <td><?php echo $data[$i]["Applegarden"]["user"] ?></td>
  </tr>
 <?php } ?>
 
</table>

<a href="applegarden0827_1">店舗ごとに見る</a>
</body>
</html>