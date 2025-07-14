<?php
$questions = [
    ['questions' => 'What is 5+5 ?' , 'correct'=>'10'],
    ['questions' => 'What is the capital of Bangladesh?' , 'correct'=>'dhaka'],
    ['questions' => 'Who is the national poet in Bangladesh?' , 'correct'=>'nazrul'],
];

$answers = [] ;

foreach($questions as $index => $question)
{
    echo ($index + 1 ) . "." .$question['questions']. "\n";
    $answers[] = trim(readline("Your Answer : ")) ;
}

function evaluateQuiz(array $questions , array $answers ):int
{
    $score = 0 ;
    foreach($questions as $index => $question){
        echo "User Answer : " .$answers[$index] . "\n" ;
        echo "Correct Answer : " .$question['correct'] . "\n" ;
        if($answers[$index] === $question['correct']){
            $score++ ;
        }
    }
    return $score ;
}

$myScore = evaluateQuiz($questions , $answers) ;

echo "\n You scored $myScore out of " . count($questions). ".\n";

if ($myScore === count($questions)) {
    echo "Outstanding! You achieved a perfect score.\n";
} elseif ($myScore > 0) {
    echo "Well done! You answered some questions correctly. Keep practicing to improve even more.\n";
} else {
    echo "Unfortunately, you did not answer any questions correctly. Please review the material and try again.\n";
}
