<?php

/*-------------------------------------------------------------------- */

// $num='';
// for($i=1;$i<=10;$i++){
//     $num .=$i ." ";
// }
// echo $num;

/*-------------------------------------------------------------------- */

// $total=0;
// for($i=1;$i<=30;$i++){
// $total +=$i;

// }
// echo $total;

/*-------------------------------------------------------------------- */

// $rows = 5;
// $char = 'A';

// for ($i = 0; $i < $rows; $i++) {  //i=1 row=5
//     for ($j = 0; $j < $rows; $j++) {//j=0
//         if ($j < $rows - $i - 1) { 
//             //0<(5-0-1) > 0<4/ 1<4 /2<4 / 3<4 / 4<4 /5<4
//             //1<(5-1-1) > 0<3 / 1<3 / 2<3 / 3<3 / 1<3
//             echo "A ";
//         } else {
//             echo chr(ord($char) + $i) . " ";
//         }
//     }
//     echo "<br>"; 
// }

/*-------------------------------------------------------------------- */

// $row=5;
// $num=1;
// for($i=0;$i<$row;$i++){
//     for($j=0;$j<$row;$j++){
//         if ($j < $row - $i - 1) { 
//             echo "$num";
//         } else {
//          echo $num + $i . " ";
//         }
//     }
//     echo "<br>"; 
// }

/*-------------------------------------------------------------------- */

// for($i=0;$i<5;$i++){
// for($j=0;$j<5;$j++){
//        if($i+1==$j+1)
//        {
//         echo $i+1;
//        }
//        else{
//         echo 0;

//        }
//     }
//     echo "<br>"; 
// }

/*-------------------------------------------------------------------- */

// $num=5;
// $factorialNumber=1;
// for ($i=1;$i<=$num;$i++){
//  $factorialNumber *=$i;
// }
// echo $factorialNumber;

/*-------------------------------------------------------------------- */

// $n = 10;
// $fib1 = 0;
// $fib2 = 1;
// echo $fib1 . ", " . $fib2; 
// for ($i = 2; $i < $n; $i++) {
//     $fib_next = $fib1 + $fib2;
//     echo ", " . $fib_next;
//     $fib1 = $fib2;
//     $fib2 = $fib_next;
// }

/*-------------------------------------------------------------------- */

// $str = "Orange Coding Academy ";
// $charToCount = 'c';
// $count = 0;

// $strLower = strtolower($str);
// $charToCount = strtolower($charToCount);

// for ($i = 0; $i < strlen($strLower); $i++) {
//     if ($strLower[$i] == $charToCount) {
//         $count++; 
//     }
// }

// echo $count ;

/*-------------------------------------------------------------------- */
// echo "<table cellpadding='3px' spacing='0px' border='1px'>";

// for($i=1;$i<=6;$i++){
//     echo "<tr>";
//     for($j=1;$j<=5;$j++){
//         echo "<td>$i * $j = " . ($i * $j) . "</td>";


//     }
//     echo "</tr>";
// }

// echo "</table>";

/*-------------------------------------------------------------------- */

// for ($i=1;$i<=100;$i++){
//     if($i%3==0){
//         echo '<span style="color:red">Fizz</span>' . " ";
//     }else  if($i%5==0){
//         echo '<span style="color:blue">Buzz</span>' ." ";
//     }else if($i%3==0 && $i%5==0){
//         echo '<span style="color:purple">FizzBuzz</span>' ." ";
//     }
//     else {
//         echo $i ." ";
//     }
// }

/*-------------------------------------------------------------------- */
// $num=1;
// for($i=1;$i<= 5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo $num . " ";
//         $num++;
//     }
//     echo '<br>';    
// }

/*-------------------------------------------------------------------- */

// function generatePyramidPattern($n) {
//     for ($i = 1; $i <= $n; $i++) {
//         for ($k = $n - $i; $k > 0; $k--) {
//             echo "&nbsp;&nbsp;"; 
//         }
       
//         for ($j = 1; $j <= $i; $j++) {
//             echo chr(64 + $j) . " ";
//         }
//         echo "<br>";
//     }
    
   
//     for ($i = $n - 1; $i >= 1; $i--) {
        
//         for ($k = $n - $i; $k > 0; $k--) {
//             echo "&nbsp;&nbsp;"; 
//         }
        
//         for ($j = 1; $j <= $i; $j++) {
//             echo chr(64 + $j) . " ";
//         }
//         echo "<br>";
//     }
// }


// $num = 9;   
// generatePyramidPattern($num);

// ?>