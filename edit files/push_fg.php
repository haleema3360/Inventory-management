<?php 
 include 'dbconnect.php';
 if(isset($_GET['pushid'])){
    $bid=$_GET['pushid'];
    $sql2=mysqli_query($conn,"SELECT `product_id` FROM `wip` WHERE batch_id='$bid'");
    $sql4=mysqli_query($conn,"SELECT `component` FROM `wip` WHERE batch_id='$bid'");
    $row2=mysqli_fetch_assoc($sql2);
    $row4=mysqli_fetch_assoc($sql4);
    $pid=$row2['product_id'];
    $pname=$row4['component'];
    $sql3=mysqli_query($conn,"INSERT INTO `finished_goods` (product_id,product) VALUES ('$pid','$pname')");
    
    $sql="DELETE FROM `wip` WHERE batch_id='$bid'";
    $result = mysqli_query($conn, $sql);
    $sql5=mysqli_query($conn,"UPDATE `porders` SET status='Finished Goods Inventory' WHERE product_id='$pid'");
    if($result){
            header("location:admin_wip.php");
            echo"Delete successful";
            exit;
          }
    else{
          die(mysqli_error($conn));
            
           }
 }
 ?>