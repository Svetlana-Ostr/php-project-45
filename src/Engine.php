<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(callable $run) {
   
    //Приветствие
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    //line("%s", $line) ;
    
    //Вопрос-ответ
   
    for($i = 1; $i < 3; $i++){
        [$question, $correctAnswer] = $run(); 
        line("Question: %s" , $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.",
            $playerAnswer, $correctAnswer);
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
