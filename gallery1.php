<html>
<head>
<style>
h1{color:green;
  }


a{text-decoration:none;
  color:grey;
 }
</style>
</head>

<body bgcolor="FFFFE0">
<script type="text/javascript">
   function setImage(img) {
      xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("mydiv").innerHTML = xmlhttp.responseText; 
	    } 
      }

      try {
          xmlhttp.open("GET", "thumbimage2.php", true);
	  xmlhttp.send(null);
      } catch (e) {
           alert(e);
      }

   }
i=0;
function next(c)
{
 i++;
 if(i>=c){
   alert("This is the last image");
   i--;
 }
 else{
   setImage(i);
 }
}
function previous()
{
 i--;
 if(i<0){
   alert("This is the first image");
 }
 else{
   setImage(i);
 }
}
</script>
<center>
<?php session_start(); ?>
<h1><?php echo $_SESSION['title']; ?></h1>

<?php
	$imgpath="./photos/Family/";
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

<div id="mydiv">

<?php echo '<img src="'.  $imgpath.$imgArray[0].'" width=150 height=130 alt=image>'; 
  echo "<br><br>";
  echo $imgArray[0];
?>

</div><br>
<input type=button value=Previous onclick="javascript:previous()">
<input type=button value=Next onclick="javascript:next(<?php echo $c; ?>)">
<br><br>
<a href="rating.php" style="color:blue">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" style="color:blue" target=f2>Home</a>
</center>

</body>
</html>
