@extends('layout')


@section('content')
<div class="creation">
<a href="{{Route('createLesson')}}" class="btn btn-primary btn-lg btn-block fluid">create a newlesson</a>
<br>
</div>
{{-- <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button> --}}
<table class="table caption-top">
    <caption>List of courses</caption>
    <thead class="table-Light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Date</th>
        <th scope="col">Hour</th>
        <th scope="col">Location</th>
        <th scope="col">Other</th>
      </tr>
    </thead>
    <tbody>
@foreach ($lessons as $lesson)
        {{-- <br>
        <div class="shadow p-3 mb-5 bg-white rounded">
            <img src="" alt="altenative text" style="min-width: 100px;max-width:100px;background-color:rgb(141, 141, 193);min-height:100px; float: left;clear:both">
        <h3>
           matiere :   {{$lesson->lessonName}}
       </h3>

        <br><br> <br>
       date : {{$lesson->lessonDate}} <br>
       Hour : {{$lesson->lessonHour}} <br>
       Description : {{$lesson->lessonDescription}} <br>
       place : {{$lesson->lessonPlace}}
       <div class="row">
        <hr>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('updateLesson')}}?id={{$lesson->id}}" class="btn btn-secondary btn-lg">
                update the course
            </a>
        </div>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('startLesson')}}?id={{$lesson->id}}" class="btn btn-warning btn-lg">
                start the course
            </a>
        </div>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('stopLesson')}}?id={{$lesson->id}}" class="btn btn-primary btn-lg">
                stopCourse
            </a>
        </div>
        <br> <br>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('deleteLesson')}}?id={{$lesson->id}}" class="btn btn-danger btn-lg">
                delete the course
            </a>
        </div>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('deleteLesson')}}?id={{$lesson->id}}" class="btn btn-info btn-lg">
                more on the lesson
            </a>
        </div>
       </div>
       <br> <br>
       <div class="shadow-lg p-3 mb-5 bg-white rounded alert alert-success">{{$lesson->lessonStatus}}</div>
    </div> --}}


    <tr>
      <th scope="row">{{$lesson->id}}</th>
      <td>{{$lesson->lessonName}}</td>
      <td>{{$lesson->lessonDate}}</td>
      <td>{{$lesson->lessonHour}}</td>
      <td>{{$lesson->lessonPlace}}</td>
      <td>
        <a href="{{Route('lessonInfo')}}?id={{$lesson->id}}" class="btn btn-primary">
            ! MORE
        </a>
        </td>
      <tr class="shadow-lg p-3 mb-5 bg-white rounded alert alert-success">
          {{-- <div class="shadow-lg p-3 mb-5 bg-white rounded alert alert-success">
          </div> --}}
              {{$lesson->lessonStatus}}
      </tr>

    </tr>
    @endforeach

        </tbody>
      </table>
@endsection
