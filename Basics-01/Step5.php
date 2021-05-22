
<?php

$course_name = 'Flutter';
$enrolled_students = 9;
$price = 99.99;
$on_discount = true;

echo "Course title: $course_name <br>
      Enrolled Students: $enrolled_students <br>
      Course price: $price $ USD<br>
      Course on discount: " .
    ($on_discount ? 'Yes' : 'No')
    . " / " .
    (!$on_discount ? 'Yes' : 'No');

?>