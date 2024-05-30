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
 
  
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   
		 echo "LAPTOPS ARE HERE:-<br>";
	$sql = "select laptopid,name,expected_price,manufacturer,purchase_date,status from laptops
            GROUP by laptopid DESC ";
    $result = $conn->query($sql);

	
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "laptopid:- " . $row["laptopid"]. ",--------Laptopname:-" . $row["name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchase_date"].",----Status".$row["status"]."<br><br><br>";
    }
	
} else {
    echo "0 results";
}


	
  }
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
<p>please fillup the phoneid of phone which you want to buy</p>
<form action="buylaptop2.php" method = "post">
	<br>
	
    **.laptopid: <input type = "int" name = "laptopid" title = "enter laptop id"><br><br>
	
        <input type="submit" value="Submit"> <input type="reset">

	</form>
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 