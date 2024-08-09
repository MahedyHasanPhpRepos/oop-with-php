<!-- for more details and please check my hashnode article following this link  -->
<!-- https://php-basics-revisions.hashnode.dev/php-basics-revision-topic-name-traitsstatic-methods-and-properties -->


<?php

// traits:
// php only supported single inheritance , 
//a child class can inherit from one single Parent class ,
//if we need multiple behaviours from more then one class,traits solve this problem .

trait message1
{
    public function msg1()
    {
        echo "OOP is fun";
    }
}

trait message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication!";
    }
}

class Welcome
{
    use message1; //trait-1 
}
class Welcome2
{
    use message1, message2; // trait-1 and trait-2
}

$obj = new Welcome(); //has access of all methods of only trait-1 
$obj2 = new Welcome2(); //has access of all methods of trait-1 and 2
$obj->msg1();
// $obj->msg2();
$obj2->msg1();
$obj2->msg2();

echo "\n";


// static method:
// Static methods can be called directly without creating instance of the class.
// static methods are declared with the static keyword

class Greeting
{
    public static function welcome()
    {
        echo "hello php";
    }
}
Greeting::welcome();
echo "\n";


// calling a static method from another class non-static method


class A
{
    public static function welcome()
    {
        echo "Hello World! From Static Method";
    }
}
class B
{
    public function msg()
    {
        A::welcome();
    }
}
$b = new B();
$b->msg();
echo "\n";

// another example for static method

class Domain
{
    protected static function getWebSiteName()
    {
        return "mhdyhasan.com";
    }
}

class DomainW3 extends Domain
{
    public $webName;
    public function __construct()
    {
        $this->webName = parent::getWebSiteName();
    }
}
$d = new DomainW3();
echo $d->webName;
echo "\n";

echo "\n";
