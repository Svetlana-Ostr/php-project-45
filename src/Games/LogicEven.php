<?php

namespace BrainGames\Games\LogicEven;

use function cli\line;
use function cli\prompt;

//Проверка числа на четность
function isEven($value)
{
    return ($value % 2 == 0);
}

function runEven()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    //Вопрос-ответ
    $correctAnswer = '';
    $i = 1;
    $stepToVin = 3;

    while ($i <= $stepToVin) {
        $question = rand();
        isEven($question) ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        line('Question: %s', $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            echo "{$playerAnswer} is wrong answer ;(. Correct answer was '{$correctAnswer}'" . PHP_EOL ;
            echo "Let's try again, {$name}!" . PHP_EOL ;
            break;
        }
        line("Correct!" . PHP_EOL . "Congratulations, %s!", $name);
        $i++;
    }
}
