<?php
/* First method to create array. */
$numbers = array( 6, 7, 8, 9, 10);
foreach( $numbers as $value )
{
echo "Value is $value <br />";
}
/* Second method to create array. */
$numbers[0] = "six";
$numbers[1] = "seven";
$numbers[2] = "eight";
$numbers[3] = "nine";
$numbers[4] = "ten";
foreach( $numbers as $value )
{
echo "Value is $value <br />";
}
?>