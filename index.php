<?php

$age = 4;

if ($age >15) {
    $entryfee = 100;
}

else {
    $entryfee = 50;
}

if ($age <= 15 || $age >= 65) {
    $entryfee = 50;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>protože ti je <?= $age?> tak platíš <?=$entryfee?></p>
</body>
</html>