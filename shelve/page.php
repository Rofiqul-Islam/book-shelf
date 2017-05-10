<?php

if(isset($_GET['id'])) {

    $book_id = $_GET['id'];
    $con = mysqli_connect('localhost', 'virtualshelf', 'helloworld', 'virtualshelf');
    if ($con->connect_errno > 0) echo "not connected";
    $sql = "select book_name, book_author, edition, Image, book_like from book where book_id=" . $book_id;
    $result = mysqli_query($con, $sql);
    $obj = mysqli_fetch_object($result);
    
   
	
	$myJSON = json_encode($obj);

	echo $myJSON;
}
else echo "nothing";
?>