<?php
	if (session_destroy())
	{
		echo "<script language='JavaScript'> alert('Bạn đã đăng xuất!'); </script>";
		echo "<meta http-equiv='refresh' content='0; index.php?thread=trang-chu'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Có lỗi! Vui lòng thử lại sau nhé!'); </script>";
		echo "<meta http-equiv='refresh' content='0; index.php?thread=trang-chu'>";
	}
?>