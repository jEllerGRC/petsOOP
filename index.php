<?php

    //ALWAYS turn on error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //Include the class definition
    require ("pet.php");
    require ("dog.php");
    require ("cat.php");

    //Create an object
    $pet1 = new Pet();
    $pet2 = new Pet("Hickup", "White");

    //Call some methods on the pet objects
    $pet1 -> eat();
    $pet1 -> talk("bark");
    $pet1 -> sleep();

    $pet2 -> eat();
    $pet2 -> talk("meow");
    $pet2 -> sleep();
    $pet2 -> setName("Joey");
    echo $pet2 -> getName() . "<br>";
    $pet2 -> setColor("Tabby");
    echo $pet2 -> getColor() . "<br>";

    //creating a dog object
    $dog = new Dog("Sydney");

    //invoking some methods, both inherited and native to the object
    $dog -> eat();
    $dog -> fetch();

    $cat = new Cat("Jackson", "Gray");
    $cat -> scratch();
    //var_dumping an object is kind of like toString() in Java
//    var_dump($pet1);
//    var_dump($pet2);
?>