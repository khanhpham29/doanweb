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
	 <div class="contrainer">
        <div class="row Justify-content-center">
            <div class="col-sm-6 offset-sm-3">
                <!-- kiểu này là làm sida, làm chuẩn là phải lấy chuẩn base_url -->
                <form action="<?= base_url() ?>XulySP/add_Sp" method="post" enctype="multipart/form-data" class=" mt-3 mb-3" >
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="color:#05b2e9"> Sản phẩm</h1>
                              <div class="row">
                                  <div class="col-sm-6">
                                  <feildset class="form-group">                                   
                                    <label for="formGroupExampleInput">Tên sản phẩm</label>
                                    <input name="tensp" type="text" class="form-control" id="formGroupExampleInput2" required>
                                  </feildset>                                                                      
                                  </div>
                                  <div class="col-sm-6">
                                  <feildset class="form-group">
                                    <label for="formGroupExampleInput">Hình sản phẩm</label>
                                    <div>
                                     <input name="img" type="file"id="formGroupExampleInput2" required> 
                                    </div>                                    
                                  </feildset>                                                                     
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                    <feildset class="form-group">
                                      <label for="formGroupExampleInput">Giá Gốc sản phẩm</label>
                                      <input name="giagoc" type="text" class="form-control" id="formGroupExampleInput2" required>
                                    </feildset>
                                  </div> 
                                  <div class="col-sm-6">
                                    <feildset class="form-group">
                                      <label for="formGroupExampleInput">Giá Bán sản phẩm</label>
                                      <input name="giaban" type="text" class="form-control" id="formGroupExampleInput2" >
                                    </feildset>                                                                      
                                  </div>                                                                      
                              </div>                        
                              <div class="row">
                                  <div class="col-sm-6">
                                  <feildset class="form-group">
                                  	<label for="formGroupExampleInput">Chọn loại sản phẩm</label>
                                  	<div>
                                  	<select name="maloai" style="width:100%">                                    	
                  									    <?php foreach($dataloaisp as $key=> $value): ?>
                  									        <option value="<?= $value['maloai'] ?>"><?= $value['tenloai'] ?></option>
                  									    <?php endforeach; ?>
                  									</select>
                                  	</div>                                  
                                  </feildset>                                                                      
                                  </div>
                                  <div class="col-sm-6">
                                  <feildset class="form-group">
                                  	<label for="formGroupExampleInput">Chọn Hãng sản phẩm</label>
                                    <div>
                                    	<select name="mahang" style="width:100%">
                  										    <?php foreach($datahangsp as $key=> $value): ?>
                  										        <option value="<?= $value['mahang'] ?>"><?= $value['tenhang'] ?></option>
                  										    <?php endforeach; ?>
                  										</select>
                                   </div>	
                                  </feildset>                                                                      
                                  </div>
                              </div>                                                          
                            <input type="submit" class="btn btn-block btn-primary mt-3" value="Thêm sản phẩm">
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="text-sm-center">
      <h3 class="display-3"> Danh sách sản phẩm</h3>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- begin card -->
      <?php foreach ($datasp as $value): ?>
        <div class="col-sm-4">
          <div class="card mb-3">
            <img src="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>" class="card-img-top img-fluid" alt="card image cap" >             
              <div class="card-body ">
                <h5  name="masp" class="card-title  " >Tên sản phẩm:<?= $value['tensp']?></h5>
                <p   name="giagoc" class="card-text ">Giá sản phẩm:<?= $value['giagoc']?></p>
                <a href="<?= base_url() ?>XulySP/edit_sp/<?= $value['masp'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                <a href="<?= base_url() ?>XulySP/del_sp/<?= $value['masp'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
              </div>             
          </div>                  
        </div>  
      <?php endforeach ?>
      <!-- end card -->
    </div> 




	<!-- end main -->
	<!-- footer -->
  	 <?php include __DIR__.'/../footer_view.php' ?>
  	<!-- /footer -->
</body>
</html>