<?php

namespace BrainGames\Games\LogicProgression;

use function BrainGames\Engine\runGame;

function calculateProgression()
{
    $begin = mt_rand(0, 10);
    $difference = mt_rand(0, 10);
    $array = [];
    $progressionMember = $begin;
    $array[0] = $progressionMember;

    for ($i = 1; $i <= 10; $i++) {
        $progressionMember = $progressionMember + $difference;
        $array[$i] = $progressionMember;
    }
    return($array);
}

function runProgression()
{
    $condition = 'What number is missing in the progression?';
    $getData = function () {
        $newArray = calculateProgression();
        $hidden = mt_rand(0, 10);
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
