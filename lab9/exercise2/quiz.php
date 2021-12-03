<?php

$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
echo "Question 1: What state is The University of Kansas in?<br>";
echo "You answered: " . $question1 . "<br>";
echo "Correct answer: Kansas<br>";
echo "<br>";

echo "Question 2: How many days are in a week?<br>";
echo "You answered: " . $question2 . "<br>";
echo "Correct answer: 7<br>";
echo "<br>";

echo "Question 3: What is the 12th month?<br>";
echo "You answered: " . $question3 . "<br>";
echo "Correct answer: December<br>";
echo "<br>";

echo "Question 4: What animal meows?<br>";
echo "You answered: " . $question4 . "<br>";
echo "Correct answer: Cat<br>";
echo "<br>";


echo "Question 5: What color is the sky normally<br>";
echo "You answered: " . $question5 . "<br>";
echo "Correct answer: Blue<br>";
echo "<br>";

$correctAns = 0;
if ($question1 == "Kansas") {$correctAns += 1;}
if ($question2 == "7") {$correctAns += 1;}
if ($question3 == "December") {$correctAns += 1;}
if ($question4 == "Cat") {$correctAns += 1;}
if ($question5 == "Blue") {$correctAns += 1;}
$correctPercent = $correctAns / 5 * 100;
echo "<br>Number answered correctly: ".$correctAns."/5<br>";
echo "<br>Percent answered correctly: ".$correctPercent."%<br>";

?>
