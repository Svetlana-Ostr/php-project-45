<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const STEPS_TO_WIN = 3;

function runGame(string $line, callable $run)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("%s", $line);

    for ($i = 1; $i <= STEPS_TO_WIN; $i++) {
        [$question, $correctAnswer] = $run();
        line("Question: %s", $question);
        $playAnswer = prompt("Your answer: ");
        if ($playAnswer != $correctAnswer) {
            line("'{$playAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
