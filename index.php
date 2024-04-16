<!DOCTYPE html>
<html lang="en">                                                          
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Shetkari</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
    <nav>
        <div class="logo" >
            <img src="images/logo.png" alt="Logo" >
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#services-section">Services</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="pridict.php">Drone</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="community.php">Community</a></li>
        </ul>
        <div class="buttons">
            <a href="signup.php"><button class="dark-blue">SignUp</button></a>
            <a href="login.php"><button class="dark-blue">Log In</button></a>
        </div>

        <div class="menu">
  <span>&#9776;</span>
  <div class="menu-content" id="menuContent">
    <span id="username"></span>
    <a href="#" id="logout">Logout</a>
  </div>
</div>

    </nav>
</header>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/slideshow1.jpg" style="width:100%; height:10%">
  <div class="text" style="font-size: 180%; text-shadow: 0 4px 8px rgba(0, 0, 0, 3.5);">Drone</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/slideshow2.jpg" style="width:100%">
  <div class="text" style="font-size: 180%; text-shadow: 0 4px 8px rgba(0, 0, 0, 3.5);">Modern Farmer</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/slideshow3.png" style="width:100%">
  <div class="text" style="font-size: 180%; text-shadow: 0 4px 8px rgba(0, 0, 0, 3.5);">Smart Agriculture</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/slideshow4.png" style="width:100%">
  <div class="text" style="font-size: 180%; text-shadow: 0 4px 8px rgba(0, 0, 0, 3.5);">Community</div>
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>



<div class="services-section" id="services-section">
    <h2>Our <span style="color: #00008B;">Services</span> </h2>
    <div class="service-container grid grid-cols-3 gap-4 ">
        <div class="service" style="background-image: url(images/service1.jpg);">
            <h3>Rent Drone</h3>
            <p>Know the drone farming and try</p>
        </div>
        <div class="service" style="background-image: url(images/service2.jpg); background-position: center; background-size: cover;">
            <h3>Community</h3>
            <p>For employers, our job portal offers a range of solutions to streamline the hiring process. Access a pool of qualified candidates, post job openings, and manage applications seamlessly. Our platform is designed to help employers find the right talent efficiently and effectively.</p>
        </div>
        <div class="service" style="background-image: url(images/service3.jpg); background-position: center; background-size: cover;">
            <h3>Modern Technology</h3>
            <p>Explore remote job opportunities from leading companies worldwide. Our job portal features remote-friendly job listings across various industries, allowing you to work flexibly from anywhere while maintaining a healthy work-life balance.</p>
        </div>
        <div class="service" style="background-image: url(images/service4.jpg); background-position: center; background-size: cover;">
            <h3>Chatbots</h3>
            <p>Our job portal offers comprehensive search capabilities to help you find the perfect job that matches your skills, experience, and preferences. With advanced filters and personalized recommendations, navigating through thousands of job listings has never been easier.</p>
        </div>
        <div class="service" style="background-image: url(images/service5.jpg); background-position: center; background-size: cover;">
            <h3>News</h3>
            <p>For employers, our job portal offers a range of solutions to streamline the hiring process. Access a pool of qualified candidates, post job openings, and manage applications seamlessly. Our platform is designed to help employers find the right talent efficiently and effectively.</p>
        </div>
        <div class="service" style="background-image: url(images/service6.jpg); background-position: center; background-size: cover;">
            <h3>Support and Guidance</h3>
            <p>Explore remote job opportunities from leading companies worldwide. Our job portal features remote-friendly job listings across various industries, allowing you to work flexibly from anywhere while maintaining a healthy work-life balance.</p>
        </div>
    </div>
</div>




<!-- video container -->
<h1 style="text-align: center; font-size:200%; padding-top:20px">Videos</h1>
<div class="custom-video-container">

  <div class="custom-video-slide custom-fade">
    <div class="custom-numbertext">1 / 2</div>
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/zUwYQ7BU1vw" frameborder="0" allowfullscreen></iframe>
    <div class="custom-text">Video 1</div>
  </div>

  <div class="custom-video-slide custom-fade">
    <div class="custom-numbertext">2 / 2</div>
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/V-lnayklMo0" title="ड्रोन उडवायला परवानगी लागते का?ड्रोन विषयी संपूर्ण माहिती मराठीत drone  information in marathi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <div class="custom-text">Video 2</div>
  </div>

  

  <a class="custom-prev" onclick="plusCustomSlides(-1)">❮</a>
  <a class="custom-next" onclick="plusCustomSlides(1)">❯</a>
</div>
<br>

<div style="text-align:center">
  <span class="custom-dot" onclick="currentCustomSlide(1)"></span> 
  <span class="custom-dot" onclick="currentCustomSlide(2)"></span> 
</div>

<h1 style="text-align: center; font-size:200%; padding-top:20px">Blogs</h1>
<div class="blog-container">
    
  <div class="blog">
    <img src="images/blog1.jpg" alt="Blog Image">
    <div class="description">
      <h3>Blog Title 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus sit amet lorem fermentum fringilla sed nec ex. Ut vitae ex tellus Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus sapiente doloribus impedit saepe voluptate commodi, libero aut laborum obcaecati omnis, esse quae pariatur quo! Repudiandae corrupti fugit qui quibusdam atque. </p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog2.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Blog Title 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus sit amet lorem fermentum fringilla sed nec ex. Ut vitae ex Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum aspernatur asperiores nostrum alias expedita quod pariatur voluptatibus ex similique, magnam corporis quaerat esse dolorum reprehenderit nesciunt voluptatem laudantium hic!</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog3.jpg" alt="Blog Image">
    <div class="description">
      <h3>Blog Title 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus sit amet lorem fermentum fringilla sed nec ex. Ut vitae ex Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum aspernatur asperiores nostrum alias expedita quod pariatur voluptatibus ex similique, magnam corporis quaerat esse dolorum reprehenderit nesciunt voluptatem laudantium hic!</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog4.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Blog Title 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus sit amet lorem fermentum fringilla sed nec ex. Ut vitae ex Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum aspernatur asperiores nostrum alias expedita quod pariatur voluptatibus ex similique, magnam corporis quaerat esse dolorum reprehenderit nesciunt voluptatem laudantium hic!</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog5.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Blog Title 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et risus sit amet lorem fermentum fringilla sed nec ex. Ut vitae ex Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum aspernatur asperiores nostrum alias expedita quod pariatur voluptatibus ex similique, magnam corporis quaerat esse dolorum reprehenderit nesciunt voluptatem laudantium hic!</p>
    </div>
  </div>
</div>



<!-- chatbot section -->

  <body>
  <div class="chat-icon" id="chatIcon">
    <img src="images/chatbot.png" alt="Chatbot Icon">
  </div>
  <div class="chat-box" id="chatBox">
    <div class="chat-header">
      <span class="close" id="closeChat">&times;</span>
    </div>
    <div class="chat-body" id="chatBody">
      <div class="chat-message">Hello! How can I assist you today?</div>
    </div>
    <div class="chat-footer">
      <input type="text" id="userInput" placeholder="Type your message...">
      <button id="sendMessage">Send</button>
    </div>
  </div>


  <!-- footer -->
  <footer>
  <div class="container">
    <div class="footer-section">
      <h3>India Guide</h3>
      <ul>
        <li><a href="#">Farming Techniques</a></li>
        <li><a href="#">Crop Season Calendar</a></li>
        <li><a href="#">Market Trends</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Drone Insurance</h3>
      <ul>
        <li><a href="#">Coverage Plans</a></li>
        <li><a href="#">Claims Process</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Airsherpa Support</h3>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Connect With Us</h3>
      <ul class="social-icons">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</footer>


<script src="js/index.js"></script>
</body>
</html>