<?php 

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hms";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

// Die if connection was not successful
if (!$conn){
	die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
	echo "Connection was successful<br>";
}


if($_GET['action']=='doctorid'){
	
	$docinfo=$_POST['docinfo'];
	$query= mysqli_query($conn, "select * from doctors where doctorName=$docinfo");
	$array=mysqli_fetch_array($query);
	echo $array['docFees'];
	
}
	
?>