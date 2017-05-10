<?php

$book_id=$_GET['id'];
$con = mysqli_connect('localhost', 'virtualshelf', 'helloworld', 'virtualshelf');
    if ($con->connect_errno > 0) echo "not connected";
    
	
	$sql = "select Review, User_Name from review where book_id=".$book_id;
	$result = mysqli_query($con, $sql);
	$data="<b>reviews</b><br>";
	//echo $result->num_rows;
	while($obj=mysqli_fetch_object($result))
	{
		$data=$data."<b>".$obj->User_Name.": </b>".$obj->Review."<br>";
		
		
	}
	
	echo $data;


?>