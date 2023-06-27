<?php

namespace BrainGames\Games\LogicEven;

use function BrainGames\Engine\runGame;

const CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".' ;

function isEven(int $value): bool
{
    return $value % 2 == 0;
}

function run()
{
    $getData = function () {
        $num = random_int(0, 10);
        $question = "{$num}";
        $answer = isEven($num) ? 'yes' : 'no';

        return [
            $question ,
            $answer
        ] ;
    } ;
    runGame(CONDITION, $getData);
}
