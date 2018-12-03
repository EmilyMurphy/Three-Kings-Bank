<!-- start session and connect to db-->
<?php
	session_start();
	include "database.php";
?>
<!-- begin html-->
<!Doctype html>
<html>
<head>
<!-- bootstrap and jquery imported-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
<meta charset = "utf-8">
<title> Login </title>
<!-- bootstrap css imported-->
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
  <li><a href="index.php">Home</a></li>
  <li><a id="active" href="admin_login.php">Admin Login</a></li>
  <li><a href="user_login.php">User Login</a></li>
  <li><a href="reg.php">User Registration</a></li>
</ul>
<div id="set">
<div id="wrapper">
    <div id="content">
       <h3 id="heading">Admin Login Here </h3>
        <!-- php to to check the username and password are correct and set current session to that admin -->
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM admin WHERE ANAME='{$_POST["aname"]}' AND APASS='{$_POST["apass"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc(); 
				$_SESSION["AID"]=$row["AID"];
				$_SESSION["ANAME"]=$row["ANAME"];
				echo "<script>window.open('admin_home.php','_self')</script>"; // open admin home page if successful
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>"; // error message
			}
		}
?>
        <!-- form for user input -->
		<div id="center">
		  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<br>
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" name="aname" placeholder=" username " required>
			</div>
			<br>
			 <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" name="apass" placeholder=" password " required>
			</div>
			<br>	
			<button id= "loginU" type="submit" name="submit" class="btn btn-secondary" role="button">Login Now</button>
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
<!-- circle for animation -->
<div id="circle" style="background:#66d9ff;height:100px;width:100px;position:absolute;bottom:50%;left: 50%;border-radius: 50px;padding 20px;"></div>
</p>
</div>
<hr>
</footer>
<script> 
<!-- jquery for animation -->
$(document).ready(function(){
    $("#loginU").click(function(){
        var div = $("#circle");
        div.animate({opacity: '0.2'}, "slow");
        div.animate({opacity: '0.4'}, "slow");
        div.animate({opacity: '0.6'}, "slow");
        div.animate({opacity: '0.8'}, "slow");
		div.animate({opacity: '1'}, "slow");
		div.queue(function() {
      div.css("background-color", "red");
    });
    });
});
</script> 
</body>
</html>