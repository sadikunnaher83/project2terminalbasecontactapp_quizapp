<?php  

// Quiz Questions
$questions = [
    ['question' => 'what is the capital of Bangladesh ?', 'correct'=> 'Dhaka'],
    ['question' => 'what is your Home District ?', 'correct'=> 'Tangail'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' =>
    'Shakespeare'],
];

// User Answers Array
$answers = [];

// Function to calculate quiz score
function myQuize(array $questions, array &$answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        // Case-insensitive comparison for correct answers
        if (strcasecmp($answers[$index], $question['correct']) === 0) {
            $score++;
        }
    }
    return $score;
}

// Display Questions and Collect Answers
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your Answer: "));
}

// Calculate Score
$score = myQuize($questions, $answers);

// Show Score
echo "\nYour Score is $score out of " . count($questions) . ".\n";

if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}

?>
