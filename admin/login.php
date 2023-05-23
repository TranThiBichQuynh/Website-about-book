<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:150px 0;">
		<div class="col-md-6">
			<h1  style="color: green; margin-bottom: 50px; margin-left: 130px">Đăng Nhập Admin</h1>
			<p class="message"></p>
			<form id="admin-login-form">
			  <div class="form-group" style="display: flex">
			    <label class= "col-3" for="email">Địa Chỉ Email</label>	
			    <input type="email" class="form-control" name="email" id="email"  placeholder="a@gmail.com" required>  
			</div>  
			
			  <div class="form-group" style="display: flex">
			    <label  class= "col-3" for="password">Mật Khẩu</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="a9@!*" required>
			  </div>
			  <div class="form-group" style="text-align: center; margin-top: 50px; margin-left: 120px">
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-primary login-btn" >Đăng Nhập</button>
			  </div>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
