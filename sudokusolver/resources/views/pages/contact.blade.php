
@extends('layouts.master')

@section('title')
  sudoku | Profiles
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container" data-aos="fade-up">
        <h1 class="section-header">
          <p class="mt-5">Get In Touch With Me</p>
        </h1>
        <div class="row d-flex justify-content-center align-items-center">
  
          <!-- Leetcode -->
          <div class="col-md-4 col-lg-4 col-sm-12 ">
            
            <div class="card" style="width: 100%;">
              <img src="{{asset('assets/images/leetcode.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">LeetCode Profile</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="https://leetcode.com/u/Veerendr_Babu508/" target="_blank" class="btn btn-warning">view</a>
              </div>
            </div>
  
          </div>
  
          <!-- Linked In -->
          <div class="col-md-4 col-lg-4 col-sm-12">
            
            <div class="card " style="width: 100%;">
              <img src="{{asset('assets/images/linkedin.png')}}" class="card-img-top" alt="..." >
              <div class="card-body text-center">
                <h5 class="card-title">LinkedIn Profile</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="https://linkedin.com/in/veerendra-babu-13a254232/" target="_blank" class="btn btn-primary">view</a>
              </div>
            </div>
  
          </div>
  
          <!-- Hacker Rank -->
          <div class="col-md-4 col-lg-4 col-sm-12">
            
            <div class="card" style="width: 100%;">
              <img src="{{asset('assets/images/hackerrank.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">HackerRank Profile</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="https://www.hackerrank.com/profile/1693286veerendr1" target="_blank" class="btn btn-success">view</a>
              </div>
            </div>
  
          </div>
  
          
  
        </div>
  
  
        <div class="row d-flex justify-content-center align-items-center mt-5">
          
          <div class="col-md-12 d-flex justify-content-center align-items-center">
            <!-- Git Hub -->
            <div class="col-md-4 col-lg-4 col-sm-12">
            
              <div class="card" style="width: 90%;">
                <img src="{{asset('assets/images/github.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">GitHub Profile</h5>
                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <a href="https://github.com/VEERENDRA-143" target="_blank" class="btn btn-dark">view</a>
                </div>
              </div>
  
            </div>

            {{-- Code forces --}}

            <div class="col-md-4 col-lg-4 col-sm-12">
            
              <div class="card" style="width: 90%;">
                <img src="{{asset('assets/images/codeforces.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">CodeForces Profile</h5>
                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <a href="https://codeforces.com/profile/Veerendra_Babu" target="_blank" class="btn btn-danger">view</a>
                </div>
              </div>
  
            </div>


            {{-- Code chef --}}
            <div class="col-md-4 col-lg-4 col-sm-12">
            
              <div class="card" style="width: 100%;">
                <img src="{{asset('assets/images/codechef.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">CodeChef Profile</h5>
                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <a href="https://www.codechef.com/users/veerendrababu8" target="_blank" class="btn btn-primary">view</a>
                </div>
              </div>
  
            </div>


          </div>


        </div>

      </div>
      
  </section>
@endsection