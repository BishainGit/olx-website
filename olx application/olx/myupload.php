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
 
    $userid =  $_SESSION['userid'];
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   
     echo "MY UPLOADED PRODUCTS:-<br>";
	 $sql2 = "select id from user where userid = '$userid' ";
	   $id = $conn->query($sql2);
	   $row2=mysqli_fetch_array($id,MYSQLI_NUM);  
   
	echo "my phone is :<br>";  
	$sql = "select productid,mobilename,expectedprice,manufacturer,purchasedate from phone
            where productid in(select productid from sells where sellerid = '$row2[0]') ";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "productid:- " . $row["productid"]. ",--------Mobilename:-" . $row["mobilename"]. ",-------Expectedprice:- " . $row["expectedprice"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchasedate"]. "<br><br><br>";
    }
	
} else {
    echo "0 results<br>";
}

echo "my laptop is :<br>";  
	$sql = "select productid,name,expected_price,manufacturer,purchase_date,status from laptops
            where productid in(select productid from sells where sellerid = '$row2[0]') ";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "productid:- " . $row["productid"]. ",--------Laptopname:-" . $row["name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchase_date"].",----Status".$row["status"]."<br><br><br>";
    }
	
} else {
    echo "0 results<br>";
}

echo "my books are :<br>";
    $sql = "select productid,book_name,expected_price,status from books
            where productid in(select productid from sells where sellerid = '$row2[0]') ";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "productid:- " . $row["productid"]. ",--------Bookname:-" . $row["book_name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",----Status:-".$row["status"]."<br><br><br>";
       $var1 = $row["productid"];
	   $sql2 = "select sellerid, buyerid,productid, chat, offered_price, who from chat
	            where productid = $var1";
	    
		$result2 = $conn->query($sql2);
		if($result2->num_rows > 0){
			    while($row2 = $result2->fetch_assoc()){
					echo "sellerid:-".$row2["sellerid"].",------buyerid:-".$row2["buyerid"].",------productid:-".$row2["productid"].",------chat:-".$row2["chat"].",-----offered_price:-".$row2["offered_price"].",-----Whose Message:-".$row2["who"]."<br><br>";
				}
		}

   }
	
 } else {
    echo "0 results <br><br><br>";
 }
     
	
  }
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
<p>please fillup the productid of your product on which you want to know reactions/messages of buyers</p>
<form action="myupload2.php" method = "post">
	<br>
	
    **.productid: <input type = "int" name = "productid" title = "enter product id"><br><br>
	
        <input type="submit" value="Submit"> <input type="reset">

	</form>
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 