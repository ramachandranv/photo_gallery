<html>
<head>
<style>
h1{color:green;
  }
a{text-decoration:none;
  color:grey;
 }
</style>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript">
var i=1; 
function changeimg()
{
 $(document).ready(function(){
  c=document.getElementById('count').innerHTML; 
   if(i>=c){
     i=0;
   }
   else{ 
     $("#mydiv").load("gall4.php",{index:i},function(){
        
    });
     i++;
   } 
 });
}
function startimgchange()
{
  setInterval("changeimg()",5000);
}
window.onload=startimgchange();
</script>

</head>
<body id=b1 bgcolor="FFFFE0">
<center>
<?php session_start(); ?>
<h1><?php echo $_SESSION['title']; ?></h1>
<h3>Gallery displaying random images</h3>
<?php
	$imgpath="./photos/College/";
	$dirPath = dir($imgpath);
        $_SESSION['img']=$imgpath;

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
        $_SESSION['imagearr']=$imgArray;
?>

<div id="mydiv">
<?php echo '<img src="'.$imgpath.$imgArray[0].'" width=180 height=150 alt=image><br><br>' ;
      echo $imgArray[0];
?>
</div>
<br><br>
<p id="count" style="display:none"><?php echo $c; ?></p>

<a href="rating.php" style="color:blue">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" style="color:blue" target=f2>Home</a>
</center>
</body>
</html>
