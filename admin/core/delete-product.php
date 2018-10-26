<?php 

  $id_product=addslashes($_GET['id-product']);
  //var_dump("DELETE FROM users WHERE id = '{$id_user}'");
  @$a=mysql_query("DELETE FROM products WHERE id = '{$id_product}'");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xoa lua chon thanh cong!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=produc-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình đăng kí, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=produc-manager'>";
  }

?>