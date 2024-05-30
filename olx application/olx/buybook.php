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
   
		  echo "BOOKS ARE HERE:-<br>";
	$sql = "select bookid,book_name,expected_price,status from books
            GROUP by bookid DESC ";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "Bookid:- " . $row["bookid"]. ",--------Bookname:-" . $row["book_name"]. ",-------Expectedprice:- " . $row["expected_price"]. ",----Status:-".$row["status"]."<br><br><br>";
    }
	
 } else {
    echo "0 results <br><br><br>";
 }
	
  }
  else{
  
      echo "Sorry,you have to login first";
  }
		  
	
  

?>
<p>please fillup the laptopid to see authornames </p>
<form action="buybook2.php" method = "post">
	<br>
	
    **.bookid: <input type = "int" name = "bookid" title = "enter book id"><br><br>
	
        <input type="submit" value="Submit"> <input type="reset">

	</form>
<p><a href="admin.php">admin page</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 