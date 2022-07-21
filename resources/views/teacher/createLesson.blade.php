@extends('layout')


@section('content')
    <form action="{{Route('createLesson')}}" method="post">
        @csrf
        {{-- <input type="text" name="lessonName" placeholder="Lesson name"> --}}
        <br>

  <div class="row form-row">
    <div class="form-group col-md-6 col-sm-12 col-lg-5">
      <label for="inputEmail4">date of the lesson</label>
      <input type="date" name="lessonDate" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6 col-sm-12 col-lg-5">
        <label for="inputAddress2">lesson hour</label>
        <input type="time" name="lessonHour" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
  </div>
  <div class="row form-row">

      <div class="form-group col-md-6 col-sm-12 col-lg-5">
        <label for="inputAddress">Address of the place</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="lessonPlace">
      </div>


      <div class="form-group col-md-6 col-sm-12 col-lg-5">
        <label for="inputPassword4">description</label>
        <input type="text" class="form-control" id="inputPassword4" name="lessonDescription" required>
      </div>
  </div>
  <div class="row form-row">

      <div class="form-group col-md-6 col-sm-12 col-lg-5">
          <label for="inputEmail4">Name of the lesson</label>
          <input type="text" name="lessonName" class="form-control" placeholder="Lesson name" id="inputEmail4">
      </div>
    <div class="row form-group col-md-5">

      <label for="inputState">teacher</label>
      <select  class="form-control" name="lessonTeacher"  id="allTeacher">
        <option selected name="lessonTeacher">select the teacher</option>   
      </select>
    </div>

  </div>

  <br> <br>
      <button type="submit" class="btn btn-primary" id="submit">save Lesson</button>

</form>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
