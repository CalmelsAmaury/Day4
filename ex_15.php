#!/usr/bin/env php
<?php
foreach($days as $day => $subjects){
    echo $day. " : ";
    foreach($subjects as $index => $subject){
        if($index > 0){
            echo ", ";
        }
        echo $subject;
    }
    echo ".\n";
}