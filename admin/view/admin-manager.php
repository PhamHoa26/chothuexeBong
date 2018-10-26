<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	mysqli_set_charset($conn, 'UTF8');
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM users WHERE role = 1");
?>


<?php
	include("admin/view/admin-menu.php");
?>

<div class="panel panel-primary">
	<div class="panel-heading"> Quản Lí Admin</div>
	<div class="panel-body">
		<div  style="margin-bottom: 10px;">
			<button class="btn btn-success" data-toggle="modal" data-target="#ModalRegister1"><span class="glyphicon glyphicon-plus"></span> Thêm admin</button>
		</div>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
					<th style="text-align: center;">Họ Và Tên</th>
					<th style="text-align: center;">Email</th>
					<th style="text-align: center;">CMND</th>
					<th style="text-align: center;">SÐT</th>
					<th style="text-align: center;">GPLX</th>
					<th style="text-align: center;">Chức Năng</th>
                </tr>
            </thead>
            <tbody>
				<?php
					$i=1;
					while($row = $result->fetch_assoc())
					{
				?>
						<tr>
							<td style="text-align: center;"> <?php echo $i++; ?> </td>
							<td> <?php echo $row['username']; ?> </td>
							<td> <?php echo $row['email']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['cmnd']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['phone']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['gplx']; ?> </td>
							<td style="text-align: center;">
								<button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" onclick="if( confirm('khi sửa thông tin phải nhập lại mật khẩu!'))window.location.href='?thread=edit-admin&id-user=<?php echo $row['id'];  ?>'"></span> </button>
								<button class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn muốn xoá không ?')) window.location.href='?thread=delete-admin&users-id=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
        </table>
	</div>
	
</div>

<div id="ModalRegister1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm Admin</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=add-admin" method="POST" onsubmit=" return CheckData(this)">
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
              <button class="btn btn-primary" type="submit">Thêm Admin</button>
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