@extends('layout')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">Status</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr> --}}
      @foreach ($lessons as $lesson)
         <tr>
          <td >{{$lesson->id}}</td>
          <td>{{$lesson->lessonName}}</td>
          <td>{{$lesson->photo}}</td>
          <td>{{$lesson->lessonStatus}}</td>
          <td colspan="2">{{$lesson->lessonDescription}}</td>
          <td>
            <a href="{{Route('lessonInfo')}}?id={{$lesson->id}}" class="btn btn-primary">
               ! MORE
            </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @if ($lessons->count()==0)
        <center>
            <h1>
                There is not and upcoming
            </h1>
        </center>
  @endif
  {{$lessons->count()}}
@endsection
