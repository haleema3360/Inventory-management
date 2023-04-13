<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_user.php");
    exit;
}
?>
<?php
include 'dbconnect.php';
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
  
  margin-top: 40px;
  margin-bottom: 60px;
  margin-right: 0px;
  margin-left: 250px;
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
    padding: 3px;
    width: 90%;
    background-color:white;
    font-size: 13px;
 text-align: center;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
   text-align: center;
  width: 100%;
  font-size: 13px;
}

.content .box .user-info td, .user-info th {
  text-align: center;
  padding: 9px;
  font-size: 13px;
}



.content .box.user-info th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: center;
 font-size: 13px;

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 30px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   text-align: center;
   font-size: 13px;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 6px;
   text-align: center;
   font-size: 13px;
}



.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: center;
  background-color: #0D4C92;
  color: white;
  font-size: 13px;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    
  background-color: #0D4C92;
  margin-left: 560px;
    margin-bottom: 7px;
  
}
.but {
color: white;
}

</style>

    

    <title>MRO Inventory</title>
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
                <!--<li>-->
                <!--    <a href="user_porders.php">-->
                        
                <!--        <span class="item">Product Orders</span>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="user_rm.php">
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_workbench.php">
                        
                        <span class="item">Workbench</span>
                    </a>
                </li>
                <li>
                 <a href="user_comments.php">
                        
                        <span class="item">Comments</span>
                    </a>
                </li>
                <li>
                    <a href="user_wip.php" >
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_fg.php" >
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_mro.php" class="active">
                        
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
<div class="box">
<table class="user-info">
        
  <tr class="heading">
 <td> <h3><u>MRO Inventory</u></h3></td>

    </tr>
  
      <table class="products">
  <thead>
  <tr>
    <th>Part No</th>
    <th>Part Name</th>
    <th>Type</th>
    <th>Machine</th>
    <th>Department</th>
    
  </tr>
</thead>
<tbody>

</tbody>
<?php
  $sql = "SELECT * FROM `mro`";
  $result = mysqli_query($conn, $sql);
    if ($result) {
      while($row = mysqli_fetch_assoc($result)) {
       $part_no=$row['part_no'];
       $part_name=$row['part_name'];
       $type=$row['type'];
       $machine=$row['machine']; 
       $department=$row['department'];
       
       
          echo '<tr>
              <td>'.$row["part_no"].'</td>
              <td>'.$row["part_name"].'</td>
              <td>'.$row["type"].'</td>
               <td>'.$row["machine"].'</td>
               <td>'.$row["department"].'</td>
               
               
              
              
         
             </tr>';
  }
}
?>
</tbody> 
</table>
</div>       
</div>
</div>
</body>
</html>
