<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widt h=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Text</h2>
        <?php
        if ($file = fopen("sample.txt", "r")) {
            while (!feof($file)) {
                $line = fgets($file);
                echo ("$line" . "<br>");
            }
            fclose($file);
        }
        ?>
    </div>
</body>

</html>