<!-- Gurjit Kaur 8622642 -->

<!-- Part-1 -->

<?php
// creating two variables

$base = 15.896;
$height = 95.18;

// Calculating area
$area = 0.5*($base * $height);

// Round function

$area = Round($area,3);

echo "<p>The area of the tringle is: </p>".$area;


// create constant

define("MY_NAME", "Gurjit Kaur");
echo "<br/> My first name is <strong>".strtoupper(MY_NAME)."</strong>";

?>
