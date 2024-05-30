 <?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>  OLX phones </title>
</head>
<body>

<?php
  if(null !== $_SESSION["userid"] ){ 
  
  $userid  =  $_SESSION["userid"];
  
  $productid = $_POST['productid'] ;
  
 
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
      	
       
		   
	  $sql7 = "select buyerid,chat,offered_price from chat where productid = '$productid' ";
	  $result = $conn->query($sql7);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "Buyerid:- " . $row["buyerid"]. ",--------CHAT:-" . $row["chat"]. ",-------Offeredprice:- " . $row["offered_price"]. "<br><br><br>";
    }
	
} else {
    echo "0 results";
}
		
		 $sql2 = "select id from user where userid = '$userid' ";
	   $buyerid = $conn->query($sql2);
	   $row=mysqli_fetch_array($buyerid,MYSQLI_NUM); 
	   
        $_SESSION["productid"] = $productid ;
        $_SESSION["sid"] = $row[0];
        	
			

			
	   } 
  
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
   <p>put buyerid whom you want to say something</p>
<form action="myupload3.php" method = "post">
	<br>
	
    ->buyerid: <input type = "int" name = "buyerid" title = "enter buyer id"><br><br>
	->message/i am okay to sell :<br>
	           <input type = "text" name = "message" title = "enter message"><br><br>
	->if you want to update your products price put bellow new price or put same price : <br>
	        price :<input type="float" name = "price" title = "enter  price"><br><br>
        <input type="submit" value="Submit"> <input type="reset">

	</form>



<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 