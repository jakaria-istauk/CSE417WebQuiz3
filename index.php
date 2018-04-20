<?php
include './header.php';

echo '<h3>Class and Object:</h3><br>';

class Triangle{
    //Declare properties
    public $side1=0;
    public $side2=0;
    public $base=0;
    public $height=0;
    
    //Declare method
    public function area(){
        echo 'Area of triangle: ';
        return(.5 * $this->base * $this->height);
    }
    
    public function perimeter(){
        echo 'Perimeter of triangle: ';
        return($this->side1 + $this->side2 + $this->base);
    }
    
}
//Creating Object
$obj_triangle = new Triangle();

//Get Default Values
echo 'Default Values<hr>';
echo "side1=".$obj_triangle->side1."<br>"; //outout = 0
echo "side2=".$obj_triangle->side2."<br>"; //outout = 0
echo "Base=".$obj_triangle->base."<br>"; //outout = 0
echo "Height=".$obj_triangle->height."<br><br>"; //outout = 0

//Set Values 
$obj_triangle->side1=20; 
$obj_triangle->side2=30; 
$obj_triangle->base=50; 
$obj_triangle->height=25; 

//Get new Values
echo 'New Set Values<hr>';
echo "side1=".$obj_triangle->side1."<br>"; //outout = 20
echo "side2=".$obj_triangle->side2."<br>"; //outout = 30
echo "Base=".$obj_triangle->base."<br>"; //outout = 50
echo "Height=".$obj_triangle->height."<br><br>"; //outout = 15

//Call  methods
echo 'Get Values from methods<hr>';
echo $obj_triangle->area()."<br>";
echo $obj_triangle->perimeter();

include './footer.php';
?>
 
