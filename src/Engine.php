<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $line, $callback) {

    //Приветствие
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("%s", $line) ;
    
    //Вопрос-ответ
   
    for($i = 1; $i < 3; $i++){
        $arrayLogic = call_user_func($callback);
        line("Question: %s" , $arrayLogic['question']);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $arrayLogic['correctAnswer']) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.",
            $playerAnswer, $arrayLogic['correctAnswer']);
            line("Let's try again, %s", $name);
           break;
        } else {
            line("Correct!");
                if($i = 3) {
                    line("Congratulations, %s!", $name);                                     
                }
        }
    }
    return;    
}
