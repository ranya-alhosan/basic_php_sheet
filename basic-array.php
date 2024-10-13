<?php
// $arrColor=['red','green'];
// print('The memory of that scene for me is like a frame of film
//  forever frozen at that moment: the '.$arrColor[0].' carpet, the '. $arrColor[1].' lawn, the white house,
//  the leaden sky. 
//  The new president and his first lady. - Richard M. Nixon');
/************************************************************************************** */
// $colors = array('white', 'green', 'red');
// foreach($colors as $color){
//     echo '<ul>';
//     echo '<li>'.$color.'</li>';
//     echo '</ul>';
// }
/************************************************************************************** */
// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
// "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
//  "Finland"=>"Helsinki", "France" => "Paris",
//   "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
//   "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
//    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

//    foreach($cities as $key=>$value){
//     echo '<ul>';
//     echo '<li>The capital of  '.$key.' is '. $value.'</li>';
//     echo '</ul>';
// }
/************************************************************************************** */
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// print($color[4]);
/************************************************************************************** */
// $array = [1, 2, 3, 4, 5];
// $location = 4; 
// $newItem = '$';  

// for ($i = count($array); $i >= $location; $i--) {
//     $array[$i] = $array[$i - 1];  
// }

// $array[$location - 1] = $newItem;

// print_r($array);
/************************************************************************************** */
// $fruits = array(
//     "d" => "lemon",
//     "a" => "orange",
//     "b" => "banana",
//     "c" => "apple"
// );

// ksort($fruits);

// foreach ($fruits as $key => $value) {
//     echo "$key = $value" .'<br>';
// }
/************************************************************************************** */
// $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// $average = array_sum($temperatures) / count($temperatures);

// sort($temperatures);                 

// $lowest = array_slice($temperatures, 0, 5);

// $highest = array_slice($temperatures, -5);

// echo "Average Temperature is: " . round($average, 1) . "<br>";
// echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
// echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";
// 
/************************************************************************************** */
// $array1 = array("color" => "red", 2, 4); 
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $mergedArray = array_merge($array1, $array2);
// print_r($mergedArray);
/************************************************************************************** */
// $colors = array("red","blue", "white","yellow");
// foreach($colors as $color)
// echo strtoupper($color) .'<br>';
/************************************************************************************** */
// $colors = array("RED","BLUE", "WHITE","YELLOW");
// foreach($colors as $color)
// echo strtolower($color) .'<br>';
/************************************************************************************** */
// for($i=200;$i<=250;$i++)
// if($i%4==0)
// echo $i .'<br>';
/************************************************************************************** */

// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");x
// $shortestLength = PHP_INT_MAX; 
// $longestLength = 0;
// foreach ($words as $word) {
//     $length = strlen($word);
//     if ($length < $shortestLength) {
//         $shortestLength = $length;
//     }
//     if ($length > $longestLength) {
//         $longestLength = $length;
//     }
// }
// echo "The shortest array length is: " . $shortestLength . "<br>";
// echo "The longest array length is: " . $longestLength . "<br>";
/************************************************************************************** */
// for($i=1;$i<=10;$i++)
// echo rand(11,20)." ";
/************************************************************************************** */
// $array1 = array( 2,-8, 0, 10, 12, 6);
// $min=$array1[0];
// foreach($array1 as $num){
//     if($num !=  0 && $num < $min)
//     $min=$num;
     
// }
// echo $min;

