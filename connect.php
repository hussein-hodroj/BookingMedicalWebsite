<?php
$conn = mysqli_connect('localhost','root','','bookmycare');
if(!$conn){
    echo 'Error:' .mysqli_connect_eroor();
}
?>