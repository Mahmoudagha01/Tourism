@extends('FrontEnd.Layout.master')
@section('title')
Home Page
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
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/mans.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Mansoura</h2>
                <p>
                  Mansoura lies on the east bank of the Damietta branch of the
                  Nile, in the Delta region. Mansoura is about 120 km northeast
                  of Cairo. Across from the city, on the opposite bank of the
                  Nile, is the town of Talkha.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <a href="{{ url('cairo') }}"> <img src="{{asset('imgs/cairo.jpg')}}" width="400px" height="350px" /></a>
            </div>
            <div class="contentBx">
              <div>
                <h2>Cairo</h2>
                <p>
                  Cairo has the oldest and largest film and music industries in
                  the Arab world, as well as the world's second-oldest
                  institution of higher learning, Al-Azhar University.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/alex.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Alexandria</h2>
                <p>
                  Alexandria remained the capital of Egypt for nearly a thousand
                  years and was immensely prosperous because of its strategic
                  trading location between the Mediterranean and the Red Sea.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/aswan.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Aswan</h2>
                <p>
                  Aswan is a Nubian city in the south of Egypt located on the
                  east bank of the Nile river connected to Cairo with train
                  stations, railways and domestic flights,its the population
                  almost about 900,000.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/baron.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Baron Palace</h2>
                <p>
                  The Baron Palace was inspired by the Hindu temples of Orissa
                  in India and Angkor Wat in Cambodia, which the Baron saw on
                  his many travels. It is composed of reinforced concrete, one
                  of the first major creative uses of such material.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/raselbar.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Ras-Elbar</h2>
                <p>
                  Ras El Bar lies in a peninsula on the coast of the
                  Mediterranean Sea, and it is bordered on the western by the
                  Damietta Nile branch. The area of "Lessan" is located in the
                  extreme northern part of this peninsula.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/luxor.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Luxor</h2>
                <p>
                  Luxor, once an Ancient Egyptian capital, is known today as the
                  world's greatest open-air museum. From the tomb of Tutankhamen
                  in the Valley of the Kings and the magnificent sunset views at
                  the majestic temple complexes of Karnak.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/idahab.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Dahab</h2>
                <p>
                  Of all the Red Sea destinations, Dahab is probably the most
                  appealing for those who want to soak up some sun in pristine
                  beaches, relax in laid back atmosphere and try local
                  restaurants. There are also plenty of cozy local stores to go
                  shopping
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/sharm.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Sharm Al sheigh</h2>
                <p>
                  With sunshine and warm waters all year round, Sharm El Sheikh
                  is the closest destination to Europe where you can soak up
                  sun, dive amazing corals reefs, and enjoy the sea any time you
                  need a break from routine.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/nc.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>North Coast</h2>
                <p>
                  Once only considered as a favored destination of Cairene
                  vacationers, the North Coast of Egypt has succeeded over the
                  past few years in earning the reputation of a world-class sea
                  resort, by catering to more exclusive lifestyles
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/siwa.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Siwa Oasis</h2>
                <p>
                  After a long drive through the barren landscape of the Western
                  Desert, you won’t believe your eyes when you reach Siwa for
                  the first time. See an edenic island full of mineral springs,
                  salt lakes and endless Olive and Palm groves.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card1">
          <div class="city">
            <div class="imgBx">
              <img src="{{asset('imgs/sohag.jpg')}}" width="400px" height="350px" />
            </div>
            <div class="contentBx">
              <div>
                <h2>Sohag</h2>
                <p>
                  The Sohag Museum contains about 5,000 artifacts gathered from
                  around the Sohag governorate, including items stretching from
                  the Middle Kingdom to Greco-Roman times.
                </p>
              </div>
            </div>
          </div>
        </div>
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