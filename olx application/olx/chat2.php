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
  
     $message = $_POST["message"];
	 $price = $_POST["price"];
	 
     $productid= $_SESSION["productid"] ;
     $sid = $_SESSION["sid"]  ;
     $bid= $_SESSION["bid"]  ;
 
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   } 
		$xm = "buyer";
	    $sql4 = "insert into chat(sellerid,buyerid,productid,chat,offered_price,who)
	           values('$sid','$bid','$productid','$message','$price','$xm')"; 
			   
	   if($conn->query($sql4) === true){
		  
		  echo " ";
	  }else{
		  echo "Error:" .$sql4. "<br>" .$conn->error ;
	  }			
       
		   
	   } 
  
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
<p><a href="chat.php">CHAT with honour</a></p>

<p><a href="transaction.php">Payment</a></p>

<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 