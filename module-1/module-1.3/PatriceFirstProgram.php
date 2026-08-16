<!DOCTYPE html>
<!-- 
    Patrice Moracchini
    Assignment module 1.3 
    August 16, 2026.
    This is my first PHP program: it demonstrates how to use PHP 
    It uses a CSS styling with a Google font, the echo statement and
    the var_dump function to identify the type and value of variables
    -->
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Patrice's First Program</title>
    <!-- add a link to the Oxanium font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">
    <!-- add CSS styling to the page -->
    <style>
        
        body {
        font-family: "Oxanium",Arial, sans-serif;
        font-size: 20px;
        color: black;
        text-shadow: 3px 3px 3px #ababab;
        background-color: lightgray;
        padding: 20px;
        }
        h1 {
        color: blue;
        text-shadow: 3px 3px 3px #ababab;
        text-align: center;
        }
        h2 {
        text-align: center;
        margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <h1>Welcome to my first program!</h1>

<!--  add a PHP code block that outputs a string to the page -->
    <?php
    $txt = " look at me, I am a PHP program!";
    echo "<h2>" . $txt . "</h2>";
    ?>
    <p> I will demonstrate how to use a PHP function that returns the
        data and the type of the value. <br>
        The function is called var_dump().</p>

<!-- add a PHP code block that uses the var_dump() function 
to output the data and type of a string, an array, 
and a boolean value -->
    <pre>   <!-- allows the output to be displayed in a preformatted text block
         with line breaks and indentation preserved -->
    <?php
    $interesting = "interesting";
    var_dump("Hello World");
    var_dump([2, $interesting, 3.14, true]);
    ?>
    </pre>
</body> 
</html>