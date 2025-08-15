<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
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

    $user1 = new User();

    $variable = NULL;
    //$file = fopen("test.txt", "r");


    echo is_int($price);

    //Arithmetic Operator
    $a = 10;
    $b = 20;
    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;
    $exponentiation = $a ** $b;

    echo "$addition";
    echo "$subtraction";
    echo "$multiplication";
    echo "$division";
    echo "$modulus";
    echo "$exponentiation";

    //Assignment Operator
    //$a = 10;

    ?>

</body>
</html>