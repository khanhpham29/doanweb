<div class="bgwhite">
      <div class="bgcolor">
          <div class="page">
            <div class="navbar-header">
              <div class="navbar-brand Module">
                <a class="logo" title="Dien May" href="<?php echo base_url() ?>Index">
                  <img alt="Cửa Hàng Điện Máy STUSROTE" src="<?php echo base_url() ?>vendor/images/logo/logo.png">
                </a>
              </div>
              <form action="<?php echo base_url() ?>XulySP/search_sp" method="post">
                <div class="input-group ">
                  <input name="search-text" type="text" class="form-control" placeholder="Bạn cần tìm gì..">
                  <div class="input-group-append">
                    <button class="searchbutton btn btn-primary" type="submit">Tìm</button>  
                  </div>
                </div>
              </form>
            </div>
            <div class="login-group">
              <?php if ($this->session->has_userdata('email')): ?>
                <a href="<?php echo base_url() ?>DangXuat">Đăng Xuất</a>
              <?php else: ?>
                <a href="<?php echo base_url() ?>DangNhap" class="" style="color:black">Đăng nhập</a>
                <a href="<?php echo base_url() ?>DangKy" style="color:black">Đăng ký</a>
              <?php endif ?>
              
            </div>            
          </div>
        </div>
    </div>
</div>