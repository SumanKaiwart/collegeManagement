<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = mysqli_connect($server, $username, $password,$dbname);
if(!$conn){
echo "connection failed: ".mysqli_connect_error();
}
else {
	echo "connection successfull" ;
	
}

?>