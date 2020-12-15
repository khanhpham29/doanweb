<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm sản phẩm</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/fontawesome/css/all.css">
</head>
<body>
	<!-- header -->
	 <?php include __DIR__.'/../header_view.php' ?>
	<!-- nav-main -->
	 <?php include __DIR__.'/../menu_view.php' ?>
	<!-- main -->
  <?php foreach ($dulieusp as $value): ?>
    <div class="contrainer">
        <div class="row Justify-content-center">
            <div class="col-sm-6 offset-sm-3">
                <!-- kiểu này là làm sida, làm chuẩn là phải lấy chuẩn base_url -->
                <form action="<?= base_url() ?>XulySP/updata_sp" method="post" enctype="multipart/form-data" class=" mt-3 mb-3" >
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="color:red"> Sản phẩm</h1>
                              <div class="row">
                                  <div class="col-sm-12">
                                    <input type="text" name="masp" value="<?= $value['masp'] ?>" hidden>
                                  <feildset class="form-group">                                   
                                    <label for="formGroupExampleInput" style="color:red">Tên sản phẩm</label>
                                    <input name="tensp" type="text" class="form-control" id="formGroupExampleInput2" required>
                                  </feildset>                                                                      
                                  </div>                                  
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                    <feildset class="form-group">
                                      <label for="formGroupExampleInput" style="color:red">Giá Gốc sản phẩm</label>
                                      <input name="giagoc" type="text" class="form-control" id="formGroupExampleInput2" required>
                                    </feildset>
                                  </div> 
                                  <div class="col-sm-6">
                                    <feildset class="form-group" >
                                      <label for="formGroupExampleInput" style="color:red">Giá Bán sản phẩm</label>
                                      <input name="giaban" type="text" class="form-control" id="formGroupExampleInput2" >
                                    </feildset>                                                                      
                                  </div>                                                                      
                              </div>                                                       
                            <input type="submit" class="btn btn-danger mt-3" value="Sửa thông tin sản phẩm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
  <?php endforeach ?>
	  




	<!-- end main -->
	<!-- footer -->
  	 <?php include __DIR__.'/../footer_view.php' ?>
  	<!-- /footer -->
</body>
</html>