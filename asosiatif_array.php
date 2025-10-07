<?php
/* First method to associate create array. */
$salaries = array(
"arjuna" => 3000,
"bima" => 2500,
"nakula" => 1500
);
echo "Salary of arjuna is ". $salaries['arjuna'] . "<br />";
echo "Salary of bima is ". $salaries['bima']. "<br />";
echo "Salary of nakula is ". $salaries['nakula']. "<br />";
/* Second method to create array. */
$salaries['arjuna'] = "very high";
$salaries['bima'] = "high";
$salaries['nakula'] = "medium";
echo "Salary of arjuna is ". $salaries['arjuna'] . "<br />";
echo "Salary of bima is ". $salaries['bima']. "<br />";
echo "Salary of nakula is ". $salaries['nakula']. "<br />";
?>