<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $gname=$_POST['gname'];
  $rate=$_POST['rate'];
  $fdback=$_POST['fdbk'];

  $dbconnect=mysql_connect("localhost","root","mysql") or die("Unable to connect to database");
  $database=mysql_select_db("photogallery") or die("Unable to select db");

  $query="insert into rating(rid,name,email,gname,rate,fdback) values('','$name','$email','$gname','$rate','$fdback');";

  mysql_query($query) or die("Unable to execute query");

  echo "Thanks for your Feedback";
?>


	
