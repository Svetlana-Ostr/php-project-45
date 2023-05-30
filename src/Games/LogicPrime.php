<?php

namespace BrainGames\Games\LogicPrime;

use function cli\line;
use function cli\prompt;

//Проверка простое ли число
function isPrime(int $value)
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
        $question = random_int(1, 100);
        isPrime($question) ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        line('Question: %s', $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            echo "{$playerAnswer} is wrong answer ;(. Correct answer was '{$correctAnswer}'" . PHP_EOL ;
            echo "Let's try again, {$name}!" . PHP_EOL ;
            break;
        }
        line("Correct!");
        $i++;
        if ($i > $stepToVin) {
            line("Congratulations, %s!", $name) ;
        }
    }
}
