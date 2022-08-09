<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function createTeacher(Request $request){
        $newTeacher = User::findOrFail($request->id);
        $newTeacher->status = 'teacher';
        $newTeacher->save();
        return redirect()->route('studentlist')->with('message',"the teacher have been created whit succees");
    }

    public function deleteTeaceher(Request $request){

        if ($request->id != auth()->user()->id) {
            $teacher = User::findOrFail($request->id);
            $teacher->status ='student';
            // dd("deletion of the teacher");
            $teacher->save();
            return redirect()->route('studentlist')->with('message',"the teacher have been delete succefully");
        }else{

            return redirect()->route('studentlist')->with('error',"you can not delete yousel in the platform");
        }
    }

    public function freeTeacher(){
        $freeTeacher = User::where('status','teacher')->get();
        return response()->json( $freeTeacher );
    }
    public function deleteStudent(Request $request){
        $newTeacher = User::findOrFail($request->id);
        if ($newTeacher==null) {
            return redirect()->back()->with('error',"the student you wnat to delete don't exist");
        }
        // $newTeacher->status = 'teacher';
        $newTeacher->delete();
        return redirect()->route('studentlist')->with('message',"the student have been excluded whit succees");
    }
}
