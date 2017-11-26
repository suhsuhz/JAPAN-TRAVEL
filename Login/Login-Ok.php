<?php
session_start();

$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");


$userid=$_POST['userid'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];

echo ($userid);

$sql="select * from travel_member where userid='$userid' and pwd='$pwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row['userid']=="") 
{
	Header("location:Login-content.php?ch=1");
}

else
{
	$_SESSION["userid"]=$row['userid'];
	$_SESSION["pwd"]=$row['pwd'];
	Header("location:/suhsuhz/JAPAN-TRAVEL/");
}
?>