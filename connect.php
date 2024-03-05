<?php
$host="localhost";
$user="root";
$pass="";
$db="mini";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
  die("could not connect".mysqli_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $vun=$_POST['email'];
  $vpwd=$_POST['pwd'];
}

?>