<?php

namespace BrainGames\Games\LogicPrime;

use function cli\line;
use function cli\prompt;

//Проверка простое ли число
function isPrime($value)
{
    $num = $value;
    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break; // выйдем из цикла
        }
    }

    return $flag ;
}

function runPrime()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    //Вопрос-ответ
    $correctAnswer = '';
    $i = 1;
    $stepToVin = 3;

    while ($i <= $stepToVin) {
        $question = random_int(0, 100);
        isPrime($question) ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        line('Question: %s', $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.".PHP_EOL."Let's try again, %s!", $playerAnswer, $correctAnswer, $name);
            line("Let's try again, %s", $name);
            break;
        }
        line("Correct!");
        $i++;
    }
    line("Congratulations, %s!", $name);
}
