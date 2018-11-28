<!-- php to connect to db bank in the localhost-->
<?php
	$db=new mysqli("localhost","root","","bank");
	if(!$db)
	{
		echo"Database is  Not Connected";
	}

?>