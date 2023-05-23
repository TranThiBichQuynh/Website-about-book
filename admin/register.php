<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-8">
			<h1 class="text-center" style="color: green; margin-left: 110px; margin-bottom: 50px">Đăng Ký Tài Khoản Admin</h1>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group" style="display: flex">
			    <label class="col-3" for="name">Tên</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="....">
			  </div>
			  <div class="form-group" style="display: flex">
			    <label class="col-3" for="email">Email </label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="....">
			    
			  </div>
			  <div class="form-group" style="display: flex">
			    <label class="col-3" for="password">Mật Khẩu</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="...">
			  </div>
			  <div class="form-group" style="display: flex">
			    <label class="col-3" for="cpassword">Xác Nhận Mật Khẩu</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="...">
			  </div>
			  <div class="form-group" style="text-align: center; margin-top: 50px; margin-left: 150px">
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Đăng Ký</button>
			  </div>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
