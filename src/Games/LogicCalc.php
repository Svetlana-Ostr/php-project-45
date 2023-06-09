<?php

namespace BrainGames\Games\LogicCalc;

function runCalc()
{   
    $formulation = 'What is the result of the expression?' ;
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
        'question' => $question ,
        'answer' => $answer
    ] ;
    }
