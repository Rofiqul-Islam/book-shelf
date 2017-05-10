<?php
session_start();
$id=$_SESSION["user_id"];
$con = mysqli_connect('localhost', 'virtualshelf', 'helloworld','virtualshelf');
if($con->connect_errno>0) echo "not connected";
$sql="select User_Image, User_Name from user where User_ID=".$id;
//$image="default.jpg";
//$books_name;
//$author_name;
//$var=$_GET['num'];
$data="";
//$sql="select book_id, book_name, book_author, Image, book_like from book limit 50 OFFSET ".$var;
//$ch_image;
//$like;
$result = mysqli_query($con,$sql);


while($obj=mysqli_fetch_assoc($result)){
	if($obj["User_Image"]==NULL)
	$data=$data."<img src=\"/virtual-shelf/userpic/propic.jpg\" height=\"180\" width=\"180\">";

	else {
	 	$data=$data."<img src=\"/virtual-shelf/userpic/".$obj["User_Image"]."\" height=\"180\" width=\"180\"><h class=\"caption2\">".$obj["User_Name"]."</h>";
	 } 

//$books_name = $obj->book_name;
//$author_name = $obj->book_author;
//$ch_image=$obj->Image;
//$book_id=$obj->book_id;
//$like=$obj->book_like;

//$data=$data."<li><a href=\"project-detail-page.php?data=".$book_id."\"><img src="."default.jpg"."><div class=\"overlay\"><summary><h2>".$books_name."</h2><h3>".$author_name."</h3></summary><><div class=\"loves\"><span>".$like."</span></div></div></a></li>";


//if($var==0)break;
//$var--;
}
echo $data;

?>