<?php
  session_start();
?>

<!DOCTYPE html>
<html>
 <head> <title> OLX MITTHULAL </title></head>
 <body> 
    <?php $_SESSION["category"] = "phone";	?>
      <h style="color:Tomato;"> OLX PHONE </h>
    <form action="putphone2.php" method = "post">
	<br>
	
    1.mobile name : <input type = "text" name = "moname" title = "enter mobile name"maxlength="20"><br><br>
	2.expected price :<input type="float" name = "price" title = "enter expected price"><br><br>
    3.manufacturer :<input type="text" name="manufacture" title="enter manufacturer" size="20"><br><br>
	4.purchase date :<input type="date" name="date" title="enter purchase date" ><br><br>
	5.your advertisement starts: <input type = "date" name = "starts" title = "enter starting date"><br><br>
	6.your adertisement will ends :<input type="date" name = "ends" title = "enter ending date"><br><br>
    
	    <input type="submit" value="Submit"> <input type="reset">

	</form>
	
 </body>
 
</html>