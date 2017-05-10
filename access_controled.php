<?php
	session_start();
	if(isset($_SESSION["user_id"]))
	{
		//echo "Welcome ".$_SESSION['user_id'];
	}
	else
	{
		//echo "hek";
		header('Location: /virtual-shelf/index.html');
	}
?>