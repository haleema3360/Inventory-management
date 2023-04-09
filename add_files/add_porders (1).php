<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
        // $count=0;
        // $c=0;
        //$order_id= $_POST["order_id"];
        $product_id= $_POST["product_id"];
        $product_name=$_POST["product_name"];
        $quantity=$_POST["quantity"];
        $unit=$_POST["unit"];
        // $status=$_POST["status"];
        $ordered_date=$_POST["ordered_date"];
       
          
         $sql ="INSERT INTO `porders` (product_id, product_name, quantity, unit,status,ordered_date) VALUES ('$product_id', '$product_name', '$quantity', '$unit', 'WIP Inventory', '$ordered_date')";
         $result=mysqli_query($conn,$sql);
         
         $inquantity=$_POST["quantity"];
         $inpid=$_POST["product_id"];
         $sql3="SELECT `rm_quantity`,`raw_material` FROM `product_rm` WHERE product_id=$inpid";
         $stmt=$conn->query($sql3);
         if($stmt!==false){
             
             while ($row = $stmt->fetch_array(MYSQLI_ASSOC)) {
        // Access the array elements correctly using column names
        $rmQuantity = $row['rm_quantity'];
        $rawMaterial = $row['raw_material'];

        $sql2 = "UPDATE `raw_materials` SET quantity=(quantity-($inquantity*$rmQuantity)) WHERE material='$rawMaterial'";
        $result2 = mysqli_query($conn, $sql2);
             }
         }
         else{
             $errorInfo=$conn->errorInfo();
             echo "Error";
         }
         $sql4=mysqli_query($conn,"SELECT `product_name` FROM `products` WHERE product_id=$inpid");
         $row4 = mysqli_fetch_assoc($sql4);
         $pname = $row4['product_name'];
         $sql5=mysqli_query($conn,"SELECT `workbench_id` FROM `products` WHERE product_id=$inpid");
         $row5 = mysqli_fetch_assoc($sql5);
         $workid = $row5['workbench_id'];
         $sql6=mysqli_query($conn,"SELECT `status` FROM `workbench` WHERE id=$workid");
         $row6 = mysqli_fetch_assoc($sql6);
         $workstatus = $row6['status'];
         if($workstatus=="Not Occupied"){
        $sql7=mysqli_query($conn,"INSERT INTO `wip` (product_id,component,time_deposited) VALUES('$inpid','$pname',CONVERT_TZ(NOW(),'+00:00','+05:30'))");
        
         }
         else{
             $sql8=mysqli_query($conn,"UPDATE `porders` SET status='Blocker' WHERE product_id='$inpid'");
         }
         
        if($result){
             header("location:admin_porders.php");
            echo"Data inserted";
            exit;
          }
          else{
            die(mysqli_error($conn));
         }
        
         
        

        //   $res=mysqli_query($conn,"SELECT * FROM `products` WHERE product_id='$_POST[product_id]' && product_name='$_POST[product_name]' && unit='$_POST[unit]' ");
        //   $count=mysqli_num_rows($res);
        //   if($count==0){
        //     mysqli_query($conn,"INSERT INTO `products` VALUES ('$_POST[product_id]','$_POST[product_name]', '$_POST[quantity]','$_POST[unit]','0')") or die(mysqli_error($link));
        //   }
        //   else{
        //     mysqli_query($conn,"UPDATE `products` SET quantity=quantity-$_POST[quantity] WHERE product_id='$_POST[product_id]' && product_name='$_POST[product_name]' && unit='$_POST[unit]' ") or die(mysqli_error($link));
        //   }
        //   $ans=mysqli_query($conn,"SELECT * FROM `porders` WHERE product_id='$_POST[product_id]' && product_name='$_POST[product_name]' && unit='$_POST[unit]' ");
         // $c=mysqli_num_rows($ans);
        //   if($c!=0){
        //     header("location:admin_porders.php");
        //     echo"Data inserted";
        //     exit;
        //   }
        //   else{
        //     die(mysqli_error($conn));
              
        //     }
        
    
          
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
  margin-left: 160px;
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

    

    <title>Add Product Orders</title>
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
                    <a href="admin_porders.php" class="active">
                        
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
<h2 class="heading"> Add Product Order</h2>
<div class="box">
<div>
  <form action="add_porders.php" method="post">
    <!--  <label>Order ID</label>-->
    <!--<input type="text"  name="order_id" placeholder="Order ID">-->
    <!--<br>-->
    <table>
        <tr>
            <td>
                <label>Product ID</label><br>
    <select name="product_id" required>
        <option value="" disabled hidden selected>Product ID</option>
        <?php
        $query="SELECT * FROM `products`";
        $run=mysqli_query($conn,$query);
        while($data= mysqli_fetch_array($run))
        {
            echo "<option value='$data[0]'>$data[0]</option>";
        }
        ?>
    </select>
            </td>
            <td>
                <label>Product Name</label><br>
    <select name="product_name" required>
        <option value="" disabled hidden selected>Product Name</option>
        <?php
        $query="SELECT * FROM `products`";
        $run=mysqli_query($conn,$query);
        while($data= mysqli_fetch_array($run))
        {
            echo "<option value='$data[1]'>$data[1]</option>";
        }
        ?>
    </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Quantity</label><br>
    <input type="text"  name="quantity" placeholder="Quantity">
            </td>
            <td>
                <label>Unit</label>
    <br>
    <select name="unit" id="">
                        <option value="" disabled hidden selected>Unit</option>
                        <option value="m²">m²</option>
                        <option value="pcs">pcs</option>
                        <option value="kg">Kg</option>
                        <option value="m">m</option>
                        <option value="l">l</option>
                        </select>
            </td>
        </tr>
        <tr>
            <td>
               <label>Ordered On</label><br>
    <input type="date" name="ordered_date" placeholder="ordered on"> 
            </td>
             
        </tr>
        
    </table>
    
    
    <br>
    <!--<label>Status</label>-->
    <!-- <select name="status" id="">-->
    <!--                    <option value="" disabled hidden selected>Status</option>-->
    <!--                    <option value="WIP Inventory">WIP Inventory</option>-->
    <!--                    <option value="Finished Goods Inventory">Finished Goods Inventory</option>-->
    <!--                    <option value="Blocker">Blocker</option>-->
                        
                        
    <!--                </select>-->
    <button style="width:20%; margin-left:20px; margin-bottom:10px;" type="submit" class="btn btn-primary" name="submit" id="success">Submit</button>
  
  </form>
  </div>
</div>

</div>
</div>
</body>
</html>