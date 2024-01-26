<!-- variables.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 100px;
        }
        h2, h3 {
            color: #333;
        }
    </style>
</head>
<body>
    
<?php
$name = "Dan";
$age = 35;
$isStudent = true;

echo "<h2>Name: $name</h2></br>
      <h3>Age: $age</h3></br>
      <h3>Is Student: " . ($isStudent ? 'Yes' : 'No') . "</h3>";
?>

</body>
</html>
