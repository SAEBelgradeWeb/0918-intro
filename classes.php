<?php
include_once('templates/functions.php');

class Person {

    public $firstname;
    public $lastname;

    public function __construct($name, $familyname)
    {
        $this->firstname = $name;
        $this->lastname = $familyname;
    }

    private function run()
    {
        echo "Look at me I am running!";
    }

    public function introduce()
    {
        echo "Hello, I am {$this->firstname} {$this->lastname}";
        echo "<br>";
        $this->run();
    }

    protected static function jump()
    {
        echo "I am jumping";
    }
}

class Ut {
    public static function dd($var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die();
    }

}

class SuperPerson extends Person {

    public function fly() {
        echo "I can fly!!!";
        $this->jump();
    }

    public function run() {
        echo "Look at me, I am running at the speed of light!";
    }
}
//Person::jump();

$mike = new Person("Mike", "Smith");
//$mike->introduce();

$vladimir = new Person("Vladimir", "Lelicanin");
//$vladimir->introduce();
//$vladimir->run();
//$vladimir->

$clark = new SuperPerson("Clark", "Kent");
//$clark->introduce();

//$clark->fly();
//$clark->run();
//$mike->hair = "black";
//$mike->height = 186;
//$mike->run();


//Ut::dd($mike);