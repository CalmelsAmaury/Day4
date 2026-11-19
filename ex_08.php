#!/usr/bin/env php
<?php
$person = [
    "surname" => "Dupont",
    "name" => "Sophie",
    "age" => 27,
];
foreach($person as $is => $what){
    echo $is. " : ". $what. "\n";
}