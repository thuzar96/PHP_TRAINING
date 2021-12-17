<?php
 $uname="admin";
 $pwd="admin";

session_start();


if(isset($_SESSION['uname'])){  
  echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
  echo "<a href='logout.php'><input type=button value=LOG OUT name=logout></a>";
}

//function to check username and password
else{
  //if username and password is correct
  if($_POST['uname']==$uname){
    $_SESSION['uname']==$uname;
    echo"<script> location.href='login.php'</script>";
  }
  else
  //if username and password is incorrect
  {
    echo"<script> alert('username or password incorrect!')</script>";
    echo "<script>location.href='index.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>

<body>
  <div class="log-in">
    <form action="login.php" method="post">
      <div class="username"> Username:&nbsp;
        <input type="text" name="uname">
      </div>
      <div class="password"> Passowrd:&nbsp;
        <input type="password" name="pwd">
      </div>
      <div class="log">
        <input type="submit" name="submit" value="LOGIN">
      </div>
    </form>
  </div>
  <!-- /.login -->
</body>

</html>