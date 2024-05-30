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
  
     
	 
     $productid= $_SESSION["productid"] ;
     $sid = $_SESSION["sid"]  ;
     $bid= $_SESSION["bid"]  ;
	 
     
	echo "YOU HAVE PAID FOR THIS PRODUCT ";
	
	 
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   } 
   
     $sql5 ="select sellid from sells where productid='$productid' and sellerid = '$sid'";
	 $id = $conn->query($sql5);
	 $row5 = mysqli_fetch_array($id,MYSQLI_NUM);
      
	   $sql6 ="select buyid from buys where productid='$productid' and buyerid = '$bid'";
	 $id = $conn->query($sql6);
	 $row6 = mysqli_fetch_array($id,MYSQLI_NUM);
   
     
	 $sql7 ="select name from user where id = '$sid'";
	 $id = $conn->query($sql7);
	 $row7 = mysqli_fetch_array($id,MYSQLI_NUM);
	 
	  $sql8 ="select name from user where id = '$bid'";
	 $id = $conn->query($sql8);
	 $row8 = mysqli_fetch_array($id,MYSQLI_NUM);
   
		
	    $sql4 = "insert into record(sellid,buyid,productid,sellername,buyername)
	           values('$row5[0]','$row6[0]','$productid','$row7[0]','$row8[0]')"; 
			   
	   if($conn->query($sql4) === true){
		  
		  echo " ";
	  }else{
		  echo "Error:" .$sql4. "<br>" .$conn->error ;
	  }			
       
	   $sql5 = "delete from phone where productid = '$productid' "; 
			   
	   if($conn->query($sql5) === true){
		  
		  echo " ";
	  }
	   
	    $sql6 = "delete  from laptops where productid = '$productid' "; 
			   
	   if($conn->query($sql6) === true){
		  
		  echo " ";
	  }
	   
	    $sql7= "delete  from authorname where bookid in (select bookid form books where productid = '$productid' )"; 
			   
	   if($conn->query($sql7) === true){
		  
		  echo " ";
	  }
	  
	   $sql8 = "delete from books where productid = '$productid' "; 
			   
	   if($conn->query($sql8) === true){
		  
		  echo " ";
	  }
	  //suplier who deliver the product
      //transaction
      //all deletion
        	  
		   
	   } 
  
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
<p><a href="chat.php">CHAT with honour</a></p>

<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 