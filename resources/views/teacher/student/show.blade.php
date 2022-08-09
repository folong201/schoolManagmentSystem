@extends('layout')

@section('content')
<center>
    <h1>
        student list
    </h1>
</center>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">status</th>
        <th scope="col">upgarde</th>
        <th scope="col">remove teacher</th>
        <th scope="col">delete teacher</th>
      </tr>
    </thead>
    <tbody>
@foreach ($students as $student)

{{-- <br>
   name : {{ $student->name }} ||
   status : {{ $student->status }}
    <a href="{{Route('createTeacher')}}?id={{$student->id}}" class="btn btn-primary">
        upgrade to teacher
    </a>
    <a href="{{Route('deleteTeaceher')}}?id={{$student->id}}" class="btn btn-warning">
        remove  teacher
    </a>
    <a href="{{Route('deleteTeaceher')}}?id={{$student->id}}" class="btn btn-danger">
        exclude student
    </a>
    <br>
    <hr> --}}



          <tr>
            <th scope="row"> {{ $student->name }} </th>
            <td>{{ $student->status }}</td>
            <td>
                <a href="{{Route('createTeacher')}}?id={{$student->id}}" class="btn btn-primary">
                    upgrade to teacher
                </a>
            </td>
            <td>
                <a href="{{Route('deleteTeaceher')}}?id={{$student->id}}" class="btn btn-warning">
                    remove  teacher
                </a>
            </td>
            <td>
                <a href="{{Route('deleteStudent')}}?id={{$student->id}}" class="btn btn-danger">
                    exclude student
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection


