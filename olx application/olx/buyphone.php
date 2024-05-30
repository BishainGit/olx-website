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
   
		   
	$sql = "select phoneid,mobilename,expectedprice,manufacturer,purchasedate from phone
            GROUP by phoneid DESC ";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "phoneid:- " . $row["phoneid"]. ",--------Mobilename:-" . $row["mobilename"]. ",-------Expectedprice:- " . $row["expectedprice"]. ",-------Company:-".$row["manufacturer"].",-------PurchaseDate:-".$row["purchasedate"]. "<br><br><br>";
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
<form action="buyphone2.php" method = "post">
	<br>
	
    **.phoneid: <input type = "int" name = "phoneid" title = "enter phone id"><br><br>
	
        <input type="submit" value="Submit"> <input type="reset">

	</form>
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 