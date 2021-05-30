<?php
echo "<b><h2>Your Details for the marks are Here:</h2></b></br>";

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];

echo "<b>C Programming:</b> $a </br> <b>C++ Programming:</b>  $b </br> <b>Java Programming:</b>  $c </br> <b>Python:</b>  $d </br> <b>Web Development:</b> $e </br>-----------------------------" ;

$total = $a + $b + $c + $d + $e;

echo "</br><h3>Total Marks = $total</h3>";


$TotalValue = 500;
$percentage = ($total/$TotalValue)*100;

echo "</br></br><h3>Your Percentsge is : $percentage %</h3>";

if($percentage > 80){
    echo '<body style="background-color: green">';
    echo "</br></br> <h1>Congratulations!</br></h1><h2>Your result is First Class</h2>";
}else if($percentage > 70){
    echo '<body style="background-color: yellow">';
    echo "</br></br> <h1>Congratulations!</br></h1> <h2>Your result is Second Class</h2>";
}else if($percentage > 50){
    echo '<body style="background-color: blue">';
    echo "</br></br><h1>Congratulations!</br></h1> <h2>Your result is Pass Class</h2>";
}else{
    echo '<body style="background-color: red">';
    echo "</br></br><h1>Oops!</h1><h2>You Failed</h2>";
}
