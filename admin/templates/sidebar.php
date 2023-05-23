<nav class="col-md-2 d-none d-md-block bg-light sidebar" style="font-size: 20px">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 


            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>


          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '' || $page == 'index.php') ? 'active' : ''; ?>" href="index.php">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customer_orders.php') ? 'active' : ''; ?>" href="customer_orders.php">
              <span data-feather="clipboard"></span>
              Đơn Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'products.php') ? 'active' : ''; ?>" href="products.php">
              <span data-feather="shopping-cart"></span>
              Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="brands.php">
              <span data-feather="box"></span>
              Thương Hiệu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="categories.php">
              <span data-feather="layers"></span>
              Nhóm SP
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customers.php') ? 'active' : ''; ?>" href="customers.php">
              <span data-feather="users"></span>
              Khách Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'statictic.php') ? 'active' : ''; ?>" href="statictic.php">
              <span data-feather="bar-chart-2"></span>
              Thống Kê
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">
              <span data-feather="phone-call"></span>
              Liên Hệ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'help.php') ? 'active' : ''; ?>" href="help.php">
              <span data-feather="help-circle"></span>
              Trợ Giúp
            </a>
          </li>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Hello, <?php echo $_SESSION["admin_name"]; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>