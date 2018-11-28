<!-- php function to delete user from database-->
<?php
	include "database.php";
	$sql="DELETE from user where ID=".$_GET["id"];
	if($db->query($sql))
	{
		echo "<script>window.open('admin_view_user.php?mes=User Details Deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('admin_view_user.php','_self')</script>";
	}
?>