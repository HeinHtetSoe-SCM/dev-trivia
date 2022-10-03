<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;

/**
 * Interface for quiz service.
 */
interface QuizServiceInterface
{
    /**
     * To get quiz
     * 
     * @return array 
     */
    public function getQuiz();

    /**
     * To save quiz
     * 
     * @return array 
     */
    public function saveQuiz($request);
}