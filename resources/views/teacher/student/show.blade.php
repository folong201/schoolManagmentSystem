@extends('layout')

@section('content')
<center>
    <h1>
        student list
    </h1>
</center>

@foreach ($students as $student)

<br>
   name : {{ $student->name }} ||
   status : {{ $student->status }}
    <a href="{{Route('createTeacher')}}?id={{$student->id}}" class="btn btn-warning">
        upgrade to teacher
    </a>
    <a href="{{Route('deleteTeaceher')}}?id={{$student->id}}" class="btn btn-danger">
        remove  teacher
    </a>
    <br>
    <hr>
@endforeach

@endsection


