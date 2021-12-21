<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST">
    <input type="file" name="upload"><br>
    <label for="folder">Folder Name</label><br>
    <input type="text" name="folder"><br>
    <input type="submit" name="img_submit">

  </form>
  <?php
  $folder = $_POST['folder'];
  $img_name = $_FILES['img_upload']['name'];
  $tmp_img_name = $_FILES['img_upload']['tmp_name'];

  if (isset($_POST['img_submit'])) {
    mkdir($folder);
    move_uploaded_file($tmp_img_name, "$folder/$img_name");
  }


  ?>
</body>

</html>