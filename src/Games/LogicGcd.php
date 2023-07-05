<?php

namespace BrainGames\Games\LogicGcd;

use function BrainGames\Engine\runGame;

const CONDITION = 'Find the greatest common divisor of given numbers.';

function calculateGcd(int $num1, int $num2): int
{
    while ($num1 != 0 && $num2 != 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
        }
    }
    return $num1 + $num2;
}

function run()
{
    $getData = function () {
        $num1 = random_int(0, 10);
        $num2 = random_int(0, 10);
        $question = "{$num1} {$num2}";
        $answer = calculateGcd($num1, $num2);
        return [
            $question,
            $answer
        ];
    };

    runGame(CONDITION, $getData);
}
