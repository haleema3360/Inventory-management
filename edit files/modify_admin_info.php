<?php
include 'dbconnect.php';

$user_id=$_GET['editid'];
if(isset($_POST['update'])){
        $user_id=$_POST['user_id'];
        $username=$_POST['username'];
        $dob=$_POST["dob"];
        $gender=$_POST["gender"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];

        $sql = "UPDATE `admin` SET `user_id` = '$user_id', `username` = '$username',`dob`='$dob',
        `gender`='$gender',`phone`='$phone',`address`='$address' WHERE user_id='$user_id'";

          $result = mysqli_query($conn, $sql);
          if($result){
            header("location:admin_profile.php");
            exit;
            
          }
          else{
          die(mysqli_error($conn));
            
           }
}
?>
