<?php
declare(strict_types=1); 
?>
<!-- 
 Patrice Moracchini
 Assignment module 5.2
 This program uses PHP/HTML to display customer information in tables. It filters customers based on age,
 phone number, and first name, and displays the results in separate tables.
 The page is styled using CSS and uses the Oxanium font from Google Fonts. 
 -->
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Patrice's Customers</title>

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
      <h1>Customers Table</h1>
    <?php
    // define a multi-dimensional array of 10 customers with first name, last name, age, and phone number.
    $customers = array(
        array(
            'firstName' => "Tim",
            'lastName' => "Curry",
            'age' => 30,
            'phoneNumber' => "123-456-7890"
        ),
        array(
            'firstName' => "Glenn",
            'lastName' => "Close",
            'age' => 79,
            'phoneNumber' => "987-654-3210"
        ),
        array(
            'firstName' => "Madonna",
            'lastName' => "Ciccone",
            'age' => 68,
            'phoneNumber' => "555-555-5555"
        ),
        array(
            'firstName' => "Tom",
            'lastName' => "Hanks",
            'age' => 67,
            'phoneNumber' => "111-222-3333"
        ),
        array(
            'firstName' => "Meryl",
            'lastName' => "Streep",
            'age' => 74,
            'phoneNumber' => "444-555-6666"
        ),
        array(
            'firstName' => "Denzel",
            'lastName' => "Washington",
            'age' => 69,
            'phoneNumber' => "777-888-9999"
        ),
        array(
            'firstName' => "Julia",
            'lastName' => "Roberts",
            'age' => 54,
            'phoneNumber' => "222-333-4444"
        ),
        array(
            'firstName' => "Jennifer",
            'lastName' => "Lawrence",
            'age' => 31,
            'phoneNumber' => "333-444-5555"
        ),
        array(
            'firstName' => "Jennifer",
            'lastName' => "Aniston",
            'age' => 54,
            'phoneNumber' => "666-777-8888"
        ),
        array(
            'firstName' => "Courteney",
            'lastName' => "Cox",
            'age' => 57,
            'phoneNumber' => "555-000-1111"
        )
    );

    // filter the customers based on age, phone number, and first name using array_filter() and anonymous functions.
    $over60customers = array_filter($customers, fn($customer) => $customer['age'] >= 60);

    $phoneNumber555Customers = array_filter($customers, fn($customer) => substr($customer['phoneNumber'], 0, 3) === '555'); 

    $jenniferCustomers = array_filter($customers, fn($customer) => $customer['firstName'] === 'Jennifer');
    ?>

    <!-- for the table, I use three foreach loops because array_filter preserve the original keys
    and it was displaying blank rows in the table.
    It got too complicated to use a single for each loop to display all the customers in one table.
    So I decided to change the logic, use three separate tables for each criteria
    and stick them together with css to make one table. -->
    <table>
        <tr>
        <th>Customers Over 60 Years Old</th>
        </tr>
        <?php foreach ($over60customers as $customer): ?>
            <tr>
                <td><?= $customer['firstName'] . " " . $customer['lastName']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table>
        <tr>
            <th>Customers With Phone Number Starting with 555</th>
        </tr>
        <?php foreach ($phoneNumber555Customers as $customer): ?>
            <tr>
                <td><?= $customer['firstName'] . " " . $customer['lastName']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <table>
        <tr>
            <th>Customers named Jennifer</th>
        </tr>
        <?php foreach ($jenniferCustomers as $customer): ?>
            <tr>
                <td><?= $customer['firstName'] . " " . $customer['lastName']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
