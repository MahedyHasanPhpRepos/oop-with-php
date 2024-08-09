


<!-- for more details and please check my hashnode article following this link  -->
<!-- https://php-basics-revisions.hashnode.dev/php-basics-revision-topic-name-classobjectconstructordestructoraccess-modifiers -->


<?php


class Fruit
{


    //class properties 
    public $name; //property-1
    public $color; //property-2

    // Methods

    // method-1 this is a setter method 
    // we will assign a value in public $name property using
    // this set_name() setter method

    public function setName($name)
    {
        $this->name = $name;
        // $this keyword is targeting parent scope of set_name()
        // method or Current Objects property public $name
        // and equal sign is assigning 
        // value of $name parameter 
        // to targeted public $name property
    }

    //method-2 this is a getter method 
    //we will get or retrive the value of public $name property
    // using this get_name() getter method
    function getName()
    {
        return $this->name;
    }
}


$f1 = new Fruit();
$f1->setName('orange');

echo $f1->getName();



class Fruit2
{
    public $name;
    public $color;



    public function setterMethod($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


    function getterMethod()
    {
        return "The Name Is :" . $this->name . " And The Color Is : " . $this->color . "\n";
    }
}


$f2 = new Fruit2();
$f2->setterMethod('orange', 'blue');
echo $f2->getterMethod();





class Fruit3
{
    public $name;
    public $color;



    //__construct() method is allow us to initialize an 
    //object's properties when we create the instance of 
    //class with out write setter_method
    //__contruct method starts with two under score
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // __distruct method  if we create a distruct method
    // php will call it 
    // automatically at the end of the script 

    function __destruct()
    {
        echo "The Fruit Name is {$this->name} and the fruit color is {$this->color}" . '\n';
    }
}


echo "\n";

$f3 = new Fruit3('sakura plum', 'indigo');
$f4 = new Fruit3('blue berry', 'navy blue');

//we don't need to echo to view the properties current value

// access modifies examples 


class Fruit4
{
    public $name;
    protected $color;
    private $weight;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}

$mango = new Fruit4();

$mango->name = "mm"; //will not give a error 
//but 
//$mango->color = "col"
// $mango->weight = 1010 
// will throw a error because color is protected and 
// weight is private property to set a value in 
// color and weight we need a setter method 
// and when we want to access the value of 
// color and weight , we need e getter method

$mango->setName('mango');
$mango->setColor('green');
$mango->setWeight('1010');

echo ($mango->name); // name can be access because its public 

//echo ($mango->color); //will throw a error 
echo ($mango->getColor());
echo ($mango->getWeight());



echo "\n";


// for more details and please check my hashnode article following this link  
// https://php-basics-revisions.hashnode.dev/php-basics-revision-topic-name-classobjectconstructordestructoraccess-modifiers 

