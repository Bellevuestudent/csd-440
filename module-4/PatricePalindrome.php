<?php declare (strict_types=1);
  ?>
<!-- 
Patrice Moracchini
Assignment Module 4.2

This program stores six words in an array. A function uses a foreach
loop to reverse each word, compare the original and reversed words
without case sensitivity, and display whether each word is a palindrome.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrice's Palindrome Test</title>

<!-- add a link to the Oxanium font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">

<!-- add CSS styling to the page -->
    <style>
        body {
            font-family: "Oxanium", Arial, sans-serif;
            font-size: 20px;
            color: black;
            background-color: lightgray;
            padding: 20px;
            text-shadow: 3px 3px 3px #ababab;
        }
        
        h1 {
            color: #6B2D3A;
            text-shadow: 3px 3px 3px #ababab;
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
        }
        
        th {
            border: 3px solid black;
            padding: 10px;
            text-align: center;
            background-color: #6B2D3A;
            color: white;
            font-weight: bold;
            text-shadow: none;
        }
        
        td {
            border: 3px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Palindrome Test</h1>
    <table>
        <!-- Table header -->
        <tr>
            <th>Word</th>
            <th>Reversed Word</th>
            <th>Is Palindrome?</th>
        </tr>
<?php

// Required function that tests and displays all six words.
function findPalindrome() {

    // Store three palindromes and three non-palindromes.
    $words = array("Racecar", "Level", "Kayak", "Rose", "Apple", "Tomato");

    //Repeat the palindrome test for each word in the array.
    foreach ($words as $word) {

        // Reverse the current word.
        $reversed = strrev($word);

        // Compare the original and reversed words without case sensitivity.
        $compare = strcasecmp($word, $reversed);

        // Convert the comparison result to "Yes" or "No".
        $isPalindrome = ($compare === 0) ? "Yes" : "No";

?>
        <!-- Display the current word's results in one table row. -->
        <tr>
            <td><?= $word; ?></td>
            <td><?= $reversed; ?></td>
            <td><?= $isPalindrome; ?></td>
        </tr>
<?php
    }
}

findPalindrome();
?>
    </table>
</body>
</html>