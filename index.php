<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website cho thuê xe máy</title>
	<link rel="shortcut icon" href="logoo.jpg" type="image/x-icon"/>
	<meta name="keyword" content="thue xe máy, thuê xe, thue xe may, thue xe may tphcm, thuê xe giá rẻ">
	<meta name="author" content="Phạm Thị Hoa">
	<meta name="descreption" content="Website cho thuuee xe máy giá rẻ hàng đầu, chất lượng, uy tín">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
	<link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		session_start();
		header('Content-Type: text/html; charset=UTF-8');
		require_once("core/mysql.php");
	?>
	<div class="container" style="width: 100%">
		<div class="row">
			<?php
				include("view/header.php")
			?>
		</div>
		<div style="clear: both;"></div>
		
		<div class="row" style="margin-top: 70px;">
			<?php
				include("view/content.php")
			?>
		</div>
		<div style="clear: both;"></div>

		<div class="row">
			<?php
				include("view/footer.php")
			?>
		</div>
		<div style="clear: both;"></div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=203453376996310&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script>
	    $(document).ready(function() {
	        $('#dataTables-example').DataTable({
	            responsive: true
	        });
	    });
    </script>


</body>
</html>