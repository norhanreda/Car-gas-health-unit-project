<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="Car gas";

$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($conn)
{
}
else
{
    die("database connection failed!");
}

?>
