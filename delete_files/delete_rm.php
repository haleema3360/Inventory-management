<?php 
 include 'dbconnect.php';
 if(isset($_GET['deleteid'])){
    $sku_id=$_GET['deleteid'];
    $sql="DELETE FROM `raw_materials` WHERE sku_id='$sku_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            header("location:admin_rawmaterials.php");
            echo"Delete successful";
            exit;
            
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>

