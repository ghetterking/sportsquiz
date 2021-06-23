<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8" />
        <title>PHP Quiz</title>
        <link rel="stylesheet" type="text/css" href="style mockup.css" />
    </head>
    <body>
        <div id="page-wrap">
        <h1>Your final points:</h1>
            <ul>
                <li>
                    <h3>You have scored an unbelievable...</h3>
                </li>
                <li>
                    <?php
                        $answer1 = $_POST['question-1-answers'];
                        $answer2 = $_POST['question-2-answers'];
                        $answer3 = $_POST['question-3-answers'];
                        $answer4 = $_POST['question-4-answers'];
                        $answer5 = $_POST['question-5-answers'];
                        $answer6 = $_POST['question-6-answers'];
                        $answer7 = $_POST['question-7-answers'];
                        $answer8 = $_POST['question-8-answers'];
                        $answer9 = $_POST['question-9-answers'];
                        $answer10 = $_POST['question-10-answers'];
                        $answer11 = $_POST['question-11-answers'];
                        $answer12 = $_POST['question-12-answers'];
                        $answer13 = $_POST['question-13-answers'];
                        $answer14 = $_POST['question-14-answers'];
                        $answer15 = $_POST['question-15-answers'];
                        $answer16 = $_POST['question-16-answers'];
                        $answer17 = $_POST['question-17-answers'];
                        $answer18 = $_POST['question-18-answers'];
                        $answer19 = $_POST['question-19-answers'];
                        $answer20 = $_POST['question-20-answers'];
                        $totalCorrect = 0;
                        if ($answer1 == "C") { $totalCorrect++; }
                        if ($answer2 == "D") { $totalCorrect++; }
                        if ($answer3 == "A") { $totalCorrect++; }
                        if ($answer4 == "B") { $totalCorrect++; }
                        if ($answer5 == "D") { $totalCorrect++; }
                        if ($answer6 == "D") { $totalCorrect++; }
                        if ($answer7 == "B") { $totalCorrect++; }
                        if ($answer8 == "A") { $totalCorrect++; }
                        if ($answer9 == "B") { $totalCorrect++; }
                        if ($answer10 == "D") { $totalCorrect++; }
                        if ($answer11 == "A") { $totalCorrect++; }
                        if ($answer12 == "C") { $totalCorrect++; }
                        if ($answer13 == "A") { $totalCorrect++; }
                        if ($answer14 == "B") { $totalCorrect++; }
                        if ($answer15 == "D") { $totalCorrect++; }
                        if ($answer16 == "A") { $totalCorrect++; }
                        if ($answer17 == "C") { $totalCorrect++; }
                        if ($answer18 == "B") { $totalCorrect++; }
                        if ($answer19 == "D") { $totalCorrect++; }
                        if ($answer20 == "C") { $totalCorrect++; }
                        
                        echo "<h2>$totalCorrect from a total of 20 possible pts!</h2>";
                        echo "</li><li>";
                        if ($totalCorrect > 20) {
                            echo "Goddamn it, i hate this hacking crap!";
                        } elseif ($totalCorrect == 20) {
                            echo "That's a bingo!";
                        } elseif ($totalCorrect == 19) {
                            echo "C-c-c-combo breaker!";
                        } elseif ($totalCorrect == 18) {
                            echo "Is this the real life? Or is this just fantasy?";
                        } elseif ($totalCorrect == 17) {
                            echo "Clever girl...";
                        } elseif ($totalCorrect == 16) {
                            echo "And boom goes the dynamite.";
                        } elseif ($totalCorrect == 15) {
                            echo "Hope can drive a man insane.";
                        } elseif ($totalCorrect == 14) {
                            echo "The show must go on!";
                        } elseif ($totalCorrect == 13) {
                            echo "Anyway, how's your sex life?";
                        } elseif ($totalCorrect == 12) {
                            echo "60% of the time it works everytime.";
                        } elseif ($totalCorrect == 11) {
                            echo "Frankly, my dear, I don't give a damn.";
                        } elseif ($totalCorrect == 10) {
                            echo "IT'S OVER 9! (thousand)";
                        } elseif ($totalCorrect == 9) {
                            echo "YOU! SHALL NOT! PASS!";
                        } elseif ($totalCorrect == 8) {
                            echo "That is why you fail.";
                        } elseif ($totalCorrect == 7) {
                            echo "Houston, we have a problem.";
                        } elseif ($totalCorrect == 6) {
                            echo "DISAPPOINTED!";
                        } elseif ($totalCorrect == 5) {
                            echo "Oh, I'm sorry. Did i break your concentration?";
                        } elseif ($totalCorrect == 4) {
                            echo "You won't believe what time it is, man. It's 4/20 man!";
                        } elseif ($totalCorrect == 3) {
                            echo "Game over, man, game over!";
                        } elseif ($totalCorrect == 2) {
                            echo "Damn! You got effed up!";
                        } elseif ($totalCorrect == 1) {
                            echo "English, mother fluffer, do you speak it?";
                        } elseif ($totalCorrect == 0) {
                            echo "You get nothing, you lose, good day sir!";
                        } elseif ($totalCorrect < 0) {
                            echo "What you’ve just said is one of the most insanely idiotic things I have ever heard. At no point in your rambling, incoherent response were you even close to anything that could be considered a rational thought. Everyone in this room is now dumber for having listened to it. I award you no points, and may God have mercy on your soul.";}
                        echo " - Wanna try again? Go ahead...make my day. Now go away or I shall taunt you a second time!</li>";
                    ?>
                </li>
            </ul>
        </div>
    </body>
</html>