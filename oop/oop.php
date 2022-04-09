<?php


/*

// Public

  class Person{
     public $name;
     public $email;
  }


 $person1 = new Person;
 



 $person1->name = "Supun";
 $person1->email = "supunakalanka2017@gmail.com";

 echo $person1->name.' '. $person1->email;

*/

/*

// Private - Getters and Setters need

 class Person{
     private $name;
     prvate $email;

     public function getName(){
         return $this->name;
     }

     public function setName($name){
         $this->name = $name;
     }
 }

 $person2 = new Person;

 $person2->setname('John doe');

 echo $person2->getName();



*/


class Animal{
    private $name;
    private $NOL;

    public function __construct($name, $NOL){
        $this->name = $name;
        $this->NOL = $NOL;
        echo __CLASS__.'created<br>';
    }

    //deconstructor

    public function __deconstruct(){
        echo __CLASS__.'detroyed';
    }

    public function getName(){
        return $this->name.'<br>';
    }

    public function getNOL(){
        return $this->NOL.'<br>';
    }
}