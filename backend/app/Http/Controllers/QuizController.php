<?php

namespace App\Http\Controllers;

use App\Contracts\Services\QuizServiceInterface;
use Illuminate\Http\Request;

class QuizController extends Controller
{     
    /**
     * Interface
     */
    private $quizService;

    /**
     * Create a new controller instance.
     * 
     * @param QuizServiceInterface $quizServiceInterface
     * @return void
     */
    public function __construct(QuizServiceInterface $quizServiceInterface)
    {
        $this->quizService = $quizServiceInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->quizService->getQuiz();
        info($data);

        return response()->json([
            'quizzes' => $data['quizzes'],
            'records'=> $data['records']
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->quizService->saveQuiz($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
