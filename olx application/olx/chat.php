<?php
  session_start();
?>

<!DOCTYPE html>
<html>
 <head> <title> OLX MITTHULAL </title></head>
 <body> 
    <?php $_SESSION["category"] = "phone";	?>
      <h style="color:Tomato;"> OLX PHONE </h>
    <form action="chat2.php" method = "post">
	<br>
	
    1.write your message : <input type = "text" name = "message" title = "write your message"maxlength = "200"><br><br>
	2.make an offer :<input type="float" name = "price" title = "enter  price"><br><br>
    
    
	    <input type="submit" value="Submit"> <input type="reset">

	</form>
	
 </body>
 
</html>