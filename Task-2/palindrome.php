<?php  
//Created a function called palindrome in that parameter n is passed
function palindrome($n){  
$number = $n;  
$sum = 0;  
//Using while loop for implementing the logic
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
//Input given by the user
$input = 123521;  
$num = palindrome($input);  
//condition checks
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>  