<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Form</title>
</head>

<body>
  <div class="container">
    <form action="userAccount.php" method="post">
      <input type="email" name="email" placeholder="EMAIL" required="">
      <input type="password" name="password" placeholder="PASSWORD" required="">
      <div class="send-button">
        <input type="submit" name="loginSubmit" value="LOGIN">
      </div>
      <a href="forgotPassword.php">Forgot password?</a>
    </form>
  </div>
</body>

</html>