<!DOCTYPE html>
<html>
<head>
  <link href="applegarden0827.css" rel="stylesheet" type="text/css">
  <?php $this->Html->css('applegarden0827.css', NULL, array('inline' => false)); ?>
</head>
<body>

  <h2>現在の割引商品</h2>


    <table class="table table-striped">
    <tr><th>商品名</th><th>店舗名</th><th>割引開始時間</th><th>割引率</th><th>投稿者</th></tr>
    <?php for($i=0; $i<count($data); $i++){ ?>
      <?php for($j=0; $j<count($data2); $j++){
        if( $data[$i]["Applegarden"]["store"] == $data2[$j]["Applegarden"]["store"]){
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

    <div id="test">
      test
    </div>
    <br>

    <a href="applegarden0827_1">店舗ごとに見る</a>
  </body>
  </html>
