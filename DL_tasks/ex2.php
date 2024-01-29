
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
        <title>Restaurant</title>
    </head>
    <body>

        <div class="container mx-auto my-4">

            <!-- NAV BAR -->
          <?php include ('header.php'); ?>

            <!-- END OF NAV BAR -->

            
            <div class="container">
            <h3>3.1 Write PHP code to output the following message: Hello world! My name is "David"
</h3>
<?php
    // Use backslashes to escape double quotes or use single quotes
    echo 'Hello world! My name is "David"';
?>

<h3>3.2 Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this variable as the content within an (heading 4) element.</h3>
<?php
    $title = "PHP is interesting.";
    echo "<h4>$title</h4>";
    ?>
<h3>
3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three students in the course. To display this information, create an HTML table within your PHP code. The table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look like this:
</h3>
<?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    
?>

<table>
    <tr>
        <th>S.n.</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John</td>
        <td><?php echo $g1 ?></td>
    
    </tr>
    <tr>
        <td>2</td>
        <td>Alice</td>
        <td><?php echo $g2 ?></td>
    
    </tr>
    <tr>
        <td>3</td>
        <td>Bob</td>
        <td><?php echo $g3 ?></td>
    
    </tr>

</table>
<h3>3.4 Take a screenshot that confirms your development environment setup and include it as an image in the "ex1.php" file.</h3>

<img src="./img/docker.png" alt="web development environment"/>
            </div>
           
            <?php
            include('footer.php');
            ?>
        </div><!-- END OF CONTAINER -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    </body>
</html>
