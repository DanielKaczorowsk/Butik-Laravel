@extends('layouts.index')
@section('baner')
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{asset('img/nike.jpg')}}" class="d-block img-fluid w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('img/adidas.jpg')}}" class="d-block img-fluid w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/puma.jpg')}}" class="d-block img-fluid w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection
@section('content')
<div>
  <h3 class="p-4 text-center">Największe promocje</h3>
  <hr class="mb-5"/>
</div>
<div class='row'>
    <div class="col-4 galeria">
    <img src="{{asset('img/butypuma.jpg')}}" class="img-fluid w-100 p-4" alt="...">
  </div>
  </div>
  @endsection
