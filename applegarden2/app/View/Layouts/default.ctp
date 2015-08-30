<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>
		割引シール口コミサイト ディスカン
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<?php echo $this->Html->css('bootstrap-responsive.min'); ?>
	<?php echo $this->Html->css('styles'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
-->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
?>
</head>

<body>
	<nav class="navbar navbar-static">
	    <div class="container">
	      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="glyphicon glyphicon-chevron-down"></span>
	      </a>
	      <div class="nav-collapse collase">
	        <ul class="nav navbar-nav">
	          <li><a href="index">Home</a></li>
	          <li><a href="#">About</a></li>
	          <li><a href="#">Contact</a></li>
	        </ul>
	        <ul class="nav navbar-right navbar-nav">
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
	            <ul class="dropdown-menu" style="padding:12px;">
	                <form class="form-inline">
	                   <div class="input-group">
	                     <input type="text" class="form-control" placeholder="Search">
	                     <div class="input-group-btn">
	     			       <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
	                     </div>
	                  </div>
	                </form>
	              </ul>
	          </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Login</a></li>
	              <li><a href="#">Profile</a></li>
	              <li class="divider"></li>
	              <li><a href="#">About</a></li>
	             </ul>
	          </li>
	        </ul>
	      </div>
	    </div>
	</nav><!-- /.navbar -->

	<header class="masthead">
	  <div class="container">
	    <div class="row">
	      <div class="col col-sm-6">
	        <h1><a href="index" title="割引シール口コミサイト ディスカン">ディスカン</a>
	          <p class="lead">割引シール情報共有サービス</p></h1>
	      </div>
	    </div>
	  </div>
	</header>



		<div class="table-responsive">
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->fetch('scripts'); ?>

</body>
</html>
