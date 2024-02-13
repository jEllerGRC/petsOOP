<?php
    class Cat extends pet
    {
        function scratch()
        {
            echo "Ouch! " . $this -> getName() . " scratched you!<br>";
        }
    }
?>