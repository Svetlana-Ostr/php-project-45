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
        $num = random_int(0, 10) ;
        $question = "{$num}" ;
        isEven($question) ? $answer = 'yes' : $answer = 'no';
        return [
            $question ,
            $answer
        ] ;
    } ;
    runGame($condition, $getData) ;
}

/*use function cli\line;
use function cli\prompt;

//Проверка числа на четность
function isEven(int $value): bool
{
    return ($value % 2 == 0);
}

function runEven()
{
    //Приветствие

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    //Вопрос-ответ
    $correctAnswer = '';
    $i = 1;
    $stepToVin = 3;

    while ($i <= $stepToVin) {
        $question = rand();
        isEven($question) ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        line('Question: %s', $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            echo "{$playerAnswer} is wrong answer ;(. Correct answer was '{$correctAnswer}'" . PHP_EOL ;
            echo "Let's try again, {$name}!" . PHP_EOL ;
            break;
        }
        line("Correct!");
        $i++;
        if ($i > $stepToVin) {
            line("Congratulations, %s!", $name) ;
        }
    }
}
*/
