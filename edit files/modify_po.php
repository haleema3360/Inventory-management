<?php
include 'dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
        $product_id= $_POST["product_id"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["quantity"];
        $unit=$_POST["unit"];
        $status=$_POST["status"];
        $ordered_date=$_POST["ordered_date"];
          

        $sql = "UPDATE `porders` SET product_id='$product_id', product_name='$product_name',quantity='$quantity',unit='$unit',status='$status',ordered_date='$ordered_date' WHERE product_id='$product_id'";
        if($status=='WIP Inventory'){
            $sql2= mysqli_query($conn,"INSERT INTO `wip` (product_id,component,time_deposited) VALUES('$product_id','$product_name',CONVERT_TZ(NOW(),'+00:00','+05:30'))");
        }
        
        if($status=='Finished Goods Inventory'){
            $sql3=mysqli_query($conn,"INSERT INTO `finished_goods` (product_id,product) VALUES ('$product_id','$product_name')");
        }
          
        $result = mysqli_query($conn, $sql);
          if($result){
            header("location:admin_porders.php");
            echo"Data inserted";
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>