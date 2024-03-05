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
$sql="select * from signup where email='$vun' and password='$vpwd'";
$r=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($r);
$count=mysqli_num_rows($r);
if($count>=1)
{


  
  echo $result['email'];

  
}
else{
  include("new2.html");
}
mysqli_close($conn);
?>