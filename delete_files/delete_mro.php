<?php 
 include 'dbconnect.php';
 if(isset($_GET['deleteid'])){
    $part_no=$_GET['deleteid'];
    $sql="DELETE FROM `mro` WHERE part_no='$part_no'";
    $result = mysqli_query($conn, $sql);
    if($result){
            header("location:admin_mro.php");
            echo"Delete successful";
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>