<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;

class Quiz extends Entity
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';

    /**
     * ClosureTable model instance.
     *
     * @var \App\QuizClosure
     */
    protected $closure = 'App\Models\QuizClosure';
}
