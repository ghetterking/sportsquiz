<?php
    // Start the session and initialize the result array
    session_start();

    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/src/php');

    // Page includes
    //include 'auth.php';
    include 'quizDataK.php';

    $_SESSION["quiz-ks-results"] = array(); 

    // Get quiz data
    $quizData = qks_data();
    $pageData = $quizData['result'];

    // Session object: Update number of achieved points
    // var_dump($_POST);
    $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/mockUp.css">
    
</head>
<body>
    
<div class="caption">
            <span class="border">
            <?php
                echo '<a href="/index.php">' . $pageData['title'] . '</a>';
                echo '<p>' . $pageData['feedback_60'] . '</p>';
                echo '<p>You have answered ' . $_SESSION['achievedPoints'] . ' question(s) correctly.</p>';
            ?></span>
        </div>

</body>
</html>