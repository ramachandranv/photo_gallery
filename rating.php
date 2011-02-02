<html>
<head>
<style type="text/css">
h1{font-family:Arial;
   color:blue;
  }
a{text-decoration:none;
 }
</style>
</head>
<body vlink=blue bgcolor="FFFFE0">
<?php session_start(); ?>
<center>
<h1>RATING AND FEEDBACK</h1>
<form name="rate" method="post" action="ratesave.php">
Your Name:&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=name>(Optional)<br><br>
Email ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=email><br><br>
Gallery Name:&nbsp;&nbsp;
<input type=text name=gname value="<?php echo $_SESSION['title']; ?>"><br><br>
Rate the gallery:
<input type=text name=rate>(Out of 5)<br><br>
Feedback:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="textarea" name=fdbk><br><br>
<input type=submit value=Submit>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.php"><font size=5>Home</font></a><br>
</center>
</body>
</html>
