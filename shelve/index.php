<?php include '../access_controled.php'; ?>
<!DOCTYPE html>
<html>
<head>


    <!-- Meta info -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virtual shelf</title>
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="format-detection" content="">

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="styles/main.css" rel="stylesheet" media="screen, print" type="text/css">
	<link href="styles/search.css" rel="stylesheet" media="screen, print" type="text/css">
    <script src="lib/modernizr-2.6.2.js"></script>
	
</head>
<script type="text/javascript">
 load_num=50;
 
 function load(){
    propicload();
	 xhttp = new XMLHttpRequest();
	 xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
			console.log(this.responseText);
		//if(!this.responseText.match(""))
			document.getElementById("picture").innerHTML=xhttp.responseText;
			}
		xhttp.open("GET","data.php?num="+load_num,true);
		xhttp.send();
 }


 function propicload(){
     xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
            console.log(this.responseText);
        //if(!this.responseText.match(""))
            document.getElementById("propic").innerHTML=this.responseText;
            }
        xhttp.open("GET","propic.php",true);
        xhttp.send();
 }
 function popular()
 {
	 xhttp = new XMLHttpRequest();
	 xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
			console.log(this.responseText);
		//if(!this.responseText.match(""))
			document.getElementById("picture").innerHTML=xhttp.responseText;
			}
		xhttp.open("GET","popular.php",true);
		xhttp.send();
	 
 }
 function count_up()
 {
	load_num+=50;
	load();
 }
 function check()
		{
			var nameit= document.getElementById("search");
			var name=nameit.value;
			//console.log(name);
			
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState==4&&this.status==200)
				{
					var response =xhttp.responseText;
					console.log(this.response);
					document.getElementById("picture").innerHTML=this.response;
				}
			}
			xhttp.open("GET","search.php?search="+name,true);
			xhttp.send();
			
		}
 window.onload = load;

</script>
<body>



    <div id="container" style="left: 0px;">
        <section id="content">
            
<header>
    <div id="pfd">
        <a href="index.html">
			
            <img src="images/3.png">
			
        </a>
    </div>
    <div id="preamble" class="home">
        <div class="preamble">
		
<p></p></div></div>
		
  <form class="searchForm">              
  <input class="searchTerm"  placeholder="Search…" id="search" type= "text" onkeyup="check()" /> 
			  <ul class="" id="box">
				
			  </ul>
</form>


    
	
</header>


<style>
.caption { 
	color: white; 
   font: bold 15px Helvetica, Sans-Serif; 
   position: absolute;
	
   bottom:10%; 
   left: 0; 
   width: 100% 
   background: rgb(1, 1, 1); /* fallback color */
   background: rgba(1, 1, 1, 0.7);
   padding: 10px; 
}
</style>




<div id="our-work">
    <ul id="picture">

	
	
	
	
</ul>
</div>
<br><br><br>
<style>
		.button {
    background-color:black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
	
</style>
<center>
<button class="button" onclick="count_up()">
	next page
</button>
</center>
</section>

       <footer id="msf">
            <div class="wrapper">
                <ul id="lets-be-social">
                    <li>
                        <a href="https://twitter.com/198sevenblog" rel="external" target="_blank" title="Follow 198seven on Twitter">Twitter.</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/198sevenblog" rel="external" target="_blank" title="Be 198seven Facebook friend">Facebook.</a>
                    </li>
                    <li>
                        <a href="http://www.pinterest.com/198seven" rel="external" target="_blank" title="My Pinterest pins">Pinterest.</a>
                    </li>
                </ul>
                
             
                
            </div><!-- wrapper -->
        </footer><!-- footer -->
    </div><!-- container -->
    <style>
.caption2 { 
	color: white; 
   font: bold 15px Helvetica, Sans-Serif; 
   position: absolute;
	
   bottom:35%; 
   left: 0; 
   width: 100% 
   background: rgb(1, 1, 1); /* fallback color */
   background: rgba(1, 1, 1, 0.7);
   padding: 10px; 
}
</style>
    
    <nav id="toc">
        <ul>
            <li>
                <a href="javascript:load()">All Books</a></li>
            <li>
                <a href="javascript:popular()">Popular books</a></li>
            <li>
                <a href="../show_seminar/index.php">Seminar</a></li>
			<li>
                <a href="logout.php">Logout</a></li>
			<li>
				<div id ="propic">
                   <!-- <img src ="propic.jpg" height="180" width="180">-->
                   
                </div>
			</li>
			
			
        </ul>
	</nav>
       
       
   
    
    
    <script src="ajax/jquery-1.11.0.min.js"></script>
    <script src="scripts/pyaari-main.1.0.js"></script>
    <script src="scripts/pyaari-menu.1.0.js"></script>
    <script>
        $(document).ready(function () {
            PfdMenu._ctor();
        });
    </script>
    

    <script>
    	$(document).ready(function(){
	       ReadMore.init();
    	})
    </script>


</body>
</html>