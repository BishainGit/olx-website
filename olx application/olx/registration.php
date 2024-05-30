
<!DOCTYPE html>
<html>
<head>
    <title>Welcome To MITTHULAL OLX Demonstration</title>
</head>
<body>


<?php
 if(isset($_POST["userid"]) || isset($_POST["password"])||isset($_POST["name"]) ||isset($_POST["mobileno"]) ){
  $userid = $_POST['userid'] ;
  $passwd = $_POST['password'];
  $name = $_POST['name'];
  $mobileno = $_POST['mobileno'];
  $occupation = $_POST['occupation'];
   
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql = "INSERT INTO user (userid,passward,name,mobileno,occupation)
           VALUES ('$userid','$passwd','$name','$mobileno','$occupation')";
		   
	
	  if($conn->query($sql) === true){
		  
		  echo "you are registered successfully";
	  }else{
		  echo "Error:" .$sql. "<br>" .$conn->error ;
	  }
		   
    		   
   $conn->close();
 }
else{
    header("location:registration.html");
}	

?>
<p><a href="login.html"> login</a></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html> 