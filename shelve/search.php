<?php
$item=$_GET['search'];
$con = mysqli_connect('localhost', 'virtualshelf', 'helloworld','virtualshelf');
if($con->connect_errno>0) echo "not connected";
$sql="select book_id, book_name, book_author, Image, book_like from book where book_name like '".$item."%' limit 21";


$data="";
$result = mysqli_query($con,$sql);

while($obj=mysqli_fetch_object($result))
{
	$books_name = $obj->book_name;
	$author_name = $obj->book_author;
	$ch_image=$obj->Image;
	$book_id=$obj->book_id;
	$like=$obj->book_like;
	$data=$data."<li><a href=\"project-detail-page.php?data=".$book_id."\"><img src=\"".$ch_image."\" height=\"335\" width=\"419\"><h class =\"caption\">".$books_name."</h><div class=\"overlay\"><summary><h2>".$books_name."</h2><h3>".$author_name."</h3></summary><><div class=\"loves\"><span>".$like."</span></div></div></a></li>";
	
}	
echo $data;


?>