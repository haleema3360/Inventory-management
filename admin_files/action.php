<?php
    include 'dbconnect.php';
     
    if(isset($_POST['product_id'])){
        
            
        foreach ($_POST['product_id'] as $key => $value) {
            $product_id= $_POST["product_id"][$key];
        $raw_material= $_POST["raw_material"][$key];
        $rm_quantity= $_POST["rm_quantity"][$key];
        
        $rm1= mysqli_real_escape_string($conn, $raw_material);
            
          $save="INSERT INTO product_rm (product_id, raw_material,rm_quantity) 
          VALUES ('$value', '$rm1', '$rm_quantity')";
          
          $query=mysqli_query($conn,$save);
          if($query){
            //header("location: admin_products.php");
            echo"Data inserted";
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
          }
    }
 
?>