
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
	 
	
 	for($i=0; $i<$c; $i++)
	{ 
	       
	  echo '<img src="'.$imgpath.$imgArray[$i].'" width=150 height=150>'.",";         
		
	}
	/*for($i=0; $i<$c; $i++)
	{ 
	       
	  echo $imgArray[$i].",";
	}*/
		
	
         
?>	


