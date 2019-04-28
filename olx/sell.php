<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<body>

<h1>what do you want to sell :<?php echo  $_SESSION["name"]  ?></h1>



<p><a href="putphone1.php">put phones</a></p>

<p><a href="putlaptop.html">put laptops</a></p>

<p><a href="putbook.html">put books</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 