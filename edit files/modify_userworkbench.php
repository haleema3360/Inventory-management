<?php
include 'dbconnect.php';
$id=$_GET['editid']; 
if(isset($_POST['update'])){
        $id= $_POST["id"];
        $department=$_POST["department"];
        $status=$_POST["status"];
        $duration=$_POST["duration"];
        
       $sql = "UPDATE `workbench` SET id='$id',department='$department',status='$status',duration='$duration' WHERE id='$id'";
       
       if($status=='Not Occupied'){
           $sql1="SELECT product_id,product_name FROM products WHERE workbench_id=$id";
           $stmt=$conn->query($sql1);
           if($stmt!=false){
               $row = $stmt->fetch_array(MYSQLI_ASSOC);
               $pid=$row['product_id'];
               $pname=$row['product_name'];
               $sql2=mysqli_query($conn,"UPDATE porders SET status='WIP Inventory' WHERE product_id=$pid");
               $sql3=mysqli_query($conn,"INSERT INTO `wip` (product_id,component,time_deposited) VALUES('$pid','$pname',CONVERT_TZ(NOW(),'+00:00','+05:30')) ");
           }
           
       }
          
        $result = mysqli_query($conn, $sql);
          if($result){         
           header("location:user_workbench.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>