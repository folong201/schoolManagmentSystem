@extends('layout1')
@section('content')
welcome to : {{Auth::user()->status}} dashboard
<br>

<a href="{{Route('suscribe')}}" class="btn btn-secondary">join course</a> <br> <br>
<a href="{{Route('studentCourseList')}}" class="btn btn-secondary">Upcoming course</a> <br> <br>
<a href="{{Route('unSuscribe')}}" class="btn btn-secondary">other  course</a> <br> <br>
<a href="{{Route('unSuscribe')}}" class="btn btn-secondary">teacher course</a> <br> <br>
<a href="{{Route('unSuscribe')}}" class="btn btn-secondary">passs course</a> <br> <br>
<a href="{{Route('unSuscribe')}}" class="btn btn-secondary">in Progress course</a> <br> <br>

<br>
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
  </nav>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>

  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Collapsible Group Item #1
          </button>
        </h2>
      </div>
  </div>


  <div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-white rounded">
    <img src="" alt="altenative text" style="min-width: 200px;max-width:300px;background-color:blue;min-height:200px; float: left;clear:both">
   <h3>
    Regular shadow or othe
   </h3>

    <br>
    . Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis?
</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>


<div class="media position-relative">
    <img src="https://placehoder.com/100x100" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Media with stretched link</h5>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="stretched-link">Go somewhere</a>
    </div>
  </div>
  <div class="theContent" id="theContent">theContent</div>
  <div id="theButton" class="btn btn-primary">
    bouton
  </div>

  <script>
    var container = document.getElementById('theButton').addEventListener('click',()=>{
        // alert('cloked')
    var http = new XMLHttpRequest()

    http.onload() = ()=>{
        document.getElementById('theContent').innerHTML = this.ResponseText
    }
    http.open('GET','data')
    http.send()
})

  </script>
@endsection
