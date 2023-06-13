<?php

namespace BrainGames\Games\LogicCalc;

use function BrainGames\Engine\runGame;

function calculate($num1, $num2, $operator)
{
    if ($operator == '+') {
        $correctAnswer = $num1 + $num2 ;
    } elseif ($operator == '-') {
        $correctAnswer = $num1 - $num2 ;
    } elseif ($operator == '*') {
        $correctAnswer = $num1 * $num2 ;
    }
    return $correctAnswer;
}

/*function getData()
{
    $num1 = random_int(0, 10) ;
    $num2 = random_int(0, 10) ;
    $supportedOperators = [ 'plus' => '+' , 'minus' => '-' , 'multiply' => '*' ] ;
    $key = array_rand($supportedOperators) ;
    $operator = $supportedOperators[$key] ;
    $question = "{$num1} {$operator} {$num2}" ;
    $answer = calculate($num1, $num2, $operator) ;
    return [
        $question ,
        $answer
    ] ;
}
*/

function runCalc()
{
    $condition = 'What is the result of the expression?' ;
    $getData = function () {
        $num1 = random_int(0, 10) ;
        $num2 = random_int(0, 10) ;
        $supportedOperators = [ 'plus' => '+' , 'minus' => '-' , 'multiply' => '*' ] ;
        $key = array_rand($supportedOperators) ;
        $operator = $supportedOperators[$key] ;
        $question = "{$num1} {$operator} {$num2}" ;
        $answer = calculate($num1, $num2, $operator) ;
        return [
            $question ,
            $answer
        ] ;
    } ;
    runGame($condition, $getData) ;
}

/*function runCalc()
{
    $num1 = random_int(0, 10) ;
    $num2 = random_int(0, 10) ;
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
    $question = "{$num1} {$operator} {$num2}" ;
    $answer = "{$correctAnswer}" ;
    return [
        $question ,
        $answer
    ] ;
}
*/
