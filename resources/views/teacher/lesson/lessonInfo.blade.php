@extends('layout')

@section('content')
<center>
    <h1>
        Lesson information details
    </h1>
</center>
@foreach ($lessons as $lesson)

<br>
<div class="shadow p-3 mb-5 bg-white rounded">
    <img src="https://via.placeholder.com/100x100" alt="altenative text" style="min-width: 100px;max-width:100px;background-color:rgb(141, 141, 193);min-height:100px; float: left;clear:both">
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
        </div>
        <a href="{{Route('updateLesson')}}?id={{$lesson->id}}" class="btn btn-warning btn-lg">
            update the course
        </a>
<div class="col col-lg-4 col-sm-12 col-md-3">
</div>
<a href="{{Route('startLesson')}}?id={{$lesson->id}}" class="btn btn-success  btn-lg">
    start the course
</a>
<div class="col col-lg-4 col-sm-12 col-md-3">
</div>
<a href="{{Route('stopLesson')}}?id={{$lesson->id}}" class="btn btn-primary btn-lg">
    stopCourse
</a>

<a href="{{Route('deleteLesson')}}?id={{$lesson->id}}" class="btn btn-danger btn-lg">
    delete the course
</a>
<div class="col col-lg-4 col-sm-12 col-md-3">
</div>

</div>
<br> <br>
<div class="shadow-lg p-3 mb-5 bg-white rounded alert alert-success"> status : {{$lesson->lessonStatus}}</div>
</div>

@endforeach
<center>
    <h1>
        liste des inscrit
    </h1>
</center>

zone pour afficher les personnes inscrit au lesson
{{-- @forelse ($collection as $item)

@empty

@endforelse --}}

@endsection
{{-- @show --}}
