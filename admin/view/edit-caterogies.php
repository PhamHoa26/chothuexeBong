<?php
	$id_caterogies=addslashes($_GET['id-caterogies']);
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM caterogies WHERE id={$id_caterogies}");
  //var_dump("SELECT * FROM users WHERE id={$id_user}");
?>

<?php
	include("admin/view/admin-menu.php");
?>

<div class="panel panel-primary">
	<div class="panel-heading"> Chỉnh Sửa Thông Tin Thể Loại</div>
	<div class="panel-body">
		<?php
			while ($row= $result->fetch_assoc()) 
			{
		?>
		<form class="form-horizontal" action="?thread=do-edit-caterogies&id-caterogies=<?php echo $id_caterogies;?>" method="POST">
          <div class="form-group">
            <label class="col-md-3">Tên Thể Loại Xe:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>" required >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Kí Hiệu Thể Loại:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="order" value="<?php echo $row['order'];?>" required>
            </div>
          </div>



          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-primary" type="submit"> Chỉnh Sửa </button>
            </div>
          </div>
        </form>
     <?php
     	}
     	?>   
	</div>
</div>
