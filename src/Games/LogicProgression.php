<?php

namespace BrainGames\Games\LogicProgression;

use function cli\line;
use function cli\prompt;

function &calculateProgression()
{
    $begin = mt_rand(0, 10) ;
    $difference = mt_rand(0, 10) ;
    $array = [] ;
    $a = $begin ;
    $d = $difference ;
    $array[0] = $a ;

    for ($i = 1; $i <= 10; $i++) {
        $a = $a + $d ;
        $array[$i] = $a ;
    }

//print_r($array) ;
    return($array) ;
}

function runProgression()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');

    //Вопрос-ответ
    $j = 1 ;
    $stepToVin = 3 ;
    while ($j <= $stepToVin) {
        $newArray =& calculateProgression() ;
        $hidden = mt_rand(0, 10) ;
        $i = $hidden ;
        $answer = $newArray[$i] ;
        $newArray[$i] = '..' ;
        $string = implode(' ', $newArray) ;
        $correctAnswer = $answer;
       // $question = $string ;
        line("Question: %s", $string);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            echo "{$playerAnswer} is wrong answer ;(. Correct answer was '{$correctAnswer}'" . PHP_EOL ;
            echo "Let's try again, {$name}!" . PHP_EOL ;
            break;
        }
        line("Correct!" . PHP_EOL . "Congratulations, %s!", $name);
        $j++;
    }
}
