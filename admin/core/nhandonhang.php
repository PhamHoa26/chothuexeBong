<?php
	$id_cart=addslashes($_GET['cart-id']);
	$stt="Đã Nhận Xe";
	
   @$a=mysql_query("UPDATE carts SET status = '{$stt}' WHERE id = {$id_cart}");

  

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Cập nhật thành công!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=cart-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình cập nhật, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=cart-manager'>";
  }


?>