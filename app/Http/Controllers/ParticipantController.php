<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\participant;
use App\Http\Requests\StoreparticipantRequest;
use App\Http\Requests\UpdateparticipantRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ParticipantController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreparticipantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request){

        if (isset($request->id)) {

            //creation of the new participant
            $participant = new participant();
            $participant->lesson_id = $request->id;
            $participant->user_id = Auth::user()->id;
            $participant->save();
            return redirect('student.studentDashboard')->with('messoge',"success suscription to the course");

        } else {

            // redirection via the suscription page
            $lessons = DB::select("select * from lessons where lessonStatus ='Up Comming' ");
            return view('student.lesson.suscribe',["lessons"=>$lessons]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateparticipantRequest  $request
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateparticipantRequest $request, participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(HttpRequest $request)
    {
        //
        if (isset($request->id)) {

            //creation of the new participant
            $lessons = lesson::findOrFail($request->id);
            // $lessons->user =0;
            $student = participant::where("lesson_id=".$request->id." and user_id=".Auth::user()->id);
            // $ok = new participant();
            // $ok = DB::table('participants')->where(['lesson_id'=>$request->id,'user_id'=>Auth::user()->id])->first();
            // $ok->delete();
            // dd($student);
            $student->delete();
            dd("successFull Unsuscription to the course");
            return redirect('student.studentDashboard')->with('messoge',"successFull Unsuscription to the course");

        } else {

            // redirection via the suscription page
            $lessons = lesson::all();
            return view('student.lesson.unsuscribe',["lessons"=>$lessons]);

        }
    }
}
