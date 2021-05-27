<?php
//Initialize the variable fact by 1
$fact = 1;
//Give the input number as 4
$num = 4;
//If input number is 0 then it will display error message 
if($num<0){
    echo "Factorial doesn't exists";
}else{
    //By using for loop we will use the foemula that is n(n-1)! to get the output
    for ($i=1; $i <=$num; $i++) { 
        $fact *= $i;
    }
    //Output
    echo "The factorial of the given number $num is: $fact";
}

?>