<?php
include 'dbconnect.php';
$product_id=$_GET['editid']; 

if(isset($_POST['update'])){
       
        $status=$_POST["status"];
          

        $sql = "UPDATE `porders` SET status='$status' WHERE product_id='$product_id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){
            header("location: user_porders.php");
            echo"Data inserted";
           
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>