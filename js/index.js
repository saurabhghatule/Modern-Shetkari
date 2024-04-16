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
document.addEventListener("DOMContentLoaded", function() {
    var chatbotIcon = document.querySelector('.chat-icon img');
    var chatbotPopup = document.querySelector('.chat-box');

    chatbotIcon.addEventListener('click', function() {
        chatbotPopup.style.display = 'block';
    });

    var closeButton = document.querySelector('.chat-box .close');
    closeButton.addEventListener('click', function() {
        chatbotPopup.style.display = 'none';
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const chatIcon = document.getElementById('chatIcon');
    const chatBox = document.getElementById('chatBox');
    const closeChat = document.getElementById('closeChat');
    const userInput = document.getElementById('userInput');
    const sendMessageBtn = document.getElementById('sendMessage');
    const chatBody = document.getElementById('chatBody');
  
    // Toggle chat box visibility
    chatIcon.addEventListener('click', function () {
      chatBox.style.display = 'block';
    });
  
    closeChat.addEventListener('click', function () {
      chatBox.style.display = 'none';
    });
  
    // Function to add user message to chat
    function addUserMessage(message) {
      const div = document.createElement('div');
      div.className = 'chat-message';
      div.textContent = message;
      chatBody.appendChild(div);
    }
  
    // Function to add bot message to chat
    function addBotMessage(message) {
      addUserMessage(message);
      // Simulate bot response (You can replace this with actual AI response)
      setTimeout(function () {
        addUserMessage("I'm just a demo bot. I cannot understand your query.");
      }, 1000);
    }
  
    // Event listener for send message button
    sendMessageBtn.addEventListener('click', function () {
      const message = userInput.value.trim();
      if (message !== '') {
        addUserMessage(message);
        userInput.value = '';
        // Simulate bot response (You can replace this with actual AI response)
        addBotMessage("I'm just a demo bot. I cannot understand your query.");
      }
    });
  
    // Event listener for enter key
    userInput.addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        sendMessageBtn.click();
      }
    });
  });
  

  

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




