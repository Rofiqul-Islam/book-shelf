<?php
session_start();
$user_id=$_SESSION['user_id'];

if(isset($_GET['rev'])) {
	$book_id=$_GET['id'];
    $rev= $_GET['rev'];
    $con = mysqli_connect('localhost', 'virtualshelf', 'helloworld', 'virtualshelf');
    if ($con->connect_errno > 0) echo "not connected";
	$sql ="select User_Name from user where User_ID=".$user_id;
	$result = mysqli_query($con, $sql);
	$obj=mysqli_fetch_object($result);
	$user_name=$obj->User_Name;
	
    $sql ="INSERT INTO review(book_id, User_ID, Review,User_Name) VALUES (".$book_id.",".$user_id.",'".$rev."','".$user_name."')";
    $result = mysqli_query($con, $sql);
    

	echo $rev." ".$book_id." ".$user_id." ".$user_name;
}
else echo "nothing";
?>