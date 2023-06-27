<?php

namespace BrainGames\Games\LogicProgression;

use function BrainGames\Engine\runGame;

const ROW_LENGHT = 10;
const CONDITION = 'What number is missing in the progression?';

function calculateProgression()
{
    $begin = random_int(0, ROW_LENGHT);
    $difference = random_int(0, ROW_LENGHT);
    $progression = [];
    for ($i = 0; $i <= ROW_LENGHT - 1; $i++) {
        $progression[$i] = $begin + $i * $difference;
    }
    return $progression;
}

function run()
{
    $getData = function () {
        $runProgression = calculateProgression();
        $hidden = random_int(0, ROW_LENGHT - 1);
        $correctAnswer = $runProgression[$hidden];
        $runProgression[$hidden] = '..';
        $question = implode(' ', $runProgression);
        return [
            $question ,
            $correctAnswer
        ];
    };
    runGame(CONDITION, $getData);
}
