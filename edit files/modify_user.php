<?php
include 'dbconnect.php';
$user_id=$_GET['editid'];
if(isset($_POST['update'])){
        $user_id= $_POST["user_id"];
        $username=$_POST["username"];
         $workstation=$_POST["workstation"];
        $dob=$_POST["dob"];
        $gender=$_POST["gender"];
        $designation=$_POST["designation"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $sql = "UPDATE `users` SET `user_id`='$user_id',`username`='$username',`workstation`='$workstation',`dob`='$dob',
          `gender`='$gender',`designation`='$designation',`phone`='$phone',`address`='$address' WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:admin_empmanage.php");
            exit;
            
        }
        else{
          die(mysqli_error($conn));
            
        }
}
?>