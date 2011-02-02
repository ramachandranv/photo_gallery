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
	-webkit-transform:scale(1);
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
<script type="text/javascript">
var images= new Array();
function getimages()
{
  xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  string = xmlhttp.responseText; 
		  images = string.split(',');
		  display();
	    } 
      }

      try {
          xmlhttp.open("GET", "family1.php", true);
	  xmlhttp.send(null);
      } catch (e) {
           alert(e);
      }
}

function display()
{
  
     document.getElementById('img-1').innerHTML = images;
  
}

window.onload=getimages();
</script>
</head>
<body vlink="blue" bgcolor="FFFFE0">

<center>
<h1>Family</h1>
<div id="img-1" class="img">
 <div class="mask" id="mydiv"></div>
</div>

<a href="rating">Rate this Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php" target=f2>Home</a>
</center>
</body>
</html>
