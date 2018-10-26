
<?php
	$id_user=addslashes($_GET['id-user']);
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM users WHERE id={$id_user}");
  //var_dump("SELECT * FROM users WHERE id={$id_user}");
?>



<?php
	include("admin/view/admin-menu.php");
?>
<div class="panel panel-primary">
	<div class="panel-heading"> Chỉnh Sửa Thông Tin Admin</div>
	<div class="panel-body">
		<?php
			while ($row= $result->fetch_assoc()) 
			{
		?>
		<form class="form-horizontal" action="?thread=do-edit-admin&id-user=<?php echo $id_user;?>" method="POST" onsubmit=" return CheckData(this)">
          <div class="form-group">
            <label class="col-md-3">Tên đăng nhập:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="username" value="<?php echo $row['username'];?>" required >
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
              <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Số điện thoại:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="phone" value="<?php echo $row['phone'];?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Số CMND/CCCD:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="cmnd" value="<?php echo $row['cmnd'];?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Số Giấy Phép Lái Xe:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="gplx" value="<?php echo $row['gplx'];?>" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-primary" type="submit"> Chỉnh Sửa </button>
            </div>
          </div>
        </form>
     <?php
     	}
     	?>   
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