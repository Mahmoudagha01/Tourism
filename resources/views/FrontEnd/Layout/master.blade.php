<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('css/css/cairo.css')}}" />
    <link rel="stylesheet" href="{{asset('css/css/apartment&rooms.css')}}" />
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('js/js/jquery-3.5.1.slim.min.js')}}"></script>
  
   
  </head>
  <body>
    <!--Start Of Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-md">
        <a class="navbar-brand" href="#">
          <img src="{{asset('imgs/logo.png')}}" width="60" height="60" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-md-center"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                WHERE TO GO
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Cairo</a></li>
                <li><a class="dropdown-item" href="#">Luxor</a></li>
                <li>
                  <a class="dropdown-item" href="#">Mansoura</a>
                </li>
                <li><a class="dropdown-item" href="#">Alexandria</a></li>
                <li><a class="dropdown-item" href="#">Aswan</a></li>
                <li>
                  <a class="dropdown-item" href="#">Ras Al Bar</a>
                </li>
                <li><a class="dropdown-item" href="#">Dahab</a></li>
                <li><a class="dropdown-item" href="#">Algouna</a></li>
                <li>
                  <a class="dropdown-item" href="#">Sharm Al Sheikh</a>
                </li>
                <li><a class="dropdown-item" href="#">North Coast</a></li>
                <li><a class="dropdown-item" href="#">Sohag</a></li>
                <li>
                  <a class="dropdown-item" href="#">Marsa Matrouh</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                WHAT TO DO
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Culture</a></li>
                <li><a class="dropdown-item" href="#">Sport</a></li>
                <li>
                  <a class="dropdown-item" href="#">Sun & Sea</a>
                </li>
                <li><a class="dropdown-item" href="#">Spa</a></li>
                <li><a class="dropdown-item" href="#">Nature</a></li>
                <li>
                  <a class="dropdown-item" href="#">Nile Curise</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                EXEPERIENCE
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Adventure</a></li>
                <li><a class="dropdown-item" href="#">Family</a></li>
                <li>
                  <a class="dropdown-item" href="#">Culture</a>
                </li>
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Relaxation</a></li>
                <li>
                  <a class="dropdown-item" href="#">Spiritual</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                EVENTS
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">World Tourism Day</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                VISIT PLANNER
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#">Before Your Trip</a></li>
                <li><a class="dropdown-item" href="#">During Your Trip</a></li>
                <li>
                  <a class="dropdown-item" href="#">Visit Planner</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="search d-flex ml-5">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-primary" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Of Navbar -->
@yield('content')
  <!-- Start Of Footer -->
  <footer>
    <div class="row rowing">
      <div class="col-35">
        <h3>Egypt</h3>
        <p>
          Egypt is considered to be a regional power in North Africa, the
          Middle East and the Muslim world, and a middle power worldwide. With
          one of the largest and most diversified economies in the Middle
          East, which is projected to become one of the largest in the world
          in the 21st century, Egypt has the third-largest economy in Africa,
          the world's 40th-largest economy by nominal GDP, and the 19-largest
          by PPP. Egypt is a founding member of the United Nations, the
          Non-Aligned Movement, the Arab League, the African Union, and the
          Organisation of Islamic Cooperation.
        </p>
      </div>
      <div class="col-350">
        <div class="col-35 col-800">
          <ul>
            <li><h3>Egypt Cities</h3></li>
            <li><a href="#">Mansoura.</a></li>
            <li><a href="#">Cairo.</a></li>
            <li><a href="#">Alexandria.</a></li>
            <li><a href="#">Aswan.</a></li>
            <li><a href="#">Luxor.</a></li>
            <li><a href="#">Ras Elbar.</a></li>
            <li><a href="#">Sohag.</a></li>
            <li><a href="#">Dahab.</a></li>
          </ul>
        </div>
        <div class="col-30">
          <form>
            <ul>
              <li><h3>ContactUs</h3></li>
              <li>
                <input
                  type="email"
                  class="form-control"
                  style="color: #ddb65dff"
                  placeholder="Your email address"
                  required
                />
              </li>
              <li>
                <textarea
                  class="form-control"
                  style="color: #ddb65dff"
                  placeholder="Your message"
                  rows="4"
                  required
                ></textarea>
              </li>
              <li>
                <input
                  type="submit"
                  class="form-control submit"
                  value="SEND MESSAGE"
                />
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-100">
        <p>
          <span
            >Follow us and use the following social media platforms to get in
            contact with us and to share your passion for the brand, products
            and services of our site</span
          >
        </p>
      </div>
    </div>
    <div class="row">
      <div class="follow">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-600 text-center">
        <ul>
          <li>خريطة الموقع</li>
          <li>سياسة الخصوصية</li>
          <li>شروط الاستخدام</li>
          <li>العلامة التجارية وجميع الحقوق محفوظة ©2020</li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- end Of Footer -->
    
  </body>
</html>
