<?php
	include("admin/view/admin-menu.php");
?>
<?php 

  $id_cart=addslashes($_GET['cart-id']);
  //var_dump("SELECT * FROM users WHERE id={$id_user}");

  @$a=mysql_query("DELETE FROM carts WHERE id = {$id_cart}");
 // var_dump("DELETE FROM carts WHERE id = {$id_cart}");


  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xoa lua chon thanh cong!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=cart-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình xoá, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=cart-manager'>";
  }*/
?>
