<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<?php
$Name = $_GET["Name"];
$Id = $_GET["Id"];
$Email = $_GET["Email"];

echo $Name;
echo $Id;
echo $Email;

echo "These are your details";
?>
</body>
</html>