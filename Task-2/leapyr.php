<?php
//Input
$year = 2021;
//If the year is divisible by 400 and remainder is 0 then it is a leap year
if($year % 400 == 0){
    echo "$year is a leap year";
//If the year is divisible by 100 and remainder is 0 then it is not a leap year
}else if($year % 100 == 0){
    echo "$year is not a leap year";
//If the year is divisible by 4 and remainder is 0 then it is a leap year
}else if($year % 4 == 0){
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";
}
?>