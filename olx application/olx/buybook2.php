<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>  OLX books </title>
</head>
<body>

<?php
  if(null !== $_SESSION["userid"] ){ 
 
   $userid  =  $_SESSION["userid"];
   $bookid = $_POST['bookid'] ;
   
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   
		echo "AUTHORNAMES FOR THIS BOOK ARE:-<br>";
		
	$sql = "select author_name from authorname where bookid = '$bookid'";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
	$i =1;
    while($row = $result->fetch_assoc()) {
		
        echo "AUTHORNAME$i:- " . $row["author_name"]. "<br>";
        $i++;
	}
	
 } else {
    echo "0 results <br><br><br>";
 }
 
 
    $sql2 = "select id from user where userid = '$userid' ";
	   $buyerid = $conn->query($sql2);
	   $row=mysqli_fetch_array($buyerid,MYSQLI_NUM);  
	   
	     $sql5 = "select productid from phone where phoneid = '$bookid' ";
	   $productid = $conn->query($sql5);
	   $row5=mysqli_fetch_array($productid,MYSQLI_NUM);  
		
	    $sql4 = "insert into buys(buyerid,productid)
	           values('$row[0]','$row5[0]')"; 
			   
	   if($conn->query($sql4) === true){
		  
		  echo " ";
	  }else{
		  echo "Error:" .$sql4. "<br>" .$conn->error ;
	  }			
       
		   
	  $sql7 = "select sellerid from sells a inner join phone b on a.sellid = b.sellid where b.phoneid = '$bookid' ";
	   $id = $conn->query($sql7);
	   $row3=mysqli_fetch_array($id,MYSQLI_NUM);
	  
	   
		
        $_SESSION["productid"] = $row5[0] ;
        $_SESSION["sid"] = $row3[0];
        $_SESSION["bid"]  =	$row[0];	
			

			
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
 
 
	
