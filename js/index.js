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



  // message section


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

    emailjs.send("service_6ggig57", "template_fdx5jed", params).then(function (res) {
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