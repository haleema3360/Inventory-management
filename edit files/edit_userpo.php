<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_user.php");
    exit;
}
include 'dbconnect.php';
if(isset($_GET['editid'])){
$product_id=$_GET['editid'];
$sql="SELECT status FROM `porders` WHERE product_id = '$product_id'";
$result=$conn->query($sql);

if($result->num_rows!=1){
  die('id not found/invalid');
}
$data=$result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   
   <style>
  .content {
  border: 1px;
  
  margin-top: 30px;
  margin-bottom: 60px;
  margin-right: 0px;
  margin-left: 240px;
    word-wrap: break-word;
    background-color:white;
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
    padding: 20px;
    width: 50%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
  }
 .content .box.user-info {
    font-family: 'Open Sans', sans-serif;
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
    font-family: 'Open Sans', sans-serif;
font-size: 30px;
margin-left:200px;
}

.products {
    font-family: 'Open Sans', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 8px;
}
input[type=text], select {
  width: 95%;
  padding: 5px 10px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 0px;
  margin-left: 10px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0D4C92;
  color: white;
  padding: 14px 20px;
  margin: 20px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0D4C92;
}
.heading{
  margin-left: 310px;
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
margin-left: 190px;
}

   </style>
</head>
<body>
<div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            <h2><?php echo $_SESSION['username']?></h2>
            
            
            </div>
            <ul>
                <li>
                    <a href="user_profile.php">
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="user_products.php" >
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="user_porders.php" class="active">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="user_rm.php" >
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="user_wip.php">
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_fg.php">
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li> -->
                <li>
                    <a href="user_mro.php">
                        
                        <span class="item">MRO Inventory</span>
                    </a>
                </li>
                
                <li>
                    
                        <a href="logout.php"><span class="item">Signout</span></a>
                        
                    
                </li>
            
  </ul>
  
       </div>
</div>
<div class="content"> 
<h2 class="heading">Edit Status</h2> 
<div class="box">

<div>
  <form action="modify_userpo.php?editid=<?= $product_id ?>" method="post">
  Status
  <select name="status">
                        <option><?= $data['status']?></option>
                        <option>Procurement</option>
                        <option>Manufacturing</option>
                        <option>Warehousing</option>
                        <option>Order fulfillment</option>
                        <option>Transportation</option>
                    </select>
<br><br>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    
  </form>
</div>

</div>
</div>


</body>
</html>
