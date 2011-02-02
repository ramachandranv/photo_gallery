<?php 
        $j=$_REQUEST['image'];
      
	$imgpath="./photos/Office/";
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

?>
<img src="/photos/Office/<?= $imgArray[$j]; ?>" width=150 height=130 /><br><br>

<?php echo $imgArray[$j]; ?>

