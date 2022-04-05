<?php

function myFunction($name = 'Kamal'){
    echo $name . ' ' ."is my name";
}
 
$students = array('Supun' => 24,'Chanaka' => 26,"Avishka" => 25);
 
foreach ($students as $name => $age) {
    echo $name . ' ' . $age;
    echo '<br>';
}

$quantum = array('' => , );

myFunction();


?>