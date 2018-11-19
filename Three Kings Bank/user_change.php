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

<meta charset = "utf-8">
<title> Home </title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<a href="user_home.php">
<img src = "images/logo.png" class="image2" width="10%" height="20%" align = left>
</a>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<ul>
  <li><a id="active" href="user_home.php">Home</a></li>
  <li><a href="search_bank.php">Search Banks</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="user_change.php">Change Password</a></li>

</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Change Password</h3>
		<div id="center">
	<?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM student WHERE PASS='{$_POST["opass"]}' and ID=".$_SESSION["ID"];
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
				$db->query($s);
				echo "<p class='success'>Password Changed</p>";
			}
			else
			{
				echo "<p class='error'>Invalid Password</p>";
			}

		}
	?>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<label>Old Password</label>
			<input type="password" name="opass" required>
			<label>New Password</label>
			<input type="password" name="npass" required>
			<button type="submit" name="submit">Update Now</button>
			</form>
		</div>
    </div>
</div>
</body>
<footer>
<hr>
<p id="fix">If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc"> or click here</a></p>
<hr>
</footer>
</html>

