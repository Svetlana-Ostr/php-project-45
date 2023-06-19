<?php

namespace BrainGames\Games\LogicPrime;

use function BrainGames\Engine\runGame;

function isPrime(int $value): bool
{
    $num = $value;
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
             break;
        }
    }
    return true;
}

function runPrime()
{
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $getData = function () {
        $num = random_int(1, 10);
        $question = "{$num}";
        $answer = isPrime($num) ? 'yes' : 'no';

        return [
            $question ,
            $answer
        ];
    };
    runGame($condition, $getData);
}
