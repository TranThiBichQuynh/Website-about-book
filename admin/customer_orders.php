<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Quản Lý Đơn Hàng</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Đơn hàng</th>
              <th>ID Sản phẩm</th>
              <th>Tên Sản Phẩm</th>
              <th>Số Lượng</th>
              <th>Mã Đơn Hàng</th>
              <th>Trạng Thái</th>
            </tr>
          </thead>
          <tbody id="customer_order_list">
           
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Tên Sản Phẩm</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Tên Thương Hiệu</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Chọn Thương Hiệu</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nhóm Sản Phẩm</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Lựa chọn nhóm SP</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Mô tả</label>
		        		<textarea class="form-control" name="product_desc" placeholder="mô tả về sản phẩm"></textarea>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Giá Sản Phẩm</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Nhập vào giá sản phẩm">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Keywords <small>(eg: sach, truyen)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="nhập keyword">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Hình Ảnh <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Thêm</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>