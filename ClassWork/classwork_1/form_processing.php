<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    if (strlen($name) < 3) {
        echo "The name is too short";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Wrong email";
    } else if ($pass1 !== $pass2){
        echo "Passwords must match";
    } else {
        echo "Success";
    }


    // $names = array("first" => "Misha", 2 => "Yevhen");
    // foreach ($names as $key => $name) {
    //     echo $key . " " . $name . "<br>";
    // }


    // $names[0] = "Misha";
    // $names[1] = "Yevhen";
    // $names[2] = "Sasha";
    // $names[3] = "Sveta";
    // print_r($names);


    // function sum() {
    //     // global $a;
    //     static $a = 0;
    //     $a += 10;
    //     echo "inside " . $a . "<br>";
    // }
    // sum();
    // sum();
    // sum();
    // sum();
    // echo "outside" . $a . "<br>";

    // function sum($a, $b = 0) {
    //     return $a + $b;
    // }
    // echo sum(10);


    // do {
    //     # code...
    // } while ($a <= 10);


    // while ($a <= 10) {
    //     # code...
    // }


    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }


    // $a = 1;
    // $b = 2;
    // $c = $a > $b ? $a : $b;
    // echo $c;


    // switch ($variable) {
    //     case 'value':
    //         # code...
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }


    // if (condition) {
    //     # code...
    // } else if () {

    // } else {

    // }


    // $a = true;
    // $b = false;
    // echo $a || $b;


    // Працює як в жаба скріпт
    // echo 3 !== "3";


    // $a = 10;
    // $b = 15;
    // $a .= $b;
    // echo $a . "<br>";
    // $b %= $a;
    // echo $b;


    // $var = 13;
    // echo $var % 5;


    // $a = 10.23;
    // settype($a, "integer");
    // echo $a;


    // echo is_integer($a);
    // echo gettype("ASDA");


    // define("VALUE", 27);
    // echo VALUE;
    // echo __LINE__;
    // if (defined(VALUE)) {
    //     echo 'TRUE';
    // } else {
    //     echo 'FALSE';
    // }
    

    // $someVar = 10;
    // $a = &$someVar;
    // $a += 10;
    // echo $a . "<br>" . $someVar . "<br>";
    // echo $someVar;
    // unset($someVar);
    // echo $someVar;
    

    // $a = null;
    // $b = 10;
    // echo '$a + $b';
    // echo "$a + $b";
?>   