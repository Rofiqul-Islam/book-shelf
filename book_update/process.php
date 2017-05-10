<?php
$servername="localhost";
$username = "virtualshelf";
$password = "helloworld";
$dbname = "book";
      $conn = mysqli_connect('localhost', 'root', '','book');
	  if($conn->connect_errno>0)
	  	 echo "not connected";
	  else echo "connected";


	  $id=$_POST['book_name'];
	  $author= $_POST["author_name"];
      $book_name= $_POST["book_name"];
      $edition= $_POST["edition"];
      $info=$_POST["types"];
      $review=$_POST["review"];
      $image="../upload/".$id.".jpg";
      $link=$_POST['link'];

     $uploaddir = '/var/www/html/virtual-shelf/upload/';
$uploadfile = $uploaddir .$id.".jpg";
echo $uploadfile;

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
  

} else {
   echo "Upload failed";
}

echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";

	 $sql = "INSERT INTO book (book_id,book_author, book_name, edition, info, Review,image)  values ('".$id."','".$author."','".$book_name."','".$edition."','".$info."','".$review."','".$image."')";

	  if($conn->query($sql) )
		echo "New Book Aded\n";
	  else
	   echo "Failed";
?>