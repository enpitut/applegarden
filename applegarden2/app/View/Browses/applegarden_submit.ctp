<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf8">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <?php echo $this->Html->css('bootstrap/css/bootstrap'); ?>
</head>
<body>

<form name="loadsubmit" method="post" action="">
　　<div class="form-group">
    <label for="name">商品のカテゴリ</label>
    <input type="text" class="form-control" name="category" placeholder="商品のカテゴリ">
  </div>

  <div class="form-group">
    <label for="name">商品名</label>
    <input type="text" class="form-control" name="name" placeholder="商品名">
  </div>

  <div class="form-group">
    <label for="name">店舗</label>
	<select name="store">
<option value="カスミ">カスミ</option>
<option value="カワチ">カワチ</option>
</select>
	<!--<input type="text" class="form-control" name="store" placeholder="店舗">-->
  </div>

  <div class="form-group">
    <label for="name">割引率</label>
		<select name="rate">
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
      <option value="35">35</option>
      <option value="40">40</option>
      <option value="45">45</option>
      <option value="50">50</option>
      <option value="55">55</option>
      <option value="60">60</option>
      <option value="65">65</option>
      <option value="70">70</option>
      <option value="75">75</option>
      <option value="80">80</option>
    </select>
	<!--<input type="number" class="form-control" name="rate" placeholder="割引率">-->
  </div>

  <div class="form-group">
    <label for="name">投稿者名</label>
    <input type="text" class="form-control" name="name" placeholder="お名前">
  </div>


  <button type="submit"  name="submit_info" class="btn btn-default">投稿</button>
</form>


</body>
</html>
