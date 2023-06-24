<?php

namespace BrainGames\Games\LogicProgression;

use function BrainGames\Engine\runGame;

const ROW_LENGHT = 10;

function calculateProgression()
{
    $begin = random_int(0, ROW_LENGHT);
    $difference = random_int(0, ROW_LENGHT);
    $progressionArray = [];
    for ($i = 0; $i <= ROW_LENGHT - 1; $i++) {
        $progressionArray[$i] = $begin + $i * $difference;
    }
    return($progressionArray);
}

function runProgression()
{
    $condition = 'What number is missing in the progression?';
    $getData = function () {
        $newArray = calculateProgression();
        $hidden = random_int(0, ROW_LENGHT - 1);
        $i = $hidden;
        $answer = $newArray[$i];
        $newArray[$i] = '..';
        $question = implode(' ', $newArray);
        $correctAnswer = $answer;
        return [
            $question ,
            $correctAnswer
        ];
    };
    runGame($condition, $getData);
}
