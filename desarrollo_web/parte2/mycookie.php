<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aless_Caballero</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["mycookie"])) {
        echo $_COOKIE["mycookie"]."<br>";
    }else {
        echo "no ha creado cookies";
    }
    ?>
</body>
</html>