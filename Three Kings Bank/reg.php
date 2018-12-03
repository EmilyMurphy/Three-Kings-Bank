<!-- connect to db  -->
<?php
	include "database.php";
	include "function.php";
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
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="admin_login.php">Admin Login</a></li>
  <li><a href="user_login.php">User Login</a></li>
  <li><a id="active" href="reg.php">User Registration</a></li>
</ul>
<div id="set">

<div id="content">
      <h3 id="heading">Register Here</h3>
    <!-- php to register new user and upload an image file -->
	
	    <?php
    if(isset($_POST["submit"])){
        
            $name=$_POST["uname"];
            $pass=$_POST["pass"];
            $mail=$_POST["mail"];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["efile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["efile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["efile"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file)) {
             $sql="INSERT INTO user(NAME,PASS,MAIL,FILE)
		      VALUES ('{$name}','{$pass}','{$mail}','{$target_file}')";
            $db->query($sql);
        echo "The file ". basename( $_FILES["efile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
   }


		
?>

    <!-- form to take in user parameters-->
	<div id="center">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
	
		<br>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="uname" placeholder=" username " required>
		</div>
		<br>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" name="pass" placeholder=" password " required>
		</div>
		<br>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input type="email" name="mail" placeholder=" email " required>
		</div>
		<br>
        <label>Upload File</label>
		<input type="file" name="efile" id="efile" required>
        <br>
		<!-- jquery linked -->
		<button id= "reg" type="submit" name="submit" class="btn btn-secondary" role="button">Save Details</button>
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
<div id="circle" style="background:#66d9ff;height:100px;width:100px;position:absolute;bottom:45%;left: 50%;border-radius: 50px;padding 20px;"></div>
</div>
</p>
<hr>
</footer>
<script> 
<!-- jquery for animation -->
$(document).ready(function(){
    $("#reg").click(function(){
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
