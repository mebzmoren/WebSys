<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Seatwork</title>
</head>
<body>
    <?php
        $arr = array ("coffeebean" => "coffee", "sansrival" => "cakes", "stateresa" => "filipinofood", "2story" => "koreanfood", "mooon" => "mexicanfood");

        foreach($arr as $place => $food){
            echo $place . "has" . $food;
        }
    ?>
</body>
</html>