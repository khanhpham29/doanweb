    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm loại sản phẩm</title>
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
  <!-- end nav-main -->
  
  <!-- main -->
    <div class="contrainer">
        <div class="row Justify-content-center">
            <div class="col-sm-4 offset-sm-4">
                <!-- kiểu này là làm sida, làm chuẩn là phải lấy chuẩn base_url -->
                <form action="<?= base_url() ?>XulyLoaiSP/Them_loaisanpham" method="post" enctype="multidata/form-data" class=" mt-3 mb-3" >
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="color:green">Loại sản phẩm</h1>
                              <div class="row">
                                  <div class="col-sm-12">
                                  <feildset class="form-group">
                                    <label for="formGroupExampleInput">Tên loại sản phẩm</label>
                                    <input name="tenloai" type="text" class="form-control" id="formGroupExampleInput2" required>
                                  </feildset>                                                                      
                                  </div>
                              </div>
                            <input type="submit" class="btn btn-success mt-3" value="Thêm loại sản phẩm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="text-sm-center">
      <h3 class="display-3"> Danh sách mã loại sản phẩm</h3>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- begin card -->
      <?php foreach ($dulieutucontroller as $value): ?>
        <div class="col-sm-4">
          <div class="card mb-3">             
              <div class="card-body ">
                <h5  name="maloai" class="card-title ten " >Mã loại:<?= $value['maloai']?> </h5>
                <p   name="tenloai" class="card-text tuoi">Tên loại:<?= $value['tenloai']?></p>                
                <a href="<?= base_url() ?>XulyLoaiSP/Sua_loaisanpham/<?= $value['maloai'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                <a href="<?= base_url() ?>XulyLoaiSP/Xoa_loaisanpham/<?= $value['maloai'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
              </div>
          </div>
                  
        </div>  <!-- end card -->
      <?php endforeach ?>
    </div>

  <!-- end-main -->

  <!-- footer -->
  <?php include __DIR__.'/../footer_view.php' ?>
  <!-- /footer -->
  </div>
</body>
</html>
