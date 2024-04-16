<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="pridict.php">Drone</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="news.php">News</a></li>

        </ul>
    </nav>
</header>

<!-- About section -->
<section style="background-image: url(images/about_bg.webp); padding: 5%; ">
<div class="about-containt" id="about-containt">
    <h2 style="padding-top: 2%; font-size: 35px;">About <span style="color: #00008B;">Us</span> </h2>
    <div class="about-content">
        <section class="about-us">
            <p>Welcome to Agriculture Solutions, your partner in modern farming. We're dedicated to revolutionizing agriculture through innovation and sustainability. With decades of experience, our team provides cutting-edge solutions to enhance crop yield and optimize resource usage.</p>
            <p>From precision farming techniques to advanced irrigation systems, we offer comprehensive products and services tailored to meet the diverse needs of farmers and growers. Our mission is to empower our clients with the tools and knowledge they need to thrive in today's agricultural landscape.</p>
            <p>At Agriculture Solutions, we're not just about providing solutions; we're about building relationships and driving positive change in the industry. Whether you're a small-scale farmer or a large commercial operation, we're here to support you every step of the way.</p>
            <p>Join us on our mission to shape a brighter, more sustainable future for agriculture. Together, we can cultivate success and make a lasting impact on the world of farming.</p>
        </section>
    </div>
</div>
</section>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/approach.jpg" style="width:100%">
  <div class="text">
  <h1>Our Approch</h1>  
  <p>Our approach to agriculture encompasses a holistic perspective, integrating cutting-edge technology with sustainable practices to optimize crop yield while minimizing environmental impact. Through precision farming techniques, advanced irrigation systems, and data-driven analytics, we empower farmers with the tools and knowledge to make informed decisions and adapt to the challenges of modern agriculture. By fostering collaboration, innovation, and knowledge-sharing, we aim to cultivate a resilient agricultural ecosystem that not only meets the demands of today but also ensures the future viability of our food production systems.</p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/vision.webp" style="width:100%">
  <div class="text">
  <h1>Vision</h1>  
  <p>In our vision for the future of agriculture, we envision a world where sustainable farming practices are seamlessly integrated with cutting-edge technologies to foster environmental stewardship, enhance food security, and promote economic prosperity. By harnessing the power of innovation and collaboration, we aspire to create a global agricultural ecosystem that not only meets the demands of a growing population but also preserves our planet for generations to come. Together, we can cultivate a future where agriculture thrives in harmony with nature, empowering farmers and communities worldwide to flourish and thrive.</p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/drone.jpg" style="width:100%">
  <div class="text">
  <h1>Vision</h1>  
  <p>Drones have emerged as indispensable tools in modern agriculture, offering farmers unprecedented capabilities for precision monitoring and management of crops and land. Equipped with advanced sensors and imaging technology, agricultural drones provide real-time data on crop health, soil moisture levels, pest infestations, and more. By efficiently surveying large areas of farmland from above, drones enable farmers to identify potential issues early, optimize irrigation and fertilization practices, and make informed decisions to increase crop yields while reducing resource wastage. Additionally, drones can be used for targeted pesticide application, minimizing environmental impact and improving overall sustainability in agriculture. With their versatility and efficiency, drones are revolutionizing the way farmers approach crop management, ushering in a new era of precision agriculture.</p></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<footer>
  <div class="footer-container">
    <div class="footer-info">
      <p>&copy; 2024 Agriculture Solutions. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="js/about.js"></script>

<!-- <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script> -->
</body>
</html>
