<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>QC SHop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<!-- Bootstrap icons-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> 
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- boostrap -->
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				
				</button>
				<a href="#" class="navbar-brand">QC Shop</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
				<li><a href="infomation.php"><span class="glyphicon glyphicon-modal-window"></span> Thông Tin</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">STT</div>
									<div class="col-md-3 col-xs-3">Hình Ảnh</div>
									<div class="col-md-3 col-xs-3">Tên SP</div>
									<div class="col-md-3 col-xs-3">Thành Tiền <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "Hi, ".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:black;"><i class="fa fa-check-square-o"></i> Orders</a></li>
						<li class="divider"></li>
						
						<li><a href="logout.php" style="text-decoration:none; color:black;"><i class="fa fa-power-off"></i> Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>
				
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading" style="font-size: 30px; text-align: center;">Products List</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
<footer>
<div class="main-content" style="display: flex; margin-right: 50px; margin-left: 50px; background-color: lightgreen">
  <div class="left box" style="margin-right: 20px; margin-left: 150px">
    <h2>About Us</h2>
    <div class="content">
      <p>Chúng tôi sẽ mang đến cho các bạn những sản phẩm tốt nhất, trải nghiệm tuyệt vời nhất.<br>Rất vui khi được phục vụ quý khách</p><br>
      <div class="col-md-7 col-sm-5 col-xs-12">
        <div class="social" style="text-align: center">
          <a class="facebook" href="https://www.facebook.com/nhasachQC" style="color: blue; margin-right: 10px; font-size: 30px"><span class="fab fa-facebook"></span></a>
          <a class="twitter" href="https://twitter.com/login?lang=vi" style="margin-right: 10px; font-size: 30px"><span class="fab fa-twitter "></span></a>
          <a class="youtube" href="https://www.youtube.com/account_notifications" style="color: red; margin-right: 10px; font-size: 30px"><span class="fab fa-youtube"></span></a>
          <a class="instagram" href="https://www.instagram.com/" style="color: gray; margin-right: 10px; font-size: 30px"><span class="fab fa-instagram"></span></a>
        </div>
      </div>

    </div>
  </div>

  <div class="center box" style="margin-right: 20px">
    <h2>Address</h2>
    <div class="content">
      <div class="place">
        <span class="fa fa-map-marker"></span>
        <span class="text"> Địa chỉ: 107 Tô Hiệu, Nghĩa Tân, Cầu Giấy, Hà Nội</span>
      </div>
      <div class="email"><br>
        <span class="fas fa-envelope"></span>
        <span class="text"> Email: Tranquynh@gmail.com</span>
      </div>
      <div class="sdt"><br>
        <span class="fas fa-phone-alt"></span>
        <span class="text"> Điện Thoại: 0985678799</span>
      </div>
    </div>
  </div>
  <div class="right box" style="margin-right: 20px">
    <h2>Contact Us</h2>
    <div class="content">
      <form action="#">
        <div class="email">
          <div class="text">Email *</div>
          <input type="email" required>
        </div>
        <div class="msg">
          <div class="text">Messenger *</div>
          <textarea rows="2" cols="25" required></textarea>
        </div>
        <div class="btn">
          <button type="submit" style="background-color: green">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
</footer>
</html>
















































