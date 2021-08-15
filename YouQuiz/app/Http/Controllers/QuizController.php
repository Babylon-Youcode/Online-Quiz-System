<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Reponse;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::all();
        return view('students.dashboard')->with([
            'quiz'=> $quiz
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.create_quiz');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $quiz = new Quiz;
        // $quiz->id_category =$request->id_category;
        $quiz->name_category =$request->name_category;
        $quiz->name_quiz =$request->name_quiz;
        $quiz->answer_quiz =$request->answer_quiz;
        $quiz->question_quiz =$request->question_quiz;
        if($request->image){   
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('img/'), $imageName);
            $quiz->image = $imageName;
        }
        $quiz->save();
        return redirect('quiz/show_quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function updateQuiz(Request  $request, $id){
        
        $quiz =Quiz::find($id);
        $quiz->name_category =$request->name_category;
        $quiz->name_quiz =$request->name_quiz;
        $quiz->answer_quiz =$request->answer_quiz;
        $quiz->question_quiz =$request->question_quiz;
        if($request->image){
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('img/'), $imageName);
            $quiz->image = $imageName;
        }
       
        $save=  $quiz->save();
        if ($save) {
        return back();
        }
   }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function passQuiz(Request  $request, $id)
    {
        $quiz =Quiz::find($id);
        $Result = new Result;
        $Result->quiz_id =$request->quiz_id;
        $Result->student_id =$request->student_id;
        $Result->quiz_name =$request->quiz_name;
        $Result->student_name =$request->student_name;
        if($quiz->answer_quiz == $request->name_repons){
            $Result->status = 'success';
            $Result->save();
            return back()->with('success','You have successfuly ');
           
        }else{
            $Result->status = 'fail';
            $Result->save();
            return back()->with('fail','You have not  '); 
            
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function deleteQuiz($id)
    {
        Quiz::destroy(array('id',$id));
        return back();
    }
}
