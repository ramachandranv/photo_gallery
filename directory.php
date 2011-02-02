<?php
 session_start();
 $path=$_POST['path'];
  $_SESSION['title']=$path;
  //echo "$path";
 if($path=="College")
   header("location:gallery4.php");
 else if($path=="Family")
   header("location:family.php");
 else if($path=="Friends")
   header("location:friends.php");
 else if($path=="Office")
   header("location:office.php");
 else if($path=="Tour")
   header("location:tour.php");
 else if($path=="Tux")
   header("location:lightbox.php");
 else
   echo "<center><h1>Photos Not Available</h1></center>";
?>
