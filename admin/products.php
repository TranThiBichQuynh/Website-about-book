<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Danh Sách Sản Phẩm</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-av fa fa-plus"></a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Hình ảnh</th>
              <th>Giá</th>
              <th>Số Lượng</th>
              <th>Nhóm SP</th>
              <th>Thương Hiệu</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody id="product_list">
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Tên SP</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Tên Thuơng Hiệu </label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Lựa chọn thương hiệu</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Tên Nhóm SP</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Lựa chọn tên nhóm</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Mô Tả</label>
		        		<textarea class="form-control" name="product_desc" placeholder="...."></textarea>
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>Số Lượng</label>
                <input type="number" name="product_qty" class="form-control" placeholder="....">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Giá</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="....">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Từ Gợi Ý Khi Tìm Kiếm <small>(eg: sach, truyen)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="......">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Hình Ảnh<small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_images" class="form-control" >
		        	</div>
        		</div>
            
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12" style="text-align: center">
        			<button type="submit" class="btn btn-primary add-product" >Thêm</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Tên SP</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Tên Thương Hiệu</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Lựa chọn thương hiệu</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Tên Nhóm</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Chọn Nhóm</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="e_product_desc" placeholder="....."></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Số Lượng</label>
                <input type="number" name="e_product_qty" class="form-control" placeholder=".....">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Giá</label>
                <input type="number" name="e_product_price" class="form-control" placeholder=".....">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Keywords <small>(eg: apple, iphone, mobile)</small></label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder=".....">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Hình Ảnh<small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Thêm</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>