@extends('layout')

@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
<h2>
    welcome to: <span class="uper">{{Auth::user()->status}}</span> dashboard
</h2>
<br>
{{--
<a href="{{Route('createLesson')}}">create Course</a> <br>
<a href="{{Route('upcomingLesson')}}">Upcoming course</a> <br>
<a href="{{Route('newCourse')}}">other  course</a> <br>
<a href="{{Route('newCourse')}}">teacher course</a> <br>
<a href="{{Route('newCourse')}}">passs course</a> <br>
<a href="{{Route('newCourse')}}">in Progress course</a> <br>

<br>


<div class="shadow p-3 mb-5 bg-white rounded">
    <img src="" alt="altenative text" style="min-width: 100px;max-width:100px;background-color:rgb(141, 141, 193);min-height:100px; float: left;clear:both">
   <h3>
    Name of the Lesson
   </h3>

    <br>
    description of the lesson <br>
    . Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis?
   <div class="row">
    <div class="col col-lg-4 col-sm-12 col-md-3">
        <a href="#" class="btn btn-secondary btn-lg">
            update the course
        </a>
    </div>
    <div class="col col-lg-4 col-sm-12 col-md-3">
        <a href="#" class="btn btn-warning btn-lg">
            update the course
        </a>
    </div>
    <div class="col col-lg-4 col-sm-12 col-md-3">
        <a href="#" class="btn btn-danger btn-lg">
            delete the course
        </a>
    </div>
   </div>
</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div> --}}


<div class="container paddtop30">
    <h1>
        <span class="uper">
            courses
        </span>
    </h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('images/book.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">Create Course</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="{{Route('createLesson')}}" class="btn btn-success lg">Create New Lesson Here</a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('images/graph.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">Update course</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="{{Route('lessonShow')}}" class="btn btn-success">Update Course Here</a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('images/hand-pointing.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">Show Lesson</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <a href="{{Route('lessonShow')}}" class="btn btn-secondary lg">Other</a>
          </div>
        </div>
        {{-- <div class="col">
          <div class="card">
            <img src="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> --}}
      </div>


</div>





<div class="container paddtop30">
    <h1>
        <span class="uper">
            Students
        </span>
    </h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('images/user-group.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">Upgrade student</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="{{Route('studentlist')}}" class="btn btn-warning lg uper">upgrade students</a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('images/close.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">Exclude Student</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="{{Route('studentlist')}}" class="btn btn-danger">Exclude Student</a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('images/eye.png')}}" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title uper">......</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <a href="{{Route('lessonShow')}}" class="btn btn-primary lg">Other</a>
          </div>
        </div>
        {{-- <div class="col">
          <div class="card">
            <img src="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG" class="card-img-top" alt="HTTPS://VIA.PLACEHOLDER.COM/100X100.PNG">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> --}}
      </div>


</div>

  @endsection
