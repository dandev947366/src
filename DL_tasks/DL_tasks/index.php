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
                
                <div class="row my-4 mt-4">
                    <h1 class="heading">A PAGE FOR WEB PROGRAMMING CLASS - DAN LE</h1>
                </div>
                
                <!-- CARD ROW 1 -->
                <div class="row my-4 mt-4">
                    <div class="row card-container">
                        <div
                            class="card text-center shadow p-3 mb-5 bg-white rounded"
                            style="width: 14rem; height: auto;">
                
                                <h5 class="card-title">Ex1</h5>
                                <p class="card-text">Exercise 1</p>
                                <a href="ex1.php" class="btn btn-primary">See more</a>
                            </div>
                        </div>
               </div>  
               <div class="row my-4 mt-4">
                    <div class="row card-container">
                        <div
                            class="card text-center shadow p-3 mb-5 bg-white rounded"
                            style="width: 14rem; height: auto;">
                
                                <h5 class="card-title">Ex2</h5>
                                <p class="card-text">Exercise 2</p>
                                <a href="ex2.php" class="btn btn-primary">See more</a>
                            </div>
                        </div>
               </div>  
               <div class="row my-4 mt-4">
                    <div class="row card-container">
                        <div
                            class="card text-center shadow p-3 mb-5 bg-white rounded"
                            style="width: 14rem; height: auto;">
                
                                <h5 class="card-title">Ex3</h5>
                                <p class="card-text">Exercise 3</p>
                                <a href="ex3.php" class="btn btn-primary">See more</a>
                            </div>
                        </div>
               </div>  
               <div class="row my-4 mt-4">
                    <div class="row card-container">
                        <div
                            class="card text-center shadow p-3 mb-5 bg-white rounded"
                            style="width: 14rem; height: auto;">
                
                                <h5 class="card-title">Ex4</h5>
                                <p class="card-text">Exercise 4</p>
                                <a href="ex4.php" class="btn btn-primary">See more</a>
                            </div>
                        </div>
               </div>  
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
