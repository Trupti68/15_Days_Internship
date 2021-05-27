<?php  
//Initialize the variables
$num = 0; 
//Initialize the variables 
$n1 = 0;  
//Initialize the variables
$n2 = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
//This is foe new line
echo "\n";  
//This is how output will be displayed
echo $n1.' '.$n2.' ';
//Logic for this program  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?>  