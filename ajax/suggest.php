<?php
//get from db
$people[] ="steve";
$people[] = "kamal";
$people[] = "Amal";
$people[] = "Bimal";
$people[] = "Pasan";
$people[] = "Himal";
$people[] = "Shenal";
$people[] = "Ajmal";
$people[] = "Vikum";
$people[] = "Uditha";
$people[] = "Dasun";
$people[] = "Anura";
$people[] = "Ashika";
$people[] = "Randi";
$people[] = "Ramith";
$people[] = "Ushan";
$people[] = "Pamal";
$people[] = "Harsha";
$people[] = "Supun";
$people[] = "Onesha";
$people[] = "Pasindu";
$people[] = "Kasun";
$people[] = "Devika";
$people[] = "Pattric";
$people[] = "Isuru";
$people[] = "Pramudi";
$people[] = "Prasadini";
$people[] = "Nimal";
$people[] = "saman";



//Get query string

$q = $_REQUEST['q'];

$suggestion = "";


//get suggetion

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        # code...
        if(stristr($q , substr($person,0,$len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "\tNo suggetion" : "\t".$suggestion;