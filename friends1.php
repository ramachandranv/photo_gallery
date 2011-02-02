<html>
<head>
<style type=text/css>
.img{
	float:left;
	-webkit-transition-duration: 0.5s;
	}
.img img{
	padding:25px;
	border:2px solid magenta;
}
.img:hover{
	-webkit-transform:scale(1.25);
	-webkit-box-shadow:0px 0px 20px #ccc;
}
.img .mask{
	width: 205px;
	background-color: rgb(0, 0, 0);
	position: absolute;
	height: 205px;
	opacity:0.6;
	cursor:pointer;
	-webkit-transition-duration: 0.5s;
}
#img-1:hover .mask{
	height:0%;
}
</style>
</head>
<body vlink=blue bgcolor="FFFFE0">

<center>
<h1>Family</h1>

<?php
	$imgpath="./photos/Family/";
	$dirPath = dir($imgpath);
	$imgArray = array();
	while (($file = $dirPath->read()) !== false)
	{
  	if ((substr($file, -3)=="gif") || (substr($file, -3)=="jpg") || (substr($file, -3)=="png") || (substr($file, -4)=="jpeg"))
  	{
      		$imgArray[]=trim($file);
     
  	}
	}
	$dirPath->close();
	sort($imgArray);
	$c = count($imgArray);
	$img; 
	
 	for($i=0; $i<$c; $i++)
	{ ?>
	<div id="img-1" class="img">
	<div class="mask"></div>
	<?php	       
	  echo '<img src="'.$imgpath.$imgArray[$i].'" width=150 height=150>'; ?> 
	         
	</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
		
<?php	 } ?>	

<a href="rating">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" target=f2>Home</a>
</center>
</body>
</html>
