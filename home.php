<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="colorchange.js"></script> 
</head>
<body bgcolor="FFFFE0">
<center>
<div id="load">
<h3>DIRECTORY INTERFACE</h3>
<form name="f1" method="post" action="directory.php"><br>
Select the Category:
 <select name=path>
  <option>--select--</option>
<?php
 $dirpath=dir('./photos');
 while(($dir=$dirpath->read())!==false)
 {
   $dirarray[]=trim($dir);
 } 
 $dirpath->close();
 sort($dirarray);
 $c=count($dirarray);
 for($i=0;$i<$c;$i++)
 {
  echo "<option value=\"" . $dirarray[$i] . "\">" . $dirarray[$i] . "\n";
 }
?>
 </select><br><br>
 <input type="submit" value="View Gallery"><br><br>
</form>
</div>
</center>
</body>
</html>

