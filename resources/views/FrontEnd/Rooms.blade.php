@extends('FrontEnd.Layout.master')
@section('title')
Apartments & Rooms
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('css/css/apartment&rooms.css')}}" />
    
@endsection

@section('content')
 <!-- Start Of Carousel -->
 <div class="Carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgs/Flat2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat6.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat7.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgs/Flat8.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <!-- End Of Carousel -->


    <div class="search1">
   
        <input type="search" class="map" placeholder="Where Will You GO ?">
        <div class="checkin">
            <input placeholder="Check-In" type="text" onfocus="(this.type = 'date')"  id="date">
            <input placeholder="Check-Out" type="text" onfocus="(this.type = 'date')"  id="date">
        </div>
        <input type="submit" class="run" value="Search">
    </div>

    <!--****************-->
    <div class="heading" style="margin-top: 100px;"><h2>Our Offers.</h2></div>
        
    <div class="blurcard">
     
        @foreach ($rooms as $room)
            
       
        <a class="Card" href="{{route('tourists.create')}}" >
            <div class="imgBx" style="background-image: url('{{asset($room->image)}}')"></div>
            <div class="contentBx">

        <h3>{{$room->price}}</h3>
                <input type="button" value="Book Now" >
            </div>
        </a>
        @endforeach
       
    </div>

    <div class="heading"><h2>Available Rooms.</h2></div>
        
    <div class="swipering">
        <div>
            <div id="wappering">
                <img id="lefting" class="arrowleft" src="imgs/Iconleft.png" onclick="lefts()">

                <div id="slidering">
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/Room1.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>500EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/Room2.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>600EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/room3.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>700EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/Room4.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>500EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/Room5.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>400EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="imgs/Room6.jpg">
                        </div>
                        <div class="contentBx">
                            <div class="content">
                                <p>500EGP</p>
                                <p>Per night</p>
                            </div>
                            <input type="button" value="Book Now">
                        </div>
                    </div>
                </div>

                <img id="righting" class="arrowright" src="imgs/Iconright.png" onclick="rights()">
            </div>
        </div>
       
@endsection