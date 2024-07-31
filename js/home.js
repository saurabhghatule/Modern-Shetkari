// Image Slideshow
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

// Chatbot
function toggleChatPopup() {
    var popup = document.getElementById("chatPopup");
    if (popup.style.display === "none") {
        popup.style.display = "block";
    } else {
        popup.style.display = "none";
    }
  }
  


// Video Custom Slideshow
var customSlideIndex = 1;
showCustomSlides(customSlideIndex);

function plusCustomSlides(n) {
    showCustomSlides(customSlideIndex += n);
}

function currentCustomSlide(n) {
    showCustomSlides(customSlideIndex = n);
}

function showCustomSlides(n) {
    var i;
    var slides = document.getElementsByClassName("custom-video-slide");
    var dots = document.getElementsByClassName("custom-dot");
    if (n > slides.length) { customSlideIndex = 1 }
    if (n < 1) { customSlideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[customSlideIndex - 1].style.display = "block";
    dots[customSlideIndex - 1].className += " active";

    var videos = document.getElementsByTagName("video");
    for (i = 0; i < videos.length; i++) {
        videos[i].pause();
    }
}

// Logout and Menu
var username = 'Hack Coders';

document.getElementById('username').innerText = 'Welcome, ' + username;

document.getElementById('logout').addEventListener('click', function() {
    alert('Logging out...');
    location.reload();
});

document.querySelector('.menu').addEventListener('click', function() {
    var menuContent = document.getElementById('menuContent');
    menuContent.style.display = (menuContent.style.display === 'block') ? 'none' : 'block';
});


// Message section

(function(){
    emailjs.init("ITQytSiT6iDaYuDmv"); // Replace 'YOUR_USER_ID' with your actual EmailJS user ID
})();

function SendMail(event) {
    event.preventDefault(); // Prevent default form submission

    var params = {
        name: document.getElementById("contactName").value,
        email: document.getElementById("contactEmail").value,
        subject: document.getElementById("contactSub").value,
        message: document.getElementById("contactMessage").value
    }

    emailjs.send("service_6ggig57", "template_ecqff5i", params).then(function (res) {
        alert("Application Submitted Successfully!\nThank you for submitting your application. We will review your information and get back to you shortly.");
        document.getElementById("contactForm").reset();
    }).catch(function (error) {
        alert("Failed to send the application. Please try again later.");
        console.error("EmailJS error: ", error);
    }); 
}

// Attach the SendMail function to the form's submit event
window.onload = function() {
    document.getElementById('contactForm').addEventListener('submit', SendMail);
};


