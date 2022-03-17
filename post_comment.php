<?php

$con = mysqli_connect('localhost', 'root');

if($con){
	echo "Connection successful!";
}else{
	"Not Connected";
}

mysqli_select_db($con, 'blog_user_data');

$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = " insert into comments (username, email, comment)
values ('$user', '$email', '$comment') ";

mysqli_query($con, $query);

header("location:blog.php");

?>