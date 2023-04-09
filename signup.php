<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $user_id  = $_POST["user_id"];
    $dob  = $_POST["dob"];
    $gender  = $_POST["gender"];
    $designation  = $_POST["designation"];
    $phone  = $_POST["phone"];
    $address  = $_POST["address"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
   
   
    $existSql = "SELECT * FROM `admin` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
       
        $showError = "Username Already Exists";
    }
    else{
       
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` ( `username`,`user_id`,`dob`,`gender`,`designation`,`phone`,`address` ,`password`, `date`) VALUES ('$username','$user_id','$dob','$gender','$designation','$phone','$address', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
   
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 40px;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width:69%;
  margin-left:100px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
table{
    width:100%;
    }
    label{
        text-align: center;
    }
.form input {
    
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 90%;
  border: 0;
  margin-right:17px;
  /*margin-left:12px;*/
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
}
form .btn {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #696969;
  width: 50%;
  border: 0;
  padding: 15px;
color:#fff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}


form .btn:hover {
  background:#999999;
    color:#1a1a1a;
}
.form .message {
  margin: 7px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #1692a0;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 400px;
  margin: 0 auto;
}
#cpassword{
    margin-left:145px;
    width: 50%;
}


body {
  
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

</style>
    <title>SignUp</title>
  </head>
  <body>
  <?php require 'nav.php' ?>
  <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-5">
     <form action="signup.php" method="post">
        <div class="form">
        <h3>Sign-up</h3><br>
        <table>
  <tr>
    <td>
    <div class="form-group">
            <label for="username">Username</label>
            <input type="text"  class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
    </td>
    <td>
     <div class="form-group">
            <label for="username">User ID </label>
            <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp">
        </div>
    </td>
    
  </tr>

  <tr>
    <td>
    <div class="form-group">
            <label for="username">Date of Birth</label>
            <input type="date"  class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
        </div>
    </td>
    <td>
    <div class="form-group">
            <label for="username">Gender</label>
            <input type="text"class="form-control" id="gender" name="gender" aria-describedby="emailHelp">
        </div>
    </td>
    
  </tr>

  <tr>
    <td>
    <div class="form-group">
            <label for="username">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp">
        </div>
    </td>
    <td>
    <div class="form-group">
            <label for="username">Phone number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
        </div>
    </td>
    
  </tr>
  <tr>
    <td>
    <div class="form-group">
            <label for="username">Address</label>
            <input type="text"  class="form-control" id="address" name="address" aria-describedby="emailHelp">
        </div>
    </td>
    <td>
    <div class="form-group">
            <label for="password">Password</label>
            <input type="password"  class="form-control" id="password" name="password">
        </div>
    </td>
    
  </tr>
  
    
</table>
   <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>