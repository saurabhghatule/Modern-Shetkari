<?php
include ("lock.php");
?>


<!DOCTYPE html>
<html lang="en">                                                          
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Chatbot icon -->
<div class="chat-icon" onclick="toggleChatPopup()">
        <img src="images/chatbot.png" alt="Chatbot Icon" width="40" height="40" title="Chatbot">
    </div>

    <!-- Chatbot popup -->
    <div class="chat-popup" id="chatPopup">
        <span class="close" onclick="toggleChatPopup()">&times;</span>
        <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/53f42355-af66-44c2-ab63-9f5ef8d8b32b"></iframe> 
    </div>
    
<header>
    <nav>
        <div class="logo" >
            <a href="home.php"><img src="images/logo.png" alt="Logo" ></a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="#about-containt">About</a></li>
            <li><a href="#services-section">Services</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="pridict.php">Drone</a></li>
            <li><a href="#message-section">Contact</a></li>
            <li><a href="community/Community.php">Community</a></li>
        </ul>
        <div class="buttons">
            <a href="index.php"><button class="dark-blue">Log out</button></a>
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

<div class="about-containt" id="about-containt">
    <h2 style="padding-top: 2%; font-size: 35px;">About <span style="color: #00008B;">Us</span> </h2>
    <div class="about-content">
      <p>Welcome to Modern Shetkari!
          At Modern Shetkari, we are committed to revolutionizing agriculture through innovation, technology, and sustainable practices. Our mission is to empower farmers with the tools and knowledge they need to thrive in today's ever-changing agricultural landscape.</p>
        <div class="popup">
            <h2><span class="typing">WHO WE ARE ?</span></h2>
            <p>Modern Shetkari is a team of passionate individuals dedicated to the advancement of agriculture. We come from diverse backgrounds, including farming, technology, and environmental science, but we share a common goal: to make farming more efficient, profitable, and environmentally friendly.</p>

            <h2><span class="typing">WE'RE DIFFERENT THAN THE REST</span></h2>
            <p>At Modern Shetkari, we stand apart from the crowd. Rooted in tradition yet driven by innovation, we're reshaping the landscape of agriculture. With a deep commitment to sustainability and community, we empower farmers with cutting-edge technology, hands-on support, and a forward-thinking approach. Our mission is simple: to redefine farming for the better, one harvest at a time. Join us on this journey of progress and possibility, where tradition meets modernity, and where the future of farming is brighter than ever before.</p>
        </div>
    </div>
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
    <a href="weather.php"><button>Today's Weather</button></a>
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


<!-- Blogs section -->

<h1 style="text-align: center; font-size:200%; padding-top:20px">Blogs</h1>
<div class="blog-container">
    
  <div class="blog">
    <img src="images/blog1.jpg" alt="Blog Image">
    <div class="description">
      <h3>Embracing Technology: How Modern Shetkari Farmers Are Revolutionizing Agriculture</h3>
      <p>In this blog, we delve into the ways in which modern technology is transforming traditional farming practices among Shetkari communities. From precision agriculture to drone surveillance, discover how these innovative tools are enhancing efficiency, productivity, and sustainability in the field.</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog2.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Sustainable Farming: A Core Value of Modern Shetkari Agriculture</h3>
      <p>Sustainability lies at the heart of modern Shetkari farming practices. This blog explores the various eco-friendly initiatives adopted by Shetkari farmers to minimize environmental impact, conserve natural resources, and promote biodiversity while ensuring a bountiful harvest for generations to come.</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog3.jpg" alt="Blog Image">
    <div class="description">
      <h3>Community Building: The Strength of Modern Shetkari Farming Cooperatives</h3>
      <p>Learn about the significance of community-driven initiatives in modern Shetkari agriculture. From cooperatives and collective farming to knowledge-sharing platforms, discover how collaboration and mutual support play a crucial role in fostering growth, resilience, and prosperity within Shetkari farming communities.</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog4.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Empowering Women in Agriculture: The Role of Modern Shetkari Women Farmers</h3>
      <p>This blog celebrates the pivotal role of women in modern Shetkari agriculture. Explore how female farmers are breaking barriers, leading innovation, and driving positive change in rural communities. From entrepreneurship to leadership roles, witness the transformative impact of gender inclusivity in farming practices.</p>
    </div>
  </div>
  <div class="blog">
    <img src="images/blog5.jpg" alt="Blog Image" style="height: 40%;">
    <div class="description">
      <h3>Adapting to Climate Change: Strategies for Resilient Farming in Modern Shetkari Agriculture</h3>
      <p>Climate change poses significant challenges to agricultural livelihoods, but modern Shetkari farmers are rising to the occasion. In this blog, discover the innovative strategies and adaptive measures employed by Shetkari farmers to mitigate the effects of climate change, build resilience, and ensure food security in the face of adversity.</p>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="message-section" id="message-section">
            <div class="left-section">
                <div class="message-heading">
                    <h2>Message <span style="color: #00008B;">Us</span> </h2>
                    <p>Feel free to drop us a message. We'll get back to you as soon as possible.</p>
                    <img src="images/logo.png" alt="Company Logo">
                </div>
            </div>
            <div class="right-section">
                <h2>Fill <span style="color: #00008B;">form</span></h2>
                <form action="#" method="post" id="contactForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="contactName" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="contactEmail" name="email" required>
        </div>
        <div class="form-group">
            <label for="sub">Subject:</label>
            <input type="text" id="contactSub" name="sub" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="contactMessage" name="message" rows="4" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
            </div>
        </div>


  <!-- footer -->
  <footer>
  <div class="footer-container">
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

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
</body>
</html>