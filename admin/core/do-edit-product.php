<?php
  $id_product=addslashes($_GET['id-product']);
  $name = addslashes($_POST['name']);
  $price = addslashes($_POST['price']);
  $detail = addslashes($_POST['detail']);
  $id_cate = addslashes($_POST['id_cate']);

  
  @$a=mysql_query("UPDATE products SET name = '{$name}', price = '{$price}', detail = '{$detail}', id_cate = '{$id_cate}', WHERE id = {$id_product}");

  if ($a)
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Cập nhật thành công!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=produc-manager'>";
  }
  else
  {
    echo"<SCRIPT LANGUAGE='JavaScript'>alert('Có lỗi trong quá trình cập nhật, vui lòng thử lại sau!');</script>";
    echo"<meta http-equiv='refresh' content='0; index.php?thread=produc-manager'>";
  }
?>

