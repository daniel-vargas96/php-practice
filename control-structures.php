
<!-- ***PHP IF Else*** -->

<?php
if (condition is true) {

block one

else

block two

}
?>

<!-- Example -->
<?php

$first_number = 7;

$second_number = 21;

if ($first_number > $second_number){

echo "$first_number is greater than $second_number";

}else{

echo "$second_number is greater than $first_number";

}

?>

<!-- ***PHP Switch Case*** -->
<?php
switch(condition){

case value:

//block of code to be executed

break;

case value2:

//block of code to be executed

break;

default:

//default block code

break;

}
?>

<!-- Example -->
<?php

$today = "wednesday";

switch($today){

case "sunday":

echo "pray for us sinners.";

break;

case "wednesday":

echo "ladies night, take her out for dinner";

break;

case "saturday":

echo "take care as you go out tonight.";

break;

default:

echo "have a nice day at work";

break;

}

?>


<!-- ***Summary*** -->

<!--
  Control structures are used to control the execution of the program
The if then... else is when you have more than route block of code to
execute depending on the value of the condition
Switch… case is used to when you have a number of block codes,
and you only have to execute one of them depending on the value of the set case.
-->
