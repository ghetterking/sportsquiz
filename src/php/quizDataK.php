<?php

function qks_data() {
    return array(
        'intro' => qks_introductionData(),
        'quiz' => qks_questionData(),
        'result' => qks_reportData()
    );
}

function qks_introductionData() {
    return array(
        'title' => "My First Quiz",
        'description' => "Just do it ...", 
        'imageURL' => "/images/bild.jpg",
        'nextAction' => 'quiz.php',
        'questionID' => 'q0'
    );
}

function qks_questionData() {
    return array(
        'q0' => qks_q0(),
        'q1' => qks_q1(),
        'q2' => qks_q2(),
        'q3' => qks_q3(),
        'q4' => qks_q4()
        
        
    );
}

function qks_q0() {
    return array(
        'text' => "In 1896?",
        'answers' => array(
            array("Flag_of_Greece.svg.png", 1),
            array("Flag_of_Brazil.svg.png", 0),
            array("Flag_of_Italy.png", 0),
            array("swedenFlag.jpg", 0)
        ),
        'nextAction' => 'quiz.php',
        'questionID' => 'q1' 
    );
}

function qks_q1() {
    return array(
        'text' => "In 1900?",
        'answers' => array(
            array("francia-100x150.png", 1),
            array("Flag_of_Spain.png", 0),
            array("Flag_of_Mexico.png", 0),
            array("United_Kingdom.png", 0)
        ),
        'nextAction' => 'quiz.php',
        'questionID' => 'q2'
    );
}
function qks_q2() {
    return array(
        'text' => "In 1904?",
        'answers' => array(
            array("unitedStates.jpg", 1),
            array("Soviet_Union.webp", 0),
            array("Flag_Republic_of_China.png", 0),
            array("canadaFlag.png", 0)
        ),
        'nextAction' => 'quiz.php',
        'questionID' => 'q3' 
    );
}

function qks_q3() {
    return array(
        'text' => "In 1912?",
        'answers' => array(
            array("swedenFlag.jpg", 1),
            array("japanesFlag.jpg", 0),
            array("Flag_of_Greece.svg.png", 0),
            array("unitedStates.jpg", 0)
        ),
        'nextAction' => 'quiz.php',
        'questionID' => 'q4'
    );
}function qks_q4() {
    return array(
        'text' => "In 1916?",
        'answers' => array(
            array("germany-flag-2-500x333.jpg", 1),
            array("swedenFlag.jpg", 0),
            array("Flag_of_Spain.png", 0),
            array("Flag_of_Finland.png", 0)
        ),
        'nextAction' => 'result.php'
    );
}

function qks_reportData() {
    return array(
        'title' => "Congratulations",
        'text' => "That was a {$feedback} performance!",
        'feedback_40' => "lousy",
        'feedback_60' => "mediocre",
        'feedback_60' => "super!!!",
        'imageURL' => "/src/images/bild.jpg"
    );
}
