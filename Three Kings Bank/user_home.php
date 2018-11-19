
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
      <h3 id="heading">Welcome <?php echo $_SESSION["NAME"]; ?>.</h3>
	
    </div>
</div>
</body>
<footer>
<hr>
<p id="fix">If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc"> or click here</a></p>
<hr>
</footer>
</html>

