<?php
include 'dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $raw_material=$_POST["raw_material"];
        $rm_quantity=$_POST["rm_quantity"];
          

        $sql = "UPDATE product_rm SET product_id='$product_id', raw_material='$raw_material',rm_quantity='$rm_quantity' WHERE product_id='$product_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
            header("location:admin_products.php");
            echo"Data inserted";
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>