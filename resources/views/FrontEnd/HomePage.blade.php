@extends('FrontEnd.Layout.master')
@section('title')
Home Page
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/css/home.css')}}" />
@endsection

@section('content')
 <!-- Start Of carousel -->
 <header class="w-100">
      <div
        id="carouselExampleCaptions"
        class="carousel slide position-absolute top-0 end-0 start-0"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('imgs/slide_home_3.jpg')}}" class="d-block w-100" alt="1" />
            <div class="carousel-caption d-none d-md-block m-5">
              <h1>Going Inside Louver Museum</h1>
              <p>
                Some representative placeholder content for the first slide.
              </p>
              <button type="button" class="btn btn-primary">Read more</button>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="{{asset('imgs/banner_bg_desktop.jpg')}}"
              class="d-block w-100"
              alt="2"
            />
            <div class="carousel-caption d-none d-md-block m-5">
              <h1>Second slide label</h1>
              <p>
                Some representative placeholder content for the second slide.
              </p>
              <button type="button" class="btn btn-primary">Read more</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('imgs/slide_home_1.jpg')}}" class="d-block w-100" alt="3" />
            <div class="carousel-caption d-none d-md-block m-5">
              <h1>Third slide label</h1>
              <p>
                Some representative placeholder content for the third slide.
              </p>
              <button type="button" class="btn btn-primary">Read more</button>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
<!-- End Of carousel -->



    <div class="explore">
      <h2>Explore our most popular cities</h2>
      <p>See what these cities have to offer and rent the perfect place</p>
    </div>
    <div class="info">
      <section>
        @foreach ($cities as $citie)
            
      
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset($citie->image)}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>{{$citie->name}}</h2>
                <p>
                 {{$citie->description}}
                </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </section>
    </div>
    <div class="space"></div>

    <div class="heading">
      <h1 style="margin: 30px; border-bottom: solid 2px red">Our Services</h1>
    </div>
    <div class="services">
      <div class="container">
        <div class="box">
          <div class="content">
            <h2>01</h2>
            <h3>Services one</h3>
            <p>Rent a apartment in a preferred city in Egypt.</p>
            <a href="{{ url('rooms') }}">Read more</a>
          </div>
        </div>
        <div class="box">
          <div class="content">
            <h2>02</h2>
            <h3>Services two</h3>
            <p>Rent a room in a preferred hotel in Egypt.</p>
            <a href="{{ url('rooms') }}">Read more</a>
          </div>
        </div>
        <div class="box">
          <div class="content">
            <h2>03</h2>
            <h3>Services three</h3>
            <p>Shopping in a preferred city in Egypt.</p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
@endsection