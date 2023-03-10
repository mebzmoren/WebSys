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
        //printing
        echo "Hello!";
        print("Hello!");        //another way to print
        echo "Hello" . "World"; //to concatenate strings

        //varrialbles
        $var1 = "Hello";        //to declare a variable
        $var2 = 1234;
        $var3 = null;
        $var4 = 1.0;
        $var5 = 1;

        echo "<br>$var1<br>";   //to print variable
        $var1;                  //will not print and won't display as an error
        var_dump($var1);        //will print the structured information
        var_dump($var2);
        var_dump($var3);
        var_dump($var4);

        define("school", "<br>Silliman University");
        define("score", 100, true);
        echo school;
        echo score;

        if($var4 == $var5)
            echo "<br>Equal";
        else
            echo "<br>Not Equal";

        if($var4 === $var5)
            echo "<br>Same Type";
        else
            echo "<br>Different Type";

        phpinfo();
    ?>
</body>
</html>