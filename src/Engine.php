<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const STEPSTOWIN = 3;

function runGame(string $line, callable $run)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("%s", $line) ;

    for ($i = 1; $i <= STEPSTOWIN; $i++) {
        [$question, $correctAnsw] = $run() ;
        line("Question: %s", $question);
        $playAnsw = readline("Your answer: ");
        if ($playAnsw != $correctAnsw) {
            line("'{$playAnsw}' is wrong answer ;(. Correct answer was '{$correctAnsw}'.");
            line("Let's try again, {$name}!");
            break;
        } else {
            line("Correct!");            
        }
        if ($i == STEPSTOWIN) {
            line("Congratulations, %s!", $name);
        }
    }
}
