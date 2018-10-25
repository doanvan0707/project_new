@extends('layouts.frontend')
@section('content')
<br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ url('images/slides/sl1.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ url('images/slides/sl2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ url('images/slides/sl3.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<section class="promotion">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('images/frontend/ss1.jpg') }}" alt="ss1" width="100%">
        </div>
        <div class="col-md-6">
             <img src="{{ url('images/frontend/ss2.jpg') }}" alt="ss2" width="100%">
        </div>
    </div>
</section>
<br>
<section class="promotion">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('images/frontend/ss2.jpg') }}" alt="ss1" width="100%">
        </div>
        <div class="col-md-6">
             <img src="{{ url('images/frontend/ss1.jpg') }}" alt="ss2" width="100%">
        </div>
    </div>
</section>
<br>
@endsection