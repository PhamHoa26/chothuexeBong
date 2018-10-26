<?php
	$cart_id = addslashes($_GET['id_carts']);

	@$a=mysql_query("DELETE FROM `carts` WHERE id = {$cart_id}");

	if ($a)
	{
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xoa lua chon thanh cong!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php?thread=gio-hang'>";
	}
	else
	{
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình đăng kí, vui lòng thử lại sau!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php?thread=gio-hang'>";
	}
?>