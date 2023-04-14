<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login_user.php");
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
@media (max-width:1054px){

   .pencil{
       margin-left:390px;
   }
   
}

@media (max-width:991px){

   html{
      font-size: 85%;
      h3{
        font-size: 75%;
   }
   }

   body{
      padding-left: 0;
   }
   .content .box {
    padding: 6px;
    width: 100%;
    margin-left:0px;
    margin-right:810px;
    margin-top:60px;
     z-index:1;

}
   .pencil{
       margin-left:390px;
   }
   
}
@media (max-width:915px){

   .pencil{
       margin-left:310px;
   }
   .wrapper{
       width:50%;
   }
   
}
@media (max-width:815px){
     html{
      font-size: 65%;
      h3{
        font-size: 65%;
   }
   

   body{
      padding-left: 0;
   }
   .pencil{
       margin-left:310px;
   }
   
}
@media (max-width:808px){

   .pencil{
       margin-left:210px;
   }
   
}
@media (max-width:700px){
     html{
      font-size: 65%;
      h3{
        font-size: 65%;
   }
   .content .box {
    padding:2px;
    width: 190px;
    margin-left:-70px;
    margin-right:510px;
    margin-top:40px;
     z-index:1;

}

   body{
      padding-left: 0;
   }
   .pencil{
       margin-left:180px;
   }
   
}
@media (max-width:660px){

   html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}


   body{
      padding-left: 0;
   }
   .content .box {
    padding: 6px;
    width: 100%;
    
    margin-left:-70px;
    margin-right:610px;
    margin-top:40px;
     z-index:1;

}
   .pencil{
       margin-left:170px;
   }
   
}

@media (max-width:500px) { 

   html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}

   body{
      padding:0px;
      height:500px;
   }
   .content .box {
    padding: 2px;
    width: 100%;
    margin-left:-180px;
    margin-right:510px;
    margin-top:40px;
     z-index:10;

}
   .pencil{
       margin-left:190px;
   }
   
}
@media (max-width: 477px) { 

   html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}

   body{
      padding:0px;
   }
   .content .box {
    padding: 2px;
    width: 120%;
    margin-left:-190px;
    margin-right:10px;
    margin-top:70px;
     z-index:10;

}
   .pencil{
       margin-left:70px;
        z-index:11;
   }
   .content .box .user-info td, .user-info th {

  padding: 10px;
}
   
}
@media (max-width: 406px) { 
 html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}

   body{
      padding:0px;
   }
   .content .box {
    padding: 0px;
    width: 240px;
    margin-left:-210px;
    margin-right:10px;
    margin-top:70px;
     z-index:10;

}
   .pencil{
       margin-left:100px;
       z-index:10;
   }
   .content .box .user-info td, .user-info th {
  padding: 10px;
}
@media (max-width: 393px) { 
 html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}

   body{
      padding:0px;
   }
   .content .box {
    padding: 0px;
    width: 220px;
    margin-left:-200px;
    margin-top:70px;
     z-index:10;

}
   .pencil{
       margin-left:100px;
       z-index:10;
   }
   .content .box .user-info td, .user-info th {
  padding: 10px;
}
@media (max-width: 280px) { 
 html{
      font-size: 85%;
      h3{
        font-size: 65%;
   }
}

   body{
      padding:0px;
   }
   .content .box {
    padding: 0px;
    width: 200px;
    margin-left:-240px;
    margin-right:10px;
    margin-top:70px;
     z-index:1;

}
   .pencil{
       margin-left:90px;
        
   }
   .content .box .user-info td, .user-info th {
  padding: 10px;
}

</style>



    <title>Profile</title>
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
                    <a href="user_profile.php" class="active" >
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
                    <a href="user_mro.php">
                        
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
<h2><u>Profile</u></h2>

<div class="box">

<table class="user-info">
 <tr class="heading">
 
 
 
    </tr>
    <tbody>
<?php
  $username=$_SESSION['username'];
  $sql = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
?>
<?php
    if ($result) {
      
        while($row = mysqli_fetch_assoc($result)) {
          
          $user_id=$row['user_id'];
          $username=$row['username'];
          $workstation=$row['workstation'];
          $dob=$row['dob'];
          $gender=$row['gender']; 
          $designation=$row['designation'];
          $phone=$row['phone']; 
          $address=$row['address']; 
           echo '

                <tr>
                <td>User ID</td>
                 <td>'.$row["user_id"].'</td>
                 </tr>
                 <tr>
                 <td>User Name</td>
                 <td>'.$row["username"].'</td>
                 </tr>
                 <tr>
                 <td>Workstation Assigned</td>
                 <td>'.$row["workstation"].'</td>
                 </tr>
                 <tr>
                 <td>Date of Birth</td>
                 <td>'.$row["dob"].'</td>
                 </tr>
                 <tr>
                 <td>Gender</td>
                  <td>'.$row["gender"].'</td>
                  </tr>
                  <tr>
                  <td>Designation</td>
                  <td>'.$row["designation"].'</td>
                  </tr>
                  <tr>
                  <td>Phone</td>
                  <td>'.$row["phone"].'</td>
                  </tr>
                  <tr>
                  <td>Address</td>
                  <td>'.$row["address"].'</td>
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
</body>
</html>