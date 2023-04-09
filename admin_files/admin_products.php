<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_admin.php");
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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
   <style>
   h2{
      margin-left:60px;
  }
 .content {
  border: 1px;
  
  margin-top: 10px;
  margin-bottom: 60px;
  margin-right: 0px;
  margin-left: 250px;
    word-wrap: break-word;
   
}
.but {
color: white;
}
h3{
    font-size:20px;
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
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       background-color:white;
       margin-left: auto;
        margin-right: auto;
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  
  width: 100%;
}

.content .box .user-info td, .user-info th {
 font-size:13px;
  padding: 5px;
}



.content .box.user-info th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: center;
 

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 24px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:13px;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 3px;
  font-size:13px;
   text-align: center;
}



.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: center;
  background-color: #0D4C92;
  color: white;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #0D4C92;
    margin-left: 530px;
    margin-bottom: 7px;
}
.but {
color: white;
}
#search{
  width:100%;
  padding: 5px 10px;
  margin-top: 10px;
  margin-bottom: 20px;
  margin-right: 30px;
  margin-left: 700px;
  display: inline-block;
  border: 1px solid #ccc;
 
  box-sizing: border-box;
}
.wrapper .sidebar{
	background:#393E46;
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 14px 0;
	transition: all 0.5s ease;
}

</style>

    

    <title>Products</title>
  </head>
  <body>

  <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                
                <h2><?php echo $_SESSION['username']?></h2>
                
            </div>
            <ul>
                <li>
                    <a href="admin_profile.php" >
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="admin_products.php" class="active">
                        
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
                    <a href="admin_finishedg.php">
                        
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
                    <a href="admin_empmanage.php">
                        
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
     <form action="" method="POST">
                                    <div class="input-group">
                                        <input type="text" name="search" id="search" class="form-control" placeholder="Search data" >
                                    </div>
                                </form>
<div class="box">
<table class="user-info">
        
  <tr class="heading">
 <td> <h3><u>Products</u></h3></td>
 <td><button type="button" class="btn btn-primary"> <a class="but" href="add_product.php"> Add Product</a></button>
</td>
    </tr>

  <table class="products">
  <thead>
  <tr>
    
    <th>Product ID</th>
    <th>Product Name</th>
    
    <th>Quantity</th>
    <th>Unit</th>
    <th>Workbench</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody  id="employee_table">
  <?php
  $sql = "SELECT * FROM `products`";
  
  $result = mysqli_query($conn, $sql);
  
    if ($result) {
      while($row = mysqli_fetch_assoc($result)) {
        
        $product_id=$row['product_id'];
        $product_name=$row['product_name'];
        
        
        $quantity=$row['quantity'];
          $unit=$row['unit']; 
          $workbench_id=$row['workbench_id']; 
          
          echo '<tr>
              
              <td>'.$row["product_id"].'</td>
              <td>'.$row["product_name"].'</td>
             
            
              <td>'.$row["quantity"].'</td>
               <td>'.$row["unit"].'</td>
               <td>'.$row["workbench_id"].'</td>
               <td>
               <button type="button" class="btn btn-link"> <a href="edit.php?editid='.$product_id.'">  <span class="bi bi-pencil-fill"></span></a></button>
               <button type="button" class="btn btn-link"><a href="delete.php?deleteid='.$product_id.'"> <span class="bi bi-trash"></span></button></td>
              
         
             </tr>';
  }
}
?>
 

</tbody> 
</table>
</table>
</div>       
</div>
</div>





<div class="content">
<div class="box">
<table class="user-info" >
        
  <tr class="heading">
 <td> <h3><u>Product DESC</u></h3></td>
 <td><button type="button" class="btn btn-primary"> <a class="but" href="add_pdesc.php"> Add</a></button> </td>
    </tr>
    
  
  <table class="products">
  <thead>
  <tr>
    
    <th>Product ID</th>
    <th>Raw Material</th>
    <th>Quantity</th>
    
    <th>Action</th>
  </tr>
  </thead>
  <tbody  id="employee_table">
  <?php
  $sql = "SELECT * FROM `product_rm`";
  
  $result = mysqli_query($conn, $sql);
  
    if ($result) {
      while($row = mysqli_fetch_assoc($result)) {
        
        $product_id=$row['product_id'];
        $raw_material=$row['raw_material'];
        $rm_quantity=$row['rm_quantity'];
          
          echo '<tr>
              
              <td>'.$row["product_id"].'</td>
             
              <td>'.$row["raw_material"].'</td>
              <td>'.$row["rm_quantity"].'</td>
               
               <td>
               <button type="button" class="btn btn-link"> <a href="edit_pdesc.php?editid='.$product_id.'">  <span class="bi bi-pencil-fill"></span></a></button>
               <button type="button" class="btn btn-link"><a href="delete_pdesc.php?deleteid='.$product_id.'"> <span class="bi bi-trash"></span></button>
</td>
              
         
             </tr>';
  }
}
?>
</tbody> 
</table>
</div>       
</div>
</div>
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
<script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>