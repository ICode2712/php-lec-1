<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    echo "Hi Future Developers! <br>";

    $name = "Imran Hoshen <br>";
    echo $name;

    //Best Practice
    //$my_name     Snakecase (variable/function)
    //$myName      camelCase (Method/Function)
    //$MyName      PascelCase (Class)
    
    //changing value of existed variable
    $name = "Imran <br>";
    echo $name;

    //Constant
    define("CONSTANT_NAME","value");
    define("PI", 3.1416);
    echo PI;


    /* 
    Data Types:
        Scaler types:
            Integer
            Float/Double
            Boolean
        Compound Types:
            Array
            Object
        Special Types:
            Null
            Resource
    */

    $age = 25;
    $price = 40.43;
    $myName = "Imran Hoshen";
    $is_admin = false;
    $is_user = true;


    $fruits = ["Mango", "Banana", "Pineapple"];
    echo "$fruits[0]<br>";

    //$user1 = new User();

    $variable = NULL;
    //$file = fopen("test.txt", "r");


    echo is_int($price);

    //Arithmetic Operator
    $a = 100;
    $b = 10;
    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;
    $exponentiation = $a ** $b;

    echo "$addition<br>";
    echo "$subtraction<br>";
    echo "$multiplication<br>";
    echo "$division<br>";
    echo "$modulus<br>";
    echo "$exponentiation<br>";

    //Assignment Operator
    $a += 2;    //$a = $a + 2;
    echo "$a<br>";

    $a -= 2;    //$a = $a - 2;
    echo "$a<br>";

    $a *= 2;    //$a = $a * 2;
    echo "$a<br>";

    $a /= 2;    //$a = $a / 2;
    echo "$a<br>";
    
    $a %= 2;    //$a = $a % 2;
    echo "$a<br>";


    ?>

</body>
</html>