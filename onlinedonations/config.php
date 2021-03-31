<?php
session_start();
$dbHost='localhost';
$dbName='onlinedonation';
$dbUsername='root';
$dbPassword='0912';
$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);//connection 
if(mysqli_connect_errno())
{
	echo "error occured".mysqli_connect_errno();
}

?>