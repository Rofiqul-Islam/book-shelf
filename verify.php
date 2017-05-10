<?php
$email=$_GET["email"];
echo $email;
$id=$_GET["id"];
echo $id;
 $conn = mysqli_connect('localhost', 'virtualshelf', 'helloworld','virtualshelf');
	  if($conn->connect_errno>0) echo "not connected";
	  else echo "connected";

	 $sql="UPDATE user
	SET status = '1' WHERE User_Email='" . $email . "';";
	$result1 = $conn->query($sql);
		$conn->close();

	header("Location: login/index.html");
        die();

?>