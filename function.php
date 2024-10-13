<?php
/*--------------------------------------------------------------- */

// function isPrime($num) {
//     for ($i = 2; $i <= sqrt($num); $i++) {
//         if ($num% $i != 0) {
//             return true; 
//         }
//     }

//return false; 
// }
// $number = 29; 
// if (isPrime($number)) {
//     echo "$number is a prime number.";
// } else {
//     echo "$number is not a prime number.";
// }

/*--------------------------------------------------------------- */

// function reverseStr($str)
// {
// print(strrev($str));
// }
// reverseStr('RaniaIbrahim');

/*--------------------------------------------------------------- */
// function checkLower($str) {
//     $allLower = true; 

//     for($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] !== strtolower($str[$i])) {
//             $allLower = false; 
//             break;           
//         }
//     }

//     if ($allLower)
//         echo 'text is all lowercase';
//     else
//         echo 'text is not all lowercase';
// }

// checkLower('rania');  

/*--------------------------------------------------------------- */
// function swapNum($num1,$num2){
//     $num1=5;
//     $num2=6;
//     echo 'num1 '.$num1 .'<br>';
//     echo 'num2 '.$num2 .'<br>';

//     $swap=$num1;
//     $num1=$num2;
//     $num2=$swap;
//     echo '*******************'. '<br>';
//     echo 'num1  after swap '.$num1 .'<br>';
//     echo 'num2  after swap '.$num2 .'<br>';
// }
// swapNum(4,6);

/*--------------------------------------------------------------- */
// function armstrongNumber($str) {
//     $sum = 0;
//     $num = (int)$str;  
 
//     for ($i = 0; $i < strlen($str); $i++) {
//         $digit = (int)$str[$i];  
//         $sum += $digit * $digit * $digit;  
//     }

//     if ($sum === $num) {
//         echo $sum . ' = ' . $num . ' (Armstrong number)';
//     } else {
//         echo 'Try another number, ' . $num . ' is not an Armstrong number';
//     }
// }

// armstrongNumber('477');
/*--------------------------------------------------------------- */
// function isPalindrome($str) {

//     $cleanedStr = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    
    
//     $reversedStr = strrev($cleanedStr);
    
    
//     if ($cleanedStr === $reversedStr) {
//         echo "Yes, it is a palindrome";  
//     } else {
//         echo "No, it is not a palindrome";  
//     }
// }

// isPalindrome("Eva, can I see bees in a cave?");
/*--------------------------------------------------------------- */
// function removeDuplicates($arr){
//     foreach($arr as $a){
//         echo $a . " ";
//     }
//     echo '<br>';
//     for($i=0;$i<count($arr);$i++){
//         if($arr[$i] === $arr[$i+1])
//         unset($arr[$i]);

//     }
//     foreach($arr as $a){
//         echo $a . " ";
//     }
//     echo '<br>';
   
// }
// removeDuplicates([2,2,5,6,7,8,9,9]);