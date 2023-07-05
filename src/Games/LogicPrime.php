<?php

namespace BrainGames\Games\LogicPrime;

use function BrainGames\Engine\runGame;

const CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    if ($num = 2) {
        return true;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getData = function () {
        $num = random_int(1, 10);
        $question = "{$num}";
        $answer = isPrime($num) ? 'yes' : 'no';

        return [
            $question,
            $answer
        ];
    };
    runGame(CONDITION, $getData);
}
