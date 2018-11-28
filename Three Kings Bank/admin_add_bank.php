<!-- only admin logged in can view this page-->
<?php
	include "database.php"; // connect to db
	include "function.php";
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

<meta charset = "utf-8">
<title> Home </title>
    <!-- imported link and css-->
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
<ul> <!-- admin nav bar -->
  <li><a href="admin_home.php">Home</a></li>
  <li><a href="admin_view_bank.php">View Banks</a></li>
  <li><a id="active" href="admin_add_bank.php">Add Bank</a></li>
    <li><a href="admin_view_user.php">View Users</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">Change Password</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Upload Bank Details</h3>
		<div id="center">
            <!-- php to add new bank details-->
		<?php
	if(isset($_POST["submit"]))
		{
			$bname=$_POST["bname"];
			$addr=$_POST["addr"];

            $sql="INSERT INTO bank(BNAME,ADDRESS)
					 VALUES ('{$bname}','{$addr}')";
        
					if( $db->query($sql))
                    {
					   echo "<p class='success'>Adding Bank Success.</p>";

                    }
                    else
                    {
                        echo "<p class='success'>Adding Bank Failed.</p>"; // error message
                    }
	
		}
?>
            <!--form to take in users input -->
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
		<br>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
		<input type="text" name="bname" placeholder=" Bank Name " required>
		</div>
		<br>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		<input type="text" name="addr" placeholder=" Location " required></textarea>
		</div>
		<br>
		</div>
		<button type="submit" name="submit" class="btn btn-secondary" role="button">Save Details</button>
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
