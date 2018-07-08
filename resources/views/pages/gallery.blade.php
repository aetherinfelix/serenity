@extends('layout.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <img class="d-block rounded w-80 h-auto"x src="images/gallery/img1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block rounded w-80 h-auto" src="images/gallery/img2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block rounded w-80 h-auto" src="images/gallery/img3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
                <img class="d-block rounded w-80 h-auto" src="images/gallery/img4.jpg" alt="Fourth slide">
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