<?php
	$id_xe = addslashes($_GET['id-xe']);
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT * FROM products WHERE id = {$id_xe}");
 

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
?>
			<div class="row">
				<div class="col-md-5" style="text-align: center; margin-top: 30px">
					<img src="images/sanpham/<?php echo $row['img']; ?>" width="100%" style="text-align: center;">
				</div>
				<div class="col-md-7">
					<p style="color: red;"><font face="UTM Dai Co Viet" size="6"><?php echo $row['name']; ?></font> <img src="images/km.gif" width="20%"></p>
					<p style="font-weight: bold; font-size: 20px; color: green">Giá KM: <?php echo number_format($row['price']); ?> VNÐ</p>
					<p style="font-size: 15px">Giá cũ: <del><?php echo number_format($row['price'] + 0.33*$row['price']); ?> VNÐ</del></p>
					<div style="margin-top: 30px;">
						<?php
							if ($_SESSION['id'] != 0)
							{
						?>		
								<form class="form-horizontal" method="POST" action="?thread=them-vao-gio-hang&id-xe=<?php echo $row['id']?>">
									<div class="form-group">
										<label class="col-md-4">Chon so ngay thue: </label>
										<div class="col-md-8" style="width: 20%">
											<input class="form-control" type="number" name="sl" value="1" min="1" max="10" required>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-info" type="submit">Thuê Ngay</button>
									</div>
								</form>
						<?php
							}
							else
							{
						?>
								<button class="btn btn-danger" data-toggle="modal" data-target="#ModalLogin1"><i class="fa fa-slack fa-spin"></i> Đăng nhập để đặt xe</button>
						<?php
							}
						?>
					</div>
					<div style="margin-top: 15px;">
						<div class="fb-like" data-href="https://www.facebook.com/ithutech" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</div>
					<div style="margin-top: 10px;">
						<div class="fb-save" data-uri="https://www.facebook.com/ithutech" data-size="large"></div>
						<script src="https://apis.google.com/js/platform.js" async defer>
						  {lang: 'vi'}
						</script>
						<div class="g-plus" data-action="share"></div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 20px; margin-left: 20px;">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Thông tin Xe</a></li>
					<li role="presentation"><a href="#cmt" aria-controls="info" role="tab" data-toggle="tab">Ðánh giá</a></li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="info">
						<p style="margin: 15px; text-align: justify;"><?php echo $row['detail']; ?></p>
					</div>
					<div role="tabpanel" class="tab-pane" id="cmt">
						<div class="fb-comments" data-href="https://facebook.com/thuy.my.39982" data-width="100%" data-numposts="10"></div>
					</div>
				</div>
			</div>
<?php
        }
    }
?>




<!-- Modal -->
<div id="ModalLogin1" class="modal fade" role="dialog">
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