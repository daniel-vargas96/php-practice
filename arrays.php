<!-- Numeric Arrays

Numeric arrays use number as access keys.
An access key is a reference to a memory slot in
an array variable.
The access key is used whenever we want to read or
assign a new value an array element. -->
<?php
  $variable_name[n] = value;
?>

<!-- OR -->

<?php
  $variable_name = array(n => value, ...);
?>

<?php
  $movie[0] = 'Shaolin Monk';
  $movie[1] = 'Drunken Master';
  $movie[2] = 'American Ninja';
  $movie[3] = 'Once upon a time in china';
  $movie[4] = 'Replacement Killers';
  echo $movie[3];
  $movie[3] = " Eastern Condors"
  echo $movie[3];
?>

<?php
$movie = array(0 => "Shaolin Monk",
               1 => "Drunken Master",
               2 => "American Ninja",
               3 => "Once upon a time in China",
               4 =>"Replacement Killers" );
echo $movie[4];
?>


<!-- PHP Associative Array -->

<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons);
echo "";
echo "Mary is a " . $persons["Mary"];
?>


<!-- PHP Multi-dimensional arrays -->
<?php
  $movies = array(
    "comedy" => array("Pink Panther", "John English", "See no evil"),
    "action" => array("Die Hard", "Expendables"),
    "epic" => array("Lord of the rings"),
    "romance" => array("Romeo and Juliet")
  );
  print_r($movies);
?>

<?php
$film=array(

                "comedy" => array(

                                0 => "Pink Panther",

                                1 => "john English",

                                2 => "See no evil hear no evil"

                                ),

                "action" => array (

                                0 => "Die Hard",

                                1 => "Expendables"

                                ),

                "epic" => array (

                                0 => "The Lord of the rings"

                                ),

                "Romance" => array

                                (

                                0 => "Romeo and Juliet"

                                )

);
echo $film["comedy"][0];
?>

<!-- PHP Array Functions -->

<!-- Count function
  The count function is used to count the number of elements
  that an php array contains. The code below shows the
  implementation.
 -->

<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo count($lecturers);
?>

<!-- is_array function -->

<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo is_array($lecturers);
?>

<!-- Sort -->
<!-- This function is used to sort arrays by the values.
If the values are alphanumeric, it sorts them in alphabetical order.
If the values are numeric, it sorts them in ascending order.
It removes the existing access keys and add new numeric keys.
The output of this function is a numeric array -->

<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

sort($persons);

print_r($persons);
?>

<!-- ksort -->
<!-- This function is used to sort the array using the key.
The following example illustrates its usage. -->
<?php
  $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

  ksort($persons);

  print_r($persons);
?>

<!-- asort -->
<!-- This function is used to sort the array using the values.
The following example illustrates its usage. -->

<?php

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

asort($persons);

print_r($persons);

?>
