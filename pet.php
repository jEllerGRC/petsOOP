<?php

/**
 * This class represents pets in a pet store.
 * @author Jared Eller
 * @copyright NULL; I'm not claiming ownerhsip of this tragedy.
 */
class Pet
{
    private $_name;
    private $_color;

    //default constructor; a constructor HAS to be named __construct();
//    function __construct()
//    {
//        //assigning values to the fields
//        $this -> _name = "unknown";
//        $this -> _color = "White";
//    }
    //overloading methods in PHP is NOT allowed, so this one is commented out.

    //this sets the default value to "unknown"
    function __construct($name = "unknown", $color = "?")
    {
        $this -> _name = $name;
        $this -> _color = $color;
    }

    /**
     * This function returns the name of the pet.
     * @return string the pet's name.
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * This function alters the name of the pet with the user's provided value.
     * @param string $name The pet's new name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * This function returns the dominant color of the pet's coat.
     * @return string What color the pet's fur is.
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * This function alters the color of the pet's coat.
     * Don't ask how, it's magic.
     * @param string $color The new color of the pet's fur.
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    //functions

    /**
     * The eat method prints a line which states that the pet is eating
     * something.
     * @return void
     */
    function eat()
    {
        echo $this ->_name . " is eating <br>";
    }

    /**
     * This method prints a line, allowing the pet to state an onomatopoeia.
     * Or whatever string the user provides.
     * @param string $word what the pet will say
     * @return void
     */
    function talk($word)
    {
        echo $this -> _name . ": $word!<br>";
    }

    /**
     * This method puts the pet to sleep by printing a line stating so.
     * @return void
     */
    function sleep()
    {
        echo $this -> _name . " has fallen asleep... <br>";
    }
}
?>