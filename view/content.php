<div class="col-md-9">
	<?php
		if (!isset($_GET["thread"]))
		{
			$_GET["thread"]="trang-chu";
		}

		switch ($_GET["thread"])
		{
			case "trang-chu":
			{
				include_once("view/trangchu.php");
				break;
			}

			case "gioi-thieu":
			{
				include_once("view/gioithieu.php");
				break;
			}

			case "khuyen-mai":
			{
				include_once("view/khuyenmai.php");
				break;
			}
			case "tay-ga":
			{
				include_once("view/tayga.php");
				break;
			}
			case "xe-so":
			{
				include_once("view/xeso.php");
				break;
			}
			case "lien-he":
			{
				include_once("view/lienhe.php");
				break;
			}
			case "dang-nhap":
			{
				include_once("core/dangnhap.php");
				break;
			}
			case "logout":
			{
				include_once("core/logout.php");
				break;
			}	
			case "dang-ky":
			{
				include_once("core/dangky.php");
				break;
			}	
			case "phan-hoi":
			{
				include_once("core/phanhoi.php");
				break;
			}
			case "tim-kiem":
			{
				include_once("core/timkiem.php");
				break;
			}
			case "chi-tiet-xe":
			{
				include_once("view/chi_tiet_xe.php");
				break;
			}
			case "them-vao-gio-hang":
			{
				include_once("core/them-vao-gio-hang.php");
				break;
			}	
			case "gio-hang":
			{
				include_once("view/gio-hang.php");
				break;
			}

			case "delete-cart":
			{
				include_once("core/delete-cart.php");
				break;
			}	
			case "admin-ncp":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/admin-ncp.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}	
			case "admin-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/admin-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			
			case "user-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/user-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "add-user":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/add-user.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "add-admin":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/add-admin.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "edit-user":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/edit-user.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "edit-caterogies":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/edit-caterogies.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "edit-admin":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/edit-admin.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "do-edit-user":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/do-edit-user.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "do-edit-caterogies":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/do-edit-caterogies.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "do-edit-admin":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/do-edit-admin.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "delete-user":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-user.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "delete-product":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-product.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "delete-admin":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-admin.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
					
			case "produc-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/produc-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "caterogies-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/caterogies-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "cart-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/cart-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "feedback-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/feedback-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "xethue-manager":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/xethue-manager.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}	
			

			case "delete-caterogies":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-caterogies.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "delete-feedback":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-feedback.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "nhandonhang":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/nhandonhang.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "delete-cart-admin":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/delete-cart-admin.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "add-product":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/add-product.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "edit-product":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/view/edit-product.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
			case "do-edit-product":
			{
				if ($_SESSION['id']!=0 && $_SESSION['role']==1)
				{
					include("admin/core/do-edit-product.php");
					break;
				}
				else
				{
					echo "<script type='text/javascript'> alert('Bạn ko được cấp quyền này!'); </script>";
					echo "<script type='text/javascript'> history.go(-1);</script>";
				}
			}
					
		}
	?>
</div>

<div class="col-md-3" style=" margin-right: auto; margin-left: auto;">
	<?php
		include("view/sile3.php");
	?>
</div>