<!-- ***DATA TYPES*** -->

<!-- Alphanumeric characters are classified as strings
- Whole numbers are classified integers
- Numbers with decimal points are classified as floating points.
- True or false values are classified as Boolean. -->

<!-- **INTEGER** -->
<?php
echo PHP_INT_MAX;
?>

<!-- Floating point number – decimal numbers e.g. 3.14.
they are also known as double or real numbers.
The maximum value of a float is platform-dependent.
Floating point numbers are larger than integers.
Character string – e.g. Hello World
Boolean – e.g. True or false. -->


<!-- **PHP VARIABLE** -->

<!-- All variable names must start with the dollar sign e.g. -->
$my_var

<!-- Variable names are case sensitive; this means
$my_var is different from $MY_VAR -->

<!-- All variables names must start with a letter follow other characters e.g.
$my_var1. $1my_var is not a legal variable name. -->


<!-- Variable names must not contain any spaces, “$first name” is not a legal
variable name. You can instead use an underscore in place of the
space e.g. $first_name. You cant use characters such as the dollar or
minus sign to separate variable names. -->

<?php
$my_var = 1;
echo $my_var;
?>

<!-- Floating point numbers -->
<?php
$my_var = 3.14;
echo $my_var;
?>

<!-- Character strings -->
<?php
$my_var ="Hypertext Pre Processor";
echo $my_var;
?>

<!-- TYPE CASTING -->
<?php
  $first_name = 1; //integer data type
  $second_name = 1.1; //float data type
  $result = $first_name + $second_name; //no type casting required
  echo $result;
?>

<!-- PHP also allows you to cast the data type. This is known as explicit casting.
The code below demonstrates explicit type casting. -->
<?php
$a = 1;
$b = 1.5;
$c = $a + $b;
$c = $a + (int) $b; //seems like turning the data type for the b variable rounds the integer down
echo $c;
?>

<!-- Above Code Output 2 The var_dump function is used to determine the data type.
The code below demonstrates how to use the var_dump function. -->
<?php
$a = 1;
var_dump($a);
$b = 1.5;
var_dump($b);
$c = "I Love PHP";
var_dump($c);
$d = true;
var_dump($d);
?>
<!-- Output: int(1) float(1.5) string(10) "I Love PHP" bool(true) -->
