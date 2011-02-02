<html>
<head>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("img").fadeTo("fast", 0.3);
$("img").hover(function(){
$(this).fadeTo("fast", 1.0);
},function(){
$(this).fadeTo("fast", 0.3);
});
});
</script>
<style type=text/css>
<!-- #zoom img {
	opacity:.25;
	-webkit-transition: opacity;	
	-webkit-transform: scale(.5);
	-webkit-transition-timing-function: ease-out;
	-webkit-transition-duration: 1000ms;
	border:5px solid green;
	padding:2px;
}
#zoom img:hover{
	opacity:1.25;
	-webkit-transition:opacity;
	-webkit-transform: scale(1);
	-webkit-transition-timing-function: ease-out;
	-webkit-transition-duration: 1000ms;
	border:5px groove red;
} -->
img:hover{width:180;
            height:180;	 
	   }
h1 {font-family:"Times New Roman";
    color:blue;
    text-transform:uppercase;
   }
h3 {font-family:Arial;
    color:green;
   }

</style>
</head>
<body vlink=blue bgcolor="FFFFE0">
<?php session_start(); ?>
<center>
<h1><?php echo $_SESSION['title']; ?></h1>
<h3>Move the mouse over the image below</h3>
<marquee width=300 height=200 scrolldelay=200 onmouseover="this.stop()" onmouseout="this.start()">
<?php
	$imgpath="./photos/Friends/";
	$dirPath = dir($imgpath);
	$imgArray = array();
	while (($file = $dirPath->read()) !== false)
	{
  	if(substr($file,-3)== "gif" || substr($file,-3)=="jpg" || substr($file,-4)=="jpeg" || substr($file,-3)=="png")
  	{
      		$imgArray[]=trim($file);
     
  	}
	}
	$dirPath->close();
	sort($imgArray);
	$c = count($imgArray);
	?> 
	<div id="zoom">
	<?php
       	for($i=0; $i<$c; $i++)
	{ 
	       
	  echo '<img src="'.$imgpath.$imgArray[$i].'" width=140 height=140>'; 
	         
	 
	 }	
		 	
?>	
	</div></marquee><br>
<a href="rating.php">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" target=f2>Home</a>
</center>
</body>
</html>	
