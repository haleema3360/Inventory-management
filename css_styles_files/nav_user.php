<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary">
<a class="navbar-brand" href="/loginsystem">
<img width="150px" height="50px"src="NW-Logo.png">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>';

if(!$loggedin){
  echo '
  <ul class="navbar-nav mr-auto">
    
  <a class="btn btn-secondary" href="index.php" role="button"  aria-expanded="false">
    Home
  </a>
  </div>
  <li class="nav-item">
  <div>&nbsp;&nbsp;
 
  <a class="btn btn-secondary" href="login_user.php" role="button"  aria-expanded="false">
    Login
  </a>
  </div>
   ';}
    if($loggedin){
      echo '
      <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li> ';
    }
  echo'</ul>
</div>
</nav>';
?>


</body>
</html>

