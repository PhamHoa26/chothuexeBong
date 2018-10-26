<?php
	$tukhoa = addslashes($_POST['keyword']);
	
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT * FROM products WHERE name LIKE '%{$tukhoa}' OR name LIKE '%{$tukhoa}%' OR name LIKE '{$tukhoa}%'");
?>

<div class="panel panel-info" style="margin-top: 15px;">
	<div class="panel-heading"><p style="font-size: 25px; color: #ff00cc">KẾT QUẢ TÌM KIẾM CHO: <?php echo $tukhoa; ?></p>
	</div>
	<div class="panel-body">
		<?php
			if ($result->num_rows > 0) 
            {
               	while ($row = $result->fetch_assoc()) 
                {
        ?>
                	<div class="col-md-4" style="padding-left: 2px; padding-right: 2px;">
						<div style="text-align: center; margin-top: 5px;">
							<img src="images/sanpham/<?php echo $row['img']; ?>" width="100%">
						</div>	
						<div style="margin-top: 5px; text-align: center; font-weight: bold; color: green; font-size: 17px;">
							<p><?php echo $row['name']; ?></p>
						</div>
						<div style="text-align: center;">
							<p><b style="color: red;">Giá: <?php echo $row['price']; ?> VNĐ/ ngày</b> <span> | </span> <button class="btn btn-info">Thuê Ngay</button></p>
							<p><b style="color: #696969;"><strike> Giá: <?php echo $row['price']+20000; ?> VNĐ/ ngày</strike></b></p>
						</div>
					</div>
		<?php
                }
            }
            else
            {
            	echo " Không Tìm Thấy Kết Quả Nào!";
            }
		?>
		
	</div>
</div>
