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
  $message = $_POST["message"];
  $price = $_POST["price"];
  $bid = $_POST['buyerid'] ;
  $sid = $_SESSION["sid"];
  $productid = $_SESSION["productid"];
  
  $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
      
	  

        	
$sql4 = "insert into chat(sellerid,buyerid,productid,chat,offered_price)
values('$sid','$bid','$productid','$message','$price')"; 
			   
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
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 