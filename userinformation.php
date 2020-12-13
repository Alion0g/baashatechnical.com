<?php 

$con = mysqli_connect('localhost','root');

if ($con){
	echo "Submite Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'personaluserdata');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into dataofuser (name, email, message) 
values ('$name','$email','$message') ";

mysqli_query($con, $query);

?>