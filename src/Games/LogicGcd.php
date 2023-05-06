<?php

namespace BrainGames\Games\LogicGcd;

use function cli\line;
use function cli\prompt;

function gcd($num1, $num2)

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
    line('What is the result of the expression?');    

    //Вопрос-ответ
    $correctAnswer = 0 ;
    $i = 1 ;
    $stepToVin = 3 ;

    while ($i <= $stepToVin) {
        $num1 = random_int(0, 100) ;
        $num2 = random_int(0, 100) ;
        $num1 = $num1 ;
        $num2 = $num2 ;
        $correctAnswer = gcd($num1, $num2) ;
        line("Question: %s  %s", $num1, $num2);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $correctAnswer);
            line("Let's try again, %s", $name);
            break;
        }
        line("Correct!");
        $i++;
    }
    line("Congratulations, %s!", $name);
    }
