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
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" >	
			<div class="navbar-header" >
				<!-- -->
				<a href="index.php" class="navbar-brand" style="display: flex"><img src="product_images/logo.jpg"></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
				<li><a href="inforIndex.php"><span class="glyphicon glyphicon-modal-window"></span> Thông Tin</a></li>
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
									<div class="col-md-3">Thành Tiền <?php echo CURRENCY; ?></div>
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
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>
				
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
				<div class="main main-raised">
        		<div class="container mainn-raised" style="width:100%;">
  
  					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

					<div class="item active">
						<img src="product_images/banner1.png" alt="Los Angeles" style="width:100%;">
						
					</div>

					<div class="item">
						<img src="product_images/banner2.jpg" style="width:100%;">
						
					</div>
					
					<div class="item">
						<img src="product_images/banner3.png" alt="New York" style="width:100%;">
						
					</div>
					<div class="item">
						<img src="product_images/banner4.jpg" alt="New York" style="width:100%;">
						
					</div>
					<div class="item">
						<img src="product_images/banner5.jpg" alt="New York" style="width:100%;">
						
					</div>
				
					</div>

						<!-- Left and right controls -->
						<a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only" >Previous</span>
						</a>
						<a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
					</div>
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>		
				</div>
			</div>
			<h1 style="text-align: center; margin-top: 500px; color: red"><b>WELCOME TO OUR BOOKSTORE<b></h1>
		</div>	
	</div>
</body>


<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "236234134988733");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v12.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!-- end plugin chat facebook -->


<footer>
<div class="main-content" style="display: flex; background-color: lightgreen; margin-top: 50px; width: 100%">
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





































