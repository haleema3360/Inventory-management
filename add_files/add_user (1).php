<?php
include'dbconnect.php';
if(isset($_POST['submit'])){
        $user_id= $_POST["user_id"];
        $username = $_POST["username"];
        $workstation=$_POST["workstation"];
        $dob=$_POST["dob"];
        $gender=$_POST["gender"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $sql = "INSERT INTO `users` (user_id, username, workstation, dob, gender, password, phone, address,designation)
           VALUES ('$user_id','$username','$workstation','$dob','$gender','$password','$phone','$address','user')";
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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
   <style>.content {
  border: 1px;
  
  margin-top: 30px;
  margin-bottom: 60px;
  margin-right: 0px;
  margin-left: 180px;
    word-wrap: break-word;
   
}
* {
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

 .content .box {
    padding: 5px;
    width: 65%;
    
    
 background-color:white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  
  width: 100%;
}

.content .box .user-info td, .user-info th {
 
  padding: 15px;
}



.content .box.user-info th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 30px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 8px;
}


input[type=submit]:hover {
  background-color: #0D4C92;
}
.heading{
  margin-left: 90px;
  color: black;
  margin-bottom: 20px;


}





.products tr:hover {background-color: #0D4C92;}

.products th {
  padding-top: 10px;
  padding-bottom: 5px;
  text-align: left;
  background-color: #0D4C92;
  color: white;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #0D4C92;
}
</style>

    

    <title>Add user</title>
  </head>
  <body>

  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            
            
            </div>
            <ul>
                <li>
                    <a href="admin_profile.php">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="admin_products.php">
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="admin_porders.php">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="admin_rawmaterials.php">
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                 <li>
                    <a href="admin_workbench.php">
                        
                        <span class="item">Workbench</span>
                    </a>
                </li>
                <li>
                    <a href="admin_wip.php">
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_finishedg.php"  >
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_mro.php">
                        
                        <span class="item">MRO Inventory</span>
                    </a>
                </li>
                <li>
                 <a href="comments.php">
                        
                        <span class="item">Comments</span>
                    </a>
                </li>
                <li>
                    <a href="admin_empmanage.php" class="active">
                        
                        <span class="item">Employee Management</span>
                    </a>
                </li>
                <li>
                    
                        <a href="logout.php"><span class="item">Signout</span></a>
                        
                    
                </li>
            
  </ul>
  
       </div>
</div> 


        
<div class="content"> 
<h2 class="heading"> Add User</h2>
<div class="box">
<div>
  <form action="add_user.php" method="post">
      
      <table>
  <tr>
    <td>
    <label>User ID</label><br>
    <input type="text"  name="user_id" placeholder="User ID">
    
    </td>
    <td>
    <label>User Name</label><br>
    <input type="text"  name="username" placeholder="User Name">
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Workstation</label><br>
    
    <input type="text"  name="workstation" placeholder="Workstation">
    </td>
    <td>
    <label>Date of Birth</label><br>
    <input type="date"  name="dob" placeholder="DOB">
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Gender</label><br>
    
    <input type="text"  name="gender" placeholder="Gender">
    </td>
    <td>
    <label>Password</label><br>
    
    <input type="password" class="pp" name="password" placeholder="password">
    </td>
    
  </tr>
  
  <tr>
    <td>
    <label>Phone Number</label><br>
    
    <input type="text"  name="phone" placeholder="phone">
    </td>
    <td>
    <label>Address</label><br>
    
    <input type="text"  name="address" placeholder="Address">
    </td>
    
  </tr>

  
</table>
    
    <br>
    <button style="width:20%; margin-left:20px; margin-bottom:10px;" type="submit" class="btn btn-primary" name="submit">Submit</button>

  </form>
  
  </div>
</div>

</div>
</div>
</body>
</html>