<?php
$marks = array( "Arjuna" => array (
"physics" => 35, "maths" => 30, "chemistry" => 39
),
"Bima" => array ( "physics" => 30, "maths" => 32, "chemistry" => 29
),
"Yudistira" => array ( "physics" => 31,
"maths" => 22, "chemistry" => 39
)
);
/* Accessing multi-dimensional array values */
echo "Marks for Arjuna in physics : " ;
echo $marks['Arjuna']['physics'] . "<br />";
echo "Marks for Bima in maths : ";
echo $marks['Bima']['maths'] . "<br />";
echo "Marks for Yudistira in chemistry : " ;
echo $marks['Yudistira']['chemistry'] . "<br />";
?>