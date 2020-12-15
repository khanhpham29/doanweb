<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Chương trình trả góp 0% cho Samsung Smart TV với công nghệ màn hình OLED mang lại cho bạn độ sâu của hình ảnh tối ưu,
                                      Samsung Smart TV | TV 4k UHD | Tivi Thông Minh | TV 60 inch">
    <title>Samsung Smart TV 55 inch | Trả góp lãi suất 0%</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- header -->
   <?php include __DIR__.'/../header_view.php' ?>
  <!-- nav-main -->
   <?php include __DIR__.'/../menu_view.php' ?>
    <!-- nav main -->
    <main class="main">
      <div class="container" id="item">
      <?php foreach ($showsanpham as $value): ?>
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="product-img-box col-md-5">
                <div class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer autoHeight" style="height: 300px;">
                    <div class="owl-wrapper" style="left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                      <div class="itemform">
                        <div class="owl-item">
                          <div class="item2 large-image">
                            <img src="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="left: 0px; display: block; transition: all 200ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                      <div class="owl-item synced" style="width: 84px;">
                        <div class="item2">
                          <a href="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>"> 
                            <img src="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
              <div class="product-shop col-md-7">
                <form action="<?php echo base_url() ?>Index/show_ttkh/<?= $value['masp'] ?>" method="post" id="forminfo">                 
                    <div class="css_content_detail">
                    <h1> <?= $value['tensp'] ?> </h1>
                    <div class="price_detail">
                      <span class="price_pr"><?= $value['giagoc'] ?>₫</span>
                    </div>
                    <!-- <input type="hidden" name="Price" value="12.990.000₫"> -->
                    <div class="prod-end clearfix">
                      <label for="qty">Số lượng</label> 
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value--;return false;" class="reduced items-count" type="button">
                            <i class="fa fa-minus">&nbsp;</i>
                          </button>

                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="quantity">

                          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">
                            <i class="fa fa-plus">&nbsp;</i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="box_buyer">
                      <div class="pick_buy clearfix">
                        <button type="submit" class="btn btn-default add_to_cart btn-cart add-cart" >Mua hàng</button>
                      </div>
                    <div>
                      <a class="button-call-now" type="button" href="tel:0838883663">
                        <span class="text-large">MUA TRẢ GÓP-LH: 0838883663</span>
                        <span class="text-small hidden-sm hidden-xs hidden-md">Chỉ cần CMND+GPLX - Tỷ lệ duyệt cao</span>
                      </a>
                    </div>
                    </div>                 
                </form>
              </div>
            </div>
          </div>
        </div>                
          <div class="col-md-3">
            <div class="setup-shipper">
              <div class="setup-shipper-title">
                <p class="setup-shipper-title-large">Bảo hành 12 tháng 1 đổi 1</p>
              </div>
              <div class="setup-shipper-content clearfix">
                <div class="col-md-12 item-policy">
                  <div class="huongdan">
                    <a href="#"><h4>Hướng dẫn mua hàng</h4></a>
                  </div>
                </div>
                <div class="col-md-12 item-policy">
                  <div class="vanchuyen">
                    <a href="#"><h4>Chính sách vận chuyển</h4></a>
                  </div>
                </div>
                <div class="col-md-12 item-policy">
                  <div class="baohanh">
                    <a href="#"><h4>Chính sách bảo hành</h4></a>
                  </div>
                </div>
                <div class="col-md-12 item-policy">
                  <div class="doihang">
                    <a href="#"><h4>Chính sách đổi hàng</h4></a>
                  </div>
                </div>
                <div class="col-md-12 item-policy">
                  <div class="camket">
                    <a href="#"><h4>Cam kết chất lượng</h4></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach ?>
      </div>
    </main>
    <!-- nav main -->
    <!-- footer -->
     <?php include __DIR__.'/../footer_view.php' ?>
    <!-- /footer -->
  </div>
</body>
</html>
