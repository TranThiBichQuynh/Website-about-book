<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
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
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" >	
			<div class="navbar-header" >
				
				<a href="index.php" class="navbar-brand" style="display: flex"><img src="product_images/logo.jpg"></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
				<li><a href="inforIndex.php"><span class="glyphicon glyphicon-modal-window"></span> Thông tin</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">STT</div>
									<div class="col-md-3">Hình Ảnh SP</div>
									<div class="col-md-3">Tên SP</div>
									<div class="col-md-3">thành Tiền <?php echo CURRENCY; ?></div>
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Đăng Nhập</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Mật Khẩu</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Tạo tài khoản mới</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
    <div class="row" style="display: flex; margin-top: 100px">
    <h3>Cửa hàng được thành lập năm 2018 với nhiều sản phẩm tốt, đa dạng thể loại </h3>
    <img src="product_images/banner2.jpg" style="width:650px; height: 250px; margin-left: 30px"> 
    </div>
    <div class="row" style="display: flex; margin-top: 50px">
    <img src="product_images/banner4.jpg" style="width:650px; height: 250px"> 
    <h3 style="margin-left: 65px; text-align: justify">Sách đã đi vào cuộc sống của chúng ta từ khi nào thì không ai biết chỉ biết là rất lâu rồi. 
        Sách mang lại cho chúng ta nhiều lợi ích, nó còn được coi là kho tàng cất giữ di sản tinh thần nhân loại,
        nó đã trở thành một món ăn tinh thần không thể thiếu của mỗi người.       
    </h3>
    </div>
    <div class="row" style="display: flex;  margin-top: 50px; margin-bottom: 50px">
    <h3 style="text-align: justify; margin-right: 30px">Cửa hàng hiện đang bán nhiều thể loại sách phù hợp cho mọi lứa tuổi,
        nhu cầu của mỗi người như sách thiếu nhi, sách văn học - tiểu thuyết, sách giáo khoa, sách kỹ năng sống, truyện tranh,
        sách ngoại ngữ, sách du lịch. Mỗi cuốn sách ở cửa hàng đều chất lượng đến với mọi khách hàng.
     </h3>
    <img src="product_images/banner5.jpg" style="width:650px; height: 250px; margin-left: 30px"> 
    </div>
</div>