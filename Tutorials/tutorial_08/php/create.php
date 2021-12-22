<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USER INFORMATION</title>
</head>

<body>
  <h2> Signup From</h2>
  <form action="" method="POST">
    <fieldset>
      <label> Personal Information</label><br>
      First Name:<br>
      <input type="text" name="firstname"><br>
      Last Name:<br>
      <input type="text" name="lastname"><br>
      Email:<br>
      <input type="email" name="email"><br>
      Password:<br>
      <input type="password" name="password"><br>
      Gender:<br>
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="Female">Female
      <input type="radio" name="gender" value="Others">Others
      <br><br>
      <input type="submit" name="submit" value="Create">
    </fieldset>
  </form>
  <?php
  require_once "../index.php";
  include "index.php";

  //to insert new data into table
  if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
  }
  $sql = "INSERT INTO 'user_info' ('firstname','lastname','email','password','gender') VALUES ('$first_name', '$last_name','$email','$password','$gender')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "new record is created";
  } else {
    echo " Error" . $sql . "<br>" . $conn->error;
  }

  $conn->end;
  ?>
</body>

</html>