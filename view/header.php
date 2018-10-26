
<div>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #000080; border-color:#F5DEB3">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <strong><a class="navbar-brand" style="color: #00FFFF" href="?thread=trang-chu" > <font face="Mistral" size="6">Bong Bong</font> </a></strong>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li><a href="?thread=gioi-thieu" style="color: #ffff"> GIỚI THIỆU</a></li>
	        <li><a href="?thread=khuyen-mai" style="color: b#ffff">KHUYẾN MÃI</a></li>
	        <li><a href="?thread=tay-ga" style="color: #ffff">XE TAY GA</a></li> 
	        <li><a href="?thread=xe-so" style="color: #ffff">XE SỐ</a></li> 
	        <li><a href="?thread=lien-he" style="color:#ffff">LIÊN HỆ</a></li> 
        <?php
          if ($_SESSION['id']!=0) 
          {
        ?>
            <li><a href="?thread=gio-hang" style="color: #ffff"> <span class="glyphicon glyphicon-shopping-cart"></span></a></li> 
          
        <?php
          if ($_SESSION['role']==1)
          {
        ?>
             <li><a href="?thread=admin-ncp" style="color: #ffff"> <span class="glyphicon glyphicon-cog"></span></a></li> 
        <?php
          }
          }
        ?> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
          <?php
            if ($_SESSION['id'] != 0)
            {
          ?>
              <li><a href="" style="color: #ffff "><span class="glyphicon glyphicon-user"></span> Xin chào: <?php echo $_SESSION['username']; ?></a></li>
              <li><a href="?thread=logout"style="color: #ffff"><span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
          <?php
            }
            else
            {
          ?>
            <li><a href="#" data-toggle="modal" data-target="#ModalRegister" style="color: #ffff "><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
            <li><a href="#" data-toggle="modal" data-target="#ModalLogin"  style="color: #ffff" ><span class="glyphicon glyphicon-log-in"></span> Đăng nhập </a></li>
          <?php
            }
          ?>
	      
	      </ul>
	    </div>
	  </div>
	</nav>
</div>
<div id="ModalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng nhập hệ thống</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=dang-nhap" method="POST">
          <div class="form-group">
            <label class="col-md-3">Tên đăng nhập:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Mật khẩu:</label>
            <div class="col-md-9">
              <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-success" type="submit">Đăng nhập</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="ModalRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng ký thành viên</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=dang-ky" method="POST" onsubmit=" return CheckData(this)">
          <div class="form-group">
            <label class="col-md-3">Tên đăng nhập:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Mật khẩu:</label>
            <div class="col-md-9">
              <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Nhập lại:</label>
            <div class="col-md-9">
              <input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Email:</label>
            <div class="col-md-9">
              <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Số điện thoại:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="phone" placeholder="Nhập số điện thoại" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Số CMND/CCCD:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="cmnd" placeholder="Nhập số chứng minh/ căn cước công dân" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Số Giấy Phép Lái Xe:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="gplx" placeholder="Nhập số giấy phéo lái xe" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-primary" type="submit">Đăng ký</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function CheckData(form)
  {
    if (form.password.value != form.re_password.value)
    {
      alert("Mật khẩu không trùng khớp!");
      return false;
    }
    if (form.password.value.length < 6)
    {
      alert("Mật khẩu phải có ít nhất 6 ký tự!");
      return false;
    }
    if (form.phone.value.length < 10) 
    {
    	alert("số điện thoại không hợp lệ!");
    	return false;
    }
     if (form.phone.value.length > 12) 
    {
    	alert("số điện thoại không hợp lệ!");
    	return false;
    }
    if (form.cmnd.value.length != 9) 
    {
    	if (form.cmnd.value.length != 12) 
	    {
	    	alert("số cmnd/cccd không hợp lệ!");
	    	return false;
	    }
    }
    return true;
  }
</script>