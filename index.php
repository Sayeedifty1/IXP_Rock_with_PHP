<!-- //!sessions -->
<?php
// Start the session
session_start();
?>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- sessions -->
    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";

    echo "Session variables are set.";
    ?>


    <!-- php syntax -->
    <?php echo "Hello World" . "<br>" ?>

    <?php echo "Hello from php" . "<br>" ?>
    <?php echo "Hello hey" . "<br>"
    /* echo "Hello hey";
   echo "Hello hey";
   echo "Hello hey";
   echo "Hello hey";*/  //comment //! multi line comment /*-----*/,  single line comment //, #

    ?>
    <!-- cookies -->
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <!--//TODO: Variables -->
    <br>
    <!-- best practice camel case -->
    <!-- variole starts with $ -->
    <?php
    $name = "John Doe";
    $age = 25;
    $_age = 35;
    $age_ = 25;
    $AGE = 10;
    $age1 = 25;
    # $1age = 25; //error
    echo $name;
    echo $age;
    echo 'my name is ' . $name, 'my age ' . $age . "<br>";
    echo $age1 + $age . "<br>";
    echo ($age1 + $age) . "<br>";
    print $age1 + $age . "<br>";
    print ($age1 + $age) . "<br>";
    # print is faster than echo
    ?>

    <!-- Data types in php -->
    <?php
    $string = "Hello World";
    $integer = 10;
    $float = 10.5;
    $boolean = true;
    $null = null;
    $array = array(1, 2, 3, 4, 5);
    $object = new stdClass();
    $resource = fopen('index.php', 'r');
    $callable = function () {
        return true;
    };

    // object
    class Phone
    {
        var $brand;
        var $model;
        function phoneModel($number)
        {
            global $model;
            $model = $number;
            echo "this is model: " . $model . "<br>";
        }
    }

    $apple = new Phone;
    $apple->phoneModel("iPhone");
    $samsung = new Phone;
    $apple->phoneModel("s22 ulta");

    // all about string
    $string = "Hello World";
    echo strlen($string) . "<br>";
    echo str_word_count($string) . "<br>";
    echo strrev($string) . "<br>";
    echo strpos($string, "World") . "<br>";
    echo str_replace("World", "PHP", $string) . "<br>";
    echo str_repeat($string, 5) . "<br>";
    echo strtoupper($string) . "<br>";
    echo strtolower($string) . "<br>";
    echo ucfirst($string) . "<br>";
    echo ucwords($string) . "<br>";
    echo lcfirst($string) . "<br>";
    echo trim($string) . "<br>";
    echo ltrim($string) . "<br>";
    echo rtrim($string) . "<br>";
    echo substr($string, 0, 5) . "<br>";
    echo substr($string, 6) . "<br>";
    echo substr($string, -5) . "<br>";
    echo substr($string, -5, 2) . "<br>";
    echo substr($string, -5, -2) . "<br>";

    var_dump("this is string: " . $string);
    var_dump($integer);
    /* echo gettype($string) . "<br>";
        echo gettype($integer) . "<br>";
        echo gettype($float) . "<br>";
        echo gettype($boolean) . "<br>";
        echo gettype($null) . "<br>";
        echo gettype($array) . "<br>";
        echo gettype($object) . "<br>";
        echo gettype($resource) . "<br>";
        echo gettype($callable) . "<br>"; */
    ?>

    <h4>Loops</h4>
    <!-- loops in php -->
    <h6>While loop</h6>
    <?php
    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
    <h6>Do While loop</h6>
    <?php
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    ?>
    <h6>For loop</h6>
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>
    <h6>foreach loop</h6>
    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
    <h6>Break/continue</h6>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>

    <!--//!Debugging Techniques In PHP
    Method 1: var_dump()
    Method 2: print_r()
    Method 3: get_defined_vars()
    Method 4: debug_zval_dump()
    Method 5: debug_print_backtrace()
    Method 6: debug_backtrace() -->
</body>

</html>