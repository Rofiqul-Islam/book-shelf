<?php
session_start();
$user_id=$_SESSION['user_id'];
$book_id=$_GET['id'];
$con = mysqli_connect('localhost', 'virtualshelf', 'helloworld', 'virtualshelf');
    if ($con->connect_errno > 0) echo "not connected";
    
	
	$sql = "select * from liked_books where User_ID=".$user_id." and book_id=".$book_id;
	$result = mysqli_query($con, $sql);
	
	//echo $result->num_rows;
	
	if($result->num_rows>0)
		echo "again";
	else
	{
		$sql = "update book set book_like =book_like+1 where book_id=".$book_id;
		$result = mysqli_query($con, $sql);
		$sql = "INSERT INTO liked_books(User_ID, book_id) VALUES ('".$user_id."','".$book_id."')";
		$result = mysqli_query($con, $sql);
		echo "done";
	}


?>