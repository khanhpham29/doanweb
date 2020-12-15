<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />	
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
</head>
<body>
	<!-- header -->
	 <?php include __DIR__.'/../header_view.php' ?>
	<!-- nav-main -->
	 <?php include __DIR__.'/../menu_view.php' ?>

    <!-- form -->
 	
    	<div class="contrainer">
			<div class="row Justify-content-center">
				<div class="col-sm-5 offset-sm-3">
					<!-- kiểu này là làm sida, làm chuẩn là phải lấy chuẩn base_url -->
					<form action="<?= base_url() ?>DangNhap/Auth" method="post" enctype="multidata/form-data" class=" mt-3 mb-3">
						<div class="card">
							<div class="card-body">
								<feildset class="form-group">
									<label for="formGroupExampleInput">Email</label>
									<input name="email" type="email" class="form-control" id="formGroupExampleInput" required="">
								</feildset>
								<feildset class="form-group">
									<label for="formGroupExampleInput2">Mật khẩu</label>
									<input name="matkhau" type="password" class="form-control" id="formGroupExampleInput2" required="">
								</feildset>

									<span class="msg-error mt-3" style="color:red "> <?php echo  $this->session->flashdata('error');  ?> </span>
																	
								<input type="submit" class="btn btn-primary btn-block mt-3" value="Đăng nhập">
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