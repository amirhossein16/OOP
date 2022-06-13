<?php

require "ClassItem.php";
require "Person.php";
require "Student.php";

$class = new ClassItem(1, 'Mathematics', 'best');
// set duration and days
$class2 = new ClassItem(2, 'Science', 'exciting');
// set duration and days
$class3 = new ClassItem(3, 'Gym', 'Good');

$student = new Student('ali', 'karami', 25);

$student->addClass($class)->addClass($class2);
var_dump($student->isStudentHasClass($class3)); //true
echo "<pre>";
print_r($student);
echo "</pre>";

// ***************** Add for check removeClass Method *******************

//$student->removeClass($class);
echo "<b>Class List Names : </b>";
$i = 1;
foreach ($student->classList() as $item) {
    echo "$i) " . ($item->getName()) . "&nbsp&nbsp";
    $i++;
}
echo "<pre>";
print_r($student->classList());
echo "</pre>";

//must like this
//[
//  ['id'=>1,'name'=>'Mathematics','description'=>'best','duration'=>1or2,'days'=>[]],
//  ['id'=>2,'name'=>'Science','description'=>'exciting','duration'=>1or2,'days'=>[]]
//]


