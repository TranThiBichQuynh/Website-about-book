<?php

require "config/constants.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>QC Shop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<!-- them -->
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Bootstrap core CSS -->
        <link href="web_me/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="web_me/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">  
        <script src="web_me/vnpay_php/assets/jquery-1.11.3.min.js"></script>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				
				<a href="#" class="navbar-brand">QC Shop</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
				<li><a href="infomation.php"><span class="glyphicon glyphicon-modal-window"></span>Thông Tin</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-align: center; font-size: 30px">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							
							<div class="col-md-2 col-xs-2"><b>Hình Ảnh Sp</b></div>
							<div class="col-md-2 col-xs-2"><b>Tên SP</b></div>
							<div class="col-md-2 col-xs-2"><b>Số Lượng</b></div>
							<div class="col-md-2 col-xs-2"><b>Giá</b></div>
							<div class="col-md-2 col-xs-2"><b>Thành Tiền <?php echo CURRENCY; ?></b></div>
							<div class="col-md-2 col-xs-2"><b>Thao tác</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!-- Thêm -->
		
						<!-- end thêm -->
			</div> 
		</div>
			<div class="panel-footer"></div>
		</div>
	</div>
			<div class="col-md-2"></div>
						
	</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		