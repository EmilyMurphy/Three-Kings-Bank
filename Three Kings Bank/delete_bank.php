<!-- php function to delete bank from database-->
<?php
	include "database.php";
	$sql="DELETE from bank where BID=".$_GET["id"];
	if($db->query($sql))
	{
		echo "<script>window.open('admin_view_bank.php?mes=Bank Details Deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('admin_view_bank.php','_self')</script>";
	}
?>
