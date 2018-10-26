<?php
  $id_user=addslashes($_GET['id-user']);
  $username = addslashes($_POST['username']);
  $password = md5(addslashes($_POST['password']));
  $email = addslashes($_POST['email']);
  $phone = addslashes($_POST['phone']);
  $cmnd = addslashes($_POST['cmnd']);
  $gplx = addslashes($_POST['gplx']);
  $role = 1;

  
  @$a=mysql_query("UPDATE users SET username = '{$username}', password = '{$password}', email = '{$email}', phone = '{$phone}', role = '{$role}', cmnd = '{$cmnd}', gplx= '{$gplx}' WHERE id = {$id_user}");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Cập nhật thành công!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình cập nhật, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-manager'>";
  }
?>

