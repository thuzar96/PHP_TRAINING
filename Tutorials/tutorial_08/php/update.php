<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>User Update Form</h2>
  <form action="" method="POST">
    <fieldset>
      <label> Personal Information</label>
      First Name:<br>
      <input type="text" name="firstname" value="<?php echo $first_name; ?>">
      <input type="hidden" name="user_id" value="<?php echo $id; ?>">
      <br>
      Last Name:<br>
      <input type="text" name="lastname" value="<?php echo $last_name; ?>">
      Email:<br>
      <input type="email" name="email" value="<?php echo $email; ?>">
      Password:<br>
      <input type="password" name="password" value="<?php echo $password; ?>">
      Gender:<br>
      <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                        echo "checked";
                                                      } ?>>Male
      <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                          echo "checked";
                                                        } ?>>Female
      <input type="radio" name="gender" value="Others" <?php if ($gender == 'Others') {
                                                          echo "checked";
                                                        } ?>>Others
      <br><br>
      <input type="submit" value="Update" name="update">
    </fieldset>
  </form>
  <?php
  include "index.php";
  require_once "../index.php";

  if (isset($_POST['update'])) {
    $user_id = $_POST['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $gender = $_POST['gender'];

    $sql = "UPDATE user_info SET  id='user_id',firstname = '$first_name',lastname='$last_name',email='$email',pwd='$password',gender='$gender' WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "Record is updated";
    } else {
      echo "Error" . $sql . "<br>" . $conn->error;
    }
  }
  if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM 'user_info' WHERE 'id'='$user_id'";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
      while ($row = $result->fetch()) {
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $id = $row['id'];
      }
  ?>
</body>

</html>
<?php
    } else {
      // if id invalid
      header('Location: show.php');
    }
  }
?>