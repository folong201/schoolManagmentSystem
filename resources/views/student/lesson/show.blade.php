@extends('layout1')


@section('content')

{{-- <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button> --}}
    @foreach ($lessons as $lesson)
        <br>
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
            <a href="{{Route('suscribe')}}?id={{$lesson->id}}" class="btn btn-secondary btn-lg">
                suscribe
            </a>
        </div>
        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('unSuscribe')}}?id={{$lesson->id}}" class="btn btn-warning btn-lg">
               Unsuscribe
            </a>
        </div>

        <div class="col col-lg-4 col-sm-12 col-md-3">
            <a href="{{Route('showOneLessonStudent')}}?id={{$lesson->id}}" class="btn btn-info btn-lg">
                more on the lesson
            </a>
        </div>
       </div>
       <br> <br>
       <div class="shadow-lg p-3 mb-5 bg-white rounded alert alert-success">{{$lesson->lessonStatus}}</div>
    </div>


    @endforeach
@endsection

