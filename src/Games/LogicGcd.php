<?php

namespace BrainGames\Games\LogicGcd;

use function cli\line;
use function cli\prompt;

function gcd(int $num1, int $num2) : int
{
    while ($num1 != 0 && $num2 != 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2 ;
        } else {
            $num2 = $num2 % $num1 ;
        }
    }
    return ($num1 + $num2) ;
}

function runGcd()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.') ;

    //Вопрос-ответ
    $correctAnswer = 0 ;
    $i = 1 ;
    $stepToVin = 3 ;

    while ($i <= $stepToVin) {
        $number1 = random_int(0, 100) ;
        $number2 = random_int(0, 100) ;
        $num1 = $number1 ;
        $num2 = $number2 ;
        $correctAnswer = gcd($num1, $num2) ;
        echo "Question: {$num1} {$num2}" . PHP_EOL ;
        //line("Question: %s  %s", $num1, $num2);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            echo "{$playerAnswer} is wrong answer ;(. Correct answer was '{$correctAnswer}'" . PHP_EOL ;
            echo "Let's try again, {$name}!" . PHP_EOL ;
            break;
        }
        line("Correct!") ;
        $i++;
        if ($i > $stepToVin) {
            line("Congratulations, %s!", $name) ;
        }
    }
}
