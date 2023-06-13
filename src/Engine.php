<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame($line, callable $run)
{
    //Приветствие
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("%s", $line) ;
    //Вопрос-ответ
    for ($i = 1; $i <= 3; $i++) {
        [$q, $corAnsw] = $run() ;
        line("Question: %s", $q);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $corAnsw) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $corAnsw);
            line("Let's try again, %s", $name);
            break;
        } else {
            line("Correct!");
            if ($i >= 3) {
                line("Congratulations, %s!", $name);
            }
        }
    }
}
