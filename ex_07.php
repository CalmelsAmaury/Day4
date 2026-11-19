#!/usr/bin/env php
<?php
$array = range(1,10);
foreach($array as $number){
    if($number %2 == 0){
    echo $number . "\n";
    }
}