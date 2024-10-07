<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "servicesDetails";
include('connection/connection.php');
include('inc/cleaninput.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/servicesDetails.css">

    <link rel="shortcut icon" href="images/Logo mark with letter mark.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <title>MentalVerse | Service Details</title>
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

            <h2>Service Details</h2>
            <p>Odio cras proin proin sit quis fringilla aliquet. Consectetur elementum viverra egestas egestas nulla ullamcorper varius quam.</p>

        </section>
    </div>

    <section class="container about meditation">
        <div class="top">
            <div class="about_left">
                <div class="title">
                    <div class="topic">
                        <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                        <p>MEDITATION WORKSHOPS</p>
                    </div>
                    <h2>Zenlift Meditation <br> Programs</h2>
                </div>
                <p class="message">Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
                <div class="rating">
                    <div class="learn">
                        <button class="but">JOIN A WORKSHOP</button>
                    </div>
                    <div class="text">
                        <div class="rating_star">
                            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                        </div>
                        <p>From 120+ reviews</p>
                    </div>
                    <p class="points">5.0</p>
                </div>
            </div>
            <div class="about_right">
                <img src="images/Image-8.png.png" alt="">
            </div>
        </div>
        <div class="bottom cards">
            <div class="card">
                <h2>Beginner's Meditation</h2>
                <p class="word">Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim..</p>
                <div class="duration">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">timer</span>
                    <h3>Duration</h3>
                    <p>1 Hour</p>
                </div>
            </div>
            <div class="card">
                <h2>Mindfulness Meditation</h2>
                <p class="word">Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim..</p>
                <div class="duration">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">timer</span>
                    <h3>Duration</h3>
                    <p>1.5 Hour</p>
                </div>
            </div>
            <div class="card">
                <h2>Advanced Meditation</h2>
                <p class="word">Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim..</p>
                <div class="duration">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">timer</span>
                    <h3>Duration</h3>
                    <p>2 Hour</p>
                </div>
            </div>

        </div>
        <div class="bottom profiles">
            <div class="left">
                <h2>Instructor Profiles:</h2>
                <div class="welcome">
                    <img src="images/Image-10.png.png" alt="">
                    <div class="message">
                        <h3>Senior Meditation Instructor</h3>
                        <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolorvel sodales sed nibh ut. Ac fringilla fames eget a aliquet.Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
                        <div class="post">
                            <h4>Dr. Jane Smith</h4>
                            <p>Certified</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2>Instructor Profiles:</h2>
                <div class="assured">
                    <p>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                        <span>Manage and reduce stress effectively.</span>
                    </p>
                    <p>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                        <span>Improve concentration and mental clarity.</span>
                    </p>
                    <p>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                        <span>Achieve greater emotional stability and well-being.</span>
                    </p>
                    <p>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                        <span>Enhance sleep quality through meditation</span>
                    </p>
                    <p>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                        <span>Promote holistic health and mindfulness</span>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="container ourServices review">
        <div class="top">
            <div class="title">
                <div class="topic">
                    <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                    <p>REVIEW</p>
                </div>
                <h2>What Our Clients Say</h2>
            </div>
            <div class="learn">
                <button class="but">ALL REVIEW</button>
            </div>
        </div>
        <div class="bottom">
            <div class="therapyCard">
                <div class="top">
                    <img src="images/Vector.png" alt="">
                    <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
                </div>
                <div class="bottom">
                    <img src="images/Image-14.png.png" alt="">
                    <div class="post">
                        <h2>Shari Gutmann</h2>
                        <span>Product Group Specialist</span>
                    </div>
                </div>

            </div>
            <div class="therapyCard">
                <div class="top">
                    <img src="images/Vector.png" alt="">
                    <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
                </div>
                <div class="bottom">
                    <img src="images/Image-15.png.png" alt="">
                    <div class="post">
                        <h2>Donald Beck</h2>
                        <span>Lead Accounts Producer</span>
                    </div>
                </div>

            </div>
            <div class="therapyCard">
                <div class="top">
                    <img src="images/Vector.png" alt="">
                    <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
                </div>
                <div class="bottom">
                    <img src="images/Image-16.png.png" alt="">
                    <div class="post">
                        <h2>Gerardo Mante</h2>
                        <span>Dynamic Integration Designer</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container about mission steps">
        <div class="top">
            <div class="about_left">
                <div class="title">
                    <div class="topic">
                        <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                        <p>HOW IT WORKS</p>
                    </div>
                    <h2>Understanding Our <br> Approach</h2>
                </div>
                <p class="message">Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
            </div>
            <div class="about_right">
                <img src="images/Image-6.png.png" alt="">
            </div>
            <div class="about_bottom">
                <div class="card">
                    <div class="circle">
                        <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                    </div>
                    <h3>STEP <br> 1</h3>
                    <div class="text">
                        <p>Consultation and Assessment</p>
                    </div>
                </div>
                <span class="arrow_right_alt first material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_right_alt</span>
                <span class="arrow_downward first material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_downward</span>
                <div class="card">
                    <div class="circle">
                        <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                    </div>
                    <h3>STEP <br> 2</h3>
                    <div class="text">
                        <p>Personalized Treatment</p>
                    </div>
                </div>
                <span class="arrow_right_alt material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_right_alt</span>
                <span class="arrow_downward material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_downward</span>
                <div class="card">
                    <div class="circle">
                        <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                    </div>
                    <h3>STEP <br> 3</h3>
                    <div class="text">
                        <p>Therapeutic Interventions</p>
                    </div>
                </div>
                <span class="arrow_right_alt third material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_right_alt</span>
                <span class="arrow_downward third material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 200, 'opsz' 24;">arrow_downward</span>
                <div class="card">
                    <div class="circle">
                        <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                    </div>
                    <h3>STEP <br> 4</h3>
                    <div class="text">
                        <p>Ongoing Support and Progress</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container ourServices solutions">
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
        </div>
    </section>

    <section class="statistic health faqQue">
        <div class="top">
            <img src="images/Image-9.png" alt="">
            <div class="sideText">
                <div class="title">
                    <div class="topic">
                        <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                        <p>FAQ</p>
                    </div>
                    <h2>Your Questions Answered</h2>
                </div>
                <div class="questions">
                    <article class="faq">
                        <div class="question_title">
                            <h4>How can I schedule an appointment?</h4>
                            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 0,'wght' 700,'GRAD' -25,'opsz' 24">south_east</span>
                        </div>
                        <div class="question_answer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab perferendis neque dolor veniam cupiditate quisquam nam sed mollitia animi cum impedit libero voluptas hic, iusto voluptates accusamus quos expedita maiores?</p>
                        </div>
                    </article>

                    <article class="faq">
                        <div class="question_title">
                            <h4>Do you accept insurance?</h4>
                            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 0,'wght' 700,'GRAD' -25,'opsz' 24">south_east</span>
                        </div>
                        <div class="question_answer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab perferendis neque dolor veniam cupiditate quisquam nam sed mollitia animi cum impedit libero voluptas hic, iusto voluptates accusamus quos expedita maiores?</p>
                        </div>
                    </article>

                    <article class="faq">
                        <div class="question_title">
                            <h4>What types of payment do you accept?</h4>
                            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 0,'wght' 700,'GRAD' -25,'opsz' 24">south_east</span>
                        </div>
                        <div class="question_answer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab perferendis neque dolor veniam cupiditate quisquam nam sed mollitia animi cum impedit libero voluptas hic, iusto voluptates accusamus quos expedita maiores?</p>
                        </div>
                    </article>

                    <article class="faq">
                        <div class="question_title">
                            <h4>Are your services confidential?</h4>
                            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 0,'wght' 700,'GRAD' -25,'opsz' 24">south_east</span>
                        </div>
                        <div class="question_answer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab perferendis neque dolor veniam cupiditate quisquam nam sed mollitia animi cum impedit libero voluptas hic, iusto voluptates accusamus quos expedita maiores?</p>
                        </div>
                    </article>
                </div>
            </div>
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
                        <li><a href="index.html" class="nav-link">Home</a></li>
                        <li><a href="message.html" class="nav-link">About us</a></li>
                        <li><a href="#" class="nav-link">Courses</a></li>
                        <li><a href="login.html" class="nav-link">Programs</a></li>
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
                    <input type="email" placeholder="Enter in your Email" required>
                    <button type="submit" class="but start">SUBSCRIBE</button>
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





    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/2a49fbdbb8.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>