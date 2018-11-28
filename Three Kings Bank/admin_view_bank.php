<!-- only admin logged in can view this page-->
<?php
	include "database.php";
	include "function.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo "<script>window.open('admin_login.php','_self')</script>";
	}
?>
<!-- begin html -->
<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset = "utf-8">
<title> Home </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<div class="container">
<div class="extra">
<ul>
    <!-- admin nav bar -->
  <li><a href="admin_home.php">Home</a></li>
  <li><a id="active" href="admin_view_bank.php">View Banks</a></li>
  <li><a href="admin_add_bank.php">Add Bank</a></li>
    <li><a href="admin_view_user.php">View Users</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">Change Password</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading">View Bank Details</h3>
    <!--php to display all banks in the table  -->
	<?php 
	if(isset($_GET["mes"]))
	{
		echo "<p class='success'>".$_GET["mes"]."</p>";
	}
		$sql="SELECT * FROM bank"; // select all from bank table
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>";
					echo "<tr>"; 
						echo "<th>NO </th>";
						echo "<th>NAME </th>";
						echo "<th>LOCATION </th>";
						echo "<th>DELETE</th>";
					echo "</tr>";
					$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>"; // display table 
					echo "<td>{$i}</td>";
					echo "<td>{$row["BNAME"]}</td>";
					echo "&nbsp;";
					echo "<td>{$row["ADDRESS"]}</td>";
					echo "<td><a href='delete_bank.php?id={$row["BID"]}'>Delete</a></td>"; // use delete bank php function if pressed
					echo "</tr>";
				}
			echo "</table>";
		}
		else
		{
			echo "<p class='error'>No Bank Record Found</p>"; // error message
		}
	?>
	
    </div>
</div>
</div>
</div>
<footer id="footer">
<hr>
<div id="fix">
<p>If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com
<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc" class="btn btn-info" role="button"> or click here</a>
</div>
</p>
<hr>
</footer>
</body>
</html>
<script>

</script>
