<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

/**
 * Interface of Data Access Object for quiz
 */
interface QuizDaoInterface
{
    /**
     * To get quiz
     * 
     * @return array response content
     */
    public function getQuiz();

    /**
     * To save quiz
     * 
     * @return array response content
     */
    public function saveQuiz($request);
}