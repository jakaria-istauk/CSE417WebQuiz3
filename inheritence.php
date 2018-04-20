<?php
include './header.php';

echo '<h3>Classes Through inheritence :</h3><br>';

require './class/squre.php';

class Rectangule extends squre{
    
    public function isrectangle(){
        if($this->height == $this->width){
            return false;
        } else {
            return true;
        }
    }
}

$obj_squre = new Rectangule();

$obj_squre->height=20;
$obj_squre->width=40;


if($obj_squre->isrectangle()){
    echo 'The are of rectangle is ';
} else {
    echo 'The are of squre is ';
}

echo $obj_squre->area();

include './footer.php';