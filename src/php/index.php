<?php
    // Preset path to include folder 
    //echo $_SERVER['DOCUMENT_ROOT'];
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/src/php');

    // Page includes
    //include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/mockUp.css">
    <title>My First Quiz</title>


</head>
<body>

    <div class="bgimg-1">
    <div class="caption">
        <span class="border">
            <?php 
                echo '<a href="/src/php/intro.php">INTRODUCTION</a>'; 
            ?>
        </span>
    </div>
    </div>
</body>

</html>