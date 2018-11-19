<?php
	session_start();
	include "database.php";
?>

<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
<meta charset = "utf-8">
<title> Login </title>
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
  <li><a href="admin_login.php">Admin Login</a></li>
  <li><a href="user_login.php">User Login</a></li>
  <li><a href="reg.php">User Registration</a></li>
</ul>
<div id="set">
<div id="wrapper">
    <div id="content">
      <h3 id="heading">User Login Here. </h3>
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM user WHERE NAME='{$_POST["name"]}' AND PASS='{$_POST["pass"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc(); 
				$_SESSION["ID"]=$row["ID"];
				$_SESSION["NAME"]=$row["NAME"];
				echo "<script>window.open('user_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
		}
?>
		<div id="center">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			
				<label>Name</label>
				<input type="text" name="name" required>
					<label>Password</label>
				<input type="password" name="pass" required>
					
				<button type="submit" name="submit">Login Now</button>
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