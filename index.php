<?php
// $names='my name is rania ';
// print(strtoupper($names).'<br>');
// print(strtolower($names).'<br>');
// print(ucfirst($names).'<br>');
// print(ucwords($names).'<br>');
/*-----------------------------------------------------*/

// $num='345678';
// $h=substr($num,0,2);
// $m=substr($num,2,2);
// $s=substr($num,4,2);
// $time=$h.":" . $m .":". $s;
// echo $time;

/*-----------------------------------------------------*/

// $str='I am a full stack developer at orange coding academy';
// $words='ranioa';
// // $words='stack';
// if(strpos($str, $words))
// {
//     echo 'Word Found';
// }else
// {
//     echo 'Word  Not Found';
// }

/*-----------------------------------------------------*/

// $filePath='C:\Users\user\Desktop\works\test-jobs.html';
// echo basename($filePath);

/*-----------------------------------------------------*/

// $eamilName='rania.alhosan@gmail.com';
// $username=strstr($eamilName,'@',true);
// echo $username;

/*-----------------------------------------------------*/

// $emilName='raniaalhosan@gmail.com';
// $username=strstr($emilName,'.',false);
// echo $username;

/*-----------------------------------------------------*/

// $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// $charactersLength = strlen($characters);
// $passwordLength = 10; 
// $randomPassword = '';


// for ($i = 0; $i < $passwordLength; $i++) {
//     $randomIndex = mt_rand(0, $charactersLength - 1);
//     $randomPassword .= $characters[$randomIndex];
// }

// echo $randomPassword; 

/*-----------------------------------------------------*/

// $firstStr = "HI My Name is Ranya";
// $arrStr = explode(" ", $firstStr);
// $replaceStr = "Welcome";
// $arrStr[0] = $replaceStr;  

// $newStr = implode(" ", $arrStr); 
// echo $newStr;  

/*-----------------------------------------------------*/

// $str1 = 'dragonballkl';
// $str2 = 'dragonboll56457565';
// $minLength = min(strlen($str1), strlen($str2));
// $char = '';

// for ($i = 0; $i < $minLength; $i++) {
//         if ($str1[$i] == $str2[$i]){
//             continue;   
//         }else if($str1[$i] != $str2[$i]){
//             $char .= $str1[$i] . " vs " . $str2[$i] . " <br>";
       
//         }
// }
// echo $char;

/*-----------------------------------------------------*/

// $firstStr = "HI My Name is Ranya";
// $arrStr = explode(" ", $firstStr);
// var_dump ($arrStr);

/*-------------------chr/ord----------------------------------*/

// $first='a';
// $nextLetter = chr(ord($first) + 1);
// if ($first == 'z') {
//     $nextLetter = 'a';
// } elseif ($first == 'Z') {
//     $nextLetter = 'A';
// }
// echo $nextLetter;

/*----------------------------------------------------*/

// $originalStr = 'The brown fox';
// $insertStr = 'quick';
// $position = strpos($originalStr, 'brown');
// $newStr= substr($originalStr, 0, $position) . $insertStr. ' ' . substr($originalStr, $position);
// echo  $newStr;

/*--------------------------------------------------*/

// $strNum='0000657022.249080';
// $newNum='';
// for($i=0;$i<strlen($strNum);$i++){
//     if($strNum[$i] != '0'){
//         $newNum .=$strNum[$i];
//     }
  
// }
// echo $newNum;

/*-----------------------------------------------------*/

// $str="The quick brown fox jumps over the lazy dog";

// $arrStr = explode(" ", $str);
// for($i=0;$i<count($arrStr);$i++){
// if($arrStr[$i]===  'fox'){
//     unset($arrStr[$i]);
// }
// }
// $newStr = implode(" ", $arrStr); 
// print($newStr);

/*---------------------------------------------------*/

//  $str='The quick brown fox jumps over the lazy dog---';
//  $newStr=rtrim( $str,'-');
//  echo $newStr;

/*---------------------------------------------------*/

// $str="\"\1+2/3*2:2-3/4*3";
// $newStr = "";
// for($i=0;$i<strlen($str);$i++){
//  if(is_numeric($str[$i]) )
//  $newStr .= $str[$i];
// }
// print($newStr);

/*---------------------------------------------------*/

// $str="The quick brown fox jumps over the lazy dog";
// $arrStr = explode(" ", $str);
// $newStr="";
// for($i=0;$i<5;$i++){
//  $newStr .= $arrStr[$i] ." ";
// }
// echo $newStr;

/*--------------------- str_replace------------------------------*/

// $numStr = '2,543.12';
// $cleanStr = str_replace(',', '', $numStr);
// echo $cleanStr;  

/*---------------------------------------------------*/

// foreach (range('a', 'z') as $l) {
//     echo $l . " ";
// }

/*---------------------------------------------------*/
