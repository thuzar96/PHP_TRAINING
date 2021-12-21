<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload"><br>
        <label for="folder">Folder Name</label><br>
        <input type="text" name="folder"><br>
        <input type="submit" name="submit" value="SAVE">

    </form>
    <?php
    $folder = $_POST['folder'];
    $img_name = $_FILES['upload']['name']; // to choose folder
    $tmp_img_name = $_FILES['upload']['tmp_name'];// variable to upload folder or create folder via input

    //to save seleced folder into chosen folder
    if (isset($_POST['submit'])) {
        mkdir($folder);
        move_uploaded_file($tmp_img_name, "$folder/$img_name");
    }


    ?>
</body>

</html>