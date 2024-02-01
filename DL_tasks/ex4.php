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
        <title>Exercise 4</title>
</head>
<body>
<div class="container mx-auto my-4">
<?php include ('header.php'); ?>
<div class="container">
                
                <div class="row my-4 mt-4">
                    <h1 class="heading">EXERCISE 4</h1>
                </div>
                
                <!-- If-Else-->
                <div class="row my-4 mt-4">
    <div class="row card-container">
        <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: 14rem; height: auto;">
            <h5 class="card-title">If-Else</h5>

            <form method="post" action="">
                <label for="name1">Name:</label>
                <input type="text" id="name1" name="name1" class="card text-center pt-1 shadow bg-white rounded" required>

                <label for="age1">Age:</label>
                <input type="number" id="age1" name="age1" class="card text-center pt-1 shadow bg-white rounded" required>

                <button type="submit" name="form1_submit" class="btn btn-primary mt-2 md-2 rounded">Check Eligibility</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form1_submit"])) {
                $name1 = isset($_POST["name1"]) ? htmlspecialchars($_POST["name1"]) : "";
                $age1 = isset($_POST["age1"]) ? intval($_POST["age1"]) : "";

                if ($age1 >= 18) {
                    echo "<p class='p-2 text-center text-success'>Hi $name1, you are eligible for voting.</p>";
                } else {
                    echo "<p class='p-2 text-center text-danger'>Hi $name1, you are not eligible for voting.</p>";
                }
            }
            ?>
        </div>
    </div>
</div>
               
<div class="row my-4 mt-4">
                    <div class="row card-container">
                        <div
                            class="card text-center shadow p-3 mb-5 bg-white rounded"
                            style="width: 14rem; height: auto;">
                
                                <h5 class="card-title">Switch Case</h5>
                                
    
    <form>
        <?php
        $month = date("F");

        switch ($month) {
            case "August":
                echo "<p class='p-2 text-center text-success'> It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p class='p-2 text-center text-danger'> Not August, this is " .$month. " so I don't have any holidays.</p>";
        }
        ?>
    </form>                
        </div>

</div>

<!-- For Loop-->
<div class="row my-4 mt-4">
    <div class="row card-container">
        <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: 14rem; height: auto;">
            <h5 class="card-title">For Loop</h5>

            <form method="post" action="">
                <label for="multiplication_number">Enter a number:</label>
                <input type="number" id="multiplication_number" name="multiplication_number" class="card text-center pt-1 shadow bg-white rounded" required>
                <button type="submit" class="btn btn-primary mt-2 md-2 rounded">Generate Table</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["multiplication_number"])) {
                $number = $_POST["multiplication_number"];

                echo "<p>Multiplication table for $number:</p>";

                for ($i = 1; $i <= 10; $i++) {
                    echo "$number x $i = " . ($number * $i) . "<br>";
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- While Loop-->
<div class="row my-4 mt-4">
    <div class="row card-container">
        <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: 14rem; height: auto;">
            <h5 class="card-title">While Loop</h5>

            <form method="post" action="">
                <label for="loop_number">Enter a number:</label>
                <input type="number" id="loop_number" name="loop_number" class="card text-center pt-1 shadow bg-white rounded" required>
                <button type="submit" class="btn btn-primary mt-2 mb-2 rounded">Generate Table</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loop_number"])) {
                $l_num = $_POST["loop_number"];
                $i = 1;

                echo "<p>While loop table for $l_num:</p>";
                while ($i <= $l_num) {
                    echo "$i ";
                    $i++;
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Foreach Loop -->
<div class="row my-4 mt-4">
    <div class="row card-container">
        <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: 14rem; height: auto;">
            <h5 class="card-title">Foreach Loop</h5>

            <form>
                <?php
                $colors = array("Primary", "Secondary", "Success", "Danger","Warning","Info");
                echo "<p>My Bootstrap Colors:</p>";
                foreach ($colors as $color) {
                    echo "<p class='text-" . strtolower($color) . "'>$color</p>";
                }
                ?>
            </form>
        </div>
    </div>
</div>
              
            <?php
            include('footer.php');
            ?>
        </div><!-- END OF CONTAINER -->

</body>
</html>