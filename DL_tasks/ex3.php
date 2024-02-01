<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;1,400;1,600&family=Montserrat:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
        <title>Exercise 3</title>
</head>
<body>
<?php include 'header.php'; ?>
<h3>Exercise 3</h3>
<!-- FORM -->
<form method="post">
    <fieldset>
    <div class="form-group">
            <label for="firstname" class="p-2">First Name</label>
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="lastname" class="p-2">Last Name</label>
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="submit-booking">
            <button type="submit" class="btn btn-primary submit">Submit</button>
        </div>
    </fieldset>
</form>

<!-- END OF FORM -->
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        echo '<h3>Hello ' . htmlspecialchars($firstname) . ' ' . htmlspecialchars($lastname) . ', You are welcome to my site.</h3>';
    }
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Dan</td>
            <td>Le</td>
        </tr>
        
        </tbody>
    </table>
    <?php
    $str1 = "Hello";
    $str2 = "World";
    echo "<h3>Greeting: $str1 $str2</h3>";
    echo "<h3>Length of Greeting: " . strlen($str1 . $str2) . "</h3>";
    ?>

    <?php
    $first_num = 298;
    $second_num = 234;
    $third_num = 46;
    $sum = $first_num + $second_num + $third_num;
    echo "<h3>Addition of :" .($first_num)." + " .($second_num)." + " .( $third_num)." = " .($sum). "</h3>";
    ?>

    <?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<h4>Your browser: $browser</h4>";
    ?>
</div>
<!-- </div> -->

<?php include 'footer.php'; ?>

</body>
</html>