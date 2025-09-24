<?php
// A-
// 1
echo "Hello, World!\n";
echo "<br />";

// 2
$myName = "Omar";
$myAge = 25;
$myCity = "Amman";
echo "Name: $myName, Age: $myAge, City: $myCity\n";
echo "<br />";

// 3
$a = 5;
$b = 10;

[$a, $b] = [$b, $a];

echo "a: $a, b: $b\n";
echo "<br />";

// 4
$a = 7;
$b = 8;
$sum = $a + $b;
echo "Sum: $sum\n";
echo "<br />";

// 5
$x = $a * $b;
echo "Product: $x\n";
echo "<br />";

// 6
$rem = $a % $b;
echo "Remainder: $rem\n";
echo "<br />";

// 7
$nums = [5, 10, 15];
$avg = array_sum($nums) / count($nums);
echo "Avg: $avg\n";
echo "<br />";

// 8
$temperatureC = 125;
$temperatureF = round(($temperatureC * 9 / 5) + 32, 2);
echo "$temperatureC,°C = $temperatureF,°F\n";
echo "<br />";

// 9
$hours = 2;
$minutes = $hours * 60;
$seconds = $hours * 3600;
echo "$hours hours = $minutes minutes = $seconds seconds\n";
echo "<br />";

// 10
$myNumber = 53;
echo "Squared: ".($myNumber**2).", Cube: ".($myNumber**3)."\n";
echo "<br />";

// 11
$checkNumber = 14;
echo ($checkNumber % 2 == 0) ? "even\n" : "odd\n";
echo "<br />";

// 12
$checkNumber = -65;
echo ($checkNumber > 0) ? "positive\n" : (($checkNumber < 0) ? "negative\n" : "zero\n");
echo "<br />";

// 13
$num1 = 5; $num2 = 9; $num3 = 7;
$largest = max($num1, $num2, $num3);
echo "Largest: $largest\n";
echo "<br />";

// 14
$year = 2024;
$isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
echo $isLeap ? "leap year\n" : "not leap year\n";
echo "<br />";

// 15
$age = 20;
echo ($age >= 18) ? "can vote\n" : "cannot eligible\n";
echo "<br />";

// 16
$marks = 85;
if ($marks >= 90) echo "Grade A\n";
elseif ($marks >= 75) echo "Grade B\n";
elseif ($marks >= 50) echo "Grade C\n";
else echo "Grade F\n";
echo "<br />";

// 17
$letter = 'a';
echo in_array(strtolower($letter), ['a','e','i','o','u']) ? "$letter is a vowel\n" : "$letter is a consonant\n";
echo "<br />";

// 18
$dayNumber = 3;
$days = [1=>"Monday",2=>"Tuesday",3=>"Wednesday",4=>"Thursday",5=>"Friday",6=>"Saturday",7=>"Sunday"];
echo $days[$dayNumber] ?? "Invalid day";
echo "\n";
echo "<br />";

// 19
$checkNum = 55;
echo ($checkNum % 5 == 0 && $checkNum % 11 == 0) ? "divisible by 5 and 11\n" : "not divisible by 5,  11\n";
echo "<br />";

// 20
$myNumber = -15;
echo "Absolute: ".abs($myNumber)."\n";
echo "<br />";

// 21
for($i = 1; $i <= 10; $i++) echo "$i "; echo "\n";
echo "<br />";

// 22
for($i = 2; $i <= 50; $i += 2) echo "$i "; echo "\n";
echo "<br />";

// 23
for($i = 1; $i <= 50; $i += 2) echo "$i "; echo "\n";
echo "<br />";

// 24
$tableNumber = 5;
for($i = 1; $i <= 10; $i++) echo "$tableNumber x $i = ".($tableNumber*$i)."\n";
echo "<br />";

// 25
$total = 0;
for($i = 1; $i <= 100; $i++) $total += $i;
echo "Sum: $total\n";
echo "<br />";

// 26
$facNum = 5;
$factorial = 1;
for($i = 1; $i <= $facNum; $i++) $factorial *= $i;
echo "Factorial: $factorial\n";
echo "<br />";

// 27
$fibTerms = 10;
$first = 0; $second = 1;
echo "$first $second ";
for($i = 3; $i <= $fibTerms; $i++){
    $next = $first + $second;
    echo "$next ";
    $first = $second;
    $second = $next;
}
echo "\n";
echo "<br />";

// 28
$rev = 12345;
$reversedNumber = 0;
$temp = $rev;
while($temp > 0){
    $reversedNumber = ($reversedNumber * 10) + ($temp % 10);
    $temp = (int)($temp / 10);
}
echo "Reversed: $reversedNumber\n";
echo "<br />";

// 29
$myNumber = 12345;
$digitsCount = strlen((string)$myNumber);
echo "Digits: $digitsCount\n";
echo "<br />";

// 30
$myNumber = 123;
$digitSum = 0;
$temp = $myNumber;
while($temp > 0){
    $digitSum += $temp % 10;
    $temp = (int)($temp / 10);
}
echo "Sum of digits: $digitSum\n";
echo "<br />";

// 31
$numbers = [1, 2, 3, 4, 5];
print_r($numbers);
echo "<br />";

// 32
echo "Max: ".max($numbers)."\n";
echo "<br />";

// 33
echo "Min: ".min($numbers)."\n";
echo "<br />";

// 34
echo "Sum: ".array_sum($numbers)."\n";
echo "<br />";

// 35
echo "Average: ".(array_sum($numbers)/count($numbers))."\n";
echo "<br />";

// 36
$evenCount = 0; $oddCount = 0;
foreach($numbers as $num){
    $num % 2 == 0 ? $evenCount++ : $oddCount++;
}
echo "Even: $evenCount, Odd: $oddCount\n";
echo "<br />";

// 37
$numbersAsc = $numbers;
sort($numbersAsc);
print_r($numbersAsc);
echo "<br />";

// 38
$numbersDesc = $numbers;
rsort($numbersDesc);
print_r($numbersDesc);
echo "<br />";

// 39
$searchNumber = 3;
echo in_array($searchNumber, $numbers) ? "$searchNumber found\n" : "$searchNumber not found\n";
echo "<br />";

// 40
$unique = array_unique([1,2,2,3,4,4,5]);
print_r($unique);
echo "<br />";

// 41
$text = "Hello World";
echo "Length: ".strlen($text)."\n";
echo "<br />";

// 42
$vowC = preg_match_all('/[aeiouAEIOU]/', $text, $matches);
echo "Vowels: $vowC\n";
echo "<br />";

// 43
$reversedText = "";
for($i = strlen($text)-1; $i >= 0; $i--) $reversedText .= $text[$i];
echo "Reversed: $reversedText\n";
echo "<br />";

// 44
$cleanText = strtolower(str_replace(' ','',$text));
echo ($cleanText == strrev($cleanText)) ? "Palindrome\n" : "Not Palindrome\n";
echo "<br />";

// 45
echo strtoupper($text)."\n";
echo strtolower($text)."\n";
echo "<br />";

// 46
echo str_replace(' ','_',$text)."\n";
echo "<br />";

// 47
echo "Word count: ".str_word_count($text)."\n";
echo "<br />";

// 48
$searchWord = "World";
$pos = strpos($text, $searchWord);
echo $pos !== false ? "First occurrence at $pos\n" : "$searchWord not found\n";
echo "<br />";

// 49
$extraText = " PHP";
echo $text.$extraText."\n";
echo "<br />";

// 50
$sub = "World";
echo strpos($text,$sub)!==false ? "$text contains $sub\n" : "$text does not contain $sub\n";
?>
