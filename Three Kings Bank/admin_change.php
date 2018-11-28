<!-- only admin logged in can view this page-->
<?php
	include "database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo "<script>window.open('admin_login.php','_self')</script>";
	}
?>
<!-- begin html-->
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
<ul><!--admin nav bar -->
  <li><a href="admin_home.php">Home</a></li>
  <li><a href="admin_view_bank.php">View Banks</a></li>
  <li><a href="admin_add_bank.php">Add Bank</a></li>
    <li><a href="admin_view_user.php">View Users</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a id="active" href="admin_change.php">Change Password</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Change Password</h3>
		<div id="center">
            <!-- php to check old password matches current password and then set the new password -->
	<?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM admin WHERE APASS='{$_POST["opass"]}' and AID=".$_SESSION["AID"];
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
				$db->query($s);
				echo "<p class='success'>Password Changed</p>";
			}
			else
			{
				echo "<p class='error'>Invalid Password</p>"; // error message
			}

		}
	?>
            <!-- form to take in users input-->
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<br>
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" name="opass" placeholder=" old password " required>
			</div>
			</div>
			<br>
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" name="npass" placeholder=" new password " required>
			</div>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-secondary" role="button">Update Now</button>
			</form>
		</div>
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

