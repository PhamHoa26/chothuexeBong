
<?php
	include("admin/view/admin-menu.php");
?>
<?php 

  $id_user=addslashes($_GET['id-user']);
  //var_dump("SELECT * FROM users WHERE id={$id_user}");

  @$a=mysql_query("DELETE FROM users WHERE id = '{$id_user}'");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xoa lua chon thanh cong!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=user-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình đăng kí, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=user-manager'>";
  }
?>
