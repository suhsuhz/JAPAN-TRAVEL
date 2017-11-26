<?php 

include '../Inc.php';

/*
$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz"); */

$userid=$_POST['userid'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];

$sql="insert into travel_member (userid,pwd,email) values ('$userid','$pwd','$email')";

mysqli_query($conn,$sql);
header("location:/suhsuhz/JAPAN-TRAVEL/Login/Login-content.php");
?>