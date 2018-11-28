<!-- start session-->
<?php
	session_start();
	include "database.php";
?>
<!-- html begins-->
<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
<meta charset = "utf-8">
<title> Login </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/Home.css">
</head>
<header>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<div class="container">
<div class="extra">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="admin_login.php">Admin Login</a></li>
  <li><a id="active" href="user_login.php">User Login</a></li>
  <li><a href="reg.php">User Registration</a></li>
</ul>
<div id="set">
<div id="wrapper">
    <div id="content">
      <h3 id="heading">User Login Here </h3>
        <!-- php to check username and password then set current session to that user and open user home-->
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
				echo "<script>window.open('user_home.php','_self')</script>"; // once successful login then opens user home page
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>"; // error message
			}
		}
?>
		<div id="center">
            <!-- form to take in username and password-->
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<br>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="name" placeholder=" username "  required>
				</div>
				<br>
				 <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="pass" placeholder=" password " required>
				</div>
				<br>
				<button type="submit" name="submit" class="btn btn-secondary" role="button">Login Now</button>
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