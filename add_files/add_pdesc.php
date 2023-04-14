<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/svg-with-js.min.css">
       
       <link rel="stylesheet" href="style.css">
      <title>Product Raw Materials</title>
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
  padding: 8px;
}
input[type=submit] {
  width: 50%;
  background-color: #0D4C92;
  color: #F5F6FA;
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
</head>
<body>
  <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
            
            <h2></h2>
            <p>Admin</p>
            </div>
            <ul>
                <li>
                    <a href="admin_profile.php">
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

    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Add Item</h4>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_alert"></div>
                        <form action="#" method="POST" id="add_form">
                            
                     <table>
                        <tbody>
                            
                            <tr>
                            <div id="show_item">
                                
                                <div class="row">
                                    <div class="col mb-3">
                                         <input type="text" name="product_id[]" class="form-control"
                                          placeholder="Product ID" required>
                                    </div>
                                    <div class="col mb-3">
                                    
                                        <input type="text" name="raw_material[]" class="form-control"
                                          placeholder="Raw Material" required>
                                    
                                    </div>
                                    
                                    <div class="col mb-3">
                                         <input type="text" name="rm_quantity[]" class="form-control"
                                          placeholder="Quantity" required>
                                    </div>
   
                                    
                                    <div class="col mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Add More</button>
                                    </div>
                                </div>
                            </div>
                            </tr>
                        </tbody>
                     </table>
                     <center>
                     
                            <input type="submit" name="submit" value="Add" class="btn btn-primary w-25" id="add_btn">
                        </center></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".add_item_btn").click(function(e){
                e.preventDefault();
                $("#show_item").append(`<div class="row append_item">
                             
                                <div class="col mb-3">
                                         <input type="text" name="product_id[]" class="form-control"
                                          placeholder="Product ID" required>
                                    </div>
                                    <div class="col mb-3">
                                    
                                        <input type="text" name="raw_material[]" class="form-control"
                                          placeholder="Raw Material" required>
                                    
                                    </div>
                                    
                                    <div class="col mb-3">
                                         <input type="text" name="rm_quantity[]" class="form-control"
                                          placeholder="Quantity" required>
                                    </div>
   
                                  
                                    <div class="col mb-3 d-grid">
                                        <button class="btn btn-danger remove_item_btn">Remove</button>
                                    </div>
                                
                               
                                </div>`);
            });
            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            $("#add_form").submit(function(e) {
                e.preventDefault();
                $("#add_btn").val('Adding...');
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                    $("#add_btn").val('Add');
                    $("#add_form")[0].reset();
                     $(".append_item").remove();
                     $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                    }
                })
            })
            
        
    });
            
    </script>
</body>
</html>