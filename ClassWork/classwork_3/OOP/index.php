<?php
    class User{
        public $name;
        public $age;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        function toString(){
            return "Name = " . $this->name . "<br>Age = " . $this->age;
        }

        function __destruct(){
            echo "<br>destruct user";
        }
    }

    class SomeUser extends User{
        public $gender;
        private static $userName = "User";
 
        function __construct($name, $age, $gender){
            parent::__construct($name, $age);
            $this->gender = $gender;
        }

        static function getUserName(){
            return self::$userName;
        }

        static function sum($a, $b){
            return $a + $b;
        }

        function toString(){
            return parent::toString() . "<br>Gender = " . $this->gender;
        }

        function __destruct(){
            echo "<br>destruct someuser";
        }
    }

    echo SomeUser::sum(3, 7);
    echo SomeUser::getUserName();

    $some_user = new SomeUser('Yevhen', 17, 'male');
    echo $some_user->toString() . "<br>";
?>