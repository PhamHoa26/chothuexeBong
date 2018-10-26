<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  
  if ($conn->connect_error) 
    { 
      die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
  $result = $conn->query("SELECT * FROM carts ");
?>

<?php
	include("admin/view/top-menu.php");
?>

<div class="panel panel-info">
	<div class="panel-heading" style="font-weight: bold;">Quản lý giỏ hàng</div>
	<div class="panel-body">
		
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th style="text-align: center;">STT</th>
					<th style="text-align: center;">ID Người Thuê</th>
					<th style="text-align: center;">Ngày Thuê</th>
					<th style="text-align: center;">ID Xe</th>
					<th style="text-align: center;">Số ngày thuê</th>
					<th style="text-align: center;">Trạng thái</th>
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
							<td style="text-align: center;"> <?php echo $row['id_users']; ?> </td>
							<td> <?php echo $row['days']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['id_products']; ?> </td>
							<td style="text-align: center;"> <?php echo $row['sl']; ?> </td>
							<td> <?php echo $row['status']; ?> </td>
							<td style="text-align: center;">
								<button class="btn btn-success"  onclick="if (confirm('Bạn có chắc chắn khách đã nhận hàng')) window.location.href='?thread=nhandonhang&cart-id=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-ok"></span> </button>
								<button class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn muốn xóa?')) window.location.href='?thread=delete-cart-admin&cart-id=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-trash"></span> </button>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
		</table>

	</div>
</div>

