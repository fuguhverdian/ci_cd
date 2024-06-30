<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/nm.png') }}" type="image/x-icon" />
    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Hamburger -->
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}" />
    <!-- bostrep -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <title>TimingPoint | Master Your Tasks, Conquer Your Day</title>
  </head>

  <body id="home">
    <div class="animate__animated animate__fadeIn animate__delay-3s">
        @include('partials.navbar')

<!--   Header -->
    <div class="header">
        <div class="header-box">
          <div class="title">
            <h1 class="animate__animated animate__rubberBand animate__delay-1s">
              TimingP⭕int
            </h1>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">
              Simplify Your Task Management and <br />
              Stay on Schedule.
            </p>
          </div>
          
          <div class="hero-img">
            <img src="{{ asset('assets/img/1.jpg') }}" alt="unsplash.com" />
            <img src="{{ asset('assets/img/2.jpg') }}" alt="unsplash.com" />
            <img src="{{ asset('assets/img/3.jpg') }}" alt="unsplash.com" />
            <img src="{{ asset('assets/img/4.jpg') }}" alt="unsplash.com" />
          </div>

          <div class="about" id="about">
            <div class="container">
              <h1>About Us</h1>
              <p>Welcome to our web-based todo list application! We are dedicated to providing you with a simple and efficient tool to manage your tasks and stay organized.</p>

              <div class="info">
                <div class="box">
                  <h3>Easy Task Creation</h3>
                  <h1 data-aos="zoom-in" data-aos-duration="1000">Quickly create tasks with a title, description, due date, and priority level.</h1>
                </div>
                <div class="box">
                  <h3>Reminders and Notifications</h3>
                  <h1 data-aos="zoom-in" data-aos-duration="1000">Stay on track with reminders and notifications for upcoming deadlines.</h1>
                </div>
                <div class="box">
                  <h3>Progress Tracking</h3>
                  <h1 data-aos="zoom-in" data-aos-duration="1000"> Monitor your progress and mark tasks as completed to stay motivated.</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  Header -->

    <!--  motivasi -->
    <div class="motivasi">
        <div class="container">
          <div class="motivasi-box">
            <h1>"Stay focused, stay determined, and cross off those tasks!"</h1>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b08968" fill-opacity="1" d="M0,192L26.7,208C53.3,224,107,256,160,234.7C213.3,213,267,139,320,90.7C373.3,43,427,21,480,42.7C533.3,64,587,128,640,128C693.3,128,747,64,800,58.7C853.3,53,907,107,960,144C1013.3,181,1067,203,1120,181.3C1173.3,160,1227,96,1280,80C1333.3,64,1387,96,1413,112L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
      <!--  motivasi -->
