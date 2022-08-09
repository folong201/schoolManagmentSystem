<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelessonRequest;
use App\Http\Requests\UpdatelessonRequest;
use App\Models\lesson;
use Illuminate\Http\Request;
use App\http\Requests\StorecourseRequest;
use App\Models\participant;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        return view('teacher.createLesson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelessonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $newLesson->creator_id = auth()->user()->id;

        $newLesson = new lesson();
        $newLesson->lessonName = $request->lessonName;
        $newLesson->creator_id = auth()->user()->id;
        $newLesson->teacher_id = $request->lessonTeacher;
        $newLesson->lessonDescription = $request->lessonDescription;
        $newLesson->lessonPlace = $request->lessonPlace;
        $newLesson->lessonDate = $request->lessonDate;
        $newLesson->lessonHour = $request->lessonHour;
        $newLesson->photo = $request->photo;
        $newLesson->lessonStatus = "Up Comming";
        $newLesson->lessonParticipants = 1;
        $newLesson->save();
        // dd($request);
        return redirect('teacherDashboard')->with('message',"le cour a ete creer avec succees");
        // dd("there is mny other thing to do before create this funking course");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(lesson $lesson)
    {
        //return all the lesson
        $lessons = lesson::all();
        return view('teacher.lesson.show',['lessons'=>$lessons]);
    }



    public  function upcomingLesson(){
        $lessons = lesson::where('lessonStatus','<>','ended')->get();
        return view('teacher.lesson.upcoming',compact('lessons'));
    }

    public function studentCourseList(){
        $lessons = lesson::all();
        return view('student.lesson.show',['lessons'=>$lessons]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelessonRequest  $request
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //request validation

        $request->validate([
            'lessonName'=>'required |'
        ]);


        //
        $newLesson = lesson::findOrFail($request->lessonId);
        $newLesson->lessonName = $request->lessonName;
        $newLesson->creator_id = auth()->user()->id;
        $newLesson->teacher_id = $request->lessonTeacher;
        $newLesson->lessonDescription = $request->lessonDescription;
        $newLesson->lessonPlace = $request->lessonPlace;
        $newLesson->lessonDate = $request->lessonDate;
        $newLesson->lessonHour = $request->lessonHour;
        $newLesson->photo = $request->photo;
        $newLesson->lessonStatus = "Up Comming";
        $newLesson->lessonParticipants = 1;
        // dd($newLesson);
        $newLesson->save();
        // dd($request);
        return redirect('teacherDashboard')->with('message',"le cour a ete Mis a jour avec succees");
    }

    public function startLesson(Request $request){

        $newLesson = lesson::findOrFail($request->id);
        $newLesson->lessonStatus = "In progress";
        $newLesson->save();
        return redirect('teacherDashboard')->with('message',"the lesson have started succesfuly");

    }

    public function stopLesson(Request $request){
        $newLesson = lesson::findOrFail($request->id);
        $newLesson->lessonStatus = "Ended";
        $newLesson->save();
        return redirect('teacherDashboard')->with('message',"the lesson have take end succesfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(lesson $lesson)
    {
        //
        $lessonToDelete = lesson::findOrFail($_GET['id']);
        $lessonToDelete->delete();
        return redirect()->route('lessonShow')->with('message',"the course have been deleted succesfully");
        // dd($lessonToDelete);
    }

    public function allLesson(Request $request){
        $lessons = lesson::all();
        return view('student.lesson.show',['lessons'=>$lessons]);
    }
    public function showOneLessonStudent(){
        $lesson = lesson::where('id',$_GET['id'])->get();
        // dd($_GET['id']);

        return view('student.lesson.showOne',['lessons'=>$lesson]);
    }
    public function lessonInfo(Request $request){
        $newLesson = lesson::all();
        $lessons = $newLesson->only($request['id']);
        // dd($lessons);
        // return "info on signe course {$_GET['id']}";

        /*
            ici, il faut recuperer tout le eleves ont qui sont inscit a ce cours
        */
        $inscrits = participant::where('lesson_id',$request['id'])->student()->get();
        dd("liste des etudiant inscrit au cour de inscrits",$inscrits);
        return view('teacher.lesson.lessonInfo',compact('lessons'));
    }


}
