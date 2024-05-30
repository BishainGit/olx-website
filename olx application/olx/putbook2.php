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
	  
	  
  $category = $_SESSION["category"]; 
  $userid      =  $_SESSION["userid"];
  
  $bookname = $_POST['bookname'] ;
  $price = $_POST['price'];
   $auth1 = $_POST['auth1'];
   $auth2 = $_POST['auth2'];
    $auth3 = $_POST['auth3'];
  
   $status = $_POST['status'];
  $starts = $_POST['starts'];
  $ends = $_POST['ends'];
  
  
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql1 = "INSERT INTO product (category,price)
           VALUES ('$category','$price')";
		   
	
	  if($conn->query($sql1) === true){
		  
		  echo " ";
	  }else{
		  echo "Error:" .$sql1. "<br>" .$conn->error ;
	  }
		   
	  $sql7 = "select id from user where userid = '$userid' ";
	   $id = $conn->query($sql7);
	   $row3=mysqli_fetch_array($id,MYSQLI_NUM);
	  
	  $sql2 = "select MAX(productid) from product ";
	   $productid = $conn->query($sql2);
	   $row=mysqli_fetch_array($productid,MYSQLI_NUM);      
			
			
	 $sql4 = "insert into sells(sellerid,productid)
	           values('$row3[0]','$row[0]')"; 
			   
	   if($conn->query($sql4) === true){
		  
		  echo " ";
	  }else{
		  echo "Error:" .$sql4. "<br>" .$conn->error ;
	  }						   
		   
		   
		   
		   
     
	    $sql5 = "select MAX(sellid) from sells ";
	   $sellid = $conn->query($sql5);
	   $row1=mysqli_fetch_array($sellid,MYSQLI_NUM);
	   
       $sql3 = "INSERT INTO books (book_name,expected_price,status,starts,ends,soldornot,sellid,productid)
           VALUES ('$bookname','$price','$status','$starts','$ends','notsold','$row1[0]','$row[0]')";
		   
	
	  if($conn->query($sql3) === true){
		  
		  echo "your phone $bookname is added to olx69 successfully";
	  }else{
		  echo "Error:" .$sql3. "<br>" .$conn->error ;
	  }				
	  
	  
	   $sql9 = "select MAX(bookid) from books ";
	   $bookid = $conn->query($sql9);
	   $row=mysqli_fetch_array($bookid,MYSQLI_NUM); 
		  
  } 
  
  else{
  
      echo "Sorry,you have to login first";
  }
	  
?>
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 
 