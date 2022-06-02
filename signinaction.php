<?php
session_start();

include'connection.php';

//addslashes : useing to coding data(username,password)
$username=addslashes($_POST['username']);
$passowrd=addslashes($_POST['password']);



$query=mysqli_query($con,"select * from users where username='".$username."' and password='".$passowrd."'")or die(mysqli_error($con));


if (mysqli_num_rows($query)){
	
	//$_SESSION['user']=$userName;
	
	
while($row=mysqli_fetch_array($query)){
		 
		
		 $_SESSION['user']=$row['username'];
		 $_SESSION['id']=$row['id'];
		//  $_SESSION['count']=$row['count'];
		
		 		}
	
		header("location:index2.php");
		
}
else
header("location:index.php?=$");


?> 