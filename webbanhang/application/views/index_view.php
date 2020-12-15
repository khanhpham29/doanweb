<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Thỏa thích mua sắm với vô vàn sản phẩm điện máy công nghệ cao với chương trình trả góp lãi suất 0%, 
                                      chỉ có tại siêu thị điện máy STUSROTE| Vận Chuyển Toàn Quốc | Thanh Toán Online | Giá Sốc">
    <title>Siêu Thị Điện Máy </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/slide/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/slide/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/slide/owlcarousel/owl.carousel.min.js"></script>
</head>
<body>
  
  <!-- header -->
    <?php require('header_view.php') ?>
  <!-- menu -->
    <?php require('menu_view.php') ?>
    <!-- slider -->
    <?php require('slider_view.php') ?>
    <!-- /slider -->
    <!-- nav main -->    
     <main class="main">
      <div class="container">
        <h1 class="page-title"> 
          sản phẩm được quan tâm gần đây        
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <?php foreach ($datasp as $value): ?>
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
        
        <h1 class="page-title" id="tulanh"> 
          Tủ LẠNH
          <i class="fa fa-barcode" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="<?php echo base_url() ?>sanpham/tulanh.php">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/tulanh/1.jpg" alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="tulanh.html">Tủ lạnh LG Inverter 679 lít GR-B247JDS</a>
                  </h3>
                  <strong>16.990.000₫</strong>
                </figcaption>
              </figure>
            </div>
          </div>        
        </div>

        <h1 class="page-title" id="maygiat"> 
          Máy GIẶT
          <i class="fa fa-spinner" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="<?php echo base_url() ?>sanpham/maygiat.php">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/maygiat/1.jpg" alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="maygiat.html">MÁY GIẶT SHARP 8.2 KG ES-U82GV-H</a>
                  </h3>
                  <strong>3.490.000₫</strong>
                </figcaption>
              </figure>
            </div>
          </div>                
        </div>
        <h1 class="page-title" id="maylanh"> 
          máy LẠNH
          <i class="fa fa-ioxhost" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="<?php echo base_url() ?>/sanpham/maylanh.php">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/maylanh/1.jpg" alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="maylanh.html">Máy lạnh Toshiba Inverter 1HP RAS-H10HKCVG-V</a>
                  </h3>
                  <strong>7.900.000₫</strong>
                </figcaption>
              </figure>
            </div>
          </div>                             
        </div>
        <h1 class="page-title" id="smarttivi"> 
          SMART TIVI
          <i class="fa fa-television" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="tivi.html">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/tivi/1.jpg" alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="tivi.html">TIVI LED SAMSUNG 55 INCH UA55NU7090KXXV</a>
                  </h3>
                  <strong>11.900.000₫</strong>
                </figcaption>
              </figure>
            </div>
          </div>                                                
        </div>
        <h1 class="page-title" id="amthanh"> 
          Âm thanh
          <i class="fa fa-music" aria-hidden="true"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="loa.html">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/loa/1.jpg " alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="loa.html">DÀN ÂM THANH SONY MHC-V41D</a>
                  </h3>
                  <strong>6.690.000đ</strong>
                </figcaption>
              </figure>
            </div>
          </div>                    
        </div>
        <h1 class="page-title">
          Mua Gì Hôm Nay
          <i class="fa fa-angle-right"></i>
        </h1>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <div class="item">
              <figure class="clearfix">
                <div class="sanpham">
                  <a href="iphone7.html">
                    <img src="<?php echo base_url() ?>vendor/images/sanpham/1.jpg" alt="" style="display:inline;">
                  </a>
                </div>
                <figcaption>
                  <h3>
                    <a href="iphone7.html">
                      IPHONE 7 PLUS 128GB BLACK
                    </a>
                  </h3>
                  <strong>12.990.000₫</strong>
                </figcaption>
              </figure>
            </div>
          </div>
          
        </div>
      </div>
    </main>
    <!-- /navmain -->
    <!-- footer -->
     <?php include __DIR__.'/../footer_view.php' ?>
    <!-- /footer -->
  </form>
  <script type="text/javascript" src="<?php echo base_url() ?>vendor/web.js"></script>
</body>
</html>
