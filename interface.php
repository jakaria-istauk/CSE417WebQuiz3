<?php
include './header.php';

echo '<h3>Interface:</h3><br>';

interface human{
public function setname($name);
public function getage($age);
}

class student implements human{
    private $name;
    private $age;
    
    public function setname($name) {
        echo $this->name="John, ";
    }
    
    public function getage() {
        echo $this->age=20;
    }
}

student();



include './footer.php';