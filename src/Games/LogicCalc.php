<?php

namespace BrainGames\Games\LogicCalc;

use function cli\line;
use function cli\prompt;

//Проверка числа на четность
/*function isEven($value)
{
    return ($value % 2 == 0);
}
*/
function runCalc()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');

    //Вопрос-ответ
    $correctAnswer = 0;
    $i = 1;
    $stepToVin = 3;

    while ($i <= $stepToVin) {
        $num1 = random_int(0, 10) ;
        $num2 = random_int(0, 10) ;
        $num1 = $num1 ;
        $num2 = $num2 ;
        $supportedOperators = [ 'plus' => '+' , 'minus' => '-' , 'multiply' => '*' ] ;
        $key = array_rand($supportedOperators) ;
        $operator = $supportedOperators[$key] ;

        if ($operator == '+') {
            $correctAnswer = $num1 + $num2 ;
        } elseif ($operator == '-') {
            $correctAnswer = $num1 - $num2 ;
        } elseif ($operator == '*') {
            $correctAnswer = $num1 * $num2 ;
        }
        line("Question: %s %s %s", $num1, $operator, $num2);
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
