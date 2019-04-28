<?php
    
   session_start()
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome To MITTHULAL OLX Demonstration</title>
</head>
<body>


<?php

     if(null !== $_SESSION["userid"] ){
		 
  $var = $_SESSION["userid"];
  $userid = $_SESSION["userid"];
      
  
  $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   
    echo "LATEST UPLOADED PHONES<br>";
    $sql = "select phoneid,mobilename,expectedprice,manufacturer,purchasedate from phone
            GROUP by phoneid DESC LIMIT 2";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "phoneid:- " . $row["phoneid"]. ",--------Mobilename:-" . $row["mobilename"]. ",-------Expectedprice:- " . $row["expectedprice"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchasedate"]. "<br><br><br>";
    }
	
 } else {
    echo "0 results <br><br>";
 }
 
  echo "LATEST UPLOADED LAPTOPS<br>";
    $sql = "select laptopid,name,expected_price,manufacturer,purchase_date,status from laptops
            GROUP by laptopid DESC LIMIT 2";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "laptopid:- " . $row["laptopid"]. ",--------Laptopname:-" . $row["name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchase_date"].",----Status".$row["status"]."<br><br><br>";
    }
	
 } else {
    echo "0 results <br><br>";
 }
 
  echo "LATEST UPLOADED BOOKS<br>";
    $sql = "select bookid,book_name,expected_price,status from books
            GROUP by bookid DESC LIMIT 2";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "Bookid:- " . $row["bookid"]. ",--------Bookname:-" . $row["book_name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",----Status:-".$row["status"]."<br><br><br>";
    }
	
 } else {
    echo "0 results <br><br><br>";
 }
 
 
 
  


    $sql2 = "select name from user where userid = '$var' ";
	   $productid = $conn->query($sql2);
	  $row1=mysqli_fetch_array($productid,MYSQLI_NUM);
	  
	  $_SESSION["name"]= $row1[0];
	  $_SESSION["userid"] =  $var;
	  
	 
	
	
	
 } 
  else{
	  
	  echo "you have to login first";
	  $row[0] = "its awesome";
  }
 
	  
?>

<h1>Welcome To OLX :<?php echo  $row1[0] /*Echo the username */ ?></h1>

<p><a href="putphone1.php">sell phones</a></p>

<p><a href="putlaptop1.php">sell laptops</a></p>

<p><a href="putbook1.php">sell books</a></p>

<p><a href="buyphone.php"> buy phones </a></p>

<p><a href="buylaptop.php">buy laptops </a></p>

<p><a href="buybook.php">buy books </a></p>

<p><a href="myupload.php">My Uploads </a></p>

<p><a href="logout.php">Logout</a></p>

</body>
</html> 

