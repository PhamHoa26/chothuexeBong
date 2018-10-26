<?php 

  $id_feedback=addslashes($_GET['feedback-id']);

  //echo $id_feedback;
  //var_dump("DELETE FROM users WHERE id = '{$id_user}'");
  @$a=mysql_query("DELETE FROM feedbacks WHERE id = '{$id_feedback}'");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Xoa lua chon thanh cong!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình đăng kí, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-manager'>";
  }

?>