<?php

$signal = "green";

switch ($signal) {
    case "red":
        echo "止まれ";
        break;


    case "yellow":
        echo "注意";
        break;


    case "blue":       
    case "green":
        echo "進め";
        break;

default:
    echo "信号の色ではありません";
    break;    
    
        
}
