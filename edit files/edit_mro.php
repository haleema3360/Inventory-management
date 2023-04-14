<?php
include 'dbconnect.php';
if(isset($_GET['editid'])){
$part_no=$_GET['editid'];
$sql="SELECT * FROM `mro` WHERE part_no = '$part_no'";
$result=$conn->query($sql);

if($result->num_rows!=1){
  die('id not found/invalid');
}
$data=$result->fetch_assoc();
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
  h2{
      margin-left:20px;
  }
.content {
  border: 1px;
  
  margin-top: 40px;
  margin-bottom: 50px;
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
    padding: 10px;
    width: 85%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
        background:white;
  }

 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  
  width: 100%;
}

.content .box .user-info td, .user-info th {
 font-size:13px;
  padding: 9px;
}



.content .box.user-info th {
  padding-top: 8px;
  padding-bottom: 18px;
  text-align: left;
 font-size:19px;

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 3px;
  font-size:15px;
}
.but {
color: white;
}




.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 15px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0D4C92;
  color: white;
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #0D4C92;
    margin-left: 900px;
    margin-bottom: 30px;
    
  
}
.btn-secondary{
  margin-left: 490px;
}
.namee{
  margin-left: 0px;
}
.pencil{
  margin-left: 530px;
  
    position: absolute;
     margin-top: 0px;
}
</style>

    

    <title>Edit MRO Item</title>
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
                    <a href="admin_mro.php" class="active">
                        
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
<h2 class="heading"> Edit Item</h2>
<div class="box">
<div>
  <form action="modify_mro.php?editid=<?= $part_no ?>" method="post">
      <table>
  <tr>
    <td>
    <label>Part No</label><br>
    <input type="text"  name="part_no" placeholder="part no" value="<?= $data['part_no']?>">
    </td>
    <td>
    <label>Part Name</label><br>
    <input type="text"  name="part_name" placeholder="part name" value="<?= $data['part_name']?>">
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Type</label><br>
    <input type="text"  name="type" placeholder="type" value="<?= $data['type']?>">
    </td>
    <td>
    <label>Machine</label><br>
    
    <input type="text"  name="machine" placeholder="machine" value="<?= $data['machine']?>">
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Department</label><br>
    
    <input type="text"  name="department" placeholder="department" value="<?= $data['department']?>">
    </td>
    
  </tr>
</table>
  
    <br>
    
    <button style="width:20%; margin-left:20px; margin-bottom:10px;" type="submit" class="btn btn-primary" name="update">Update</button>
  
  </form>
  </div>
</div>

</div>
</div>
</body>
</html>