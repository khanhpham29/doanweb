<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/web.js">
	<title>Thêm hãng</title>
</head>
<body>
	<!-- header -->
	<?php include __DIR__.'/../header_view.php' ?> 
	<!-- nav-main -->
	<?php include __DIR__.'/../menu_view.php' ?>
	<!-- end nav-main -->
	<div class="text-sm-center">
		<h2> Sửa sản phẩm thành công</h2>
	</div>
	<div class="container text-sm-center">
		<a href="<?=base_url(); ?>Xulysp" class="btn btn-primary">quay lại </a>
	</div>
	<!-- footer -->
	<?php include __DIR__.'/../footer_view.php' ?>
	<!-- /footer -->
</body>
</html>