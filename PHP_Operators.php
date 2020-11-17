<?php

// 1. Write a PHP script to see if the specified year is a leap year or not

function year_check($my_year)
{
   if ($my_year == 2020)
      print("It is a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2020;
year_check($my_year);
echo "<br>";
echo "<hr>";



// 2. Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summer.

function weather_check($my_weather)
{
if($my_weather<20){
    echo "We are in the winter";
}else{
    echo "The season is summer";
}
}
$my_weather=15;
weather_check($my_weather);
echo "<br>";
echo "<hr>";

// 3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned.

$x=10;
$y=10;
if($x==$y){
    $sum=$x+$y;
    $total=$sum*3;
    echo $total;
}else{
    echo "Nothing";
}
echo "<br>";
echo "<hr>";

// 4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.

$n=50;
$sum=$n-100;
$numz=abs($sum);
if($numz<100){
    echo $numz;
}else{
    $target=$numz*3;
}
echo "<br>";
echo "<hr>";

// 5. Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.

$x=10;
$y=15;
$sum=$x+$y;
if(($x == 30) || ($y == 30) || ($x + $y == 30)){
    echo "true";
}else {
    echo "false";
}
echo "<br>";
echo "<hr>";


// 6. Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.

$x=2000; 

   if(abs($x - 100) <= 10 || abs($x - 200) <= 10){
       echo "true";
   }else{
       echo "false";
   }

echo "<br>";
echo "<hr>";

// 7. Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7

function even_number($even_num){
    if($even_num % 2 == 0){
        $total=$even_num*3;
        echo $total;
    }else{
        $total2=$even_num*7;
        echo $total2;
    }
}
$even_num=10;
even_number($even_num);
echo "<br>";
echo "<hr>";

// 8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.

$str1 = "if the quick code is here";
$x = str_replace( 'if', '', $str1);
if( is_string($x))
  {
  echo $str1."\n";
  }else{
      echo "unchanged";
  }
  echo "<br>";
echo "<hr>";


// 9. Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive

// 10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
// 11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.
// 12. Write PHP script to check for the largest number among three integers
// 13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal
// 14. Write a PHP script that accepts two integers and returns an integer










?>