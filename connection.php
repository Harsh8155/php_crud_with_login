<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "training_sql";

$mysqli = mysqli_connect($server,$user,$password,$db_name);
// Check connection
if ($link->connect_error) 
{
    echo "Failed to connect  " . $link -> connect_error;
    exit();
}
echo "connection successful";
	
?>
