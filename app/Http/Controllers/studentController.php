<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function show(){
        $students = User::where('status','student')->get();
        $studentTab = [];
        foreach($students as $eleve){
            if ($eleve->status == 'student') {
                $new= array_push($studentTab,$eleve);
                // dd($eleve->name);
            }
        }
        $students = User::all();
        // dd($students);
        return view('teacher.student.show',['students'=>$students]);
    }
}
