<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection/connection.php');
include('inc/cleaninput.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/Logo mark with letter mark.png" type="image/x-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- swiper js -->
  <link rel="stylesheet" href="package/swiper-bundle.css">
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->


  <title>MentalVerse</title>
</head>

<body>
  <div class="headerImage">
    <nav class="nav-container">
      <div class="logo">
        <img src="images/Asset 1-1.png" alt="">
      </div>
      <div class="nav-cover" id="nav-menu">
        <ul class="nav-menu">
          <li class="nav-item"><a href="index.php" class="nav-link active">HOME</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">ABOUT US</a></li>
          <li class="nav-item"><a href="services.php" class="nav-link">SERVICES</a></li>
          <li class="nav-item"><a href="#" class="nav-link">PAGE <span class="material-symbols-outlined">keyboard_arrow_down</span></a></li>
          <li class="nav-item"><a href="contactUs.php" class="nav-link">CONTACT US</a></li>
        </ul>
        <div class="icons">
          <span class="icon material-symbols-outlined">call</span>
          <span class="icon material-symbols-outlined">mail</span>
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' -25, 'opsz' 24" id="menu_open">menu_open</span>
        </div>

      </div>
    </nav>

    <section class="container header">

      <div class="header_left">
        <h3>MENTALVERSE - MENTAL HEALTH</h3>
        <h2>Your Path to Mental Wellness Starts Here</h2>
        <hr>
        <p>Odio cras proin proin sit quis fringilla aliquet. Consectetur elementum viverraegestas egestas nulla ullamcorper varius quam.</p>
        <div class="learn">
          <button class="but start"><a href="about.php" style="color: black">LEARN MORE</a></button>
        </div>
        <p class="rating"><i>4.9/5</i> RATING FROM OUR CLIENTS</p>
      </div>

      <div class="header_right">
        <div class="top">
          <p>Watch Our Story</p>
          <div class="profile">
            <span class="icon material-symbols-outlined">play_arrow</span>
            <div class="pics">
              <img src="images/Image.png.png" alt="">
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="card">
            <img src="images/Image-1.png.png" alt="">
            <div class="card_text">
              <div class="title">
                <h3>Core Services</h3>
                <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
              </div>
              <div class="sessions">
                <p>Therapy Sessions</p>
              </div>
              <div class="sessions">
                <p>Psychiatric Consultations</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

  <section class="container about">
    <div class="top">
      <div class="about_left">
        <div class="title">
          <div class="topic">
            <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
            <p>ABOUT US</p>
          </div>
          <h2>Transforming Lives <br>Through Care</h2>
        </div>
        <div class="welcome">
          <img src="images/Image-2.png.png" alt="">
          <div class="message">
            <h3>Welcome Message from Our CEO</h3>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolorvel sodales sed nibh ut. Ac fringilla fames eget a aliquet.Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
            <div class="post">
              <h4>Joseph Doolenan</h4>
              <p>CEO, Zenlift</p>
            </div>
          </div>
        </div>
      </div>
      <div class="about_right">
        <div class="mission">
          <h3>Our Mission</h3>
        </div>
        <div class="cardContainer">
          <div class="card">
            <div class="title">
              <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
              <h4>Promoting Mental Wellness</h4>
            </div>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
          </div>
          <div class="card">
            <div class="title">
              <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
              <h4>Empowering Individuals</h4>
            </div>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
          </div>
          <div class="card">
            <div class="title">
              <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
              <h4>Supporting Personal Growth</h4>
            </div>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom">
      <div class="title">
        <h3>Conditions We Treat</h3>
        <div class="learn">
          <button class="but">LEARN MORE</button>
        </div>
      </div>
      <div class="conditions">
        <div class="condition_left">
          <div class="condition_list">
            <h3>Anxiety disorders</h3>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor
              vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida
              placerat viverra purus sed ac ultricies sem nulla.</p>
          </div>
          <div class="condition_list">
            <h3>Post-Traumatic Stress Disorder</h3>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
          </div>
          <div class="condition_list">
            <h3>Eating disorders</h3>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla..</p>
          </div>
        </div>
        <div class="condition_right">
          <img src="images/Image-3.png.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="container ourServices">
    <div class="top">
      <div class="title">
        <div class="topic">
          <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
          <p>OUR SERVICES</p>
        </div>
        <h2>Holistic Mental Health Solutions</h2>
      </div>
      <div class="learn">
        <button class="but">ALL SERVICES</button>
      </div>
    </div>
    <div class="bottom">
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Individual Therapy</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Group Therapy</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Family Counseling</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Couples Counseling</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Meditation Workshops</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
      <div class="therapyCard">
        <div class="circle">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
        </div>
        <h3>Teletherapy Services</h3>
        <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
      </div>
    </div>
  </section>

  <section class="container pricingPlan">
    <div class="top">
      <div class="title">
        <div class="topic">
          <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
          <p>PRICING PLANS</p>
        </div>
        <h2>Affordable Care Packages</h2>
      </div>
      <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
    </div>
    <div class="bottom">
      <div class="planCard">
        <h3>Standard Plan</h3>
        <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
        <div class="amount">
          <div>$200</div>
          <small>/month</small>
        </div>
        <small>Service Included:</small>
        <hr>
        <ul>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Sessions: 4 sessions/month</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Duration: 60 minutes</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Individual Therapy</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Features: Online Resources</p>
          </li>
        </ul>
        <div class="learn">
          <button class="but"><a href="register.php" class="li">GET STARTED</a></button>
        </div>
      </div>
      <div class="planCard">
        <h3>Premium Plan</h3>
        <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
        <div class="amount">
          <div>$500</div>
          <small>/month</small>
        </div>
        <small>Service Included:</small>
        <hr>
        <ul>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Sessions: Unlimited sessions</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Duration: 60 minutes</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Individual & Group</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Features: 24/7 Support</p>
          </li>
        </ul>
        <div class="learn">
          <button class="but"><a href="register.php" class="li">GET STARTED</a></button>
        </div>
      </div>
      <div class="planCard">
        <h3>Family Plan</h3>
        <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
        <div class="amount">
          <div>$600</div>
          <small>/month</small>
        </div>
        <small>Service Included:</small>
        <hr>
        <ul>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Sessions: 8 sessions/month</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Duration: 90 minutes</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Family & Group</p>
          </li>
          <li>
            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
            <p>Features: Group Workshops</p>
          </li>
        </ul>
        <div class="learn">
          <button class="but"><a href="register.php" class="li">GET STARTED</a></button>
        </div>
      </div>
    </div>
  </section>

  <section class="container statistic">
    <div class="top">
      <img src="images/Image-4.png (1).png" alt="">
      <div class="sideText">
        <div class="title">
          <div class="topic">
            <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
            <p>STATISTIC</p>
          </div>
          <h2>Mental Health by the Numbers</h2>
        </div>
        <span>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</span>
        <div class="reviews">
          <div class="reviewPlus">
            <h1>500<span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">add</span></h1>
            <p>SATISFIED CLIENTS</p>
          </div>
          <div class="reviewPlus">
            <h1>1,200<span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">add</span></h1>
            <p>POSITIVE REVIEWS</p>
          </div>
          <div class="reviewPlus">
            <h1>200<span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">add</span></h1>
            <p>WORKSHOPS HELD</p>
          </div>
          <div class="reviewPlus">
            <h1>1,800<span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">add</span></h1>
            <p>THERAPY SESSIONS</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="bottom_left">
        <div class="title">
          <div class="topic">
            <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
            <p>STATISTIC</p>
          </div>
          <h2>The Zenlift Guilding Principles</h2>
        </div>
        <div class="principles">
          <div class="card">
            <div class="circle">
              <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">star_rate</span>
            </div>
            <div class="text">
              <h3>Compassion</h3>
              <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut.</p>
            </div>
          </div>
          <div class="card">
            <div class="circle">
              <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">star_rate</span>
            </div>
            <div class="text">
              <h3>Integrity</h3>
              <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut.</p>
            </div>
          </div>
          <div class="card">
            <div class="circle">
              <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">star_rate</span>
            </div>
            <div class="text">
              <h3>Excellence</h3>
              <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut.</p>
            </div>
          </div>
          <div class="card">
            <div class="circle">
              <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">star_rate</span>
            </div>
            <div class="text">
              <h3>Collaboration</h3>
              <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom_right">
        <img src="images/Image-12.png.png" alt="">
        <div class="reviews">
          <div class="reviewPlus">
            <h1>25</h1>
            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">add</span>
            <p>Qualified <br>Professionals</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container stories">
    <div class="top">
      <div class="title">
        <h2>Real Stories, Real Impact</h2>
      </div>
      <div class="learn">
        <button class="but">SEE ALL</button>
      </div>
    </div>
    <div class="bottom mySwiper">
      <div class="cards swiper-wrapper">
        <div class="card swiper-slide">
          <div class="picText">
            <p>Sarah Johnson</p>
            <span>Marketing Manager</span>
          </div>
          <img src="images/Image (5).png" alt="">
          <div class="text">
            <div class="circle">
              <span class="icon material-symbols-outlined">play_arrow</span>
            </div>
            <h3>Overcoming Anziety and Finding Peace</h3>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="picText">
            <p>Emily and James Parker</p>
            <span>Teacher and Graphic Designer</span>
          </div>
          <img src="images/Image (4).png" alt="">
          <div class="text">
            <div class="circle">
              <span class="icon material-symbols-outlined">play_arrow</span>
            </div>
            <h3>Strengthening Our Relationship</h3>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="picText">
            <p>Sarah Johnson</p>
            <span>Marketing Manager</span>
          </div>
          <img src="images/Image (5).png" alt="">
          <div class="text">
            <div class="circle">
              <span class="icon material-symbols-outlined">play_arrow</span>
            </div>
            <h3>Overcoming Anziety and Finding Peace</h3>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="picText">
            <p>Emily and James Parker</p>
            <span>Teacher and Graphic Designer</span>
          </div>
          <img src="images/Image (4).png" alt="">
          <div class="text">
            <div class="circle">
              <span class="icon material-symbols-outlined">play_arrow</span>
            </div>
            <h3>Strengthening Our Relationship</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container begin">
    <div class="title">
      <div class="topic">
        <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
        <p>START YOUR JOURNEY</p>
      </div>
      <h2>Begin Your Path to Wellness</h2>
    </div>
    <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
    <div class="learn">
      <button class="start but">SCHEDULE A CONSULTATION</button>
    </div>
    <div class="learn">
      <button class="but"><a href="contactUs.php" class="li">CONTACT US</a></button>
    </div>
  </section>

  <section class="container footer">
    <div class="top">
      <div class="top_left">
        <h2>MENTAL VERSE</h2>
        <p>Feel free to call us in working hours Mon – fri {8:00 – 16.00}. Our team will be happy to help answer your queries</p>
        <ul class="footer_socials">
          <li>
            <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>
      <div class="top_middle">
        <div class="foot_company">
          <h2>Company</h2>
          <ul class="footer_menu">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="about.php" class="nav-link">About us</a></li>
            <li><a href="register.php" class="nav-link">Courses</a></li>
            <li><a href="register.php" class="nav-link">Programs</a></li>
          </ul>
        </div>
        <div class="foot_service">
          <h2>Services</h2>
          <ul class="footer_services">
            <li>Individual Therapy</li>
            <li>Group Therapy</li>
            <li>Family Counseling</li>
            <li>Couples Counseling</li>
          </ul>
        </div>

      </div>
      <div class="top_right">
        <p>Subscribe to our newsletter</p>
        <div>
          <form action="inc/newsletter/send-newsletter.php" method="post">
            <input type="email" placeholder="Enter in your Email" name="email" required>
            <button type="submit" class="but start">SUBSCRIBE</button>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <p>Copyright <span class="material-symbols-outlined">Copyright</span> 2024 </p>
        <p>MentalVerse</p>
      </div>
      <div class="right">
        <p>Terms of Use</p>
        <p>Privacy Policy</p>
      </div>
    </div>
  </section>

  <!-- <script src="https://unpkg.com/swiper-bundle.min.js"></script> -->
  <script src="package/swiper-bundle.js"></script>
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/2a49fbdbb8.js" crossorigin="anonymous"></script>

  <script src="script.js"></script>

</body>

</html>