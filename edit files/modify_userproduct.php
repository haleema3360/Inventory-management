<?php
include 'dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["quantity"];
        $unit=$_POST["unit"];
        $workbench_id=$_POST["workbench_id"];
          

        $sql = "UPDATE products SET product_id='$product_id', product_name='$product_name',quantity='$quantity',unit='$unit',workbench_id='$workbench_id' WHERE product_id='$product_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
            header("location:user_products.php");
            echo"Data inserted";
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>