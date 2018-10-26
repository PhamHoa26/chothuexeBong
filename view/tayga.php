<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT * FROM products WHERE id_cate = 2");
?>

<div class="panel panel-info" style="margin-top: 15px;">
	<div class="panel-heading">
		<p style="font-size: 25px; color: #ff00cc"><a href="?thread=tay-ga"> XE TAY GA</a> - <img height='20px' width='109px' src="images/datxe.gif"/> 01654036388 - Ms: Hoa</p>
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
							<p><a href="?thread=chi-tiet-xe&id-xe=<?php echo $row['id']; ?>"><?php echo $row['name'];?> </a></p>
						</div>
						<div style="text-align: center;">
							<p><b style="color: red;">Giá: <?php echo $row['price']; ?> VNĐ/ ngày</b> <span> | </span> <button class="btn btn-info" onclick="window.location.href='?thread=them-vao-gio-hang&id-xe=<?php echo $row['id']?> '">Thuê Ngay</button></p>
						</div>
					</div>
		<?php
                }
            }
		?>	
	</div>
</div>
