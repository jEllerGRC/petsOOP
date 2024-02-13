<?php

/**
 * This class is meant to represent a dog of no particular breed.
 * @author Jared Eller
 */
    class Dog extends pet
    {
        /**
         * This method lets a given dog go fetch its toy.
         * @return void
         */
        function fetch()
        {
            echo "<p>" . $this -> getName() . " is fetching. </p> <br>";
        }

        function eat()
        {
            echo "<p>" . $this -> getName() . " is eating dog food </p>";
        }

    }
?>
