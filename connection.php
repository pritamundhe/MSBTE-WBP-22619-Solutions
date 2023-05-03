<?php
$host="localhost";
$user="username";
$pass="";
$db="db1";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("Connection Failed!".mysqli_connect_error());
}
echo"Connected Successfully";
?>