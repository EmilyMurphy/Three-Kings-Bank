<!-- html starts -->
<!Doctype html>
<html>
<head>
<!-- imported scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset = "utf-8">
<title> Home </title>
<!-- imported and local style sheets-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="icon" href="images/logo.png" width="50" height="50" align = left>
</head>
<header>
<img src = "images/TKB bg.png" width="100%" height="10%" alt="background"  >
</header>
<body>
<!-- the body is in a container so everything inside will not extend the full width of the page -->
<div class="container">
<div class="extra">
<!-- nav bar -->
<ul>
  <li><a id="active" href="index.php">Home</a></li>
  <li><a href="admin_login.php">Admin Login</a></li>
  <li><a href="user_login.php">User Login</a></li>
  <li><a href="reg.php">User Registration</a></li>
</ul>
<div id="set">
<div id="original">
<!-- home page info with h1 that changes when clicked-->
<h1 id="change"> Who Are TKB ?  </h1>
</div>
<p>
Established in 1925, TKB are a banking group that are focused on helping our customers buy their first house, set up their first savings account and maybe even save for the trip of a lifetime. We are the bank with the lowest intrest rates on loans and we are known worldwide as leaders in savings rates.
With branches worldwide no matter where you are in the world we have got you covered. We are perfect for people of any age, young or old we have an account for everybody.
If you are thinking of choosing a bank think TKB, there doesnt have to always be a catch.
</p>
<br>
<video width="900" height="560" controls>
  <source src="video/tkb.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
</div>
</div>
<footer id="footer">
<hr>
<div id="fix">
<!-- footer which is always at bottom of the content and include support information-->
<p>If you would like to contact TKB feel free to email all queries to tkbcontact@gmail.com
<a href="mailto:tkbcontact@gmail.com" style="text-decoration:none" id="abc" class="btn btn-info" role="button"> or click here</a>
</p>
</div>
<hr>
</footer>
</body>
<script>
<!-- ajax script for changing h1-->
$(document).ready(function(){
    $("#change").click(function(){
        $("#original").load("ajax.txt");
    });
});

</script>
</html>

