<?php
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
<title> Home </title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<a href="index.php">
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

<div id="content">
      <h3 id="heading">Register Here</h3>
	    <?php
	if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$pass=$_POST["pass"];
			$mail=$_POST["mail"];
		
		 $sql="INSERT INTO user(NAME,PASS,MAIL)
		 VALUES ('{$name}','{$pass}','{$mail}')";
					
			 if($db->query($sql))
			{
				echo "<p class='success'>User Registration Success.</p>";
			}
			else
			{
				echo "<p class='success'>Registration Failed.</p>";
			}

		}
?>
	<div id="center">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	
		<label>Name</label>
		<input type="text" name="name" required>
			<label>Password</label>
		<input type="password" name="pass" required>
			<label>E - Mail</label>
		<input type="email" name="mail" required>
			
		<button type="submit" name="submit">Save Details</button>
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
