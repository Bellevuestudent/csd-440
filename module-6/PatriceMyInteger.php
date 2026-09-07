<?php
declare(strict_types=1);

class PatriceMyInteger
{
    // single integer property to hold the value,
    //private so accessible only through the class methods.
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    //getter and setter methods for the number property
    public function getNumber(): int
    {
        return $this->number;
    }
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    //method to check if the number is even or odd
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }

    public function isOdd(int $number ): bool
    {
        return $number % 2 !== 0;
    }

    //method to check if the number is prime
    public function isPrime(): bool
    { 
        //check if the number is less than 2, if so return false, 
        //because prime numbers are greater than 1.
        if ($this->number< 2){
            return false;
        
        }
        //loop through all numbers from 2 to the number - 1,
        //if the number is divisible by any of these numbers, return false.
        for ($i = 2; $i < $this->number; $i++){
        if ($this->number % $i === 0){
            return false;
        }
        }
        return true;
    }
}
    /* 
    Object of the class PatriceMyInteger is created with the value 5 and 8
    and assigned to the variable $integer1 and $integer2 respectively.
     */
    $integer1= new PatriceMyInteger(5);
    $integer2= new PatriceMyInteger(8);

    //store the original values of the integers in variables $original1 and $original2.
    $original1 = $integer1->getNumber();
    $original2 = $integer2->getNumber();

    /* 
    This part ensures that the test results for the original numbers 
    are saved and correctly displayed in the table, even after the setter method
    is called to change the values of $integer1 and $integer2.
    Save test results for the original numbers
     */
    $even1 = $integer1->isEven($original1);
    $odd1 = $integer1->isOdd($original1);
    $prime1 = $integer1->isPrime();

    $even2 = $integer2->isEven($original2);
    $odd2 = $integer2->isOdd($original2);
    $prime2 = $integer2->isPrime();

    // Test setter method by changing the value of $integer1 to 10 and $integer2 to 12.
    $integer1->setNumber(10);
    $integer2->setNumber(12);
    
?>


<!DOCTYPE html>
<html lang="en">
<!-- This Program tests numbers and displays if they are even, odd, or prime 
 To do so, it uses the PatriceMyInteger class methods with for loops and conditionals 
 For the test, it creates two PatriceMyInteger objects with values 5 and 8 and displays
 their properties in a table -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrice MyInteger</title>

    <!-- Oxanium font from Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Oxanium">

    <!-- CSS Styles -->
    <style>
        body {
            font-family: "Oxanium", Arial, sans-serif;
            font-size: 20px;
            color: blue;
            background: linear-gradient(to top, #addeb9, #2be450);
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background: linear-gradient(to top, #8bdae8, #22badd);
            color: white;
        }
    </style>
</head> 

<body>

    <h1>Patrice MyInteger Test</h1>

    <!-- Table displaying the properties of the integers -->
    <table>
        <tr>
            <th>Original Number</th>
            <th>Setter Test</th>
            <th>Even</th>
            <th>Odd</th>
            <th>Prime</th>
        </tr>

        <tr>
            <td><?= $original1 ?></td>
            
            <td><?= $integer1->getNumber() === 10
                ? "Setter works! it changed to " . $integer1->getNumber()
                : "Setter failed" ?></td>

            <td><?= $even1
                ? "Come on of course it is!!"
                : "What do you think? it is not" ?></td>

            <td><?= $odd1
                ? "Yes, it is odd"
                : "Nope, not odd" ?></td>

            <td><?= $prime1
                ? "Yes, it is prime"
                : "No, it is not prime" ?></td>
        </tr>

        <tr>
            <td><?= $original2 ?></td>

            <td><?= $integer2->getNumber() === 12
                ? "Setter works! it changed to " . $integer2->getNumber()
                : "Setter failed" ?></td>

            <td><?= $even2
                ? "Come on of course it is!!"
                : "What do you think? it is not" ?></td>

            <td><?= $odd2
                ? "Yes, it is odd"
                : "Nope, not odd" ?></td>

            <td><?= $prime2
                ? "Yes, it is prime"
                : "No, it is not prime" ?></td>
        </tr>
    </table>


</body>

</html>