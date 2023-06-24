<?php 
        include 'connect.php';
            $id=$_POST['txtDel'];
            $sql="DELETE FROM governorate WHERE id=$id";
            $result=mysqli_query($conn,$sql);
            if($result){
                header('location:dashboard -gov.php');
            }
            else{
                die(mysqli_error($conn));
            }





?>