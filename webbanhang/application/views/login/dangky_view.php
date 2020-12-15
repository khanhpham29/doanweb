<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!-- header -->
     <?php include __DIR__.'/../header_view.php' ?>
    <!-- nav-main -->
     <?php include __DIR__.'/../menu_view.php' ?>
    <!-- main -->
    <div class="contrainer">
            <div class="row Justify-content-center">
                <div class="col-sm-4 offset-sm-4">
                    <!-- kiểu này là làm sida, làm chuẩn là phải lấy chuẩn base_url -->
                    <form action="<?= base_url() ?>DangKy/Auth" method="post" enctype="multidata/form-data" class=" mt-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center">Đăng ký tài khoản</h1>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Email</label>
                                    <input name="email" type="email" class="form-control" id="formGroupExampleInput" required>
                                </feildset>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Mật khẩu</label>
                                    <input name="matkhau" type="password" class="form-control" id="formGroupExampleInput2" required>
                                </feildset>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Nhập lại Mật khẩu</label>
                                    <input name="matkhau" type="password" class="form-control" id="formGroupExampleInput2" required>
                                </feildset>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Họ tên</label>
                                    <input name="hoten" type="text" class="form-control" id="formGroupExampleInput" required>
                                </feildset>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Số điện thoại</label>
                                    <input name="sdt" type="text" class="form-control" id="formGroupExampleInput" required>
                                </feildset>
                                <feildset class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                         <label for="formGroupExampleInput">Chọn Tỉnh/Thành</label>
                                        <select name="tinh_thanh" id="ProvinceId" class="form-control select2_single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
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
                                        <div class="col-sm-6">
                                        <label for="formGroupExampleInput">Quận/Huyện</label>
                                        <input name="quan_huyen" type="text" class="form-control" id="formGroupExampleInput" required>
                                        </div>
                                    </div>  
                                </feildset>
                                <feildset class="form-group">
                                    <label for="formGroupExampleInput">Địa chỉ</label>
                                    <input name="diachi" type="text" class="form-control" id="formGroupExampleInput" required>
                                </feildset>

                                <input type="submit" class="btn btn-primary btn-block mt-3" value="Đăng ký">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- footer -->
     <?php include __DIR__.'/../footer_view.php' ?>
    <!-- /footer -->
</body>
</html>