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
    <div class="container">
      <h1 class="page-title"> 
          sản phẩm được được tìm thấy       
          <i class="fa fa-star-o" aria-hidden="true"></i>
      </h1>
        <hr>
        <div class="row">
          <?php foreach ($dulieusearch as $value): ?>
            <div class="col-md-2">
              <div class="item">
                <figure class="clearfix">
                  <div class="sanpham">
                    <a href="<?php echo base_url() ?>Index/show_sp/<?= $value['masp'] ?>">
                      <img src="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>" alt="" style="display:inline;">
                    </a>
                  </div>
                  <figcaption>
                    <h3>
                      <a href="tivi.html"><?= $value['tensp'] ?></a>
                    </h3>
                    <strong><?= $value['giagoc'] ?></strong>
                  </figcaption>
                </figure>
              </div>
            </div>
          <?php endforeach ?>                                       
        </div> 
    </div>
        
  

  <!-- end-main -->

  <!-- footer -->
  <?php include __DIR__.'/../footer_view.php' ?>
  <!-- /footer -->
  </div>
</body>
</html>
