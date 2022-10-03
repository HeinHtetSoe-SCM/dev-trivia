<?php

namespace App\Dao;

use App\Contracts\Dao\QuizDaoInterface;
use App\Models\Quiz;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

/**
 * Data Access
 */
class QuizDao implements QuizDaoInterface
{
    /**
     * To get quiz
     * 
     * @return array response content
     */
    public function getQuiz()
    {
        $quizzes = Quiz::getTree();
        $records = Record::all();

        foreach($records as $key=>$value){
            $records[$key]['details_answer'] = DB::table('quizzes')->whereIn('id',explode(',',$value['answer']))->get();
        }

        return ['quizzes' => $quizzes, 'records' => $records];
    }

    /**
     * To save quiz
     * 
     * @return array response content
     */
    public function saveQuiz($request)
    {
        $ans = new Record;
        $ans->answer = $request->answer;
        $ans->save();
        return $ans;
    }
}
