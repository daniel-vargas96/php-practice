<!-- ***PHP FUNCTIONS*** -->

<!--
  Types of built in functions:
  - String functions
  - Numeric functions
  - Date Function
  -->

<!-- Why use built in functions? -->

<!-- User defined functions come in handy when:
- you have routine tasks in your application such as adding data to the database
- performing validation checks on the data
- Authenticating users in the system etc. -->

<?php

//define a function that displays hello function
function add_numbers()
{
  echo 1 + 2;
}
add_numbers();
?>


<?php
function display_name($name)
{
  echo "Hello " . $name;
}
display_name("Martin Luther King");
?>


<?php
function kilometers_to_miles($kilometers = 0)
{
  $miles_scale = 0.62;
  return $kilometers * $miles_scale;
}
echo kilometers_to_miles(100);
?>
