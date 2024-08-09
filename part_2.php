
for more details please 

<!-- https://php-basics-revisions.hashnode.dev/php-basics-revision-topic-name-inheritanceabstract-classinterfaces -->


<?php


// inheritance

class Fruit
{
    public $name;
    protected $color;
    private $weight;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


    //parents method printing value of $name and $color

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// $f1 = new Fruit('orange' , 'green') ; 
// $f1->intro() ; 


//now here is the child method Apple
//Which extends parent class Fruit
//with extends keyword 

class Apple extends Fruit
{
    //this a class from children class 
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }

    // setter method in child class but it can 
    //set the value to parent class properties

    public function setColor($color)
    {
        $this->color = $color;
    }
    //getter method can retieve properties of parent class 
    public function getColor()
    {
        return $this->color;
    }

    // getter method it can not retieve properties from 
    //parent class because of access modifier is private 
    //private properties only can be access from defind class
    //here private $weight defind in parent class Fruit
    //it can be only accessable from parent class Fruit


    public function getWeight()
    {
        return $this->weight; //this will throw an error beacuse weight is private
        // only accessable from Parent class 
    }
}


$mango = new Fruit('mango', 'orange');
$mango->intro();


$apple = new Apple('apple', 'green');
$apple->message();
$apple->intro();
$apple->setColor('indigo');
echo ($apple->getColor());
// echo ($apple->getWeight());

echo "\n";

// method overriding 
// Inherited methods can be overridden by redefining 
//the same methods (use the same name) in the child class.

class Fruit2
{
    public $name;
    protected $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}


class Orange extends Fruit2
{
    private $weight;

    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}


$mango = new Fruit('mango', 'orange');
// ********
$mango->intro();


$orange = new Orange('apple', 'green');
$orange->message();
$orange->intro(); //will return intro of child method 
echo ($orange->getColor()); //will return default value 'green'
$orange->setColor('indigo'); // will set 'indigo' to color
echo ($orange->getColor()); // will return 'indigo'
$orange->setWeight(1000); // will set private property value weight
// ******** methods name same but works differently in different scope 
$orange->intro(); // will return children overrided method 
echo ($orange->getColor()); // will return setted color indigo , if
//we don't set color then it will return default color value 'green'

// ************ 
// if we write final method in parent class and want to override from child class then it's can not be possible .





// Abstract class 

// define methods in Abstruct class and implements same methods in extended child class 


abstract class Car //abstract class with abstract keyword
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    //defining abstract method and this method will 
    //return a string value 
    //we just initialize the abstract method named intro here
    //we will implement all functionality as required in 
    // extended child classes 
    //here access modifier is public and function name is intro
    //have no parament 
    //if intro function have any parameter then children class
    //must insert same number of parament in intro class
    //abstract protected function intro('parameter-1','parameter-2'): string;
    abstract public function intro(): string;
}



//rules of implement abstract method in child class
//1. access modified must be same 
//2. function name must be same 
//3. number of parameter of method must be same 

class Audi extends Car
{
    //same access modified function name same , parameter number same
    //abstract protected function intro('parameter-1','parameter-2'): string;
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}


class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}


$a1 = new Audi('audi');
echo ($a1->intro());
echo "\n";
$v1 = new Volvo('volvo');
echo ($v1->intro());
echo "\n";
$c1 = new Citroen('citroen');
echo ($c1->intro());
echo "\n";


// more example abstract methods 

abstract class ParentClass
{
    abstract protected function prefixName($name);
}


class ChildClass extends ParentClass
{
    private $prefix;
    public function prefixName($name, $separator = ".", $greet = "Dear")
    {
        if ($name == 'Jhon Doe') {
            $this->prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $this->prefix = "Mrs";
        } else {
            $this->prefix = "";
        }
        return "{$greet} {$this->prefix}{$separator} {$name}";
    }
}

$c1 = new ChildClass();
echo $c1->prefixName('Jhon Doe');




// Interfaces: 

// Interfaces: interfaces allows you to specify what methods a class should implement.

// A class should implements which methods interface allows.

// when one or more classes use the same interfece , its referred to as polymorphism

// polymorphism is same named methods but different behaviour inside different classes


interface Gadget
{
    public function needElecticity();
}

class Computer implements Gadget
{

    public function needElecticity()
    {
        echo "220 volt per hour\n";
    }
}

class Notebook implements Gadget
{
    public function needElecticity()
    {
        echo "170 volt per hour\n";
    }
}


class Phone implements Gadget
{
    public function needElecticity()
    {
        echo "110 volt per hour\n";
    }
}



$g1 = new Computer();
$g1->needElecticity();

$n1 = new Notebook();
$n1->needElecticity();

$p1 = new Phone();
$p1->needElecticity();
echo "\n";


// difference between Interface and Abstract Class:

//     1.interface cannot have properties but Abstract method have properties .

//     2.All Interface methods must be public where Abstract methods can be public or protected

//     3.A single Child class can implements an Interface and also Extends a Parent class both in same time.



