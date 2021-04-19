<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php pages</title>
</head>
<body>
    <h1>value is NULL</h1>
    <?php
    $whatsit = null;
    echo "Value is ";
    echo var_dump($whatsit);
    echo "<br>";
   
    echo "Value is Integer <br>";
    $whatsit=23;
     echo "Value is ";
    echo var_dump($whatsit);


    ?>
</body>
</html>