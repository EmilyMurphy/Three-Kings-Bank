<!-- each admin page can only be seen by an admin-->
<?php
	include "database.php";
	include "function.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo "<script>window.open('admin_login.php','_self')</script>";
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
  <li><a id="active" href="admin_home.php">Home</a></li>
  <li><a href="admin_view_bank.php">View Banks</a></li>
  <li><a href="admin_add_bank.php">Add Bank</a></li>
    <li><a href="admin_view_user.php">View Users</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">Change Password</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading"> Welcome Back <?php echo $_SESSION["ANAME"]; ?></h3>
		<ul id="count" style="color: white">
			<li>Total Users Registered  : <?php echo countRecord("SELECT * from user",$db); ?></li>
            <br>
			<li>Total Banks    : <?php echo countRecord("SELECT * from bank",$db); ?></li>

		</ul>
    </div>
</div>
</div>
</div>
<footer id="footer">
<hr>
<div id="fix">
<div id="original1">
<p id="change1">If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com
<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc" class="btn btn-info" role="button"> or click here</a>
</div>
</div>
</p>
<hr>
</footer>
</body>
<script>
<!-- ajax script-->
$(document).ready(function(){
    $("#change1").click(function(){
        $("#original1").load("ajax1.txt");
    });
});

</script>
</html>

