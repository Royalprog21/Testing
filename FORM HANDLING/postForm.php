<?php
    $Name = $_POST["Name"];
    $Id = $_POST["Id"];
    $Email = $_POST["Email"];
    $DOB = $_POST["DOB"];
    $gen = $_POST['gen']; //single quote
    $age = $_POST['age']; //single quote

    echo "Your name is: $Name, <br> 
    Your ID Number: $Id <br>
    Your email address is: $Email <br> 
    You were born on: $DOB <br> 
    Your gender is: $gen <br>
    You are: $age years
    ";
