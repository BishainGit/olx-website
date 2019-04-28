<?php
 session_start();
?>


<?php
  
  
  $starts = $_POST["starts"]; 
  $ends = $_POST['ends'] ;
  
   $conn  = new mysqli("localhost","root","","kaka");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql1 = "INSERT INTO advertisement(sellid,productid,starts,ends,status)
           VALUES ('$_SESSION["sellid"]','$_SESSION["productid"]','$starts','$ends','notsold')";
		   
	
	  if($conn->query($sql1) === true){
		  
		  echo "new record created successfully";
	  }else{
		  echo "Error:" .$sql1. "<br>" .$conn->error ;
	  }
		   
     
   $conn->close();

?>