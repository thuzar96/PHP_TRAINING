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
  if($_POST['uname']==$uname && $_POST['pwd']==$pwd ){
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