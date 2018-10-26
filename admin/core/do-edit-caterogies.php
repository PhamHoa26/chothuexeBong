<?php
  $id_caterogies=addslashes($_GET['id-caterogies']);
  $name = addslashes($_POST['name']);
  $order = addslashes($_POST['order']);
  $hide = 0;

  
  @$a=mysql_query("UPDATE `caterogies` SET `name` = '{$name}', `order` = '{$order}', `hide` = '{$hide}' WHERE `id` = {$id_caterogies}");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Cập nhật thành công!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=caterogies-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình cập nhật, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=caterogies-manager'>";
  }
?>
