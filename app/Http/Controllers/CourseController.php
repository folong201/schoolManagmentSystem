<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecourseRequest;
use App\Http\Requests\UpdatecourseRequest;
use App\Models\course;
use GuzzleHttp\Psr7\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuparation of all the course
        $allCourse = course::all();
        return $allCourse;
    }

    /**
     * Show the form for creating a new resource.
     *this function return the view of the form using to create a new course
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.createCourse');
    }

    /**
     * Store a newly created resource in storage.
     *this function take his parameter from the form and use to create a new course
     * @param  \App\Http\Requests\StorecourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecourseRequest $request)
    {
        dd("there is mny other thing to do before create this funking course");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecourseRequest  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecourseRequest $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
