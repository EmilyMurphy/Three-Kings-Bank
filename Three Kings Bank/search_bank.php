
<?php
	include "database.php";
	session_start();
if(!isset($_SESSION["ID"]))
{
	echo "<script>window.open('user_login.php','_self')</script>";
}
?>

<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
<meta charset = "utf-8">
<title> Home </title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<a href="home.html">
<img src = "images/logo.png" class="image2" width="10%" height="20%" align = left>
</a>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<ul>
  <li><a id="active" href="index.php">Home</a></li>
  <li><a href="search_bank.php">Search Banks</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="user_change.php">Change Password</a></li>

</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Search Book</h3>
		<div id="center">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<label>Enter Bank Name or Keyword</label>
				<input type="text" name="name" required>
				<button type="submit" name="submit">Search Now</button>
			  </form>
		</div>
		<?php 
		if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM bank WHERE BNAME like '%{$_POST["name"]}%' or ADDRESS like '%{$_POST["name"]}%' ";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo "<table>";
						echo "<tr>";
							echo "<th>NO</th>";
							echo "<th>NAME</th>";
							echo "<th>LOCATION</th>";
							
						echo "</tr>";
						$i=0;
					while($row=$res->fetch_assoc())
					{
						$i++;
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
				echo "<p class='error'>No Bank Record Found</p>";
			}
		}
	?>
	
		
    </div>
</div>
</body>
<footer>
<hr>
<p id="fix">If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc"> or click here</a></p>
<hr>
</footer>
</html>