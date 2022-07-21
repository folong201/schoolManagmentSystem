@extends('layout')


@section('content')
<center>
    <h1>
        Form to update lesson
        {{$lesson[0]->id}}
    </h1>
</center>
<form action="{{Route('updateLesson')}}" method="post">
    @csrf
    {{-- <input type="text" name="lessonName" placeholder="Lesson name"> --}}
    <br>

<div class="row form-row">
<div class="form-group col-md-6 col-sm-12 col-lg-5">
  <label for="inputEmail4">date of the lesson</label>
  <input type="date" name="lessonDate" class="form-control" id="inputEmail4" value="{{$lesson[0]->lessonDate}}">
</div>
<div class="form-group col-md-6 col-sm-12 col-lg-5">
    <label for="inputAddress2">lesson hour</label>
    <input type="time" name="lessonHour" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{$lesson[0]->lessonHour}}">
  </div>
</div>
<div class="row form-row">

  <div class="form-group col-md-6 col-sm-12 col-lg-5">
    <label for="inputAddress">Address of the place</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="lessonPlace" value="{{$lesson[0]->lessonPlace}}">
  </div>


  <div class="form-group col-md-6 col-sm-12 col-lg-5">
    <label for="inputPassword4">description</label>
    <input type="text" class="form-control" id="inputPassword4" name="lessonDescription" value="{{$lesson[0]->lessonDescription}}">
  </div>
</div>
<div class="row form-row">

  <div class="form-group col-md-6 col-sm-12 col-lg-5">
      <label for="inputEmail4">Name of the lesson</label>
      <input type="text" name="lessonName" class="form-control" placeholder="Lesson name" id="inputEmail4" value="{{$lesson[0]->lessonName}}">
  </div>
<div class="row form-group col-md-5">

  <label for="inputState">teacher</label>
  <select id="inputState" class="form-control" name="lessonTeacher" id="inputPassword5" value="{{$lesson[0]->lessonTeacher}}">
    <option selected name="lessonTeacher">select the teacher</option>
    <option value="1">1</option>
  </select>
</div>
{{-- <div class="form-group col-md-2">
  <label for="inputZip">Zip</label>
  <input type="text" class="form-control" id="inputZip">
</div> --}}
</div>
{{--
<div class="form-group">
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="gridCheck">
  <label class="form-check-label" for="gridCheck">
    Check me out
  </label>
</div>
</div> --}}
<br> <br>
<input type="hidden" name="lessonId" value="{{$_GET['id']}}">
  <button type="submit" class="btn btn-warning">save Update</button>

</form>
@endsection
