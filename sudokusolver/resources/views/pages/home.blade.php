@extends('layouts.master')

@section('title')
  sudoku | home
@endsection
@section('content')

<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" class=" text-light">Sudoku solver</h1>
          <h2 data-aos="fade-up" class="text-light" data-aos-delay="400">Solve Any SUDOKU Problem easily !!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="/solve" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <br>
        
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/images/sudoku-logo.jpg')}}" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection