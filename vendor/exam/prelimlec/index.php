<?php
//REQUIRE db.php
//REQUIRE function.php
//no need to edit anything under this
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">

    <title>BSIT Exam</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">BSIT Exam</span>
    </nav>

    <?php
    $accountsliced = generatesliceData($accounts,getPageArray());
    printAllAccount($accountsliced);
    generatePage($accounts);
    ?>
    <script src="jquery.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="popper.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
