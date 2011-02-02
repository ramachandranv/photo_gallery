<?php
        session_start();
	$i=$_REQUEST['index'];
 
        $imgpath=$_SESSION['img'];
        
	$imgArray=$_SESSION['imagearr'];

        echo '<img src="'.$imgpath.$imgArray[$i].'" width=180 height=150 alt=image><br><br>';
        echo $imgArray[$i];
 
?>





