<?php
include 'dbconnect.php';
$id=$_GET['editid']; 
if(isset($_POST['update'])){
        $id= $_POST["id"];
        $department=$_POST["department"];
        $status=$_POST["status"];
        $duration=$_POST["duration"];
        
       $sql = "UPDATE `workbench` SET id='$id',department='$department',status='$status',duration='$duration' WHERE id='$id'";
          
        $result = mysqli_query($conn, $sql);
          if($result){         
           header("location:admin_workbench.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>