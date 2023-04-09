<?php 
 include 'dbconnect.php';
 if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $sql="DELETE FROM `porders` WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            header("location:admin_porders.php");
            echo"Delete successful"; 
            exit; 
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>

