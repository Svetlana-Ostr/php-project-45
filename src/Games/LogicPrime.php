<?php

namespace BrainGames\Games\LogicPrime;

use function BrainGames\Engine\runGame;

//Проверка простое ли число
function isPrime(int $value)
{
    $num = $value;
    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break;
        }
    }

    return $flag ;
}

function runPrime()
{
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".' ;
    $getData = function () {
        $num = random_int(1, 10) ;
        $question = "{$num}" ;
        isPrime($num) ? $answer = 'yes' : $answer = 'no';
        return [
            $question ,
            $answer
        ] ;
    } ;
    runGame($condition, $getData) ;
}
