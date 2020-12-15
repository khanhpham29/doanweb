<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
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
      <div class="container" id="form">
        <div class="row">
          <div class="center-side">
            <div class="row">
              <div class="col-md-5">
                <h4>Thông tin người mua/nhận hàng</h4>
                <input type="hidden" name="Nameitem" value="TIVI LED SAMSUNG 55 INCH UA55NU7090KXXV">
                <input type="hidden" name="Price" value="11.900.000">
                <input type="hidden" name="Size" value="ĐEN, 55 INCH">
                <div class="form-group">
                    <span class="error-desc" style="display: none;"></span>
                    <input placeholder="Họ và tên" class="form-control" maxlength="150" type="text" name="FullName">
                </div>
                <div class="form-group">
                    <span class="error-desc" style="display: none;"></span>
                    <input placeholder="Email" class="form-control" maxlength="150" type="email" name="Email">
                </div>
                <div class="form-group">
                    <span class="error-desc" style="display: none;"></span>
                    <input placeholder="Số điện thoại" class="form-control" size="30" maxlength="11" type="" name="Phone">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <span class="error-desc" style="display: none;"></span>
                        <select name="ProvinceId" id="ProvinceId" class="form-control select2_single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="0">Chọn Tỉnh/Thành</option>
                          <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                          <option value="TP Cần Thơ">TP Cần Thơ</option>
                          <option value="Đồng Nai">Đồng Nai</option>
                          <option value="Bình Dương">Bình Dương</option>
                          <option value="Bình Phước">Bình Phước</option>
                          <option value="Tây Ninh">Tây Ninh</option>
                          <option value="Long An">Long An</option>
                          <option value="Tiền Giang">Tiền Giang</option>
                          <option value="Đồng Tháp">Đồng Tháp</option>
                          <option value="An Giang">An Giang</option>
                          <option value="Vĩnh Long">Vĩnh Long</option>
                          <option value="Hậu Giang">Hậu Giang</option>
                          <option value="Kiên Giang">Kiên Giang</option>
                          <option value="Bến Tre">Bến Tre</option>
                          <option value="Trà Vinh">Trà Vinh</option>
                          <option value="Sóc Trăng">Sóc Trăng</option>
                          <option value="Bạc Liêu">Bạc Liêu</option>
                          <option value="Cà Mau">Cà Mau</option>
                          <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                          <option value="Bình Thuận">Bình Thuận</option>
                          <option value="TP Hà Nội"> TP Hà Nội</option>
                          <option value="Hưng Yên">Hưng Yên</option>
                        </select>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="error-desc" style="display: none;"></span>
                        <input placeholder="Quận / huyện" class="form-control" maxlength="150" type="text" name="District" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <span class="error-desc" style="display: none;"></span>
                      <input placeholder="Địa chỉ giao hàng" class="form-control" maxlength="500" type="text" name="Address">
                  </div>
                  <div class="form-group">
                      <span class="error-desc" style="display: none;"></span>
                      <textarea rows="5" cols="20" placeholder="Ghi chú" class="form-control" maxlength="500" type="text" name="Notes"></textarea>
                  </div>
                </div>
                <?php foreach ($showsanpham as $value): ?>
                  <div class="col-md-7">
                  <h4>Chi tiết sản phẩm trong giỏ hàng</h4>
                  <table class="table table-cart">
                    <tbody>
                      <tr>
                        <td>
                          <img src="<?= base_url() ?>fileupload/<?= $value['hinh'] ?>" width="80">
                        <td>
                          <p><?= $value['tensp'] ?></p>
                        </td>
                        <td style="width: 160px;">
                          = <b><?= $value['giagoc'] ?></b> <span>đ</span>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td colspan="2" class="text-right">
                          Phí vận chuyển:
                        </td>
                        <td colspan="2">
                          <span class="error-desc" style="display: none;"></span>
                          <b>48.000</b><span>đ</span> => <b>0</b><span>đ</span>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" class="text-right">
                          Tổng cộng:
                        </td>
                        <td colspan="2">
                          <b><?= $value['giagoc'] ?></b> <span>đ</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                <button class="btn btn-cart-payment" data-bind="click:Submit">Đặt hàng</button>
              </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- footer -->
     <?php include __DIR__.'/../footer_view.php' ?>
    <!-- /footer -->
    
  </form>
</body>
</html>
