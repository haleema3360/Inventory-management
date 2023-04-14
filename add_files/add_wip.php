<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
        $batch_id= $_POST["batch_id"];
        $component=$_POST["component"];
        $workstation_from=$_POST["workstation_from"];
        $time_deposited=$_POST["time_deposited"];
        $sender=$_POST["sender"];
        $workstation_to=$_POST["workstation_to"];
        $time_picked=$_POST["time_picked"];
        $receiver=$_POST["receiver"];
          

          $sql = "INSERT INTO wip(batch_id, component, workstation_from, time_deposited, sender, workstation_to, time_picked, receiver)
           VALUES ('$batch_id', '$component', '$workstation_from', ' $time_deposited', '$sender', '$workstation_to', '$time_picked', '$receiver')";
          $result = mysqli_query($conn, $sql);
          if($result){
            header("location:admin_wip.php");
            echo"Data inserted";
           
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
   <style>
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
</style>

    

    <title>Add Item</title>
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
                    <a href="admin_products.php" >
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="admin_porders.php">
                        
                        <span class="item">Product Orders</span>
                    </a>
                </li>
                <li>
                    <a href="admin_rawmaterials.php" >
                        
                        <span class="item">Raw Materials Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="admin_workbench.php">
                        
                        <span class="item">Workbench</span>
                    </a>
                </li>
                <li>
                    <a href="admin_wip.php" class="active">
                        
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
<h2 class="heading">Add Item</h2> 
<div class="box">

<div>
  <form action="add_wip.php" method="post">
      <table>
  <tr>
    <td>
    <label>Batch ID</label><br>
    <input type="text"  name="batch_id" placeholder="Batch ID">
    </td>
    <td>
    <label>Component</label><br>
    <input type="text"  name="component" placeholder="Component">
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Workstation From</label><br>
    <input type="text"  name="workstation_from" placeholder="Workstation From">
    </td>
    <td>
    <label>Time(Deposited)</label><br>
    <input type="time"  name="time_deposited" placeholder="Time(Deposited)"><br>
    </td>
    
  </tr>

  <tr>
    <td>
    <label>Sender</label><br>
    <input type="text"  name="sender" placeholder="Sender Name">
    </td>
    <td>
    <label>Workstation To</label><br>
    <input type="text"  name="workstation_to" placeholder="Workstation To">
    </td>
    
  </tr>
  <tr>
    <td>
    <label>Time(Picked Up)</label><br>
    <input type="time"  name="time_picked" placeholder="Time(Picked Up)"><br>
    </td>
    <td>
    <label>Receiver</label><br>
    <input type="text"  name="receiver" placeholder="Receiver Name">
    </td>
    
  </tr>
</table>
<br>

    <button style="width:20%; margin-left:20px; margin-bottom:10px;" type="submit" class="btn btn-primary" name="submit">Submit</button>
    
    
    
  
    
  </form>
</div>

</div>
</div>
</body>
</html>