<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	mysqli_set_charset($conn, 'UTF8'); 
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM caterogies");
?>


<?php
	include("admin/view/admin-menu.php");
?>

<div class="panel panel-primary">
	<div class="panel-heading"> Quản Lí Thể Loại</div>
	<div class="panel-body">
		<div  style="margin-bottom: 10px;">
			<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm Loại</button>
		</div>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
					<th style="text-align: center;">Tên Thể Loại</th>
					<th style="text-align: center;">Mã Thể Loại</th>
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
							<td> <?php echo $row['order']; ?> </td>
							<td style="text-align: center;">
								<button class="btn btn-warning" ><span class="glyphicon glyphicon-pencil" onclick="if( confirm('khi sửa thông tin thể loại bạn vui lòng kiểm tra kĩ!'))window.location.href='?thread=edit-caterogies&id-caterogies=<?php echo $row['id'];  ?>'"></span> </button>
								<button class="btn btn-danger"  onclick="if (confirm('Bạn có chắc chắn muốn xoá không ?')) window.location.href='?thread=delete-caterogies&id-caterogies=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-trash"></span> </button>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
        </table>
	</div>
	
</div>