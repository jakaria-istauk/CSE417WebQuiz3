<?php
include './header.php';

echo '<h3>Contructor and Destructor:</h3><br>';

class jakaria{
    //Contructor
    public function __construct() {
        echo 'The Class "'.__CLASS__.'" was initiated ! <br>';
    }
    
    //Destructor
    public function __destruct() {
        echo 'The Class"'.__CLASS__.'"was destroyed ! <br>';
    }
}

//creat new object

$obj_jakaria= new jakaria();

//Destroy the object
unset($obj_jakaria);

//mesage
echo 'Reached to the end of file.<br>';

include './footer.php';



