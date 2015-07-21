<?php
 //create a mySQL DB connection:
 $dbhost = "166.62.8.47";
 $dbuser = "auxstudDB1";
 $dbpass = "auxstud3DB1!";
 $dbname = "auxstudDB1";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//testing connection success
if ($connection -> connect_errno){
	echo "DB connection failed: " . $connection -> connect_errno;
}
	


?>