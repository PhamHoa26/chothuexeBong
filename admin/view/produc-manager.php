<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	mysqli_set_charset($conn, 'UTF8');
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM products");
?>


<?php
	include("admin/view/admin-menu.php");
?>

<div class="panel panel-primary">
	<div class="panel-heading"> Quản Lí Sản Phẩm</div>
	<div class="panel-body">
		<div  style="margin-bottom: 10px;">
			
			<button class="btn btn-success" data-toggle="modal" data-target="#ModalAddProduct" style="margin-bottom: 10px"><span class="glyphicon glyphicon-plus"></span> Thêm Sản Phẩm</button>
		</div>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
					<th style="text-align: center;width: 100px">Tên Sản Phẩm</th>
					<th style="text-align: center;width: 80px">Giá Cho Thuê</th>
					<th style="text-align: center;">Thông Tin</th>
					<th style="text-align: center;width: 80px">Thể Loại</th>
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
							<td> <?php echo $row['name']; ?> </td>
							<td> <?php echo $row['price']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['detail']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['id_cate']; ?> </td>
							<td style="text-align: center;">
								<button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" onclick="if( confirm())window.location.href='?thread=edit-product&id-product=<?php echo $row['id'];  ?>'"></span> </button>
								<button class="btn btn-danger" style="margin-top: 5px"><span class="glyphicon glyphicon-trash" onclick="if( confirm('Bạn có chắc chắn muốn xoá không!'))window.location.href='?thread=delete-product&id-product=<?php echo $row['id'];  ?>'"></span> </button>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
        </table>
	</div>

	
</div>


<!-- Modal add product -->
<div id="ModalAddProduct" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm sản phẩm</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=add-produc" method="POST">
          <div class="form-group">
            <label class="col-md-3">Tên sản phẩm:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Giá:</label>
            <div class="col-md-9">
              <input class="form-control" type="number" name="price" placeholder="Nhập giá thuê" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Mô tả sản phẩm:</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="2" id="detail"></textarea>
            </div> 
          </div>
          <div class="form-group">
            <label for="radiocheck" class="col-md-3">Thể loại sản phẩm:</label>
            <div class="col-md-9" id="radiocheck">
                <div class="form-check-inline col-md-5">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="id_cate" value="option1" checked>Xe khuyến mãi
                  </label>
                </div>
                <div class="form-check-inline col-md-4">
                  <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="id_cate" value="option2">Xe tay ga
                 </label>
                </div>
                <div class="form-check-inline col-md-3">
                  <label class="form-check-label">
                   <input type="radio" id="radio3" name="id_cate" value="option3" class="form-check-input">Xe số
                 </label>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3">Hình ảnh</label>
            <div class="col-md-9">
              <input type="file" class="form-control-file border" name="img">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-8">
              <button class="btn btn-primary" type="submit">Thêm sản phẩm</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
