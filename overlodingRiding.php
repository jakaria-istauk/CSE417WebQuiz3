<?php
include './header.php';

echo '<h3>Overloading and Overriding :</h3><br>';

class parents{
    public function display(){
        echo 'Displaye From parent Class<br>';
    }
    
    public function add($a, $b){
        return $a+$b."<br>";
    }
}

class child extends parents{
   public function display(){
        echo 'Displaye From Child Class<br>';
    } 
    
    public function add($a, $b, $c){
        return $a+$b+$c."<br>";
    }
}

$obj_parent=new parents();
$obj_child=new child();

echo 'This is overriding<hr>';
$obj_parent->display();
$obj_child->display();

echo '<br><br>This is overloading<hr>';
echo $obj_parent->add(20, 40);
echo $obj_child->add(30, 40, 20);

include './footer.php';