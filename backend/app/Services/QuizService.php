<?php

namespace App\Services;

use App\Contracts\Dao\QuizDaoInterface;
use App\Contracts\Services\QuizServiceInterface;

/**
 * Service class for quiz
 */
class QuizService implements QuizServiceInterface
{
    /**
     * quiz Dao
     */
    private $quizDao;

    /**
     * Class Constructor
     * 
     * @param quizDaoInterface
     * @return
     */
    public function __construct(QuizDaoInterface $quizDao)
    {
        $this->quizDao = $quizDao;
    }

    /**
     * To get quiz
     * 
     * @return array response content
     */
    public function getQuiz()
    {
        return $this->quizDao->getQuiz();
    }

    /**
     * To save quiz
     * 
     * @return array response content
     */
    public function saveQuiz($request)
    {
        return $this->quizDao->saveQuiz($request);
    }
}