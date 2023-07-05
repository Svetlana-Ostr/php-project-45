<?php

namespace BrainGames\Games\LogicCalc;

use function BrainGames\Engine\runGame;

const CONDITION = 'What is the result of the expression?';

function calculate(int $num1, int $num2, string $operator): mixed
{
    return match ($operator) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        default => 'error: unknown operator'
    };
}

function run()
{
    $getData = function () {
        $num1 = random_int(0, 10);
        $num2 = random_int(0, 10);
        $supportedOperators = ['plus' => '+', 'minus' => '-', 'multiply' => '*'];
        $key = array_rand($supportedOperators);
        $operator = $supportedOperators[$key];
        $question = "{$num1} {$operator} {$num2}";
        $answer = calculate($num1, $num2, $operator);
        return [
            $question,
            $answer
        ];
    };
    runGame(CONDITION, $getData);
}
