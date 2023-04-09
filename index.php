<?php
 include 'dbconnect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="style2.css">
    <title>Inventory Management System</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');


*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 5rem;
}

body{
    	background: #F5F6FA;
}
header{
    position: fixed;
    top:0; left:0; right:0;
    display: inline-block;
    background:#fff;
    padding:1.5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1;
    
}
.heading{
    text-align: center;
    color:#333;
    font-size: 4rem;
    padding-top: 3rem;
    padding-bottom: 3rem;
    margin-top:50px;
}

.heading span{
    color:var(--red);
    margin-top: 6rem;
    border-radius: .5rem;
    
}

header .nav{
    font-weight: bolder;
    font-size: 2.5rem;
    color:#333;
        text-align: right;
        white-space: nowrap;
        display: inline;
        margin-right: 40px;
        margin-right: 60px;
}

.ind{
    margin-top:110px;
margin-left:100px;
height:480px;
 width:390px;
}




 .box1 {
     float:right;
    padding: 15px;
    width: 60%;
    
      display: block;
       margin-top: 200px;
       margin-left:600px;
        margin-right: -20px;
  }
  .box2 {
     float:right;
    padding: 15px;
    width: 60%;
      display: block;
       margin-top: 50px;
       margin-left:600px;
        margin-right: -20px;
  }
.block {
    font-size: 2rem;
    font-weight: bolder;
  display: block;
  width: 60%;
  border: none;
  color:#fff;
    background-color:#696969;
  padding: 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  border-radius: .5rem;
}

.block:hover {
  background:#999999;
    color:#1a1a1a;
}
@media (max-width:300px){

    html{
        font-size:55%;
    }

    header{
        padding:1.5rem 1rem;
    }

    .ind{
        height:50px;
        width:50px;
        margin-left: -10px;
    }
    .box1{
       margin-top: 490px;
       margin-left: 90px;
       margin-right: -10px;
       width:100%;
    }
    .box2{
       margin-top: 20px;
       margin-left: 90px;
       margin-right: -10px;
       width:100%;
    }

}
@media (max-width:400px){

    html{
        font-size:65%;
    }

    header{
        padding:1.5rem 1rem;
    }

    .ind{
        height:290px;
        margin-left: 15px;
    }
    .box1{
       margin-top: 390px;
       margin-left: 100px;
       margin-right: -80px;
       width:100%;
    }
    .box2{
       margin-top: 20px;
       margin-left: 100px;
       margin-right: -80px;
       width:100%;
    }

}
@media (max-width:500px){

    html{
        font-size:65%;
    }

    header{
        padding:1.5rem 1rem;
    }

    .ind{
        height:290px;
       
        width:250px;
        margin-left: 75px;
    }
    .box1{
       margin-top: 420px;
       margin-left: 60px;
       margin-right:0px;
       width:100%;
    }
    .box2{
       margin-top: 10px;
       margin-left: 60px;
       margin-right: 0px;
       width:100%;
    }

}

@media (max-width:800px) and (min-width: 500px){

    html{
        font-size:55%;
    }

    header{
        padding:1.5rem 1rem;
    }

    .ind{
        height:410px;
        margin-left: 30px;
    }
    .box1{
       margin-top: 460px;
       margin-left: 80px;
       margin-right: -30px;
       width:60%;
    }
    .box2{
       margin-top: 20px;
       margin-left: 80px;
       margin-right: -30px;
       width:60%;
    }

}
</style>
</head>
<body>
<header>
    
<h1><span class="nav">Nautical Wings</span></h1>
  
</header>
<div style="width: 20%; float:left">
   <img class = "ind" src="ind.png" alt="">
</div>

<div style="width: 80%; float:right">
  <div class="box1">

    <a href="login_admin.php" class="block">Admin</a>
</div>
<div class="box2">
    <a href="login_user.php" class="block" >User</a>
</div> 
</div>


 
</body>
</html>
