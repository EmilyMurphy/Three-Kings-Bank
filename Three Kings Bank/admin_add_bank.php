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

<meta charset = "utf-8">
<title> Home </title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<a href="admin_home.php">
<img src = "images/logo.png" class="image2" width="10%" height="20%" align = left>
</a>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<ul>
  <li><a id="active" href="admin_home.php">Home</a></li>
  <li><a href="admin_view_bank.php">View Banks</a></li>
  <li><a href="admin_add_bank.php">Add Bank</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">Change Password</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Upload Bank Details.</h3>
		<div id="center">
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
                        echo "<p class='success'>Adding Bank Failed.</p>";
                    }
	
		}
?>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
		<label>Bank Name</label>
		<input type="text" name="bname" required>
		<label>Location </label>
		<textarea name="addr" required></textarea>
		
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
