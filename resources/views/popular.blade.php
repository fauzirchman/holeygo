@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        Popular Travel Plan
    </div>

    <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur dapibus sodales. Aliquam bibendum pulvinar massa, sit amet ullamcorper sem pellentesque ut. Vestibulum vehicula sapien sed cursus blandit. Nam porta tempus lorem vitae pellentesque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed varius enim non.</p>
    </div>

</div>

<br>

<div class="row">
    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>

    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>

    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>

    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>

    <div class="col-md-4">
         <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Plan by User A</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Read More</a>
          </div>
          
        </div>
    </div>
</div>

<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://via.placeholder.com/1280x400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1280x400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1280x400" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
