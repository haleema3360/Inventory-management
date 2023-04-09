<?php 
 include 'dbconnect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `workbench` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
            header("location:admin_workbench.php");
            echo"Delete successful"; 
            exit; 
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
?>

