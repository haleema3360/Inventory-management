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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
      margin-left:60px;
  }
  .content {
  border: 1px;
  
  margin-top: 10px;
  margin-bottom: 60px;
  margin-right: 0px;
  margin-left: 220px;
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
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      display: block;
       margin-left: auto;
        margin-right: auto;
        font-size: 13px;
  }
 .content .box.user-info {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  width: 100%;
}

.content .box .user-info td, .user-info th {
 font-size: 12px;
  padding: 9px;
}



.content .box.user-info th {
  padding: 5px;
  text-align: center;
  font-size: 12px;
 

}
.content .box .heading{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
}

.products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   text-align: center;
}

.products td, .products th {
  border: 1px solid #ddd;
  padding: 8px;
}



.products tr:hover {background-color: #ddd;}

.products th {
  padding-top: 6px;
  padding-bottom: 6px;
  text-align: left;
  background-color: #0D4C92;
  color: white;
}
h3{
    padding:3px;
    font-size:24px;
}
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    
  background-color: #0D4C92;
  margin-left: 540px;
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
h2{
    text-align:center;
    color: white;
    margin-right:170px;
  }
  @media (max-width:1054px){

  
   
}

@media (max-width:991px){

   html{
      font-size: 85%;
  
   }

   body{
      padding-left: 0;
   }
   .content .box {
    padding: 6px;
    width: 100%;
    margin-left:0px;
    margin-right:810px;
    margin-top:10px;
     z-index:1;

}
  
   
}
@media (max-width:915px){

  
   .wrapper{
       width:50%;
   }
   
}
@media (max-width:815px){
     html{
      font-size: 65%;
     
   }


   body{
      padding-left: 0;
   }
   
   
}
@media (max-width:808px){

  
}
@media (max-width:700px){
     html{
      font-size: 65%;
     }
   .content .box {
    padding:5px;
    width: 450px;
    margin-left:-70px;
    margin-right:510px;
    margin-top:10px;
     z-index:1;
}
   body{
      padding-left: 0;
      height:1100px;
   }
   
   #search{
  width:30%;
  padding: 2px;
  margin-top: 3px;
  margin-bottom: 2px;
  margin-right:30px;
   z-index:-1;
  margin-left: 100px;
}
   
}
@media (max-width:660px){

   html{
      font-size: 85%;
     
}

   body{
      padding-left: 0;
       height:1100px;
   }
   .content .box {
    padding: 6px;
    width: 100%;
    
    margin-left:-70px;
    margin-right:610px;
    margin-top:10px;
     z-index:1;

}
#search{
  width:20%;
  padding: 2px;
  margin-top: 3px;
  margin-bottom: 2px;
  margin-right:50px;
   z-index:-1;
  margin-left: 90px;
}
  
   td,th{
    padding:8px;
    font-size: 14px;
}
   
}

@media (max-width:550px) { 

   html{
      font-size: 85%;
     
}
   body{
      padding:0px;
      height:500px;
   }
   .content .box {
    padding: 2px;
    width: 400px;
    margin-left:-180px;
    margin-right:510px;
    margin-top:10px;
     z-index:10;

}
  
   td,th{
    padding:8px;
    font-size: 12px;
}

   
}
@media (max-width: 477px) { 

   html{
      font-size: 45%;
     
}
h3{
    padding:5px;
}

   body{
      padding:10px;
      height:500px;
   }
   .content .box {
    padding: 2px;
    width: 340px;
    margin-left:-190px;
    margin-right:10px;
    margin-top:10px;
     z-index:10;

}
 
   .content .box .user-info td, .user-info th {
font-size: 45%;
  padding: 0px;
}
#search{
   display:none;
}
td,th{
    padding:0px;
    font-size: 12px;
}
   
}
@media (max-width: 406px) { 
 html{
      font-size: 45%;
     
}

   body{
      padding:0px;
      height:400px;
   }
   .content .box {
    padding: 0px;
    width: 360px;
    margin-left:-220px;
    margin-right:10px;
    margin-top:10px;
     z-index:10;

}

  
   .content .box .user-info td, .user-info th {
  padding: 0px;
  font-size: 45%;
}
#search{
  display:none;
}
td,th{
    padding:0px;
    font-size: 12px;
}
}
@media (max-width: 294px) {
    #search{
  display:none;
}
}
@media (max-width: 393px) { 
 html{
      font-size: 35%;
     
}
.content .box .user-info td, .user-info th {
  padding: 0px;
  font-size: 45%;
}
   body{
      padding:0px;
      height:400px;
   }
   .content .box {
    padding: 0px;
    width: 360px;
    margin-left:-240px;
    margin-top:10px;
     z-index:10;

}
h3{
    padding:10px;
    
}
   
    #search{
  display:none;
}
td,th{
    padding:0px;
    font-size: 12px;
}
}
@media (max-width: 280px) { 
 html{
      font-size: 35%;
   }

   body{
      padding:0px;
      height:400px;
   }
   .content .box {
    padding: 0px;
    width: 360px;
    margin-left:-250px;
    margin-right:10px;
    margin-top:10px;
     z-index:1;

}
   
 
#search{
   display:none;
}
td,th{
    padding:0px;
    font-size: 9px;
}
}

</style>
    

    <title>MRO Inventory</title>
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
                    <a href="user_profile.php" >
                        <span class="item">Profile</span>
                    </a>
                </li>
                    
                <li>
                    <a href="user_products.php" >
                        
                        <span class="item">Products</span>
                    </a>
                </li>
                
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
                    <a href="user_wip.php">
                        
                        <span class="item">WIP Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_fg.php">
                        
                        <span class="item">Finished Goods Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="user_mro.php" class="active">
                        
                        <span class="item">MRO Inventory</span>
                    </a>
                </li>
                 <li>
                 <a href="user_comments.php">
                        
                        <span class="item">Comments</span>
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
<tbody  id="employee_table">
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
<script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
	window.onscroll = () =>{
   hamburger.classList.remove('active');
}
  </script>
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
</body>
</html>