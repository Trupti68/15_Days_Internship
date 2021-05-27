<?php
//Choice given as input
$a=2;
//Applied switch case
switch($a){
    //case 1 displays something
    case 1:
        echo "This is case one";
        break;
   //case 2 displays something
    case 2:
        echo "This is case two";
        break;
    //If the user select an inappropriate choice then this message will be displayed on the screen
    default:
    echo "please select choice between 1-3";
}
?>