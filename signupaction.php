<?php
include'connection.php';

$username=$_POST['username'];
$password=$_POST['password'];
$post='';

$query=mysqli_query($con,"select * from users where username='".$username."'")or die(mysqli_error($con));


	


if($username==""||$password==""){
	header("location:index.php?=error1");
	}else if (mysqli_num_rows($query)){header("location:index.php?=userAlready taken");}
	
	else{
$qry="INSERT INTO users(username,password,posts)VALUE('$username','$password','$post')";

mysqli_query($con,$qry)or die(mysqli_error($con));

//$query="SELECT MAX(id)AS max FROM model";

//$get_lastid=mysqli_query($con,$query) or die(mysqli_error($con));

//$lastid=mysqli_fetch_array($get_lastid);

//$id=$lastid['max'];

//$destination='images/'.$id.'.jpg';
//$temporary=$_FILES['fname']['tmp_name'];

//move_uploaded_file($temporary,$destination); 
header("location:index.php");
	

	}

?> 