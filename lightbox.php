<html>
<head>
<style>
.black_overlay{
		display: none;
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 120%;
		background-color: black;
		z-index:1001;
		-moz-opacity: 0.8;
		opacity:.80;
		filter: alpha(opacity=80);
                overflow:auto;
              }
.white_content {
		display: none;
		position: absolute;
		top: 26%;
		left: 34%;
		right: 35%;
		bottom: 25%;
		width: 24%;
		height: 55%;
		padding: 16px;
		border: 16px groove red;
		background-color: white;
		forefround-color: gray;
		z-index:1002;
		overflow: auto;
               }
h1{color:green;
  }
table{border-collapse:collapse;
     }
img{border:2px solid green;
   }
a{text-decoration:none;
  color:grey;
 }
</style>
</head>

<body bgcolor="FFFFE0">
<script type="text/javascript">
   function setImage(imageName) {
      xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById('fade').style.display='block'; 
	      document.getElementById('myDiv').style.display='block';  	
	      document.getElementById("myDiv").innerHTML = xmlhttp.responseText; 
	    } 
      }

      try {
          xmlhttp.open("GET", "thumbimage1.php?image=" + imageName, true);
	  xmlhttp.send(null);
      } catch (e) {
           alert(e);
      }

   }

</script>
<center>
<?php session_start(); ?>
<h1><?php echo $_SESSION['title']; ?></h1>
<marquee width=250 onmouseover="this.stop()" onmouseout="this.start()" scrollamount=5>
<table border="1">
<?php
	$imgpath="./photos/Tux/";
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
	for($i=0; $i<$c; $i++)
	{ 
  	  ?>

  <tc>
    <td onclick="javascript:setImage('<?php echo $imgArray[$i]; ?>')"><?php echo '<img src="'.$imgpath.$imgArray[$i].'" width=60 height=50 alt=image>'; ?></td>
  </tc>
	<?php } ?>
</table>
</marquee>

<br><br>
<div id="myDiv" class="white_content">&nbsp;<br><br>
</div>
<div id="fade" class="black_overlay"></div><br><br>
<a href="rating.php" style="color:blue">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" style="color:blue" target=f2>Home</a>
</center>

</body>
</html>
