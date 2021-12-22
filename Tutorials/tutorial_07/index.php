<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code generator</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <label for="id"> ID</label>
        <input type="text" name="input_id">
        <input type="submit" name="submit" value="SAVE">
    </form>
</body>
<?php
include 'library/phpqrcode/qrlib.php';
  
// $text variable has data for QR 
$text = "GEEKS FOR GEEKS";
  
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text);
?>
</html>
