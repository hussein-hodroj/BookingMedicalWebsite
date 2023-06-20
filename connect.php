<?php  
	
   
    $conn=new mysqli('localhost','root','','bookmycare');
    if(!$conn){
        die(mysqli_error($conn));
        
    }

?>