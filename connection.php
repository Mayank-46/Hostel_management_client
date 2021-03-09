<?php

$username="root";
$password="";
$server='localhost';
$db='sample';


$con=mysqli_connect($server,$username,$password,$db);


if($con)
{
	// echo "successful connection";
	?>
	<script>
		alert('connection successful');
	</script>
	<?php
}
else
{
	 // echo "No connection";
	die("No connection" .mysqli_connect_error());
}

?>