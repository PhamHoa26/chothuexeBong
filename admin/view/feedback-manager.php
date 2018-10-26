<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	//mysqli_set_charset($conn, 'UTF8');
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM feedbacks");
?>


<?php
	include("admin/view/admin-menu.php");
?>

<div class="panel panel-primary">
	<div class="panel-heading"> Quản Lí Phản Hồi</div>
	<div class="panel-body">
		<!--<div  style="margin-bottom: 10px;">
			<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm admin</button>
		</div>-->
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
					<th style="text-align: center;">Loại Phản Hồi</th>
					<th style="text-align: center;">Nội Dung Phản Hồi</th>
					<th style="text-align: center;">Trạng Thái</th>
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
							<td> <?php echo $row['subject']; ?> </td>
							<td style="outline-width: 20px"> <?php echo $row['content']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['status']; ?> </td>
							<td style="text-align: center;">
								<button class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn muốn xoá không ?')) window.location.href='?thread=delete-feedback&feedback-id=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
        </table>
	</div>
	
</div>