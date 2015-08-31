<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

  <h1>店舗一覧</h1>

  <table class="table table-striped">
    <tr><th>店舗名</th><th>場所</th></tr>
    <?php for($i=0;$i<count($data);$i++){ ?>
      <tr>
        <td><a href="info_detail?store=<?php echo $data[$i]["Applegarden"]["id"] ?>"><?php echo $data[$i]["Applegarden"]["store"] ?></a></td>
        <td><?php echo $data[$i]["Applegarden"]["Prefecture"].$data[$i]["Applegarden"]["Prefectures"].$data[$i]["Applegarden"]["Address"] ?></td>
      </tr>
      <?php } ?>

    </table>

    <a href="goods">商品ごとに見る</a>

  </body>
