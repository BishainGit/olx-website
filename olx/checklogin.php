
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Start the session
if( isset($_POST["userid"]) || isset($_POST["password"])){
  $userid = $_POST['userid'] ;
  $password = $_POST['password'];


$conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql = "select * from user where userid = '$userid' and passward = '$password'";
		   
	$result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
	if($row){
	     
		 
		
		
        $_SESSION["userid"]= $userid;
        header("location: admin.php");
	}else{
	
		session_destroy();
		header("location: initiate.php");
		
	}
}else
{
	  session_destroy();
		header("location: initiate.php");
}
   
?>

   
</body>
</html> 
