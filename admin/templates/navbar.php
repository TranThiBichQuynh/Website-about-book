 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">QC Shop</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin/admin-logout.php"><i class="fa fa-power-off"></i> Đăng Xuất</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin/register.php"><i class="fa fa-address-card"></i> Đăng Ký</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin/login.php"><i class="fa fa-user"></i> Đăng Nhập</a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>