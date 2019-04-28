<?php
  session_start();
?>

<!DOCTYPE html>
<html>
 <head> <title> OLX MITTHULAL </title></head>
 <body> 
    <?php $_SESSION["category"] = "book";	?>
      <h style="color:Tomato;"> OLX PHONE </h>
	 <form action="putbook2.php" method = "post">
	<br>
    1.book name : <input type = "text" name = "bookname" title = "enter book name"maxlength="50"><br><br>
	2.expected price :<input type="float" name = "price" title = "enter expected price"><br><br>
      
	
	3.authorname :: <br>
	      auth1.<input type="text" name="auth1" title="enter authorname or put 'null'" size="50"><br><br>
	      auth2.<input type="text" name="auth2" title="enter authorname or put 'null'" size="50"><br><br>
		  auth3.<input type="text" name="auth3" title="enter authorname or put 'null'" size="50"><br><br>
	
    5.status : <br>
	       <input type="radio" name="status" value="good"  > good<br><br>
           <input type="radio" name="status" value="bad"> average<br><br>
	       <input type="radio" name="status" value="bad"> bad<br><br>
		   
	6.your advertisement starts: <input type = "date" name = "starts" title = "enter starting date"><br><br>
	7.your adertisement will ends :<input type="date" name = "ends" title = "enter ending date"><br><br>
    	<input type="submit" value="Submit"> <input type="reset">

	</form>
	
 </body>
 
</html>