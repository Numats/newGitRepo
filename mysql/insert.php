<?php


   $con = mysqli_connect("localhost", "root", "");
   /*echo "Connection to the server was successful!<br/>";*/
 
   //mysql_select_db(Database name,database connection string); 
   mysqli_select_db($con, "company") or die (mysql_error());
   echo "Database was selected!<br/>";

/*mysqli_query($con,"INSERT INTO company (username, password)
VALUES ( 'Griffin', 1234)");

mysqli_query($con,"INSERT INTO company (username, password)
VALUES ( 'Bobby', 9876)");*/

if(empty($_POST[username]) || empty($_POST[password])) {

	echo 'Please fill in all fields';

} else {

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = md5(mysqli_real_escape_string($con, $_POST['password']));

	$sql="INSERT INTO users (username, password)
	VALUES ('$username', '$password')";

	if (!mysqli_query($con,$sql)) {
	  die('Error: ' . mysqli_error($con));
	} else {
	echo "1 record added";
	}
}

mysqli_close($con);

?>