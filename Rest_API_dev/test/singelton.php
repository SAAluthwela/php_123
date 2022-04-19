<?php
 function __autoload($class_name){
     include 'classes/'.$class_name.'.php';
 }
 
// singelton implementation


 class Connection {

    private function __construct(){
        echo 'new object created!<br>';
    }


    public static function getInstance(){
       static $instance; // = null;

        if(null == $instance){
          $instance = new static();
        }else{
            echo 'using existing object!<br>';
    }
    return $instance;
 }
}


 $obj1 = Connection::getInstance();

 $obj2 = Connection::getInstance();

 $obj3 = Connection::getInstance();


?>