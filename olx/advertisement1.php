<?php
 session_start();
?>

<!DOCTYPE html>
<html>
 <head> <title> OLX MITTHULAL </title></head>
 <body> 
    <?php $_SESSION["category"] = "phone" ?>
      <h style="color:Tomato;"> OLX advertisement </h>
    <form action="advertisement2.php" method = "post">
	<br>
	
    1.starts: <input type = "date" name = "starts" title = "enter starting date"maxlength="20"><br><br>
	2.ends :<input type="date" name = "ends" title = "enter ending date"><br><br>
   
  
	    <input type="submit" value="Submit"> <input type="reset">

	</form>
	
 </body>
 
</html>
