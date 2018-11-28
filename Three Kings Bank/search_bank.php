<!-- each user page can only be seen when a user logs in-->
<?php
	include "database.php";
	session_start();
if(!isset($_SESSION["ID"]))
{
	echo "<script>window.open('user_login.php','_self')</script>";
}
?>
<!-- html begins -->
<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
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
    <!-- nav bar-->
  <li><a href="user_home.php">Home</a></li>
  <li><a id="active" href="search_bank.php">Search Banks</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="user_change.php">Change Password</a></li>

</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Search Bank</h3>
		<div id="center">
            <!-- form to take in user search words-->
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<br>
				<div class="input-group">
				<input type="text" name="name" placeholder=" Enter a Bank Name or Location " size="122" required>
				<div class="input-group-btn">
				<button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
				</div>
			  </form>
		</div>
    <!-- php to search the table bank from data base to check if both the bank name or location is like the users input -->
		<?php 
		if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM bank WHERE BNAME like '%{$_POST["name"]}%' or ADDRESS like '%{$_POST["name"]}%' ";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo "<table>";
						echo "<tr>";
							echo "<th>NO </th>";
							echo "<th>NAME </th>";
							echo "<th>LOCATION </th>";
							
						echo "</tr>";
						$i=0;
					while($row=$res->fetch_assoc())
					{
						$i++; // for each search result found iterate $i 
						echo "<tr>";
						echo "<td>{$i}</td>";
						echo "<td>{$row["BNAME"]}</td>";
						echo "<td>{$row["ADDRESS"]}</td>";
						
						echo "</tr>";
					}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No Bank Record Found</p>"; // error message
			}
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