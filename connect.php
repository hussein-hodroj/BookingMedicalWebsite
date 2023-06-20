<?php  
	
    // $clinicId=$_POST['clinicId'];
    // $patId	=$_POST['patId'];
    // $booking=$_POST['booking'];	
    // $satuts=$_POST['satuts'];
    $conn=new mysqli('localhost','root','','bookmycare');
    if(!$conn){
        die(mysqli_error($conn));
        
    }

?>