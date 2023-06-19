<?php

namespace BrainGames\Games\LogicEven;

use function BrainGames\Engine\runGame;

function isEven(int $value): bool
{
    return ($value % 2 == 0);
}

function runEven()
{
    $condition = 'Answer "yes" if the number is even, otherwise answer "no".' ;
    $getData = function () {
        $num = random_int(0, 10);
        $question = "{$num}";
        isEven($num) ? $answer = 'yes' : $answer = 'no';
        return [
            $question ,
            $answer
        ] ;
    } ;
    runGame($condition, $getData);
}
