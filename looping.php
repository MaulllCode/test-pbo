<?php
// looping while
// $x = 10;

// while ($x >= 1) {
//     echo "The number is: $x <br>";
//     //   $x++;
//     $x--;
//     // $x+=2;
// }

// looping do-while
// $x = 1;

// do {
//     echo "The number is: $x <br>";
//     $x++;
// } while ($x >= 5);

// looping for
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
// }

// looping foreach
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $value) {
//     echo "$value <br>";
// }

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
