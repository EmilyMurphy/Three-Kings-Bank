<!-- each user page can only be seen when a user logs in -->
<?php
	include "database.php"; // connects to the database bank.sql
	session_start();
if(!isset($_SESSION["ID"])) //ensure only a user logged in can see this page
{
	echo "<script>window.open('user_login.php','_self')</script>";
}
?>
<!--html begins --> 
<!Doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
<meta charset = "utf-8">
<title> Home </title>
    <!-- imported and local style sheets-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background" >
</header>
<body>
    <!-- the body is in a container so everything inside will not extend the full width of the page -->
<div class="container">
<div class="extra">
    <!-- user nav bar -->
<ul>
  <li><a id="active" href="user_home.php">Home</a></li>
  <li><a href="search_bank.php">Search Banks</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="user_change.php">Change Password</a></li>
</ul>
<div id="set">
<!-- welcome current user logged in using php session -->
<div id="content">
      <h3 id="heading">Welcome to the Three Kings Bank homepage <?php echo $_SESSION["NAME"]; ?></h3>
	  <div id="original2">
	  <p id="change2"> Please dont hesitate to contact us by email at tkbcontact@gmail.com if you have any queries</p>
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
<script>
<!-- ajax script-->
$(document).ready(function(){
    $("#change2").click(function(){
        $("#original2").load("ajax2.txt");
    });

</script>
</html>

